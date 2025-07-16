@extends('layouts.app')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class = "p-5 container">

        <div class = "d-flex align-items-center">
            <h1>Liban</h1>
        <div class=" ms-auto">
        <span><strong>Politique</strong></span>
        <span>•</span>
        <span>Societe</span>
        <span>•</span>
        <span>Environement</span>
    </div>
        </div>
        <div class="row sectionfirst row-cols-1 row-cols-md-3 g-3">
  <div class="col">
    <img src="{{ asset('images/nesra.webp') }}">
    <span>Politique - Focus</span>
    <p>Au Liban, les anti-Hezbollah misent sur la chute du régime iranien</p>
    <span>Jeanine JALKH</span>
  </div>
  <div class="col">
    <img src="{{ asset('images/minister.webp') }}">
    <span>Politique - Israël-Iran</span>
    <p>« Le Liban doit rester neutre dans les conflits régionaux », affirme le ministre de l'Industrie</p>
  </div>
  <div class="col">
    <img src="{{ asset('images/deputy.webp') }}">
    <span>Politique - Israël-Iran</span>
    <p>« Nous sommes aux côtés de l'Iran qui n'a jamais abandonné le Liban », affirme un député du Hezbollah</p>
  </div>
 </div>

    <div class = "row pt-5">
        <div class = "col-md-8">
            <div class = "row p-1 border-bottom">
                <img src="{{ asset('images/deputy.webp') }}" class = "col-md-3">
                <div class = "col-md-9">
                    <span>Politique - Israël-Iran</span>
                    <h5>« Nous sommes aux côtés de l'Iran qui n'a jamais abandonné le Liban », affirme un député du Hezbollah</h5>
                    <span>Politique - Israël-Iran</span>
                </div>
            </div>
            <div class = "row p-1 border-bottom">
                <img src="{{ asset('images/deputy.webp') }}" class = "col-md-3">
                <div class = "col-md-9">
                    <span>Politique - Israël-Iran</span>
                    <h5>« Nous sommes aux côtés de l'Iran qui n'a jamais abandonné le Liban », affirme un député du Hezbollah</h5>
                    <span>Politique - Israël-Iran</span>
                </div>
            </div>
        </div>
        <div class = "col-md-4">
             <div class ="postule p-3 mx-4" >
            <h4>
                L'Orient-Le Jour
                recrute des journalistes passionnés
            </h4>
            <button>
                Je postule
            </button>
            </div>
        </div>
    </div>

     <div  class = "subscribesec d-flex justify-content-center align-items-center p-5 gap-5">
        <div>
            <img src = "{{ asset('images/pot.webp') }}">
        </div>
        <div>
            <img src = "{{asset('images/logo.svg')}}" style = "width:30%;">
            <h2 class = "mt-3 mb-4">Le Moyen-Orient est en pleine <br> reconfiguration...</h2>
            <p>Restez informés en vous abonnant à notre offre <br> limitée : 3 mois pour 1$ seulement !</p>
            <div>
                <button class = "bg-black text-white px-5 py-3">Je m’abonne</button>
                <button class = " sendByMail px-5 py-3">M’envoyer l’offre par email</button>
            </div>
        </div>
    </div>
    </div>
@endsection