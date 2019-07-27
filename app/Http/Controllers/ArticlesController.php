<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Article;

//if not using eloquent:
use DB;

class ArticlesController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //with eloquent:
        $articles = Article::all();
        $articles = Article::orderBy('created_at', 'desc')->get();

        //paginate:
        $articles = Article::orderBy('created_at', 'desc')->paginate(12);

        return view ('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
      return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
       $this->validate($request, [
          'title' => 'required',
          'hashtags' => 'required',
          'summary' => 'required',
          'content' => 'required',
          'cover_image' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:1999'
        ]);
      //Handle File upload
      if($request->hasFile('cover_image')){
        // Get filename with the extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //Get just extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //UploadImage
        $path = $request->file('cover_image')->storeAs('public/storage/cover_images', $fileNameToStore);
      } else{
        $fileNameToStore = 'noimage.png';
      }
      //create Article
      $article = new Article;
      $article->title = $request->input('title');
      $article->hashtags = $request->input('hashtags');
      $article->summary = $request->input('summary');
      $article->content = $request->input('content');
      $article->subtitle = $request->input('subtitle');
      $article->contentContinue = $request->input('contentContinue');
      $article->user_id = auth()->user()->id;
      $article->cover_image = $fileNameToStore;
      $article->save();
      return redirect('/articles')->with('success', 'Du hast ein Artikel geschrieben, danke!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
      $article = Article::find($id);

      //CHeck for correct user
      // if(auth()->user()->id !== $article->user_id){
      //   return redirect('/articles')->with('error', 'Für diese Seite hast du keine Autorisierung. ');
      // }
      return view ('articles.show')->with('article', $article);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $article = Article::find($id);
        return view ('articles.edit')->with('article', $article);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
            ]);
             if($request->hasFile('cover_image')){
                 // Get filename with the extension
                 $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                 //Get just filename
                 $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                 //Get just extension
                 $extension = $request->file('cover_image')->getClientOriginalExtension();
                 //Filename to store
                 $fileNameToStore = $filename.'_'.time().'.'.$extension;
                 //UploadImage
                 $path = $request->file('cover_image')->storeAs('cover_images', $fileNameToStore);
             }

            //create Article
            $article = Article::find($id);
            $article->title = $request->input('title');
            $article->content = $request->input('content');
             if($request->hasFile('cover_image')){
               // Get filename with the extension
               $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
               //Get just filename
               $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
               //Get just extension
               $extension = $request->file('cover_image')->getClientOriginalExtension();
               //Filename to store
               $fileNameToStore = $filename.'_'.time().'.'.$extension;
               //UploadImage
               $path = $request->file('cover_image')->storeAs('/cover_images', $fileNameToStore);
               $article->cover_image = $fileNameToStore;
             }
            $article->save();
            return redirect('/articles')->with('success', 'Artikel wurde editiert');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $article = Article::find($id);

        //CHeck for correct user
        if(auth()->user()->id !== $article->user_id){
          return redirect('/articles')->with('error', 'Für diese Seite hast du keine Autorisierung. ');
        }
        if($article->cover_image != 'noimage.jpg'){
            //delete Image
            Storage::delete('public/storage/cover_images/'.$article->cover_image);
        }

        $article->delete();
        return redirect('/articles')->with('success', 'Artikel wurde gelöscht');
    }

    public function deleteImage($id)
    {
      $article = Article::find($id);
      if(auth()->user()->id !== $article->user_id){
        return redirect('/articles')->with('error', 'Für diese Seite hast du keine Autorisierung. ');
      }
      if($article->cover_image != 'noimage.jpg'){
        //delete Image
        Storage::delete('public/storage/cover_images/'.$article->cover_image);
      }
    }

    public function serach(Request $request){
      $search = $request->get('h');
      return Article::where('name', 'like', '%' .$search. '%')->get();
    }
}
