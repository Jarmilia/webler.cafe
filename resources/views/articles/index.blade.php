@extends ('layouts.app')

@section('content')
<div class="dark-backg artContent">
    <h1 class="text-gold RobotoThin">Aktuelle Artikel</h1>
  {{-- Show all articles --}}
    @if(count($articles)>0)
    <div id="articlesVue">
       <div class="row image-index-div">
    <div v-for="article in articlesJson"
            :key="article.id">
      <div class="well">
        <div class="row image-index-div">
          <div class="col-md-4 col-sm-4">
            <a :href="'../public/articles/' + article.id">
            <img class="width100" :src="'../public/storage/cover_images/' + article.cover_image " :alt="'Ein Bild zum Artikel: ' + article.title + ', in Webler.cafe'">
            </a>
          </div>
          <div class="col-md-8 col-sm-8">
            <h2><a class="text-gold hover-gold" :href="'../public/articles/' + article.id ">@{{article.title}}</a></h2>
            <span class="small">Erstellt am @{{article.created_at}} von @{{article.user_name}}</span>
            <hr>
            <div>
              <p class="a-p" :href="'../public/articles/' + article.id"><p> @{{article.summary}}</p></a>
            </div>
            <span class="small"><a class="text-gold block hover-gold" :href="'../public/articles/' + article.id">weiter lesen..</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
    </div>
      {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Weitere Artikel laden', ['class' => 'btn block btn-primary'])}}
      {!! Form::close() !!}
    @else
      <p>Es gibt's hier noch nichts zum lesen</p>
    @endif
</div>
@endsection

