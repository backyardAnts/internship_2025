@extends('layouts.app')

@section('title', 'Accueil - L’Orient-Le Jour')

@section('header')
    @include('partials.homepage-header')
    @include('partials.homeNav')
@endsection

@section('content')
<div class="container">
    <div class="container px-5 mx-auto">
        <div class="row">
            <div class="mainArticle col-md-7 offset-md-1">
                @if($articles->count())
                    @php $main = $articles->first(); @endphp
                    <span>{{ strtoupper(optional($main->category)->name) }}</span>
                    <h2>{{ $main->title }}</h2>
                    <p>{{ $main->excerpt }}</p>
                    <span>{{ $main->user->name }}</span>
                    <img src="{{ $main->image_url }}" style="width: 675px;" class="mt-3">
                @endif

                <div class="container px-0 mt-3">
                    <div class="row">
                        @foreach($articles->skip(1)->take(3) as $article)
                            <div class="col-md-4">
                                <img src="{{ $article->image_url }}" style="width: 200px;">
                                <span>{{ strtoupper(optional($article->category)->name) }}</span>
                                <h6>{{ $article->title }}</h6>
                            </div>
                        @endforeach
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

                <div class="container px-0 mt-3">
                    <div class="row">
                        @foreach($articles->skip(4)->take(3) as $article)
                            <div class="col-md-4 border-bottom">
                                <img src="{{ $article->image_url }}" style="width: 200px;">
                                <span>{{ strtoupper(optional($article->category)->name) }}</span>
                                <h6>{{ $article->title }}</h6>
                            </div>
                        @endforeach
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
                            </p>
                        </div>
                        <div class="">
                            <h5 class="fw-bold mb-0">L’Iran était-il proche d’avoir une arme atomique ?</h5>
                            <button class="btn btn-dark btn-sm">Toutes nos vidéos</button>
                        </div>
                    </div>

                    <div class="container mt-5">
                        <div class="row g-3">
                            @foreach($articles->skip(7)->take(10) as $article)
                                <div class="col-md-6">
                                    <a>
                                        <span>{{ strtoupper(optional($article->category)->name) }}</span>
                                        <p>{{ $article->title }}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="secondpart col-md-3 border px-0 rounded-3">
                <div class="border-bottom p-3 d-flex align-items-center">
                    <i class="fa-solid fa-clock"></i>
                    <h6 class="ms-3 pt-2">Dernières infos</h6>
                </div>
                <div>
                    @foreach($articles->take(8) as $article)
                        <div class="border-bottom m-3">
                           <span>{{ \Carbon\Carbon::parse($article->published_at)->format('H:i') }}</span>

                            <p>{{ $article->title }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    <button class="bg-black text-white p-2 ps-4 pe-4 rounded-2">Toutes les dernieres infos</button>
                </div>
            </div>
        </div>
    </div>

    <div class="undermain">
        <h1>Sélection de la rédaction</h1>
        <div class="d-flex justify-content-center gap-3">
            @foreach($articles->skip(10)->take(3) as $article)
                <div>
                    <a>
                        <img src="{{ $article->image_url }}" style="width:100%; height:250px;">
                        <span>{{ strtoupper(optional($article->category)->name) }}</span>
                        <h5>{{ $article->title }}</h5>
                        <p>{{ $article->excerpt }}</p>
                        <div>
                            <span>{{ $article->user->name }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="subscribesec d-flex justify-content-center align-items-center p-5 gap-5">
        <div>
            <img src="{{ asset('images/pot.webp') }}">
        </div>
        <div>
            <img src="{{ asset('images/logo.svg') }}" style="width:30%;">
            <h2 class="mt-3 mb-4">Le Moyen-Orient est en pleine <br> reconfiguration...</h2>
            <p>Restez informés en vous abonnant à notre offre <br> limitée : 3 mois pour 1$ seulement !</p>
            <div>
                <button class="bg-black text-white px-5 py-3">Je m’abonne</button>
                <button class="sendByMail px-5 py-3">M’envoyer l’offre par email</button>
            </div>
        </div>
    </div>

    <div id="carousel-react"></div>
</div>
@endsection
