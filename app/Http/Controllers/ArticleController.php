<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

class ArticleController extends Controller
{
    public function getArticles()
    {
        $article = new \App\Article();
        $ad = new \App\Ad();
        return View::make("view-publication")->with("articleList", $article->getAllArticles())->with('adList', $ad->getAdsList());
    }

    public function getPublicationArticles($publicationId)
    {
        $article = new \App\Article();
        $publication = new \App\Publication();
        $ad = new \App\Ad();
        return View::make("view-publication", array('articleList' => $article->getPublicationArticles($publicationId),
            'adList' => $ad->getAdsList()));
    }

    public function getArticleFile($fileName)
    {
        $article = new \App\Article();
        return Response::make($article->getFile($fileName), 200,
            array('content-type' => $article->getArticleFileMime($fileName)));
    }
}
