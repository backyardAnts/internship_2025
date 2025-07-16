@extends('layouts.app')
@section('header')
    @include('partials.connectheader')
@endsection

@section('content')
<div class = "offersec">
    <div class ="switching-between">
        <a>Nos offres d’abonnement</a>
        <a href = "/whydoit" >Pourquoi s’abonner</a>
    </div>
    <div style = "height:600px;">
        <div class = "offer-container">
        <h1 class = "text-center text-white pt-5">Notre indépendance se cultive grâce à nos abonnés</h1>
       <div class = "d-flex gap-3 justify-content-center text-center mt-5">
            <div class = "card-1">
                <h3>Annuel</h3>
                <h2>99$</h2>
                <p>au lieu de 215$, pour la première année d'abonnement seulement</p>
                <button class = "btnn-1">Je m’abonne</button>
                <p>Sans engagement</p>
            </div>
            <div class = "card-2">
                <h3>Mensuel</h3>
                <h2>3 mois/1$</h2>
                <p>valable une seule fois, uniquement pour les trois premiers mois d’abonnement</p>
                <button class = "btnn-2">Je m’abonne</button>
                <p>Sans engagement</p>
            </div>
            <div class = "card-1">
                <h3>2 ans</h3>
                <h2>314$</h2>
                <p>Recevez des invitations exclusives pour rencontrer la rédaction</p>
                <button class = "btnn-1" >Je m’abonne</button>
                <p>Sans engagement</p>
            </div>
       </div>

    </div>

    </div>
        <div class = "container mt-5">
            <h3 class = "text-center fw-bold" >Les Avantages De L'abonnement</h3>
        <ul class="list-unstyled d-flex gap-3 justify-content-center text-center listofwhy mt-5 mx-5" >
            <li class = "d-flex flex-column align-items-center"><i class="fa-regular fa-file-pdf"></i><span>Accès au journal en PDF</span></li>
            <li class = "d-flex flex-column align-items-center"><i class="fa-solid fa-box-archive"></i><span>Les archives depuis 1997</span></li>
            <li class = "d-flex flex-column align-items-center"><i class="fa-solid fa-unlock"></i><span>Accès illimité 100% numérique à L’Orient-Le Jour, L’Orient Today et à L’Orient Littéraire</span></li>
            <li class = "d-flex flex-column align-items-center"><i class="fa-solid fa-envelope-open-text"></i><span>La lettreaux abonnés</span></li>
            <li class = "d-flex flex-column align-items-center"><i class="fa-solid fa-bullhorn"></i><span>1 annonce en ligne gratuite par mois</span></li>
        </ul>
        </div>
        <div class = "imageReason">
            <div class = " goodReasons1">
                <h2>3 bonnes raisons de s’abonner à L’Orient-Le Jour</h2>
                <button>Découvrir</button>
            </div>
            <div class = " goodReasons2 ">
                <div class = "d-flex align-items-center gap-2"><i class="fa-solid fa-comment fs-5"></i><h2>Nous contacter</h2></div>
                <p class = "mt-3">+961 71 175166 <br>
                    serviceclient@lorientlejour.com</p>
            </div>
        </div>
        <div class = " offers-and-more mt-5">
            <div class = "ouroffers1">
                <img src="{{ asset('images/journal.webp') }}">
                <div>
                    <p class = "mb-0">Nos offres</p>
                    <h1 style = "padding:0px;">Numérique + Papier</h1>
                </div>
            </div>
            <div class = "ouroffers1-actual">
                <img src="{{ asset('images/loreinttodayy.webp') }}">
                <div >
                    <h3>Formule intégrale</h3>
                    <p>Numérique + Papier</p>
                </div>
                <div>
                    <button class = "btnn-2">Nous contacter</button>
                    <p>+961 5 956 444</p>
                </div>
            </div>  
        </div>
        <div class = " offers-and-more mt-5">
            <div class = "ouroffers1">
                <img src="{{ asset('images/dudeannounce.webp') }}">
                
                    <h1 style = "padding:0px;">Nos offres spéciales</h1>
            </div>
            <div class = "ouroffers1-actual">
                <img src="{{ asset('images/loreinttodayy.webp') }}">
                <div >
                    <h3>Formule Étudiante</h3>
                    <p>À partir de 7.90$</p>
                </div>
                <div>
                    <button class = "btnn-2">Nous contacter</button>
                    <p>+961 5 956 444</p>
                </div>
            </div>
            <div class = "ouroffers1-actuall">
                <h2>Entreprises</h2>
                                <div>
                    <button class = "btnn-2">Nous contacter</button>
                    <p>+961 5 956 444</p>
                </div>
            </div>
</div>
@endsection