@extends ('layouts.app')

@section('content')
    <div class="dark-backg artContent">
      <div id="imageDivId">
        <img class="image-show" v-if="image" src="{{ asset('storage/cover_images') }}/{{ $article->cover_image }}">
      </div>
        <br>
        <h1 class="margin-0-auto text-gold RobotoThin">{{$article->title}}</h1>
        <br>
      <br>
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
<script type="text/javascript">
  const imageDivId = new Vue({
    el: '#imageDivId',
    data() {
      return {
        image: false,
      }
    },
    methods: {
      checkSrc(src) {
        let noimage = 'noimage.png';
        if(this.src != noimage){
          this.image = true;
        }
      }
    }
  });
</script>
