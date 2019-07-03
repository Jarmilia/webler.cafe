@extends ('layouts.app')

@section('content')
    <h1 class="margin3-4">Aktuelle Artikel</h1>
    @if(count($articles)>0)
        @foreach($articles as $article)
            <div class="well">
              <div class="row image-index-div">
                <div class="col-md-2 col-sm-4">
                  <img class="image-index" src="storage/storage/cover_images/{{$article->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="articles/{{$article->id}}">{{$article->title}}</a></h3>
                  <small>Erstellt am {{$article->created_at}} von {{$article->user->username}}</small>
                  <hr>
                  <br>
                  <div class="max-article-height">
                   <p> {!! $article->content !!}</p>
                  </div>
                  <small><a class="margin-top1" href="articles/{{$article->id}}">weiter lesen..</a></small>
                </div>
              </div>
            </div>
        @endforeach
        {{-- only for pagination: --}}
        {{ $articles->links() }}
    @else
        <p>Es gibt's hier nichts zum lesen</p>
    @endif
@endsection
