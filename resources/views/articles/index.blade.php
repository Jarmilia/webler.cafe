@extends ('layouts.app')

@section('content')
<div class="dark-backg artContent">
    <h1 class="text-gold RobotoThin">Aktuelle Artikel</h1>
  {{-- Show all articles --}}
    @if(count($articles)>0)
      @foreach($articles as $article)
        <div class="well">
          <div class="row image-index-div">
        {{-- Cover Image --}}
            <div class="col-md-4 col-sm-4">
              <a href="{{ url('articles')}}/{{$article->id}} "><img class="width100" src="{{ asset('storage/cover_images')}}/{{ $article->cover_image }}"></a>
            </div>
        {{-- Article --}}
            <div class="col-md-8 col-sm-8">
              <h2><a class="text-gold hover-gold" href="{{ url('articles')}}/{{$article->id}} ">{{$article->title}}</a></h2>
              <span class="small">Erstellt am {{$article->created_at}} von {{$article->user->username}}</span>
              <hr>
              <div>
                <a class="a-p" href="{{ url('articles')}}/{{$article->id}} "><p> {!! $article->summary !!}</p></a>
              </div>
              <span class="small"><a class="text-gold block hover-gold" href="{{ url('articles')}}/{{$article->id}}">weiter lesen..</a></span>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <p>Es gibt's hier noch nichts zum lesen</p>
    @endif
</div>
@endsection
