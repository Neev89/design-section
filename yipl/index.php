<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>WSIS</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/tabstyle.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

</head>
<body>
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Home</a>
        </div>
        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Timeline</a>
                </li>
                <li>
                    <a href="#">Submit</a>
                </li>
                <li>
                    <a href="#">Nominated Projects</a>
                </li>
                <li>
                    <a href="#">Vote</a>
                </li>
                <li>
                    <a href="#">Prize Ceremony</a>
                </li>
                <li>
                    <a href="#">Categories</a>
                </li>
                <li>
                    <a href="#">Rules and Guidelines</a>
                </li>
            </ul>

        </nav>
    </div>
</header>

<div id="masthead">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="img/wsisclip.png" style="margin-top: 20px;">
            </div>


        </div>
    </div><!-- /cont -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-spacer"> </div>
            </div>
        </div>
    </div><!-- /cont -->

</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">



        <div class="layout">
            <h2 class="title">Nominated Projects</h2>
            <h5>Phase II: Nomination phase</h5>
            <h6 style="text-transform: none;font-size: 12px;font-style: italic;">25 February 2015 - 13 March 2015</h6>
            <div class="half-spacer"></div>
            <p class="tl-justify">During Phase II, an Expert Group revised the projects referring to the <a href="#rules-and-guidelines" onclick="api.setNextPanel(8);api.updateClass($(this))" class="arrow">rules for project submission and nomination criteria</a>. The outcome of the Expert Group’s work was a list of nominated projects listed below. The Expert Group consisted of professionals working on the implementation of WSIS outcomes. The decisions of the Expert Group are final and without appeal.</p>
            <p class="tl-justify">All nominated projects will also be part of the WSIS Stocktaking Report 2015. Please see the previous edition <a href="/stocktaking/WSISProjectPrizes2014.aspx" target="_blank" class="arrow">here</a>.</p>
        </div>

        <div class="field" id="searchform">
                        <input type="text" id="searchterm" placeholder="Search your project.." />
                        <button type="button" id="search">Find!</button>
                    </div>
        <hr>
        <h5 class="text-center design-h5">Nominated Projects ( 125 Projects )</h5>

        <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active mgleft-400"><a href="#categories" aria-controls="categories" role="tab" data-toggle="tab"><i class="fa fa-gear"></i> Categories</a></li>
                <li role="presentation"><a href="#countries" aria-controls="countries" role="tab" data-toggle="tab"><i class="fa fa-globe"></i> Countries</a></li>
                <li role="presentation"><a href="#allprojects" aria-controls="allprojects" role="tab" data-toggle="tab"><i class="fa fa-tags"></i> All Projects</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="categories">
                    <?php include('categories.php') ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="countries" style="height: 300px;">
                    <?php include('country.php') ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="allprojects">
                    <?php include('allprojects.php') ?>
                </div>
            </div>
        </div>


    </div>
            </div>

        </div><!--/col-12-->

    </div>
    <footer>
        <div class="container">
            <div class="row">
                <img src="img/footer.png">

            </div>
        </div>
    </footer>
</div>

<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>

<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
    new CBPGridGallery( document.getElementById( 'country-grid-gallery' ) );
</script>

</body>
</html>