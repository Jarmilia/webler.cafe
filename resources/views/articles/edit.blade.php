@extends ('layouts.app')

@section('content')
    <h1>Editiere deinen Artikel</h1>
    {!! Form::open(['action'=> ['ArticlesController@update', $article->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titel')}}
            {{Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Titel'])}}
        </div>
        <div class="form-group">
            {{Form::label('content', 'Inhalt')}}
            {{Form::textarea('content', $article->content, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Text des Artikels'])}}
        </div>
    <img style="width:50%;" src="{{$article->cover_image}}">
    <div class="form-group">
        {{Form::file('cover_image')}}
{{--        {!! Form::open(['action'=> ['ArticlesController@deleteImage', $article->id], 'method' => 'POST', 'class' => 'pull-right']) !!}--}}
{{--          {{Form::hidden('_method', 'DELETE')}}--}}
{{--          {{Form::submit('Bild Löschen', ['class' => 'btn btn-danger'])}}--}}
{{--        {!! Form::close() !!}--}}
    </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Artikel Speichern', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
    {!! Form::open(['action'=> ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Artikel Löschen', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    <br>
    <a href="{{ url()->previous() }}" class="btn btn-light">Zurück zur Artikelüberischt</a>

@endsection
