@extends ('layouts.app')

@section('content')
    <h1>{{$article->title}}</h1>
    <img style="width=50%;" src="/storage/cover_images/{{$article->cover_image}}">
    <small> Erstellt am {{$article->created_at}}  von {{$article->user->name}}</small>
    <div>
        {!! $article->content !!}
    </div>
    <hr>
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
