<!doctype html>
<html lang="fr">

<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= WEBSITE_TITLE . ' | ' . ucfirst(str_replace('-', ' ', $page)); ?></title>
</head>

<body>

    <?php include_once 'views/includes/header.php' ?>

    <!--================Hero Banner Area Start =================-->
    <section class="hero-banner hero-banner-sm" style="padding: 0% !important;">
        <div class="contact-cover">
            <div class="container text-center">
                <h2 style="color: white;" class="wow fadeInDown">Contactez nous <i class="fa fa-phone wow fadeInRight" aria-hidden="true"></i> </h2>

            </div>
        </div>
    </section>
    <!--================Hero Banner Area End =================-->


    <!-- ================ contact section start ================= -->
    <section class="contact-section area-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Localisez nous</h2>
                </div>
            </div>
            <div class="responsive-map-container">
                <!-- place the iframe code between here... -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.201257285215!2d-4.004100484662143!3d5.386265496093223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc195f5b420f28d%3A0xad45e9145f758a16!2sSCORE%20BTP!5e0!3m2!1sfr!2sci!4v1595000813455!5m2!1sfr!2sci" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <!-- ... and here -->
            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Prendre contact</h2>
                </div>
                <div class="col-lg-8 wow fadeInLeft">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Entrez votre message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Entrez votre nom">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Entrez votre email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Entrez le sujet">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm">Envoyez le message</button>
                        </div>
                    </form>


                </div>

                <div class="col-lg-4 wow fadeInRight">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Cité versant, Abidjan.</h3>
                            <p>Cité versant , Abidjan </p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:454545654">(+225) 22 42 52 97</a></h3>
                            <p>Lun au Ven 8h to 17h</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="">info@score.ci</a></h3>
                            <p>Envoyez-nous votre demande à tout moment!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->


    <?php include_once 'views/includes/footer.php' ?>

    <?php include_once 'views/includes/script.php' ?>

</body>

</html>