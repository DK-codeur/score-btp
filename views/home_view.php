<!doctype html>
<html lang="fr">

    <head>
        <?php include_once 'views/includes/head.php' ?>
        <title><?= WEBSITE_TITLE . ' | ' . ucfirst(str_replace('-', ' ', $page)); ?></title>
    </head>

    <body>

        <?php include_once 'views/includes/header.php' ?>

        <!-- wmc carousel-->
        <div id="wmc-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#wmc-carousel-ind" data-slide-to="0" class="active"></li>
                <li data-target="#wmc-carousel-ind" data-slide-to="1"></li>
                <li data-target="#wmc-carousel-ind" data-slide-to="2"></li>
                <li data-target="#wmc-carousel-ind" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <!--info-->
                    <img class="d-block w-100" src="assets/img/banner/batiment.png" alt="">
                    <div class="carousel-caption">
                        <div class="banner_content text-center wow fadeInDown" data-wow-delay="0.8s">
                            <p style="text-shadow: 3px 3px 3px black;">Nous construisons le futur</p>
                            <h3 style="text-shadow: 3px 3px 3px black;">
                                Réalisez votre batiment de rêve
                                <br class="display-sm">avec SCORE
                            </h3>

                        </div>
                        <br>
                        <div class="text-center wow fadeInLeft" data-wow-delay="0.9s">
                            <a class="main_btn" href="#service">Voir nos Prestations</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <!--info-->
                    <img class="d-block w-100" src="assets/img/banner/electricite.png" alt="">
                    <div class="carousel-caption ff">
                        <div class="banner_content text-center wow fadeInDown" data-wow-delay="0.8s">
                            <h3>
                                Nous nous occupons de tous vos traveaux d'electricités
                            </h3>

                        </div>
                        <br>
                        <div class="text-center wow fadeInLeft" data-wow-delay="0.9s">
                            <a class="main_btn" href="#service">Voir nos Prestations</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <!--info-->
                    <img class="d-block w-100" src="assets/img/banner/voirie.jpeg" alt="">
                    <div class="carousel-caption ff">
                        <div class="banner_content text-center wow fadeInDown" data-wow-delay="0.8s">
                            <h3 style="text-shadow: 3px 3px 3px black;">
                                Voirie
                            </h3>

                        </div>
                        <br>
                        <div class="text-center wow fadeInLeft" data-wow-delay="0.9s">
                            <a class="main_btn" href="#service">Voir nos Prestations</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <!--info-->
                    <img class="d-block w-100" src="assets/img/banner/forage.png" alt="">
                    <div class="carousel-caption ff">
                        <div class="banner_content text-center wow fadeInDown" data-wow-delay="0.8s">
                            <h3 style="text-shadow: 3px 3px 3px black;">
                                Forages hydrauliques
                            </h3>

                        </div>
                        <br>
                        <div class="text-center wow fadeInLeft" data-wow-delay="0.9s">
                            <a class="main_btn" href="#service">Voir nos Prestations</a>
                        </div>
                    </div>
                </div>


            </div>
            <a class="carousel-control-prev" href="#wmc-carousel" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#wmc-carousel" role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /wmc carousel -->




        <!--================About  Area =================-->
        <section class="about-area area-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="about-img wow fadeInLeft" data-wow-delay="0.8s">
                            <img src="assets/img/banner/about1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content wow fadeInRight" data-wow-delay="0.9s">
                            <h4>NOUS SOMMES DES EXPERTS<br>
                                DANS LE DOMAINE DU BATIMENT, DE L'ELECTRICITE, ET DES TRAVAUX PUBLICS<br>
                                DEPUIS 2013.</h4>
                        </div>
                        <div class="about-content wow fadeInUp" data-wow-delay="1.3s">
                            <a class="main_btn" href="a-propos.html">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================About Area End =================-->

        <!--================Service  Area =================-->
        <section class="service-area area-padding" id="prestation">
            <div class="container">
                <div class="area-heading wow fadeInDown">
                    <h3 class="line">NOS PRESTATIONS</h3>

                </div>
                <div class="row">

                    <!-- Single service -->
                    <div class="col-md-6 col-xl-3">
                        <div class="single-service wow fadeInLeft">
                            <div class="service-icon">
                                <img src="assets/img/icon/i2.png" alt="">
                            </div>
                            <div class="service-content">
                                <h5>CONSTRUCTIONS</h5>
                                <p>Conception et construction des bâtiments publics et privés</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single service -->
                    <div class="col-md-6 col-xl-3">
                        <div class="single-service wow fadeInDown" data-wow-delay="0.6s">
                            <div class="service-icon">
                                <img src="assets/img/icon/i5.png" alt="">
                            </div>
                            <div class="service-content">
                                <h5>ELECTRICITE</h5>
                                <p>
                                    Réalisation des travaux d'installation et de mise en service des équipements électriques dans des bâtiments.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Single service -->
                    <div class="col-md-6 col-xl-3">
                        <div class="single-service wow fadeInDown" data-wow-delay="0.6s">
                            <div class="service-icon">
                                <img src="assets/img/icon/i3.png" alt="">
                            </div>
                            <div class="service-content">
                                <h5>VOIRIE</h5>
                                <p>Aménagement et entretien des voies de circulation</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single service -->
                    <div class="col-md-6 col-xl-3">
                        <div class="single-service wow fadeInRight">
                            <div class="service-icon">
                                <img src="assets/img/icon/i6.png" alt="">
                            </div>
                            <div class="service-content">
                                <h5>LES FORAGES HYDRAULIQUES</h5>
                                <p> Irrigation, d’eau à usage industriel ou de dénoyage </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-3">
                        <div class="single-service">
                            <div class="service-icon">
                                <i class="fas fa-toolbox fa-4x "></i>
                            </div>
                            <div class="service-content">
                                <h5>ET BIEN D'AUTRES...</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--================Service Area end =================-->

        <!--================Funny number  Area =================-->
        <section class="number-area" id="number-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-5">
                        <div class="number-img wow fadeInLeft" data-wow-delay="0.6s">
                            <img src="assets/img/worker.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="number-content">
                            <div class="wow fadeInDown">
                                <h4>Nous Fournissons des services personnalisés et de haute qualité .</h4>
                                <p> Vous avez la possibilité d'apporter des modifications aux idées de projets que vous avez. </p>
                            </div>

                            <div class="number-wrapper wow fadeInUp">
                                <div class="single-number">
                                    <h5><span class="counter">120</span>+</h5>
                                    <p>clients satisfaits</p>
                                </div>
                                <div class="single-number">
                                    <h5><span class="counter">72</span>+</h5>
                                    <p>Projets Réalisés</p>
                                </div>

                                <div class="single-number">
                                    <h5><span class="counter">7</span>+</h5>
                                    <p>Années d'expériences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Funny number Area end =================-->



        <!--================ Start Portfolio Area =================-->
        <section class="container portfolio_area area-padding" id="realisation">


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Nos Réalisations</a>
                </li>

                <!-- <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        
        <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li> -->
            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div id="projet-carou" class="carousel slide" data-ride="carousel">


                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <!--info-->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 all popular">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="assets/img/scr/i7.jpg" alt="">
                                            <div class="short_info">
                                                <p>Architecture</p>
                                                <h4>Côte d'Ivoire</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 all popular">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="assets/img/scr/i20.jpeg" alt="">
                                            <div class="short_info">
                                                <p>Travaux</p>
                                                <h4>Côte d'Ivoire</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="carousel-item">
                                <!--info-->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 all popular">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="assets/img/scr/i18.jpg" alt="">
                                            <div class="short_info">
                                                <p>Travaux</p>
                                                <h4>Côte d'Ivoire</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 all popular">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="assets/img/scr/i23.jpg" alt="">
                                            <div class="short_info">
                                                <p>Travaux</p>
                                                <h4>Côte d'Ivoire</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <!--info-->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 all popular">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="assets/img/scr/i24.jpg" alt="">
                                            <div class="short_info">
                                                <p>Travaux</p>
                                                <h4>Côte d'Ivoire</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 all popular">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="assets/img/scr/i25.jpeg" alt="">
                                            <div class="short_info">
                                                <p>Travaux</p>
                                                <h4>Côte d'Ivoire</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <!--info-->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 all popular">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="assets/img/scr/i25.jpeg" alt="">
                                            <div class="short_info">
                                                <p>Travaux</p>
                                                <h4>Côte d'Ivoire</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 all popular">
                                        <div class="single_portfolio">
                                            <img class="img-fluid w-100" src="assets/img/scr/i26.jpeg" alt="">
                                            <div class="short_info">
                                                <p>Travaux</p>
                                                <h4>Côte d'Ivoire</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#projet-carou" role="button" data-slide="prev">
                                <div class="rad-control"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#projet-carou" role="button" data-slide="next">
                                <div class="rad-control"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>


                </div>

        </section>
        <!--================ End Portfolio Area =================-->


        <!--================ Start Testimonial Area =================-->
        <section class="testimonial-area area-padding">
            <div class="container">
                <div class="area-heading">
                    <h3 class="line">Avis de certains clients</h3>
                </div>
                <div class="row">
                    <div class="active-testimonial-carusel owl-carousel">
                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb text-center pt-3">
                                <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
                            </div>
                            <div class="desc">
                                <h4>Kone Maimouna</h4>
                                <p class="designation">chef d'entreprise</p>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem molestiae minus facere alias. Ipsam officiis provident ipsum voluptatem cumque. Quasi nisi et nulla nam culpa repudiandae at voluptatibus modi exercitationem!
                                </p>
                            </div>
                        </div>

                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb text-center pt-3">
                                <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
                            </div>
                            <div class="desc">
                                <h4>Kouassi kevin</h4>
                                <p class="designation">DG</p>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem molestiae minus facere alias. Ipsam officiis provident ipsum voluptatem cumque. Quasi nisi et nulla nam culpa repudiandae at voluptatibus modi exercitationem!
                                </p>
                            </div>
                        </div>

                        <div class="single-testimonial item d-flex flex-row">
                            <div class="thumb text-center pt-3">
                                <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
                            </div>
                            <div class="desc">
                                <h4>Toure asiatou</h4>
                                <p class="designation">chef de Projet Industriel</p>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem molestiae minus facere alias. Ipsam officiis provident ipsum voluptatem cumque. Quasi nisi et nulla nam culpa repudiandae at voluptatibus modi exercitationem!
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--================ End Testimonial Area =================-->




        <div class="container-fluid">
            <div class="area-heading">
                <h3 class="line">Nos Partenaires</h3>
            </div>
            <section class="customer-logos slider">
                <div class="slide"><img src="assets/img/partner/afriland bank.png"></div>
                <div class="slide"><img src="assets/img/partner/ageroute.png"></div>
                <div class="slide"><img src="assets/img/partner/bernabe.png"></div>
                <div class="slide"><img src="assets/img/partner/bnet.png"></div>
                <div class="slide"><img src="assets/img/partner/bni.png"></div>
                <div class="slide"><img src="assets/img/partner/carriere.png"></div>
                <div class="slide"><img src="assets/img/partner/cfao.png"></div>
                <div class="slide"><img src="assets/img/partner/ci-energie.png"></div>
                <div class="slide"><img src="assets/img/partner/doci.png"></div>
                <div class="slide"><img src="assets/img/partner/ekds.png"></div>
                <div class="slide"><img src="assets/img/partner/mssz.png"></div>
                <div class="slide"><img src="assets/img/partner/nep.png"></div>
                <div class="slide"><img src="assets/img/partner/s.png"></div>
                <div class="slide"><img src="assets/img/partner/sba.png"></div>
                <div class="slide"><img src="assets/img/partner/sgbci.png"></div>
                <div class="slide"><img src="assets/img/partner/sibm.png"></div>
                <div class="slide"><img src="assets/img/partner/sogelux.png"></div>
                <div class="slide"><img src="assets/img/partner/sotici.png"></div>
            </section>

        </div>


        <?php include_once 'views/includes/footer.php' ?>

        <?php include_once 'views/includes/script.php' ?>

    </body>
</html>