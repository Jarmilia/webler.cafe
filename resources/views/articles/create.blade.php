@extends ('layouts.app')

@section('content')
  <div class="artContent">
    <h1 class="text-gold margin3-4 RobotoThin">Schreibe einen neuen Artikel</h1>
    {{-- Form for creating an Article --}}
    {!! Form::open(['action'=> 'ArticlesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title', 'Titel', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titel'])}}
    </div> <div class="form-group">
      {{Form::label('hashtags', 'Hashtags', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
      {{Form::text('hashtags', '#weblercafe', ['class' => 'form-control', 'placeholder' => 'Hashtags von dem Artikel'])}}
    </div>
    <div class="form-group">
      {{Form::label('summary', 'Einführung', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
      {{Form::textarea('summary', '', ['class' => 'form-control height5', 'rows'=>'3', 'placeholder' => 'Einführung in den Artikel'])}}
    </div>
    <div class="form-group">
      {{Form::label('content', 'Inhalt', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
      {{Form::textarea('content', '', ['class' => 'form-control', 'rows' => '10','placeholder' => 'Inhalt des Artikels'])}}
    </div>
    <div class="form-group">
      {{Form::label('subtitle', 'Untertitel', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
      {{Form::text('subtitle', '', ['class' => 'form-control', 'placeholder' => 'Untertitel'])}}
    </div>
    <div class="form-group">
      {{Form::label('contentContinue', 'Inhalt', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
      {{Form::textarea('contentContinue', '', ['class' => 'form-control', 'rows' => '10', 'placeholder' => 'Inhalt des Artikels'])}}
    </div>
    <div class="form-group">
      {{Form::label('cover_image', 'Bild hochladen', ['class' => 'text1-3rem text-gold bold margin-top1'])}}
      {{Form::file('cover_image', ['class' => 'text-gold block bold margin-top1 upload dark-backg hover-border'])}}
    </div>
    {{Form::submit('Artikel veröffentlichen', ['class' => 'btn dark-backg text-gold margin-top1 hover-gold text-bigger hover-border'])}}
    {!! Form::close() !!}
  </div>
@endsection
