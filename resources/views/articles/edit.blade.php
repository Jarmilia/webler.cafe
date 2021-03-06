@extends ('layouts.app')

@section('content')
<div class="artContent">
  <h1 class="text-gold margin3-4 RobotoThin">Editiere deinen Artikel</h1>
  {{-- how and edit articles contents --}}
  {!! Form::open(['action'=> ['ArticlesController@update', $article->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  <div class="form-group">
    {{Form::label('title', 'Titel', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
    {{Form::text('title', $article->title, ['class' => 'form-control-edit', 'placeholder' => 'Titel'])}}
  </div>
  <div class="form-group">
    {{Form::label('hashtags', '#weblercafe', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
    {{Form::text('hashtags', $article->hashtags, ['class' => 'form-control', 'placeholder' => 'Hashtags von dem Artikel'])}}
  </div>
  <div class="form-group">
    {{Form::label('summary', 'Einführung', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
    {{Form::textarea('summary', $article->summary, ['class' => 'form-control height5', 'rows'=>'3', 'placeholder' => 'Einführung in den Artikel'])}}
  </div>
  <div class="form-group">
    {{Form::label('content', 'Inhalt', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
    {{Form::textarea('content', $article->content, ['class' => 'form-control', 'rows' => '15','placeholder' => 'Text des Artikels'])}}
  </div>
  <div class="form-group">
    {{Form::label('subtitle', 'Untertitel', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
    {{Form::text('subtitle', $article->subtitle, ['class' => 'form-control', 'placeholder' => 'Untertitel'])}}
  </div>
  <div class="form-group">
    {{Form::label('contentContinue', 'Inhalt', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
    {{Form::textarea('contentContinue', $article->contentContinue, ['class' => 'form-control', 'rows' => '10', 'placeholder' => 'Inhalt des Artikels'])}}
  </div>
  <img  id="imageId" class="width50" src="{{ asset('storage/cover_images')}}/{{ $article->cover_image }}">
  <div class="form-group">
    {{Form::label('cover_image', 'Bild hochladen', ['class' => 'block text1-3rem text-gold bold margin-top4'])}}
    {{Form::file('cover_image', ['class' => 'block text-gold bold upload dark-backg pointer'])}}
  </div>
  <div class="space-between margin-top4">
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Artikel Speichern', ['class' => 'btn block btn-primary'])}}
    {!! Form::close() !!}
    {!! Form::open(['action'=> ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Artikel Löschen', ['class' => 'btn block btn-danger'])}}
    {!! Form::close() !!}
    <a href="{{ url('articles') }}" class="btn block btn-light">Zurück zur Artikelüberischt</a>
  </div>
</div>
@endsection
