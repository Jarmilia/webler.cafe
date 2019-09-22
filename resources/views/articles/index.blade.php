@extends ('layouts.app')

@section('content')
<div class="dark-backg artContent">
    <h1 class="text-gold RobotoThin">Aktuelle Artikel</h1>
  {{-- Show all articles --}}
    @if(count($articles)>0)
    <div id="articlesVue">
       <articles></articles>

    </div>
    @else
      <p>Es gibt's hier noch nichts zum lesen</p>
    @endif
</div>
@endsection

