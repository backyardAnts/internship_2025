@extends('layouts.app')
@section('header')
    @include('partials.connectheader')
@endsection

@section('content')
<div class = "border-top" style = "width:100%; margin:0%; padding:0%;">
    <h1 class = "text-center">Vous avez déjà un compte sur L'Orient-Le Jour ?</h1>
    <h6 class = "text-center">Veuillez saisir ci-dessous vos identifiants.</h6>

    <form method="POST" action="{{ route('login') }}" class="login-form py-5">
      @csrf
  <div class = "d-block mx-auto" style = "width:70%;">
        <label for="email">E-mail</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password" required><br><br>

    <div class = "d-flex gap-3 justify-content-center">
            <button class = "btn-1"  type="submit">Je me connecte</button>
            <a class="btn-2" href="#">Mot de passe oublié ?</a>

    </div>
      <div class = "d-flex gap-5 justify-content-center mt-5 ">
    <div style="background-color:#3864bc; color:white; padding:5px;"><i class="fa-brands fa-square-facebook"></i>
        <button >Se Connecter Avec Facebook</button></div>
    <div style="background-color:#4884f4; color:white; padding:5px;"> <i class="fa-brands fa-google"></i>
        <button>Se Connecter Avec Google</button></div>
</div>
  </div>
</form>
<div class = "border-top text-center mb-5">
    <h1 class = "my-5">Pas encore de compte ?</h1>
    <h6 class = "my-5">Inscrivez-vous gratuitement et recevez vos newsletters.</h6>
    <a href="#" class="btn-1">Je m'inscris gratuitement</a>

</div>

</div>
@endsection