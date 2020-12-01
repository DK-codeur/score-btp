<!doctype html>
<html class="no-js" lang="fr">
<head>
    <?php include_once 'views/includes/head.php'?>
    <title><?= WEBSITE_TITLE .' | '. ucfirst($page); ?></title>
</head>

<body>
    <?php include_once 'views/includes/header.php' ?>

    <!-- Slider Area Start-->
    <div class="error-area">
        <div class="container">
            <!-- Section-tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-80">
                        <h2 class="wow fadeInDown" data-wow-delay=".9s">
                            Oups !!! Something wrong.
                            <div class="detail-divider wow fadeInLeft" data-wow-delay="1.3s"></div>
                        ​</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End-->

    <div class="container error-section">
        <h1 class="h1 text-center" style="font-size: 7.5rem; color:#ccc; text-shadow: 1px 1px 4px black;">
            404 
            <i class="fa fa-exclamation-triangle text-warning"></i>
        </h1>
        <h5 class="text-center">Nous somme desolé, la page que vous recherchez n'existe pas</h5>
        <h6 class="text-center">veillez contacter l'administrateur du site.</h6>
    </div>


    <?php include_once 'views/includes/footer.php' ?>

    <?php include_once 'views/includes/script.php' ?>  
</body>
</html>