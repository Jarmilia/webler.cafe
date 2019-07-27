@extends ('layouts.app')

@section('content')
    {{-- <div class="space-between margin1-3"> --}}
    <div  class="margin-0-auto dark-backg createArt">
      <div id="imageDivId" v-if="image">
        <img class="image-show" src="{{ asset('storage/cover_images') }}/{{ $article->cover_image }}">
      </div>
        <br>
        <h1 class="margin-0-auto text-gold RobotoThin">{{$article->title}}</h1>
        <br>
        <small class="#" > Erstellt am {{$article->created_at}}  von {{$article->user->name}}</small>
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
    <a href="{{ url('/articles') }}" class="btn btn-light margin-top1">Zurück zur Artikelüberischt</a>

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
      checkUrl(url) {
        //   let greet = document.querySelectorAll('.greeting');
        let noimage = 'noimage.png';
        if(this.url != noimage){
          this.image = true;
        }
      }
    }
  });
</script>
