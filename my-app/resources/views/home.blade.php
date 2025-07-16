@extends('layouts.app')

@section('title', 'Accueil - L’Orient-Le Jour')

@section('header')
    @include('partials.homepage-header')
    @include('partials.homeNav')
@endsection
@section('content')
<div class = "container">
        <div class = "container px-5 mx-auto">
        <div class = "row">
        <div class="mainArticle col-md-7 offset-md-1">
            <span>FOCUS</span>
            <h2>Comment Israël pourrait neutraliser le site nucléaire de Fordo</h2>
            <p>Le deuxième centre d’enrichissement d’uranium en Iran, plus difficile à atteindre que celui de Natanz, revient sur toutes les lèvres de Washington à Tel-Aviv.</p>
            <span>Amélie ZACCOUR</span>
            <img src="{{ asset('images/desert.jpg') }}" style="width: 675px;" class ="mt-3">
            <div class = "container px-0 mt-3">
                <div class = "row">
                    <div class = "col-md-4  ">
                        <img src="{{ asset('images/desert.jpg') }}" style="width: 200px;">
                        <span>DANS LA PRESSE</span>
                        <h6>Des frappes américaines sur l’Iran sont « l’une des options » pour Trump</h5>
                    </div>
                    <div class = "col-md-4 ">
                        <img src="{{ asset('images/desert.jpg') }}" style="width: 200px;">
                        <span>DANS LA PRESSE</span>
                        <h6>Des frappes américaines sur l’Iran sont « l’une des options » pour Trump</h5>
                    </div>
                    <div class = "col-md-4 ">
                        <img src="{{ asset('images/desert.jpg') }}" style="width: 200px;">
                        <span>DANS LA PRESSE</span>
                        <p>Des frappes américaines sur l’Iran sont « l’une des options » pour Trump</p>
                    </div>
                </div>
            </div>
                <div class="colored p-3 rounded mt-3">
                    <div class="d-flex align-items-center mb-3">
                    <i class="fa-solid fa-message me-3"></i>
                    <strong>Si vous aviez pour projet de venir au Liban cet été, annuleriez-vous votre voyage ?</strong>
                </div>

                <button class="btn btn-outline-secondary w-100 mb-2 text-start bg-white text-black">Oui</button>
                <button class="btn btn-outline-secondary w-100 text-start bg-white text-black">Non</button>
            </div>
            <div class = "container px-0 mt-3">
                <div class = "row">
                    <div class = "col-md-4 border-bottom ">
                        <img src="{{ asset('images/desert.jpg') }}" style="width: 200px;">
                        <span>DANS LA PRESSE</span>
                        <h6>Des frappes américaines sur l’Iran sont « l’une des options » pour Trump</h5>
                    </div>
                    <div class = "col-md-4 border-bottom">
                        <img src="{{ asset('images/desert.jpg') }}" style="width: 200px;">
                        <span>DANS LA PRESSE</span>
                        <h6>Des frappes américaines sur l’Iran sont « l’une des options » pour Trump</h5>
                    </div>
                    <div class = "col-md-4 border-bottom">
                        <img src="{{ asset('images/desert.jpg') }}" style="width: 200px;">
                        <span>DANS LA PRESSE</span>
                        <p>Des frappes américaines sur l’Iran sont « l’une des options » pour Trump</p>
                    </div>
                </div>
            </div>
            <div class="p-4">

  <div class="row seeVideos p-3">
    <div class="col-md-4">
      <div>
        <img src="{{ asset('images/videoThumb.png') }}" class="img-fluid" alt="Video thumbnail">
      </div>
    </div>
    <div class="col-md-8">
      <strong class="text-uppercase">Focus</strong>
      <p class="mb-0">
        Israël bombarde l’Iran, accusé de s’approcher du « point de non-retour » vers la bombe atomique. 
        Mais que sait-on du programme nucléaire iranien et à quel point est-il avancé ? On revient dans…
      </p>
    </div>
      <div class="">
    <h5 class="fw-bold mb-0">L’Iran était-il proche d’avoir une arme atomique ?</h5>
    <button class="btn btn-dark btn-sm">Toutes nos vidéos</button>
  </div>
  </div>


  <div>
   <div class = "container mt-5"> 
    <div class = "row g-3">
         <div class = " testt col-md-6">
        <div>
            <a>
            <span>DIPLOMATE</span>
            <p>Aoun recevant Jean-Pierre Lacroix : Le Liban est attaché au maintien de la Finul au Liban-Sud</p>
        </a>
        </div>
       <div>
         <a><span>CONFLIT</span>
            <p>L’agression contre l’Iran, « une tentative désespérée pour viser l’axe de la Résistance », selon le tandem chiite</p>
        </a>
       </div>
        <div>
            <a>
            <span>DANS LA PRESSE</span>
            <p>Des frappes américaines sur l’Iran sont « l’une des options » pour Trump</p>
        </a>
        </div>
        <div>
            <a>
            <span>FOCUS</span>
            <p>Comment Israël pourrait neutraliser le site nucléaire de Fordo</p>
        </a>
        </div>
        <div>
            <a>
            <span>PORTRAIT</span>
            <p>Quand Beyrouth chantait : l’histoire oubliée d’Arlette El-Khoury, première soprano libanaise</p>
        </a>
        </div>
    </div>
     <div class = "col-md-6 testt">
        <div>
            <a>
            <span>DIPLOMATE</span>
            <p>Aoun recevant Jean-Pierre Lacroix : Le Liban est attaché au maintien de la Finul au Liban-Sud</p>
        </a>
        </div>
       <div>
         <a><span>CONFLIT</span>
            <p>L’agression contre l’Iran, « une tentative désespérée pour viser l’axe de la Résistance », selon le tandem chiite</p>
        </a>
       </div>
        <div>
            <a>
            <span>DANS LA PRESSE</span>
            <p>Des frappes américaines sur l’Iran sont « l’une des options » pour Trump</p>
        </a>
        </div>
        <div>
            <a>
            <span>FOCUS</span>
            <p>Comment Israël pourrait neutraliser le site nucléaire de Fordo</p>
        </a>
        </div>
        <div>
            <a>
            <span>PORTRAIT</span>
            <p>Quand Beyrouth chantait : l’histoire oubliée d’Arlette El-Khoury, première soprano libanaise</p>
        </a>
        </div>
    </div>
    </div>
    </div>
  </div>
</div>

        </div>
        <div class="secondpart col-md-3 border px-0 rounded-3">
            <div class = "border-bottom p-3 d-flex align-items-center" >
                <i class="fa-solid fa-clock"></i>
                <h6 class = "ms-3 pt-2">Dernières infos</h5>
            </div>
            <div>
                <div class = "border-bottom m-3" >
                    <span>11:17</span>
                    <p>Israël-Iran   WhatsApp dément transmettre des données à Israël</p>
                </div>
                <div class = "border-bottom m-3" >
                    <span>11:17</span>
                    <p>Israël-Iran   WhatsApp dément transmettre des données à Israël</p></div>
                <div class = "border-bottom m-3" >
                    <span>11:17</span>
                    <p>Israël-Iran   WhatsApp dément transmettre des données à Israël</p></div>
                <div class = "border-bottom m-3" >
                    <span>11:17</span>
                    <p>Israël-Iran   WhatsApp dément transmettre des données à Israël</p></div>
                <div class = "border-bottom m-3" >
                    <span>11:17</span>
                    <p>Israël-Iran   WhatsApp dément transmettre des données à Israël</p></div>
                <div class = "border-bottom m-3" >
                    <span>11:17</span>
                    <p>Israël-Iran   WhatsApp dément transmettre des données à Israël</p></div>
                <div class = "border-bottom m-3" >
                    <span>11:17</span>
                    <p>Israël-Iran   WhatsApp dément transmettre des données à Israël</p></div>
                <div class = "border-bottom m-3" >
                    <span>11:17</span>
                    <p>Israël-Iran   WhatsApp dément transmettre des données à Israël</p></div>
            </div>
            <div class = " d-flex justify-content-center" >
                <button class="bg-black text-white p-2 ps-4 pe-4 rounded-2">Toutes les dernieres infos</button>
            </div>
        </div>
    </div>
    </div>
    <div  class = "undermain">
        <h1>Sélection de la rédaction</h1>
        <div  class = "d-flex justify-content-center gap-3">
            <div>
                <a>
                    <img src="{{ asset('images/fire.webp') }}" style = "width:100%; height:250px;">
                    <span>ECLAIRAGE</span>
                    <h5>Comment la guerre contre le Hezbollah a servi de laboratoire pour Israël en Iran</h5>
                    <p>Les tactiques militaires ressemblent à celle utilisée lors de la guerre au Liban, bien que les objectifs soient plus ambitieux face à la République islamique. </p>
                    <div>
                        <span> Laure-Maïssa FARJALLAH</span>
                        <i></i>
                    </div>
                </a>
            </div>
             <div>
                <a>
                    <img src="{{ asset('images/moto.webp') }}" style = "width:100%; height:250px;">
                    <span>Témoignages</span>
                    <h5>« Mon village au Liban-Sud a aussi été ravagé par Israël » : en Iran, certains Libanais n’ont pas l’intention de rentrer</h5>
                    <p>« Il est important de rester sur place et d’éviter tout déplacement inutile pour l’instant, car la situation n’est toujours pas claire », prévient l’ambassade du Liban à Téhéran. </p>
                    <div>
                        <span>Ghadir Hamadi</span>
                        <i></i>
                    </div>
                </a>
            </div>
             <div>
                <a>
                    <img src="{{ asset('images/desert.jpg') }}" style = "width:100%; height:250px;">
                    <span>FOCUS</span>
                    <h5>Comment Israël pourrait neutraliser le site nucléaire de Fordo</h5>
                    <p>Le deuxième centre d’enrichissement d’uranium en Iran, plus difficile à atteindre que celui de Natanz, revient sur toutes les lèvres de Washington à Tel-Aviv.</p>
                    <div>
                        <span> Amélie ZACCOUR</span>
                        <i></i>
                    </div>
                </a>
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

    <div id="carousel-react"></div>

</div>

@endsection

