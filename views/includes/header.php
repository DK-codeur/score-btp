<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <a class="dn_btn" href=""><i class="ti-mobile"></i>(+225) 22 59 07 99</a>
                <span class="dn_btn"> <i class="ti-location-pin"></i> Cité versant 1, 2, Abidjan</span>
            </div>
            <div class="float-right">
                <span class="follow_us">Suivez nous sur: </span>
                <ul class="list header_social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="home"><img src="assets/img/score-logo.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item <?= $page == 'home' ? 'active' : '' ?>"><a class="nav-link" href="home">Accueil</a></li>

                        <li class="nav-item"><a class="nav-link" href="home#prestation">Prestations</a></li>
                        <li class="nav-item"><a class="nav-link" href="home#realisation">Realisation</a></li>
                        <li class="nav-item <?= $page == 'contacts' ? 'active' : '' ?>"><a class="nav-link" href="contacts">Contact</a></li>
                        <li class="nav-item <?= $page == 'about' ? 'active' : '' ?>"><a class="nav-link" href="about">A propos</a></li>

                    </ul>
                </div>
            </div>
        </nav>

    </div>

</header>