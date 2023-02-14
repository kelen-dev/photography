@if(Route::is('home'))
    <div class="home-background">
        @endif
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="img-fluid" src="{{ asset('assets/img/favicon.webp') }}"
                         alt="{{ route('home') }}"
                         class="d-lg-block d-sm-none">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                        aria-controls="offcanvas" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end bg-accent-darker" tabindex="-1" id="offcanvas"
                     aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body justify-content-end">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            @if(Route::is('home'))
                            @else
                                <li class="nav-item">
                                    <a class="nav-link @if(Route::current()->getName('home')) active @endif"
                                       aria-current="page"
                                       href="{{ route('home') }}">
                                        <i class="bi bi-house"> Accueil</i>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link @if(Route::current()->getName('cv')) active @endif"
                                   href="{{ route('cv') }}">
                                    <i class="bi bi-file-earmark-pdf"> CV</i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Route::current()->getName('a-propos')) active @endif"
                                   href="{{ route('a-propos') }}">
                                    <i class="bi bi-clipboard"> A propos</i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Route::current()->getName('contact.index')) active @endif"
                                   href="{{ route('contact.index') }}">
                                    <i class="bi bi-envelope"> Contact</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @if(Route::is('home'))
            <div class="container">
                <div class="box_KelenS">

                    <div class="title_KelenS">
                        <span class="block_KelenS"></span>
                        <h1 class="h1_KelenS">Sean SEGURA<span></span></h1>
                    </div>

                    <div class="role">
                        <div class="block_KelenS"></div>
                        <p class="p_KelenS">Développeur web front-end</p>
                    </div>

                </div>
            </div>

            <div id="scroll-down" class="down">
                <a href="#a-propos"><span></span>Scroll to about</a>
            </div>
        @endif

    </div>
