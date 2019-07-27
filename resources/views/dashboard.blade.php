@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center no-bord-rad">
    <div class="col-md-12">
      <div class="card text-creme dark-backg artContent">
        <div class="card-header text-bigger text-gold dark-backg center">Dashboard</div>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
          <span><a href="{{ url('articles/create') }}" class="dark-backg text-creme hover-gold text1-5rem">Artikel verfassen</a></span>
          {{-- <span class="text-bigger text-gold dark-backg"><a href="pages/profile" class="dark-backg text-creme hover-gold text-bigger hover-border">Profil</a></span> --}}
          @if(count($articles) > 0 || count($articles) !== null )
          <h1 class="text-bigger text-gold dark-backg margin-top2">Übersicht deiner artikel</h1>
            @foreach($articles as $article)
            <div class="col-md-8 col-sm-8 margin-top2">
              <h3><a class="text-gold hover-gold" href="{{ url('articles') }}/{{$article->id}}">{{$article->title}}</a></h3>
              <small>Erstellt am {{$article->created_at}}</small>
              <hr>
              <div class="max-article-height">
                <p> {!! $article->content !!}</p>
              </div>
              <span class="small"><a class="text-gold block hover-gold" style="padding-top: 0.5rem;" href="{{ url('articles') }}/{{$article->id}}">weiter lesen..</a></span>
            </div>
            @endforeach
          @else
            <p>Du hast noch keine Artikel geschrieben</p>
          @endif
          <a href="{{ url('articles/') }}" class="btn btn-light margin-top4">Zur Artikelüberischt</a>
      </div>
    </div>
  </div>
</div>
@endsection
