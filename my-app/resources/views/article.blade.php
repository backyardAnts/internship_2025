@extends('layouts.app')

@section('header')
    @include('partials.header')
@endsection

@section('content')
<div class = "container">
    <div class = "row m-5 g-5">
    <div class = "col-md-9">
    <h4>Lifestyle - Entretien</h4>
    <h1>Juliette Armanet : des derniers jours du disco au cinéma « andouillettes-frites »</h1>
    <p>Artiste plurielle saluée par la critique et récompensée aux Victoires de la musique, c’est en ouverture du dernier Festival de Cannes qu’elle a fait ses preuves sur grand écran. Rencontrée grâce aux discussions organisées par le groupe Kering*, la chanteuse ne s’est laissé aller qu’à de timides confidences…</p>
    <p>OLJ / Propos recueillis par Karl RICHA, le 20 juin 2025 à 00h00</p>

        <div>
        <div class = "border-bottom">
             <img src="{{asset('images/juliette.webp')}}">
            <p>Juliette Armanet arrive à l'hôtel Majestic pour le premier panel « Women in Motion » de 2025 à Cannes. Photo Kering/DR</p>
</div>
            <p>Son entrée passe presque inaperçue. Les lunettes de soleil sur la tête, tenant en main un sweat noir jurant avec son haut rouge éclatant, Juliette Armanet se faufile dans la suite du dernier étage de l’hôtel Majestic sans bruit ni tapage. C’est peut-être là le secret de son succès. Chanteuse populaire sur le tard et longtemps cantonnée aux premières parties et aux galères d’artistes parisiens semi-résignés, son attitude évoque une girl next-door un brin bobo une fois les néons de la scène éteints.Loin des boules disco et des bottines hautes qui lui ont permis de louer des stades blindés et d’être quatre fois nommée aux Victoires de la musique, l’interprète célèbre pour un timbre de voix voilée et empreinte de mélancolie revient, quatre ans après la sortie de dernier album aux sonorités funk pour...</p>
            
    
        <div>
                <div class = "blockedBySub text-center p-4">
                    <img src = "{{asset('images/logo.svg')}}"  class = "d-block mx-auto" style="width:20%;">
                    <h6 >Cet article est réservé aux abonnés.<br>
                    Abonnez-vous pour 1$ et accédez à une information indépendante.</h6>
                    <p >Dans votre abonnement numérique : la version PDF du quotidien L’Orient-Le Jour, des newsletters réservées aux abonnés ainsi qu'un accès illimité à 3 médias en ligne : L’Orient-Le Jour, L’Orient Today et L’Orient Littéraire.
                    <button>Je m'abonne</button><br>
                    <button>Je me connecte</button>
                </div>
                <div class = "sameSub p-4 mt-5 ">
                    <h4>Sur le meme sujet</h4>
                <ul class="d-flex list-unstyled">
                    <li class = "me-4 border px-4 py-2 rounded-5" ><a>festival de cannes</a></li>
                    <li class = "me-4 border px-4 py-2 rounded-5" ><a>féminisme</a></li>
                    <li class = "me-4 border px-4 py-2 rounded-5" ><a>artiste</a></li>
                    <li class = "me-4 border px-4 py-2 rounded-5" ><a>france</a></li>
                </ul>
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
<div class = "m-5">
    <h1>A lire Aussi</h1>
   <div class = "row">
     <div class = "row col-md-9">
        <div class ="col-md-4"><a>
            <img src = "{{asset('images/zalal.jpg')}}" style="max-height:200px; object-fit:cover; width:100%;">
            <span>Lifestyle - Design</span>
            <p>Amoureux de cet élément indispensable à tout intérieur, l’architecte libanais Abdallah Barake a décidé d’en revisiter les formes et les matières pour en faire des pièces d’art à part entière.</p>
            <span>Zéna ZALZAL</span>
        </a></div>
        <div class ="col-md-4"><a>
             <img src = "{{asset('images/lea.webp')}}" style="max-height:200px; object-fit:cover; width:100%;">
            <span>Lifestyle - Médias</span>
            <p>Léa Salamé quitte la matinale de France Inter pour le JT de 20 heures de France 2</p>
            <span>Zéna ZALZAL</span>
        </a></div>
        <div class ="col-md-4"><a>
            <img src = "{{asset('images/twomen.webp')}}" style="max-height:200px; object-fit:cover; width:100%;">
            <span>Lifestyle - La Mode</span>
            <p>Dsquared2, trente ans de liberté d’en faire trop</p>
            <span>Fifi ABOU DIB</span>
        </a></div>
        <div class = "row">
        <div class ="col-md-4"><a>
            <img src = "{{asset('images/zalal.jpg')}}" style="max-height:200px; object-fit:cover; width:100%;">
            <span>Lifestyle - Design</span>
            <p>Amoureux de cet élément indispensable à tout intérieur, l’architecte libanais Abdallah Barake a décidé d’en revisiter les formes et les matières pour en faire des pièces d’art à part entière.</p>
            <span>Zéna ZALZAL</span>
        </a></div>
        <div class ="col-md-4"><a>
             <img src = "{{asset('images/lea.webp')}}" style="max-height:200px; object-fit:cover; width:100%;">
            <span>Lifestyle - Médias</span>
            <p>Léa Salamé quitte la matinale de France Inter pour le JT de 20 heures de France 2</p>
            <span>Zéna ZALZAL</span>
        </a></div>
        <div class ="col-md-4"><a>
            <img src = "{{asset('images/twomen.webp')}}" style="max-height:200px; object-fit:cover; width:100%;">
            <span>Lifestyle - La Mode</span>
            <p>Dsquared2, trente ans de liberté d’en faire trop</p>
            <span>Fifi ABOU DIB</span>
        </a></div>
    </div>
   </div>
    <div class = "col-md-3">
        <div class ="postule p-2" >
            <h4>
                L'Orient-Le Jour
                recrute des journalistes passionnés
            </h4>
            <button>
                Je postule
            </button>
        </div>
            <div id="tab-switch"></div>
    </div>
</div>
</div>
@endsection