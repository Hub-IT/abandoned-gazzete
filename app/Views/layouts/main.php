<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Writer Theme | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href=" ../../../public/bower_components/admin-lte/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <![endif]-->

    <script src="js/vendor/modernizr.custom.32229-2.8-respondjs-1-4-2.js"></script>
</head>
<body>
<main class="container left-container">
    <div class="row">

        <div id="menu-target">
            <ul>
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="fa fa-user"></i><a href="author.html">John Smith</a></li>
                <li><i class="fa fa-anchor"></i><a href="page.html">About</a></li>
                <li><i class="fa fa-star"></i><a href="favorites.html">Favorites</a></li>
                <li><i class="fa fa-paper-plane"></i><a href="contact.html">Contact</a></li>
            </ul>
            <hr>
            <ul>
                <li><i class="fa fa-file"></i><a href="post.html">Post Page</a></li>
                <li><i class="fa fa-file"></i><a href="post-sidebar.html">Post with Sidebar</a></li>

                <li><i class="fa fa-home"></i><a href="alt-home.html">Alternate Home</a></li>
                <li><i class="fa fa-image"></i><a href="category.html">Category Page</a></li>
            </ul>
        </div>

        <section class="sidebar col-md-5 col-sm-12" style="background-image: url(img/default-sidebar.jpg">

                    <span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

            <!-- if the user has javascript disabled they can still use the menu -->
            <noscript>
                <div class="no-js-menu">
                    <ul>
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-user"></i><a href="author.html">John Smith</a></li>
                        <li><i class="fa fa-anchor"></i><a href="page.html">About</a></li>
                        <li><i class="fa fa-star"></i><a href="favorites.html">Favorites</a></li>
                        <li><i class="fa fa-paper-plane"></i><a href="contact.html">Contact</a></li>
                        <li><i class="fa fa-file"></i><a href="post.html">Post Page</a></li>
                        <li><i class="fa fa-file"></i><a href="post-sidebar.html">Post with Sidebar</a></li>
                        <li><i class="fa fa-home"></i><a href="alt-home.html">Alternate Home</a></li>
                        <li><i class="fa fa-image"></i><a href="category.html">Category Page</a></li>
                    </ul>
                </div>
            </noscript>
            <!-- end no script -->

            <div class="site-info">
                <div class="primary-info">
                    <h1>Writer</h1>
                    <p>A minimal blogging theme to put your content on show. <a href="post.html">Look at the features.</a> </p>

                    <p>Content is king</p>
                </div>
                <div class="secondary-info">
                    <p>
                        <a class="btn btn-primary" href="#"><i class="fa fa-user-plus"></i>Join Our Newsletter</a>
                    </p>
                </div>
            </div>
        </section><!-- end sidebar -->

        <section class="col-md-7 col-sm-12 col-md-offset-5 main-content">

            <div class="sub-nav">
                <a href="#" class="select-posts active">Posts</a>
                <a href="#" class="select-categories">Categories</a>
            </div>

            <div class="home-page-posts animated fadeIn ">

                <!--OUR CONTENT-->
                <div class="box-body">
                    <?= $this->section('content') ?>
                </div>


            <footer class="split-footer">
                <a href="post.html">About</a>
                <i class="link-spacer"></i>
                <a href="post.html">Writer 2015</a>
            </footer>

        </section><!-- main content -->

    </div> <!--/row -->

</main> <!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/jquery.jpanelmenu.min.js"></script>
<script src="../../../public/bower_components/admin-lte/bootstrap/js/bootstrap.min.js"></script>
<script src="js/vendor/fastclick.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>
