<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;

class Article extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'articles';
    public $timestamps = false;
    protected $fillable = array('english_title', 'romanian_title', 'authors', 'institution',
        'publication_id', 'english_description', 'romanian_description', 'article_file_name',
        'article_file_mime', 'article_resume');
    
    public function createArticle($articleParameters) {
        Article::create($articleParameters);
    }
    
    public function getFile($fileName) {
        return Storage::disk('local')->get($fileName);
    }

    public function handleArticleFileUpload() {
        $rules = array('file' => 'required|mimes:doc,docx,pdf');
        $validator = Validator::make(Input::all(), $rules);
        if(/*$validator->fails()*/ false) {
            return false;
        }
        else {
            if(Input::hasFile('file_name')) {
                $f = Input::file('file_name');
                $fileName = date('Y-m-d_H-m-s_') . '-' . $f->getClientOriginalName();
                Storage::disk('local')->put($fileName, file_get_contents($f->getRealPath()));
                $this->insertArticle($fileName, $f->getMimeType());
                return $fileName;
            }
        }
    }

    private function insertArticle($fileName, $fileMime) {
        $this->createArticle(array('english_title' => null, 'romanian_title' => Input::get('romanian_title'),
            'authors' => Input::get('authors'), 'institution' => Input::get('institution'),
            'publication_id' => Input::get('publication_id'), 'english_description' => null,
            'romanian_description' => Input::get('romanian_description'), 'article_file_name' => $fileName,
            'article_file_mime' => $fileMime, 'article_resume' => Input::get('article_resume')));
    }

	public function getArticleFileMime($fileName) {
		$fileMetaData = DB::table('articles')->select('article_file_mime')->where('article_file_name', '=', $fileName)->get();
		foreach ($fileMetaData as $f)
			$fileMime = $f->article_file_mime;
		return $fileMime;
	}
	
    public function getArticle($id) {
        $articles = DB::table('articles')->
        select('english_title', 'romanian_title',
            'authors', 'institution', 'english_description', 'romanian_description', 'article_file_name',
            'article_file_mime', 'article_resume')->where('id', '=', $id)->get();
        $article = array();
        foreach ($articles as $a) {
            $article = array('english_title' => $a->english_title, 'romanian_title' => $a->romanian_title,
                'authors' => $a->authors, 'institution' => $a->institution, 'english_description' => $a->english_description,
                'romanian_description' => $a->romanian_description, 'article_file_name' => $a->article_file_name,
                'article_resume' => $a->article_resume);
        }
        return $article;
    }

    public function getLatestArticles($limit) {
        $articles = DB::table('articles')->
        select('english_title', 'romanian_title',
            'authors', 'institution', 'english_description', 'romanian_description', 'article_file_name',
            'article_file_mime', 'article_resume')->orderBy('id', 'desc')->take($limit)->get();
        $articleList = array();
        foreach ($articles as $a) {
            $articleList[] = array('english_title' => $a->english_title, 'romanian_title' => $a->romanian_title,
                'authors' => $a->authors, 'institution' => $a->institution, 'english_description' => $a->english_description,
                'romanian_description' => $a->romanian_description, 'article_file_name' => $a->article_file_name,
                'article_resume' => $a->article_resume);
        }
        return $articleList;
    }

    public function getPublicationArticles($publicationId) {
        $publication = new \App\Publication();
        $articlePublication = $publication->getPublication($publicationId);
        $articles = DB::table('articles')->
        select('english_title', 'romanian_title',
            'authors', 'institution', 'english_description', 'romanian_description', 'article_file_name',
            'article_file_mime', 'article_resume')->orderBy('id', 'desc')->where('publication_id', '=', $publicationId)->get();
        $articleList = array("publication" => $articlePublication);
        foreach ($articles as $a) {
            $articleList['publication']['articleList'][] = array('english_title' => $a->english_title, 'romanian_title' => $a->romanian_title,
                'authors' => $a->authors, 'institution' => $a->institution, 'english_description' => $a->english_description,
                'romanian_description' => $a->romanian_description, 'article_file_name' => $a->article_file_name,
                'article_resume' => $a->article_resume);
        }
        return $articleList;
    }

    public function getAllArticles() {
        $pub = DB::table('publications')->select('id', 'title', DB::raw('YEAR(publication_date) as pub_date'))->get();
        $publications = array();
        foreach ($pub as $p) {
            $publication = array('id' => $p->id, 'title' => $p->title,
                'publication_date' => $p->pub_date, 'articleList' => array());
            $articles = DB::table('articles')->select('id', 'english_title', 'romanian_title',
                'authors', 'institution', 'english_description', 'romanian_description', 'article_file_name',
                'article_file_mime', 'article_resume')->orderBy('id', 'desc')->where('publication_id', '=', $p->id)->get();
            $article = array();
            foreach ($articles as $a) {
                $article[] = array('id' => $a->id, 'romanian_title' => $a->romanian_title, 'authors' => $a->authors,
                    'institution' => $a->institution, 'romanian_description' => $a->romanian_description,
                    'article_resume' => $a->article_resume, 'article_file_name' => $a->article_file_name);
            }
            $publication['articleList'] = $article;
            $publications[] = $publication;
        }
        return $publications;
    }
}
