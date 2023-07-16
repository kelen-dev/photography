@extends('layouts.app')

@section('title', 'BountyFac')

@section('content')
    <div id="p-bountyfac">
        <section id="summary">
            <div class="container">
                <ul class="skills-project">
                    <li>
                        <span>
                            Gestion d'équipe
                        </span>
                    </li>

                    <li>
                        <span>
                            Gestion de conflits et d'intêrets
                        </span>
                    </li>

                    <li>
                        <span>
                            Maîtriser le serveur
                        </span>
                    </li>

                    <li>
                        <span>
                            Savoir déléguer
                        </span>
                    </li>
                </ul>
            </div>

            <article id="qu-est-ce-que-c-est">
                <div class="container">
                    <h3>
                        La BountyFac, c'est quoi ?
                    </h3>

                    <div class="wrapper">
                        {{-- left part --}}

                        <img src="{{ asset('assets/img/interrogation.webp') }}" alt="echelon" class="img-fluid">


                        {{-- right part --}}

                        <div class="text-right-part">
                            <h5>
                                La BountyFac : une faction sur le serveur tant réputé, Paladium
                            </h5>

                            <p>
                                La BountyFac est une faction sur le serveur Minecraft populaire, et, numéro 1 en PvP-Faction
                                Moddé, Paladium. La faction est ouverte à tous les types de joueurs.
                                Cette faction propose une grande variété de postes comme (Farmeur, Mineur, PvP player) et
                                permet aux joueurs d'être dans une faction où tout est possible.
                                <br>
                                La faction dispose bien entendu d'un serveur Discord pour que les gens puissent être entre
                                eux pour jouer ensemble.
                            </p>

                            <h5>
                                Une faction accueillante et non discriminatoire
                            </h5>

                            <p>
                                La BountyFac est connue pour sa communauté accueillante, amicale. Mais pas que. En effet,
                                notre faction permet aussi aux personnes de la communauté LGBT d'être en sécurité et de se
                                sentir bien.
                                <br>
                                Les joueurs peuvent se connecter avec d'autres joueurs du monde entier et jouer ensemble. La
                                faction offre
                                également des forums de discussion où les joueurs peuvent discuter et se faire de nouveaux
                                amis.
                            </p>

                            <h5>
                                Une faction accessible
                            </h5>

                            <p>
                                La BountyFac est une faction accessible à tous les joueurs, quel que soit leur niveau de
                                PvP, leur ancienneté sur le serveur etc. Les joueurs peuvent jouer gratuitement, donc, sans
                                grade, ou, choisir de payer pour un grade et bien d'autres choses.
                            </p>

                            <h5>
                                Conclusion
                            </h5>

                            <p>
                                En conclusion, La BountyFac est une faction pour tous les joueurs. Avec une
                                variété de postes disponibles, une faction accueillante et une accessibilité à tous les
                                niveaux de compétence et d'ancienneté. C'est une faction populaire pour les joueurs de tous
                                les âges.
                                Rejoignez la communauté de La BountyFac dès aujourd'hui et découvrez une nouvelle expérience
                                de
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
                                Une ascendence accrue
                            </h5>

                            <p>
                                La BountyFac offre une variété de grades pour tous les goûts, des grades pour l'action comme
                                le PvP.
                                Les joueurs peuvent choisir parmi une liste de grades, et, au fur et à mesure de leurs
                                engagements au sein de la faction, nous les montont en grade.
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
