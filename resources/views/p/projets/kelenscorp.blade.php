@extends('layouts.app')

@section('title', 'KelenS Corp')

@section('content')
<div id="p-kelenscorp">
    <section id="summary">
        <div class="container">
            <h2>
                Informations
            </h2>

            <ul class="skills-project">
                <li>
                    <span>
                        développement sous le CMS WordPress
                    </span>
                </li>

                <li>
                    <span>
                        savoir utiliser elementor
                    </span>
                </li>
                <li>
                    <span>
                        optimiser le site
                    </span>
                </li>
            </ul>
        </div>

        <article id="qu-est-ce-que-c-est">
            <div class="container">
                <h3>
                    KelenS Corp, c'est quoi ?
                </h3>

                <div class="wrapper">
                    {{-- left part --}}

                    <img src="{{ asset('assets/img/interrogation.webp') }}" alt="echelon" class="img-fluid">


                    {{-- right part --}}

                    <div class="text-right-part">
                        <h5>
                            KelenS Corp est mon entreprise de développement informatique mais pas que !
                        </h5>

                        <p>
                            KelenS Corp est une entreprise de développement web front-end fondée par moi-même, un jeune
                            développeur web principalement Front-End depuis 2018.
                        </p>
                    </div>
                </div>
            </div>
        </article>

        <article id="que-proposez-vous">
            <div class="container">
                <h3>
                    Que proposez-vous ?
                </h3>

                <div class="wrapper">
                    {{-- Left part --}}

                    <div class="text-left-part">
                        <p>
                            L'entreprise propose des sites web sur mesure avec créativité, qualité et rapidité garanties.
                            Vous pouvez contacter l'entreprise pour un devis gratuit.
                        </p>
                    </div>

                    {{-- Right part --}}

                    <img src="{{ asset('assets/img/interrogation.webp') }}" alt="echelon" class="img-fluid">
                </div>
            </div>
        </article>

        <article id="un-site">
            <div class="container">
                <h3>
                    Avez-vous un site ?
                </h3>

                <div class="wrapper">
                    {{-- left part --}}

                    <img src="{{ asset('assets/img/interrogation.webp') }}" alt="echelon" class="img-fluid">


                    {{-- right part --}}

                    <div class="text-right-part">
                        <p>
                            Vous pouvez également visiter notre
                            <a href="https://kelens.fr" title="Accéder au site">
                                <strong>site web</strong>
                            </a>
                            pour en savoir plus sur notre travail.
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section id="pictures">
        <div class="container">
            <h2>
                Images
            </h2>

            <div class="img-setup">
                <img src="{{ asset('assets/img/Setup 2023.webp')}}" alt="Setup" class="img-fluid" onclick="myFunction(this);">
                <img src="{{ asset('assets/img/périphériques.webp')}}" alt="Périphériques" class="img-fluid" onclick="myFunction(this);">
                <img src="{{ asset('assets/img/pc.webp')}}" alt="PC" class="img-fluid" onclick="myFunction(this);">
            </div>

            <div class="img-setup-expanted">
                <span onclick="this.parentElement.style.display='none'" class="closebtn">
                    &times;
                </span>

                <img id="expandedImg">

                <p id="imgtext"></p>
            </div>
        </div>
    </section>
</div>
@endsection