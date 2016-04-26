<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use DB;

class Ad extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'ads';
    public $timestamps = false;
    protected $fillable = array('ad_href', 'ad_image_file_name', 'ad_image_file_mime', 'ad_is_empty');

    public function createAd($adHref, $adImageFileName, $adFileMime) {
        Ad::create(array('ad_href' => $adHref, 'ad_image_file_name' => $adImageFileName,
            'ad_image_file_mime' => $adFileMime, 'ad_is_empty' => true));
    }

    public function insertAd($id, $link, $fileName, $fileMime) {
        DB::table('ads')->where('id', '=', $id)->update(array('ad_href' => $link, 'ad_image_file_name' => $fileName,
            'ad_image_file_mime' => $fileMime, 'ad_is_empty' => false));
    }

    public function getAdsList() {
        $ads = DB::table('ads')->select('id', 'ad_href', 'ad_image_file_name', 'ad_image_file_mime')->get();
        $adsList = array();
        foreach ($ads as $ad) {
            $adsList[] = array('id' => $ad->id, 'ad_href' => $ad->ad_href,
                'ad_image_file_name' => $ad->ad_image_file_name);
        }
        return $adsList;
    }

    public function getFreeAdsList() {
        $ads = DB::table('ads')->select('id', 'ad_href', 'ad_image_file_name', 'ad_image_file_mime')
            ->where('ad_is_empty', '=', true)->get();
        $adsList = array();
        foreach ($ads as $ad) {
            $adsList[] = array('id' => $ad->id, 'ad_href' => $ad->ad_href,
                'ad_image_file_name' => $ad->ad_image_file_name);
        }
        return $adsList;
    }

    public function getBusyAdsList() {
        $ads = DB::table('ads')->select('id', 'ad_href', 'ad_image_file_name', 'ad_image_file_mime')
            ->where('ad_is_empty', '=', false)->get();
        $adsList = array();
        foreach ($ads as $ad) {
            $adsList[] = array('id' => $ad->id, 'ad_href' => $ad->ad_href,
                'ad_image_file_name' => $ad->ad_image_file_name);
        }
        return $adsList;
    }

    public function removeAd($id) {
        $fileName = DB::table('ads')->select('ad_image_file_name')->where('id', '=', $id)->get();
        foreach ($fileName as $f)
            Storage::delete('./public/images/' . $f->ad_image_file_name);;
        DB::table('ads')->where('id', '=', $id)->update(array('ad_image_file_mime' => 'image/png',
            'ad_image_file_name' => 'img' . $id . '.jpg', 
            'ad_href' => '#',
            'ad_is_empty' => true));
    }
    
    public function getFile($imageName) {
        return Storage::disk('local')->get('./public/images/' . $imageName);
    }
}
