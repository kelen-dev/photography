@extends('layouts.app')

@section('title', 'Hydaria')

@section('content')
    <div id="p-hydaria">
        <section id="summary">
            <div class="container">
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
            </div>

            <article id="qu-est-ce-que-c-est">
                <div class="container">
                    <h3>
                        Hydaria, c'est quoi ?
                    </h3>

                    <div class="wrapper">
                        {{-- left part --}}

                        <img src="{{ asset('assets/img/interrogation.webp') }}" alt="echelon" class="img-fluid">


                        {{-- right part --}}

                        <div class="text-right-part">
                            <h5>
                                Hydaria Corp : une plateforme multi-gaming pour tous
                            </h5>

                            <p>
                                Hydaria Corp est une plateforme de jeu en ligne qui offre une expérience de jeu unique pour
                                tous les types de joueurs. Cette plateforme propose une grande variété de jeux et permet aux
                                joueurs de se connecter entre eux pour jouer ensemble. Dans cet essai, nous allons explorer
                                les différents aspects de Hydaria Corp et pourquoi c'est une plateforme populaire pour les
                                joueurs de tous âges.
                            </p>

                            <h5>
                                Une communauté accueillante
                            </h5>

                            <p>
                                Hydaria Corp est connue pour sa communauté accueillante et amicale. Les joueurs peuvent se
                                connecter avec d'autres joueurs du monde entier et jouer ensemble. La plateforme offre
                                également des forums de discussion où les joueurs peuvent discuter de leurs jeux préférés et
                                se faire de nouveaux amis.
                            </p>

                            <h5>
                                Une plateforme accessible
                            </h5>

                            <p>
                                Hydaria Corp est une plateforme accessible à tous les joueurs, quel que soit leur niveau de
                                compétence. Les joueurs peuvent jouer gratuitement ou choisir de payer pour des
                                fonctionnalités supplémentaires. De plus, la plateforme est disponible sur une variété de
                                dispositifs, y compris les ordinateurs, les tablettes et les téléphones portables.
                            </p>

                            <h5>
                                Conclusion
                            </h5>

                            <p>
                                En conclusion, Hydaria Corp est une plateforme multi-gaming pour tous les joueurs. Avec une
                                variété de jeux disponibles, une communauté accueillante et une accessibilité à tous les
                                niveaux de compétence, c'est une plateforme populaire pour les joueurs de tous les âges.
                                Rejoignez la communauté Hydaria Corp dès aujourd'hui et découvrez une nouvelle expérience de
                                jeu passionnante.
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
                            <h5>
                                Une variété de jeux
                            </h5>

                            <p>
                                Hydaria Corp offre une variété de jeux pour tous les goûts, des jeux d'action et d'aventure
                                aux jeux de simulation et de stratégie. Les joueurs peuvent choisir parmi une liste de jeux
                                populaires tels que Minecraft, Fortnite, Apex Legends et League of Legends. De plus, la
                                plateforme propose également des jeux moins connus pour ceux qui veulent découvrir de
                                nouvelles expériences.
                            </p>
                        </div>

                        {{-- Right part --}}

                        <img src="{{ asset('assets/img/projects/manette.webp') }}" alt="echelon" class="img-fluid">
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

                        <img src="{{ asset('assets/img/projects/website-icon.webp') }}" alt="echelon" class="img-fluid">


                        {{-- right part --}}

                        <div class="text-right-part">
                            <p>
                                Nous sommes heureux de vous annoncer que nous avons un site web en cours de développement.
                                Ce site web sera une plateforme innovante et interactive pour vous informer de nos
                                activités, de nos services et de nos projets. Nous espérons que vous serez nombreux à le
                                visiter et à nous faire part de vos commentaires et suggestions. Nous vous tiendrons au
                                courant de la date de lancement officiel du site web dès que possible. Merci de votre
                                intérêt et de votre confiance.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
@endsection
