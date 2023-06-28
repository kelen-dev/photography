@extends('layouts.app')

@section('title', 'Mon SETUP')

@section('content')
    <div id="p-setup">
        <section id="summary">
            <div class="container">
                <h2>
                    Informations
                </h2>
            </div>

            <article id="comment-ai-je-fait-pour-avoir-un-tel-setup">
                <div class="container">
                    <h3>
                        Comment ai-je fait pour avoir un tel Setup ?
                    </h3>

                    <div class="wrapper">
                        {{-- left part --}}

                        <img src="{{ asset('assets/img/échelon.webp') }}" alt="echelon" class="img-fluid">


                        {{-- right part --}}

                        <div class="text-right-part">
                            <h5>
                                Je l'ai fait petit à petit. Commençons par mon premier SETUP !!
                            </h5>

                            <p>
                                Mon premier SETUP remonte à mes 12 ans. C’était une énorme tour rouge tournant sous
                                Windows XP avec mon premier écran plat en 1080P. Ce SETUP était sur un grand bureau de
                                1m90 sous mon lit en hauteur. Je l’ai gardé quelques années, mais j’ai vite réalisé que
                                je voulais quelque chose de plus performant, surtout pour le gaming.
                                <br>
                                Trois ans plus tard, j’ai eu un nouveau PC. Celui-ci tournait sous Windows 10, un
                                véritable bond en
                                avant. C’est là que j’ai commencé à développer et à jouer à Minecraft. Ce PC a été
                                accompagné d’un nouveau bureau en bois blanc, plus petit que le précédent mais plus
                                pratique car il n'était plus sous mon lit.
                                <br>
                                Deux ans après, j’ai déménagé et j’ai décidé de refaire mon SETUP avec un bureau 100%
                                fait main et donc 100% personnalisé. Celui-ci
                                était en bois pur et avait été construit par mon grand-père et moi-même avec deux
                                planches que nous avons coupées pour faire des caissons à étagères.
                            </p>

                            <h5>
                                Et si on parlait de mon SETUP actuel ?
                            </h5>

                            <p>
                                Alors, pour commencer, on va parler des meubles que j’ai achetés chez IKEA. J’ai pris
                                deux meubles de bureau
                                <a href="https://www.ikea.com/fr/fr/p/alex-caisson-a-tiroirs-brun-noir-60473548/">
                                    <strong>
                                        ALEX.
                                    </strong>
                                </a> Ils sont accompagnés d’un
                                <a href="https://www.leroymerlin.fr/produits/cuisine/plan-de-travail-et-credence/plan-de-travail-de-cuisine/plan-de-travail-bois/plan-de-travail-bois-acacia-lamelle-huile-l-250-x-p-65-cm-ep-26-mm-82172649.html?src=clk">
                                    <strong>
                                        plan de travail en bois massif d'acacia
                                    </strong>
                                </a> de 2m50 de long et 65cm de profondeur. C’est du solide !
                                <br>
                                Ensuite, pour les périphériques, j’ai opté pour la souris
                                <a href="https://www.amazon.fr/Corsair-Rechargeable-Technologie-Slipstream-R%C3%A9tro%C3%A9clairage/dp/B07QD1FP24/ref=sr_1_1?keywords=ironclaw&qid=1684156409&sprefix=ironclaw+%2Caps%2C77&sr=8-1">
                                    <strong>
                                        IronClaw Wireless RGB
                                    </strong>
                                </a> de chez Corsair. C’est une souris sans fil très pratique et confortable. J’ai
                                également choisi le célèbre clavier
                                <a href="https://www.amazon.fr/dp/B07VTRZLWJ?psc=1&ref=ppx_yo2ov_dt_b_product_details">
                                    <strong>
                                        G915 avec switchs tactiles
                                    </strong>
                                </a> de chez Logitech G. Il est très agréable à utiliser et très réactif. Pour la
                                webcam, j’ai choisi la
                                <a href="https://www.amazon.fr/Logitech-Streamcam-Streaming-Cr%C3%A9ation-Verticale/dp/B07W4DHNBF/ref=sr_1_4?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2VCUSBWYXE2ZK&keywords=logitech+streamcam&qid=1684157043&sprefix=logitech+streamcam%2Caps%2C86&sr=8-4">
                                    <strong>
                                        Logitech for Creators StreamCam
                                    </strong>
                                </a>. Elle est parfaite pour les streamers et les créateurs de contenu.
                                <br>
                                Enfin, pour le micro, j’ai choisi le
                                <a href="https://www.amazon.fr/Bird-UM1-Microphone-USB-Noir/dp/B00EQ077RE/ref=sr_1_2?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=EM5161EPFGAV&keywords=bird+um1&qid=1684157303&sprefix=bird+um1%2Caps%2C95&sr=8-2">
                                    <strong>
                                        Bird UM1
                                    </strong>
                                </a>. C’est un micro incontournable pour les streamers et les podcasters.
                                <br>
                                Et pour l’écran, j’utilise le
                                <a href="https://www.amazon.fr/gp/product/B09P1G2Q76/ref=ppx_yo_dt_b_asin_title_o00_s00?ie=UTF8&psc=1">
                                    <strong>
                                        INNOCN 40".
                                    </strong>
                                </a> C’est un écran ultra large de très bonne qualité avec une résolution de 1440P en
                                144Hz. Il est parfait pour les jeux et la productivité.
                                <br>
                                Enfin, la pièce maîtresse de mon SETUP c'est bien entendu, le PC. Pour celui-ci, j’ai
                                décidé de faire appel à FlowUP, plus précisément, au PC Rainbow. Ce PC gamer est le plus
                                RGB de l’atelier et est équipé d’un CPU Intel Core I7 12700KF refroidi par un
                                WaterCooling 360mm de DeepCool et d’une magnifique carte graphique Nvidia GEFORCE RTX
                                3080 10GB de chez Zotac. Il dispose d’un SSD 1To NVMe Gen4 pour l’OS et les logiciels,
                                ainsi qu’un second de 2To en Gen4 pour les jeux. Le kit de RAM de 2x16Go de chez Corsair
                                est également présent. Tout cela est contenu dans un boîtier XGIMATEK AQUARIUS PLUS Noir
                                bien ventilé par 7 ventilateurs fournis, ce qui fait en tout, 10 ventilateurs RGB.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <article id="pourquoi-ce-matériel">
                <div class="container">
                    <div class="title">
                        <h3>
                            Pourquoi ce matériel ?
                        </h3>
                    </div>
                    <div class="wrapper">
                        {{-- Left part --}}

                        <div class="text-left-part">
                            <h5>
                                Je voulais le meilleur.
                            </h5>

                            <p>
                                J'ai passé des heures à chercher les composants les plus performants, les plus adaptés à
                                mes besoins et à mon budget. J'ai comparé les avis, les tests, les benchmarks, les
                                offres.
                                <br>
                                J'ai finalement commandé le PC Rainbow de chez FlowUP pour avoir le PC de mes rêves.
                                J'étais impatient de recevoir le colis, de déballer l'énorme carton de 20kg, de le
                                mettre en place et de le brancher avec soin et de démarrer mon nouveau système.
                                <br>
                                Je savais que j'allais profiter d'une expérience de jeu incroyable, d'une fluidité sans
                                pareille, d'une qualité graphique époustouflante. Je voulais le meilleur pour mon setup,
                                et je l'ai obtenu.
                                <br>
                                Il est important de prendre le temps de sélectionner les pièces adéquates et leurs
                                combinaisons pour obtenir un PC qui offre une expérience de jeu optimale tout en étant
                                très professionnel.
                            </p>

                            <h5>
                                C'est le setup de mes rêves.
                            </h5>

                            <p>
                                Je n'ai jamais vu un ordinateur aussi puissant et élégant. Il a tout ce dont j'ai besoin
                                pour travailler, jouer et créer.
                                <br>
                                L'écran est immense et lumineux, le clavier est confortable et réactif, la souris est
                                précise et ergonomique.
                                <br>
                                Le processeur est rapide et performant, la mémoire est suffisante et extensible, le
                                stockage est spacieux, ultra rapide et sécurisé.
                                <br>
                                Le design est moderne et sobre, la couleur est harmonieuse et chic. C'est le
                                setup parfait pour moi.
                                <br>
                                Je suis tellement heureux de l'avoir trouvé.
                            </p>
                        </div>

                        {{-- Right part --}}

                        <img src="{{ asset('assets/img/interrogation.webp') }}" alt="interrogation" class="img-fluid">
                    </div>
                </div>
            </article>

            <article id="est-il-voué-à-évoluer">
                <div class="container">
                    <div class="title">
                        <h3>
                            Est-il voué à évoluer ?
                        </h3>
                    </div>

                    <div class="wrapper">
                        {{-- Right part --}}

                        <div class="text-right-part">
                            <h5>
                                Oui, suivant mes besoins.
                            </h5>

                            <p>
                                Je suis très content de vous présenter mon setup actuel, qui répond parfaitement à mes
                                besoins du moment.
                                <br>
                                J'ai choisi avec soin chaque élément pour optimiser mon confort, ma productivité et ma
                                créativité. Que ce soit pour travailler, jouer ou apprendre, je dispose de tout ce qu'il
                                me faut pour m'épanouir. Bien sûr, je sais que mes besoins peuvent changer avec le
                                temps, et c'est pourquoi je considère mon setup comme un projet évolutif.
                                <br>
                                Je suis toujours à l'affût des nouvelles tendances, des innovations technologiques et
                                des retours d'expérience des autres utilisateurs.
                                <br>
                                Suivant mes besoins, le setup est bien sûr, voué à évoluer, à s'adapter et à se
                                perfectionner. C'est ce qui rend ce hobby si passionnant et stimulant !
                            </p>
                        </div>

                        {{-- Left part --}}

                        <img src="{{ asset('assets/img/évolution.webp') }}" alt="evolution" class="img-fluid">
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
                    <img src="{{ asset('assets/img/Setup 2023.webp')}}" alt="Setup" class="img-fluid"
                         onclick="myFunction(this);">
                    <img src="{{ asset('assets/img/périphériques.webp')}}" alt="Périphériques" class="img-fluid"
                         onclick="myFunction(this);">
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
