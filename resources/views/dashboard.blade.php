@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/articles/create">Artikel verfassen</a></li>
                    </ul>
                </div>

                @if(count($articles) > 0 || count($articles) !== null )
                  <table class="table table-striped table-dark">
                    @foreach($articles as $article)
                      <tr>
                        <th><a href="/articles/{{$article->id}}">{{$article->title}}</a>
                          <br>
                          <small>Erstellt am {{$article->created_at}}</small>
                        </th>
                      </tr>
                      <tr>
                          {{-- <td><a href="/articles/{{$article->id}}/edit" class="btn btn-default">Edit</a></td> --}}
                        <td>{{$article->content}}
                        <br>
                        {!! Form::open(['action'=> ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                          <a href="articles/{{$article->id}}/edit" class="btn btn-light">Artikel editieren</a>
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Artikel Löschen', ['class' => 'btn btn-danger'])}}
                          {!! Form::close() !!}
                        </td>
                      </tr>

                        {{-- <td><a href="/articles/{{$article->id}}/edit" class="btn btn-default">Edit</a></td> --}}
                        {{-- <td>{{$article->content}}</td>
                        <td>
                          {!! Form::open(['action'=> ['ArticlesController@destroy', $article->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                          <a href="/articles/{{$article->id}}/edit" class="btn btn-light">Artikel editieren</a>
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Artikel Löschen', ['class' => 'btn btn-danger'])}}
                          {!! Form::close() !!}
                        </td>
                      </tr> --}}
                    @endforeach
                  </table>
                @else
                    <p>Du hast noch keine Artikel geschrieben</p>
                @endif
                <a href="{{ url()->previous() }}" class="btn btn-light">Zurück zur Artikelüberischt</a>

            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection
