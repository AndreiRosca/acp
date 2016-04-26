<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class AdController extends Controller
{
    public function handleAdInsertion() {
        $ad = new \App\Ad();
        if(Input::hasFile('new_banner_name')) {
            $f = Input::file('new_banner_name');
            $fileName = date('Y-m-d_H-m-s-') . $f->getClientOriginalName();
            $ad->insertAd(Input::get('empty_banner_id'), Input::get('link_of_banner'), $fileName, $f->getMimeType());
            Storage::put('./public/images/' . $fileName, file_get_contents($f->getRealPath()));
        }
        return Redirect::away("admin");
    }

    public function handleAdDeletion() {
        $ad = new \App\Ad();
        $ad->removeAd(Input::get('existent_banner_id'));
        return Redirect::away("admin");
    }

    public function getAdList() {
        $ad = new \App\Ad();
        return view('ad_list', array('adList' => $ad->getAdsList()));
    }

    public function getAdImage($imageName) {
        $ad = new \App\Ad();
        return Response::make($ad->getFile($imageName), 200,
            array('content-type' => 'image/png'));
    }
}
