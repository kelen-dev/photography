@extends('layouts.app')

@section('title', 'Accueil')

@section('description', 'Site professionnel de Sean Segura')

@section('content')
    <section id="a-propos">
        <div class="container">
            {{-- Titre section --}}
            <h2 class="h2">
                @lang('messages.title.about')
            </h2>

            <div class="wrapper">
                {{-- Left part --}}

                <div class="info">
                    <img src="{{ asset('assets/img/avataaars.svg') }}" width="264px" height="280px" alt="Logo" class="load-hidden">

                    <div id="name load-hidden">
                        <h4>
                            Nom :
                        </h4>
                        <p>
                            {{ config('kelens.Info.username') }}
                        </p>
                    </div>
                    <div id="age load-hidden">
                        <h4>
                            Âge :
                        </h4>
                        <p>
                            {{ config('kelens.Info.age') }} ans
                        </p>
                    </div>
                    <div id="mail load-hidden">
                        <h4>
                            Email :
                        </h4>
                        <a href="mailto:{{ config('kelens.Info.email') }}">
                            {{ config('kelens.Info.email') }}
                        </a>
                    </div>
                    <div id="tel load-hidden">
                        <h4>
                            Téléphone :
                        </h4>
                        <a href="tel:0641492515">
                            {{ config('kelens.Info.tel') }}
                        </a>
                    </div>
                    <div id="site load-hidden">
                        <h4>
                            Site professionnel :
                        </h4>
                        <a href="https://kelens.fr">
                            {{ config('kelens.Info.site') }}
                        </a>
                    </div>
                </div>


                {{-- Right part --}}

                {{-- About --}}
                <div class="about">
                    <p>
                        Sean Aka KelenS, je suis un jeune développeur web Front-End depuis 2018.
                        J’ai commencé le développement vers 14 ans, maintenant, j’en ai {{ config('kelens.Info.age') }}.
                        <br>
                    </p>
                    <p>
                        J'ai développé durant mon parcours beaucoup de projets et fait beaucoup de sites pour
                        moi-même, mon premier projet ayant été concrétisé est un site pour des serveurs Minecraft. J'ai
                        aussi travaillé pour des projets Minecraft, et pour des clients, en leur développant
                        principalement la partie front-end de leur site.
                    </p>

                    <a href="{{ route('a-propos') }}" target="_blank" class="btn btn-principal">
                        En savoir plus
                    </a>
                </div>

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
                            <a href="https://twitter.com/KelenSDev" aria-label="Twitter" target="_blank">
                                <i class="bi bi-twitter bi-2X"></i>
                            </a>
                        </li>
                        <li>
                            {{-- Facebook --}}
                            <a href="https://www.facebook.com/KelenSDev" aria-label="Facebook" target="_blank">
                                <i class="bi bi-facebook bi-2X"></i>
                            </a>
                        </li>
                        <li>
                            {{-- Instagram --}}
                            <a href="http://instagram.kelens.fr" aria-label="Instagram" target="_blank">
                                <i class="bi bi-instagram bi-2X"></i>
                            </a>
                        </li>
                        <li>
                            {{-- Discord --}}
                            <a href="https://discord.kelens.fr" aria-label="Discord" target="_blank">
                                <i class="bi bi-discord bi-2X"></i>
                            </a>
                        </li>
                        <li>
                            {{-- Linkedin --}}
                            <a class="btn btn-linkedin" href="https://www.linkedin.com/comm/mynetwork/discovery-see-all?usecase=PEOPLE_FOLLOWS&followMember=sean-segura-399706261" target="_blank">Me suivre sur LinkedIn</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="abstract">
        <div class="container">
            {{-- Titre section --}}
            <h2>
                Mon résumé
            </h2>

            <div class="wrapper">
                {{-- Left part --}}

                <div class="hobby">
                    <i class="bi bi-camera bi-2X">
                        <p>
                            Photos
                        </p>
                    </i>

                    <i class="bi bi-music-note-beamed bi-2X">
                        <p>
                            Musique
                        </p>
                    </i>

                    <i class="bi bi-film bi-2X">
                        <p>
                            Films et séries
                        </p>
                    </i>

                    <i class="bi bi-code bi-2X">
                        <p>
                            Développement web
                        </p>
                    </i>
                </div>


                {{-- Right part --}}

                <div class="langages">
                    <h3>
                        Compétences
                    </h3>
                    <ul>
                        <li>
                            <div class="logo">
                                <img class="img-fluid" src="{{ asset('assets/img/langages/html.webp') }}" alt="html">
                            </div>

                            <div class="barre" data-length="90"></div>

                            <button class="btn btn-html">90%</button>
                        </li>
                        <li>
                            <div class="logo">
                                <img class="img-fluid" src="{{ asset('assets/img/langages/css.webp') }}" alt="css">
                            </div>

                            <div class="barre" data-length="80"></div>

                            <button class="btn btn-css">80%</button>
                        </li>
                        <li>
                            <div class="logo">
                                <img class="img-fluid" src="{{ asset('assets/img/langages/sass.webp') }}" alt="css">
                            </div>

                            <div class="barre" data-length="80"></div>

                            <button class="btn btn-sass">80%</button>
                        </li>
                        <li>
                            <div class="logo">
                                <img class="img-fluid" src="{{ asset('assets/img/langages/js.webp') }}" alt="js">
                            </div>

                            <div class="barre" data-length="10"></div>

                            <button class="btn btn-js">10%</button>
                        </li>
                        <li>
                            <div class="logo">
                                <img class="img-fluid" src="{{ asset('assets/img/langages/php.webp') }}" alt="php">
                            </div>

                            <div class="barre" data-length="30"></div>

                            <button class="btn btn-php">30%</button>
                        </li>
                        <li>
                            <div class="logo">
                                <img class="img-fluid" src="{{ asset('assets/img/langages/git.webp') }}" alt="git">
                            </div>

                            <div class="barre" data-length="90"></div>

                            <button class="btn btn-git">90%</button>
                        </li>
                    </ul>
                </div>
                <div class="education">
                    <h3>
                        Éducation
                    </h3>

                    {{-- Futur Designer --}}
                    <ul id="futer-designer">
                        <li class="date">
                            décembre 2021 - mars 2022
                        </li>

                        <li class="name">
                            Formation Futur Designer chez Osengo by Aformac
                        </li>
                        <li class="description">
                            Passage du PIX, développement web (html, css, scss, Bootstrap), maquettage, design
                        </li>
                    </ul>

                    {{-- Bac professionnel --}}
                    <ul id="bac">
                        <li class="date">
                            2019 - 2021
                        </li>

                        <li class="name">
                            Attestation de réussite intermédiaire en baccalauréat professionnel
                        </li>
                        <li class="description">
                            spécialité métiers du commerce et de la vente
                        </li>
                    </ul>

                    {{-- Brevet --}}
                    <ul id="brevet">
                        <li class="date">
                            2018 - 2019
                        </li>

                        <li class="name">
                            Diplôme national du brevet
                        </li>

                        <li class="description">
                            série professionnelle avec la mention bien
                        </li>
                    </ul>
                </div>

                <div class="experience">
                    <h3>
                        Expériences
                    </h3>

                    {{-- Emmaüs --}}
                    <ul id="emmaus">
                        <li class="date">
                            28 novembre 2022 - 7 décembre 2022 (2 semaines)
                        </li>

                        <li class="name">
                            Intérimaire chez Emmaüs43
                        </li>

                        <li class="description">
                            <a href="https://www.emmaus43.fr/" title="Accéder au site"><strong>Emmaüs</strong></a> :
                            Montage de meuble,
                            ramassage (vide maison), réception des dons au quai
                            <br>
                            <a href="https://www.label-emmaus.co/fr/" title="Accéder au site"><strong>Label</strong></a>
                            : Prise de
                            photos des produits, gestion des mises en vente de produits sur label43
                        </li>
                    </ul>

                    {{-- DigitalBoyVisual --}}
                    <ul id="digitalboyvisual">
                        <li class="date">
                            juin 2022 (2 semaines)
                        </li>

                        <li class="name">
                            Développeur DigitalBoyVisual en stage
                        </li>

                        <li class="description">
                            Développement d'un site web sous le CMS WordPress
                            <br>
                            Le site n'est plus en ligne depuis le 17 mai 2023.
                        </li>
                    </ul>

                    {{-- CEJ --}}
                    <ul id="cej">
                        <li class="date">
                            2 mai 2022 - 2 mai 2023 (1 an)
                        </li>

                        <li class="name">
                            Contrat d'Engagement Jeune
                        </li>

                        <li class="description">
                            Engagement de 15/20 heures par semaines
                        </li>
                    </ul>

                    {{-- La Clandestine --}}
                    <ul id="la-clandestine">
                        <li class="date">
                            septembre 2021 - 16 mai 2023 (1 an et 9 mois)
                        </li>

                        <li class="name">
                            Développeur du site de la Clandestine
                        </li>

                        <li class="description">
                            Développement + maintenance du site de <a href="https://ecolededanselaclandestine.fr"
                                                                      title="Accéder au site"><strong>la
                                    Clandestine</strong></a> et de l'hébergement web
                        </li>
                    </ul>

                    {{-- Géant Casino --}}
                    <ul id="cdiscount">
                        <li class="date">
                            juin 2021 - juillet 2021 (5 semaines)
                        </li>

                        <li class="name">
                            Vendeur Cdiscount en stage
                        </li>

                        <li class="description">
                            Mise en rayon
                            <br>
                            Rangement de la surface de vente
                            <br>
                            Rangement de la réserve
                            <br>
                            Étiquetage
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="projects">
        <div class="container">
            {{-- Titre section --}}
            <h2>
                Mes projets
            </h2>

            <ul class="wrapper">
                <li>
                    <h3>
                        Hydaria
                    </h3>
                    <ul class="skills-project">
                        <li>
                            <span>
                                développement sous le CMS Azuriom
                            </span>
                        </li>

                        <li>
                            <span>
                                savoir utiliser PHP
                            </span>
                        </li>

                        <li>
                            <span>
                                connaître le SCSS
                            </span>
                        </li>

                        <li>
                            <span>
                                apprendre le Framework Laravel
                            </span>
                        </li>
                    </ul>
                    <p>
                        Hydaria est une future plateforme multigaming fondée par Enzo Zanitchi et moi-même.
                    </p>
                    <p>
                        Nous voulons être une grande famille où règne un état d’esprit soudé et convivial !
                        N’attends plus et rejoins nous ! Hydaria est une team et communauté multigaming,
                        MOBA, MMORPG, FPS…
                        <br>
                        Nous avons pour but de réunir des joueurs passionnés avec le même état d’esprit que le notre
                        : l’entraide, le partage et le respect qui sont des valeurs importantes et essentielles pour
                        nous.
                        <br>
                        Tout est mis en œuvre pour que nos membres puissent trouver une structure organisée et
                        complète. Nous souhaitons que Hydaria soit reconnue comme une team ambitieuse
                        respectant ses valeurs.
                        <br>
                        Tous les types de profils sont acceptés sur Hydaria, que vous soyez dans une optique
                        purement fun ou purement
                        compétitive, nous espérons que vous puissiez trouver vos marques rapidement en notre
                        compagnie !
                        <br>
                        Sur demande nous ferons des serveurs vocaux et des jeux.
                    </p>
                    <img class="img-fluid" src="{{ asset('assets/img/projects/accueil-mclfa.webp') }}" alt="mcLFA">
                </li>
                <li>
                    <h3>
                        KelenS CORP
                    </h3>
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
                    <article>
                        KelenS Corp est une entreprise de développement web front-end fondée par Sean SEGURA, un jeune
                        développeur web Front-End depuis 2018.
                        <br>
                        L'entreprise propose des sites web sur mesure avec créativité, qualité et rapidité garanties.
                        Vous pouvez contacter l'entreprise pour un devis gratuit.
                        <br>
                        Vous pouvez également visiter leur <a href="https://kelens.fr" title="Accéder au site"><strong>site
                                web</strong></a> pour en savoir plus sur leur travail.
                    </article>
                    <img class="img-fluid" src="{{ asset('assets/img/projects/accueil-kelens-fr.webp') }}"
                         alt="KelenS CORP">
                </li>
            </ul>
        </div>
    </section>
@endsection
