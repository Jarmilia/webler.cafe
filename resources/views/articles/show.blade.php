@extends ('layouts.app')

@section('content')
    {{-- <div class="space-between margin1-3"> --}}
    <div class="margin-0-auto">
        <img class="image-show" src="../storage/storage/cover_images/{{$article->cover_image}}">
        <br>
        <h1 class="margin-0-auto">{{$article->title}}</h1>
        <br>
        <small class="#" > Erstellt am {{$article->created_at}}  von {{$article->user->name}}</small>
      {{-- </div> --}}
      <br>
      <div class="margin2-0" >
          <p> {!! $article->content !!} </p>
      </div>
    </div>
    @if(!Auth::guest())
      @if(Auth::user()->id === $article->user_id)
        {!! Form::open(['action'=> ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        <a href="{{$article->id}}/edit" class="btn btn-light">Artikel editieren</a>
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Artikel Löschen', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
      @endif
    <br>
    @endif
    <a href="{{ url()->previous() }}" class="btn btn-light">Zurück zur Artikelüberischt</a>

@endsection
