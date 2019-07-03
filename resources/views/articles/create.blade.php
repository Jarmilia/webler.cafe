@extends ('layouts.app')

@section('content')
    <h1>Schreibe einen neuen Artikel</h1>
    {{-- <p>{{dd(auth()->user()->id)}}</p> --}}
    {!! Form::open(['action'=> 'ArticlesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titel')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titel'])}}
        </div>
        <div class="form-group">
            {{Form::label('content', 'Inhalt')}}
            {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Text des Artikels'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Artikel Abschicken', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
