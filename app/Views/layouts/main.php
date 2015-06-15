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

                <article class="post">
                    <div class="post-preview col-xs-10  no-gutter">
                        <h2><a href="post.html">A great story never told</a></h2>

                        <p>It was a cold December morning, as I sat out on my porch I decided today was the day. </p>

                        <p class="meta">
                            <a href="author.html">James Reddy</a> in <a href="category.html">Storytime</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 23 minute read
                        </p>
                    </div>

                    <div class=" col-xs-2  no-gutter">
                        <img src="img/profile-1.jpg" class="user-icon" alt="user-image">
                    </div>
                </article>

                <article class="post">
                    <div class="post-preview col-xs-10 no-gutter">
                        <h2><a href="post.html">Builing, Hacking, Creating</a></h2>
                        <p>Is it better to start from scratch or build on someone elses work. My thoughts.</p>

                        <p class="meta">
                            <a href="author.html">Mad Hacker</a> in <a href="category.html">Easy Living</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 9 minute read
                        </p>
                    </div>

                    <div class=" col-xs-2 no-gutter">
                        <img src="img/profile-2.jpg" class="user-icon"  alt="user-image">
                    </div>
                </article>
                <article class="post">
                    <div class="post-preview col-xs-10 no-gutter">
                        <h2><a href="post.html">Ten reasons why you should travel, or why the city is killing your inner creative</a></h2>
                        <p>About time for your next adventure. </p>

                        <p class="meta">
                            <a href="author.html">Sarah Smith</a> in <a href="category.html">Adventure</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 5 minute read
                        </p>
                    </div>

                    <div class="col-xs-2 no-gutter">
                        <img src="img/profile-4.jpg" class="user-icon"  alt="user-image">
                    </div>
                </article>

                <article class="post">
                    <div class="post-preview col-xs-10 no-gutter">
                        <h2><a href="post.html">Feature List</a></h2>
                        <p>Wondering what is actually included? </p>

                        <p class="meta">
                            <a href="author.html">Jane Thompson</a> in <a href="category.html">Writer</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 2 minute read
                        </p>
                    </div>

                    <div class=" col-xs-2 no-gutter">
                        <img src="img/profile-5.png" class="user-icon"  alt="user-image">
                    </div>
                </article>

                <article class="post">
                    <div class="post-preview col-xs-10 no-gutter">
                        <h2><a href="post.html">About Writer</a></h2>
                        <p>Not another bootstrap theme </p>

                        <p class="meta">
                            <a href="author.html">John Smith</a> in <a href="category.html">Writer</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 3 minute read
                        </p>
                    </div>

                    <div class=" col-xs-2 no-gutter">
                        <img src="img/profile-1.jpg" class="user-icon"  alt="user-image">
                    </div>
                </article>

                <article class="post">
                    <div class="post-preview col-xs-10 no-gutter">
                        <h2><a href="components.html">Bootstrap Components</a></h2>
                        <p>How do some of the default bootstrap components looks</p>

                        <p class="meta">
                            <a href="author.html">Jane Doe</a> in <a href="category.html">Writer</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 2 minute read
                        </p>
                    </div>

                    <div class=" col-xs-2 no-gutter">
                        <img src="img/profile-3.jpg" class="user-icon"  alt="user-image">
                    </div>
                </article>
                <article class="post">
                    <div class="post-preview col-xs-10 no-gutter">
                        <h2><a href="post.html">Its not always that simple</a></h2>
                        <p>How many times should you ask the same questions. </p>

                        <p class="meta">
                            <a href="author.html">Tim Leen</a> in <a href="category.html">Open Roads</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 12 minute read
                        </p>
                    </div>

                    <div class=" col-xs-2 no-gutter">
                        <img src="img/profile-3.jpg" class="user-icon"  alt="user-image">
                    </div>
                </article>
            </div><!-- Home page posts -->

            <div class="home-page-categories hide animated fadeIn ">
                <div class="category row">
                    <section>
                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Easy Living</h2>
                            <a href="category.html"><img src="img/cover-2.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Adventure</h2>
                            <a href="category.html"><img src="img/cover-4.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Storytime</h2>
                            <a href="category.html"><img src="img/cover-6.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Open Roads</h2>
                            <a href="category.html"><img src="img/cover-9.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Gaming</h2>
                            <a href="category.html"><img src="img/cover-1.jpg" alt="category-image" ></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>City Life</h2>
                            <a href="category.html"><img src="img/cover-3.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Rave Culture</h2>
                            <a href="category.html"><img src="img/cover-5.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Photography</h2>
                            <a href="category.html"><img src="img/cover-7.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Animal Kingdom</h2>
                            <a href="category.html"><img src="img/cover-8.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Beach</h2>
                            <a href="category.html"><img src="img/cover-10.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Climbing</h2>
                            <a href="category.html"><img src="img/cover-11.jpg" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Mystery</h2>
                            <a href="category.html"><img src="img/cover-12.jpg" alt="category-image"></a>
                        </div>

                    </section>
                </div>
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
