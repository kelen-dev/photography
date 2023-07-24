@extends('layouts.app')

@section('title', 'Accueil')

@section('description', 'Portfolio de Sean Segura')

@section('content')
    <section id="a-propos">
        <div class="container">
            {{-- Titre section --}}
            <h2>
                À propos
            </h2>

            <div class="wrapper">
                {{-- Left part --}}


                {{-- Right part --}}

                {{-- Citation --}}
                <div class="citation mb-4">
                    <h3 class="h3 mb-4">
                        Une citation de moi
                    </h3>

                    <blockquote class="text-white">
                        ~ Soyez vous-même, car personne ne peut le faire mieux que vous. Ne laissez pas les autres vous
                        dicter qui vous devez être ou comment vous devez vivre. Vous avez le droit d'exprimer votre
                        personnalité, vos opinions, vos passions et vos rêves. Vous êtes unique et précieux, et vous
                        méritez le respect et l'amour de ceux qui vous entourent ~
                    </blockquote>
                    <cite>
                        {{ config('kelens.Info.username') }}
                    </cite>
                </div>

                {{-- Social media links --}}
                <div class="social-media-links">
                    <h3>
                        Réseaux sociaux
                    </h3>

                    <ul>
                        <li>
                            {{-- Twitter --}}
                            <a href="{{ config('kelens.SocialMedia.twitter') }}" aria-label="Twitter" target="_blank">
                                <i class="bi bi-twitter bi-2X"></i>
                            </a>
                        </li>
                        <li>
                            {{-- Facebook --}}
                            <a href="{{ config('kelens.SocialMedia.facebook') }}" aria-label="Facebook" target="_blank">
                                <i class="bi bi-facebook bi-2X"></i>
                            </a>
                        </li>
                        <li>
                            {{-- Instagram --}}
                            <a href="{{ config('kelens.SocialMedia.instagram') }}" aria-label="Instagram" target="_blank">
                                <i class="bi bi-instagram bi-2X"></i>
                            </a>
                        </li>
                        <li>
                            {{-- Discord --}}
                            <a href="{{ config('kelens.SocialMedia.discord') }}" aria-label="Discord" target="_blank">
                                <i class="bi bi-discord bi-2X"></i>
                            </a>
                        </li>
                        <li>
                            {{-- Linkedin --}}
                            <a class="btn btn-linkedin"
                                href="https://www.linkedin.com/comm/mynetwork/discovery-see-all?usecase=PEOPLE_FOLLOWS&followMember=sean-segura-399706261"
                                aria-label="Linkedin" target="_blank">Me suivre sur LinkedIn</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="pictures">
        <div class="container">
            {{-- Titre section --}}
            <h2>
                Photos
            </h2>

            {{-- Salon de l'auto --}}
            <h3>
                Salon de l'auto
            </h3>
            <div class="pictures">
                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Salon de l_auto/Devant de l_Aston Martin.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="info">
                            <span class="main">Salon de l'auto</span>
                            <span class="sub">devant d'une Aston Martin</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Salon de l_auto/Aile avant de l_Aston Martin.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="info">
                            <span class="main">Salon de l'auto</span>
                            <span class="sub">Aile avant d'une Aston Martin</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Salon de l_auto/Jante de l_Aston Martin.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="info">
                            <span class="main">Salon de l'auto</span>
                            <span class="sub">Jante d'une Aston Martin</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Salon de l_auto/Devant du Ford Raptor.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="info">
                            <span class="main">Salon de l'auto</span>
                            <span class="sub">Devant du Ford Raptor</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Salon de l_auto/Pneu du Ford Raptor.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="info">
                            <span class="main">Salon de l'auto</span>
                            <span class="sub">Pneu du Ford Raptor</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Salon de l_auto/Arrière du Ford Raptor.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="info">
                            <span class="main">Salon de l'auto</span>
                            <span class="sub">Arrière du Ford Raptor</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Salon de l_auto/Devant de la Mercedes EQE.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="info">
                            <span class="main">Salon de l'auto</span>
                            <span class="sub">Devant de la Mercedes EQE</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Par terre de fleurs du jardin Henri Vinay --}}
            <h3>
                Jardin Henri Vinay
            </h3>
            <div class="pictures">
                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Jardin Henri Vinay/fleurs côté gauche du jardin Henri Vinay.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <div class="info">
                            <span class="main">Jardin Henri Vinay</span>
                            <span class="sub">fleurs côté gauche</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Jardin Henri Vinay/montagne de fleurs avec cigne au jardin Henri Vinay.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <div class="info">
                            <span class="main">Jardin Henri Vinay</span>
                            <span class="sub">Montagne de fleurs avec tête de cigne</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Jardin Henri Vinay/Montagne de fleurs cigne (plan large).jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <div class="info">
                            <span class="main">Jardin Henri Vinay</span>
                            <span class="sub">Montagne de fleurs avec tête de cigne (plan large)</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Jardin Henri Vinay/snack du jardin Henri Vinay.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-cup-hot"></i>
                        </div>
                        <div class="info">
                            <span class="main">Jardin Henri Vinay</span>
                            <span class="sub">Snack</span>
                        </div>
                    </div>
                </div>

                <div class="picture"
                    style="--pictureBackground:url('{{ asset('assets/img/home/Jardin Henri Vinay/fleurs côté droit du jardin Henri Vinay.jpg') }}');">
                    <div class="picture-shadow"></div>
                    <div class="label">
                        <div class="icon">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <div class="info">
                            <span class="main">Jardin Henri Vinay</span>
                            <span class="sub">fleurs côté droit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
