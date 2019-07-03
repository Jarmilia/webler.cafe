@extends('layouts.app')

@section('content')
      <!-- <button id="backToTopBtn" title="Zum Seitenanfang"></button> -->

        <div>
          <span class="text1-6rem"> Hallo "username",<br>
          willkommen bei <i>webler.café</i></span>
          <div class="height2"></div>
          <p class="text1-2rem">
            Du kannst in oberem Menü auswählen, was du heute machen möchtest. <br>
            Im <a class="font-black bold" href="profile.php">Profil</a> kannst du dein Profil anpassen. <br>
            <!-- Text für den Admin: -->
           Unter <a class="font-black bold" href="edit_users.php">Benutzerverwaltung</a> kannst du neue Nutzer manuell anlegen, <br>
            oder existierende Benutzerprofile bearbeiten und löschen. <br>
            Unter <a class="font-black bold" href="edit_articles.php">Artikel</a> kannst du die Artikel anschauen und verwalten.
            Du bist der Moderator dieser Webseite. Du kannst unter <a class="font-black bold" href="edit_articles.php">Artikel</a> die Artikel der Seite verwalten.
            </p>
        </div>
      <div id="app" v-cloak>
        <h1>Hallo @{{ fullName }} </h1>
        <ul>
          <li v-for="(todo, index) in todos"
              v-on:click="removeTodo(todo.id)"
              {{-- v-bind:class="['important' + todo.id, 'unimportant']" --}}
              v-bind:class="{important: todo.imp}"
              class="blue bold"
          >
            @{{todo.task}}
            {{-- <a v-on:click.stop.prevent="showInfo"> Show Info</a> --}}
            <span v-if="todo.imp">Ist WICHTIG!!!</span>
            {{-- <span v-show="todo.imp">WICHTIGES! @{{irgendeiene Variable oder funktion}}</span> --}}
            <span v-else="todo.id == 2">Ist weniger WICHTIG!!!</span>
            <span v-else-if="todo.id == 3">Ist gar nicht WICHTIG!!!</span>
          </li>
        </ul>
        <input type="text"
               v-model="newTodo"
               {{-- :value="newTodo"
               @input="newTodo = $event.target.value"  -> 2way databinding, ist das selbe wie v-model=""--}}
               @keypress.enter="addTodo()">
      </div>
        <div class="height3"></div>
    </div>
@endsection
