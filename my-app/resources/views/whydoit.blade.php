@extends('layouts.app')
@section('header')
    @include('partials.connectheader')
@endsection

@section('content')
<div>
        <div class ="switching-between">
        <a>Nos offres d’abonnement</a>
        <a href = "/whydoit" >Pourquoi s’abonner</a>
    </div>

    <div class = "reading-woman">
        <h4 class = "text-center mb-5">
            En vous abonnant, vous contribuez à préserver<br>
            notre indépendance financière et donc éditoriale.<br>
            <i class="fa-solid fa-angle-down"></i>
        </h4>
        
    </div>
    <div class = "container ">
        <h1 class = "text-center my-5">3 bonnes raisons de s’abonner à<br>
L’Orient-Le Jour</h1>
<div class = "d-flex align-items-center justify-content-center gap-5 my-5">
    <div class = "reason1">
        <span>1</span>
    </div>
    <div class = "reason-paragraph">
        <h3>Je m’abonne à L’OLJ pour avoir les clés de l’actualité libanaise et régionale</h3>
        Je m’abonne à L’OLJ pour avoir les clés de l’actualité libanaise et régionale En vous abonnant à l’OLJ, vous avez non seulement accès à nos analyses, décryptages, reportages, tribunes, enquêtes, archives, mais vous devenez également membre d'une communauté engagée et informée de lecteurs.
    </div>
</div>
<div class = "d-flex align-items-center justify-content-center gap-5 my-5">
    
    <div class = "reason-paragraph">
        <h3>Je m’abonne à L’OLJ pour avoir les clés de l’actualité libanaise et régionale</h3>
        Je m’abonne à L’OLJ pour avoir les clés de l’actualité libanaise et régionale En vous abonnant à l’OLJ, vous avez non seulement accès à nos analyses, décryptages, reportages, tribunes, enquêtes, archives, mais vous devenez également membre d'une communauté engagée et informée de lecteurs.
    </div>
    <div class = "reason1">
        <span>2</span>
    </div>
</div>
<div class = "d-flex align-items-center justify-content-center gap-5 my-5">
    <div class = "reason1">
        <span>3</span>
    </div>
    <div class = "reason-paragraph">
        <h3>Je m’abonne à L’OLJ pour avoir les clés de l’actualité libanaise et régionale</h3>
        Je m’abonne à L’OLJ pour avoir les clés de l’actualité libanaise et régionale En vous abonnant à l’OLJ, vous avez non seulement accès à nos analyses, décryptages, reportages, tribunes, enquêtes, archives, mais vous devenez également membre d'une communauté engagée et informée de lecteurs.
    </div>
</div>
    </div>
</div>
@endsection