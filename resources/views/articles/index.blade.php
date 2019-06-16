@extends ('layouts.app')

@section('content')
    <h1>Aktuelle Artikel</h1>
    @if(count($articles)>0)
        @foreach($articles as $article)
            <div class="well">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <img style="width=100%;" src="/storage/cover_images/{{$article->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="articles/{{$article->id}}">{{$article->title}}</a></h3>
                  <small>Erstellt am {{$article->created_at}} von {{$article->user->username}}</small>

                </div>
              </div>
            </div>
        @endforeach
        {{-- only for pagination: --}}
        {{ $articles->links() }}
    @else
        <p>Es gibt's hier nichts zum lesen</p>
    @endif
@endsection
