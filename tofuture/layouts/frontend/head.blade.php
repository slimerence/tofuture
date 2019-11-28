<head>
    <?php
    echo \App\Models\Utils\AMP\HeadUtil::getInstance()->output($pageTitle,$metaKeywords,$metaDescription );
    ?>
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/tofuture/logo-small.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/tofuture/logo-small.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/tofuture/logo-small.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/flexslider-min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.9/mediaelementplayer.min.css" />
    <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.css" />
    <!-- SLIDER REVOLUTION CSS SETTINGS -->
    <link href="{{ url('demos/rs-plugin/css/settings.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url('css/all.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
    <script src="{{ url('demos/rs-plugin/js/jquery.lwtCountdown-1.0.js') }}" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Ads: 767960925 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-767960925"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-132581982-1');

        gtag('config', 'AW-767960925');
    </script>
        <script>
            gtag('config', 'AW-767960925/5bZpCI3Jw7UBEN3OmO4C', {
                'phone_conversion_number': '+61 3 9890 8535'
            });
        </script>
        <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-5BQPFSQ');</script>
        <!-- End Google Tag Manager -->
</head>
