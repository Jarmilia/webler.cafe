@extends ('layouts.app')

@section('content')
{{-- Show the Article --}}
    <div class="dark-backg artContent">
      <div id="imageDivId">
        <img class="image-show" src="{{ asset('storage/cover_images') }}/{{ $article->cover_image }}">
      </div>        
        <h1 class="margin-0-auto margin3-4 text-gold RobotoThin">{{$article->title}}</h1>
      <div class="margin2-0 text-gold" >
        <p> {!! $article->hashtags !!} </p>
      </div>
      <div class="margin2-0" >
        <p class="summary"> {!! $article->summary !!} </p>
      </div>
      <div class="margin2-0">
          <p> {!! $article->content !!} </p>
      </div>
      <div class="margin2-0" >
        <p> {!! $article->subtitle !!} </p>
      </div>
      <div class="margin2-0" >
          <p> {!! $article->contentContinue !!} </p>
      </div>
      {{-- User can edit and delete his own article --}}
    @if(!Auth::guest())
      @if(Auth::user()->id === $article->user_id || Auth::user()->role == 2)
        {!! Form::open(['action'=> ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        <a href="{{$article->id}}/edit" class="btn btn-light">Artikel editieren</a>
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Artikel Löschen', ['class' => 'btn btn-danger margin-left1'])}}
        {!! Form::close() !!}
      @endif
    <br>
    @endif
    <a href="{{ url('articles') }}" class="btn btn-light margin-top1">Zurück zur Artikelüberischt</a>
    </div>

@endsection

