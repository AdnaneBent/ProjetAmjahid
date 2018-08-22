<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Services\imageResize;
use Storage;
use Image;


class ArticleController extends Controller
{

    public function __construct(ImageResize $imageResize){
        $this->imageResize = $imageResize;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view("admin.articles.index",compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.articles.create",compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $request->image->store('', 'imgArticleShow');
        $image = [
            "name" => $request->image,
            "disk" => "imgArticle",
            "w" => 300,
            "h" => 200
        ];
        $article->image = $this->imageResize->imageStore($image);

        $article->save();
        return redirect()->route("articles.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view("admin.articles.show",compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $article = Article::find($id);
    
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        if ($request->image != null)
        {
            $request->image->store('', 'imgArticleShow');
            Storage::disk('imgArticle')->delete($article->image);
           
            $image = [
                "name" => $request->image,
                "disk" => "imgArticle",
                "w" => 300,
                "h" => 200
            ];
            $article->image = $this->imageResize->imageStore($image);
            
        }

        $article->save();
        return redirect()->route('articles.index',['article'=> $article->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
