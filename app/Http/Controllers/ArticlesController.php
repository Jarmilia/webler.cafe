<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Article;

class ArticlesController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    }

    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all articles
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view ('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      return view('articles.create');
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
       $this->validate($request, [
          'title' => 'required',
          'summary' => 'required',
          'content' => 'required',
          'cover_image' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:1999'
        ]);
            
      //create Article
      $article = new Article;
      $article->createFromRequest($request);

      return redirect('/articles')->with('success', 'Du hast ein Artikel geschrieben, danke!');
    }
    /**
     * Display the article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $article = Article::find($id);
      return view('articles.show')->with('article', $article);
    }
    /**
     * Show the form for editing the article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id){

      $this->validate($request, [
        'title' => 'required',
        'hashtags' => 'required',
        'content' => 'required'
        ]);
        $article = Article::find($id);
        $article->updateArt($request);
        return redirect('/articles')->with('success', 'Artikel wurde editiert');
    }
    /**
     * Remove the specified article from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
      $article = Article::find($id);

      //Check for correct user
      if(auth()->user()->id !== $article->user_id){
        return redirect('/articles')->with('error', 'Für diese Seite hast du keine Autorisierung.');
      }
      if($article->cover_image != 'noimage.jpg'){
          //delete Image
          Storage::delete('public/storage/cover_images/'.$article->cover_image);
      }

      $article->delete();
      return redirect('/articles')->with('success', 'Artikel wurde gelöscht');
    }
    
    /**
     * Remove the image from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteImage($id)
    {
      $article = Article::find($id);
      //Check for correct user
      if(auth()->user()->id !== $article->user_id){
        return redirect('/articles')->with('error', 'Für diese Seite hast du keine Autorisierung.');
      }
      if($article->cover_image != 'noimage.jpg'){
        //delete Image
        Storage::delete('public/storage/cover_images/'.$article->cover_image);
      }
    }
    
    /**
     * The search function.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){
      $search = $request->get('search');
      $articles = Article::where('hashtags', 'like', '%'. $search. '%')->get();
      return view ('articles.index')->with('articles', $articles);
    }
}
