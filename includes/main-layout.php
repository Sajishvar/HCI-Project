<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>PC MART</title>

        <!-- font -->
        <link rel="stylesheet" href="assets/fonts/fonts.css">
        <!-- Icons -->
        <link rel="stylesheet" href="assets/fonts/font-icons.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet"type="text/css" href="assets/css/styles.css"/>

        <!-- Favicon and Touch Icons  -->
        <link rel="shortcut icon" href="assets/images/logo/favicon.svg">
        <link rel="apple-touch-icon-precomposed" href="assets/images/logo/favicon.svg">
        
    </head>

    <body class="preload-wrapper color-primary-3">
        <!-- preload -->
        <div class="preload preload-container">
            <div class="preload-logo">
                <div class="spinner"></div>
            </div>
        </div>
        <!-- /preload -->

        <div id="wrapper">
            <?php include("header.php"); ?>
            <?php echo $pageContent; ?>
            <?php include("footer.php"); ?>
        </div>  

        <!-- Javascript -->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="assets/js/carousel.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/lazysize.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/count-down.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/multiple-modal.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript" src="assets/js/timer.js"></script>

        <!-- gotop -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
            </svg>
        </div>
        <!-- /gotop -->
    </body>
</html>