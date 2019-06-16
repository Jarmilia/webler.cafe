@extends('layouts.app')

@section('content')
      <div class="height8"></div>
        <div class="justify-center">
        <div>
        	<h1><span class="headline-one-register">Profil bearbeiten</span></h1>
          <div class="height2"></div>
      <!-- Errors Ausgeben -->
        <?php if (!empty($errors)): ?>
          <?php foreach ($errors as $error): ?>
              <div class="well">
                <p class="alert alert-warning"><?= $error ?></p>
              </div>
          <?php endforeach ?>
        <?php endif ?>
        	<form method="post">
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              EINGABE-FELDER: BENUTZERNAME, E-Mail
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
            <div class="register-name space-between">
              <label for="username"></label>
                  <input class="register-input" id="username" type="text" name="username" placeholder="* Benutzername:" readonly value="<?= ucfirst($userName ?? '') ?>" >
            </div>
            <div class="register-name space-between">
                <label for="email"></label>
                  <input id="email" class="register-input" type="email" name="email" placeholder="* E-Mail:" value="<?= $email ?>">
            </div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
              EINGABE-FELDER: PASSOWORT
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
              <div class="register-name space-between">
                <label for="password">
                    <input class="register-input text-input" name="password" id="password" type="password" placeholder="* Passwort">
                </label>
                <label for="password-repeat">
                    <input  id="password-repeat" class="register-input form-control" name="password-repeat" type="password" placeholder="* Passwort wiederholen">
                </label>
              </div>
              <div class="height2"></div>
  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            ABSCHICKEN BUTTON
  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
              <button type="submit" class="register-submit pointer">Abschicken</button>
        	  </form>
          </div>
        </div>
      <div class="height4"></div>
@endsection
