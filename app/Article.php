<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Article extends Model
{
  protected $fillable = [
   ''
  ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function coverImageHandling(Request $request){
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
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
      } 
      else{
        $fileNameToStore = 'noimage.png';
      }
      return $fileNameToStore;
    }

    public function updateArt(Request $request){
      $this->title = $request->input('title');
      $this->hashtags = $request->input('hashtags');
      $this->summary = $request->input('summary');
      $this->content = $request->input('content');
      $this->subtitle = $request->input('subtitle');
      $this->contentContinue = $request->input('contentContinue');
      $fileNameToStore = $this->coverImageHandling($request);
          
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
      $this->save();
      return $fileNameToStore;
    }

    public function createFromRequest(Request $request){
      $this->title = $request->input('title');
      $this->hashtags = $request->input('hashtags');
      $this->summary = $request->input('summary');
      $this->content = $request->input('content');
      $this->subtitle = $request->input('subtitle');
      $this->contentContinue = $request->input('contentContinue');
      $this->user_id = auth()->user()->id;
      $fileNameToStore = $this->coverImageHandling($request);
      $this->cover_image = $fileNameToStore;
      $this->save();
    }

}
