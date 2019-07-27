@extends ('layouts.app')

@section('content')
<div class="dark-backg artContent">
    <h1 class="text-gold RobotoThin">Aktuelle Artikel</h1>
    @if(count($articles)>0)
      @foreach($articles as $article)
        <div class="well">
          <div class="row image-index-div">
            <div class="col-md-2 col-sm-4">
              <img class="width100" src="{{ asset('storage/cover_images')}}/{{ $article->cover_image }}">
            </div>
            <div class="col-md-8 col-sm-8">
              <h3><a class="text-gold hover-gold " href="{{ url('articles')}}/{{$article->id}} ">{{$article->title}}</a></h3>
              <small>Erstellt am {{$article->created_at}} von {{$article->user->username}}</small>
              <hr>
              <div>
                <p> {!! $article->summary !!}</p>
              </div>
              <span class="small"><a class="text-gold block hover-gold padding-top0-5" href="{{ url('articles')}}/{{$article->id}}">weiter lesen..</a></span>
            </div>
          </div>
        </div>
      @endforeach
      {{-- only for pagination: --}}
      {{ $articles->links() }}
    @else
      <p>Es gibt's hier nichts zum lesen</p>
    @endif
</div>
@endsection
