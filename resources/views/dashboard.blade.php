@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center no-bord-rad">
    <div class="col-md-12">
      <div class="card text-creme dark-backg artContent">
        <h1 class="card-header text-bigger text-gold dark-backg center">Dashboard</h1>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
          {{-- Users articles --}}
          @if(count($articles) > 0 )
           <span><a href="{{ url('articles/create') }}" class="dark-backg text-creme hover-gold text1-3rem">Einen neuen Artikel schreiben</a></span>
          <h1 class="text-bigger text-gold dark-backg margin-top2">Übersicht deiner Artikel</h1>
            @foreach($articles as $article)
            <div class="col-md-8 col-sm-8 margin-top2">
              <h3><a class="text-gold hover-gold" href="{{ url('articles') }}/{{$article->id}}">{{$article->title}}</a></h3>
              <span class="small">Erstellt am {{$article->created_at}}</span>
              <hr>
              <div class="max-article-height">
                <p> {!! $article->summary !!}</p>
              </div>
              <span class="small"><a class="text-gold block hover-gold" href="{{ url('articles') }}/{{$article->id}}">weiter lesen..</a></span>
            </div>
            @endforeach
          @else
            <p class="text-creme dark-backg">Du hast noch keine Artikel geschrieben.</p>
            <span><a href="{{ url('articles/create') }}" class="dark-backg text-creme hover-gold text1-5rem">Schreibe deinen ersten Artikel hier.</a></span>
          @endif
          <a href="{{ url('articles') }}" class="btn btn-light margin-top4 width50">Zur Artikelüberischt</a>
      </div>
    </div>
  </div>
</div>
@endsection
