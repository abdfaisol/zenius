<!DOCTYPE html>
<html>
<?php
include "backend/koneksi.php";
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Zenius - blog</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/post.css">
</head>
<?php 
    $halaman = 2;
    $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $query = mysqli_query($db,"SELECT * FROM article ORDER BY publidate DESC LIMIT $mulai, $halaman");
    $sql = mysqli_query($db,"SELECT * FROM article");
    $total = mysqli_num_rows($sql);
    $pages = ceil($total/$halaman); 
    ?>
<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #303030;padding: 0px;">
        <div class="container-fluid"><a class="navbar-brand" href="http://localhost/zenius"><img src="assets/img/cropped-blog_title_3.png"></a>
        <div class="d-flex">
            <div class="d-flex flex-row social-mobile"><a href="#" style="font-size: 18px;padding-top: .2rem;color: white;margin: 0 5px;"><i class="fa fa-facebook" style="margin: 0 10px;"></i></a><a href="#" style="font-size: 18px;padding-top: .2rem;color: white;margin: 0 5px;"><i class="fa fa-twitter" style="margin: 0 10px;"></i></a>
            <a
            href="#" style="font-size: 18px;padding-top: .2rem;color: white;margin: 0 5px;"><i class="fa fa-instagram" style="margin: 0 10px;"></i></a>
        </div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="color: white;"><span class="navbar-toggler-icon d-sm-flex justify-content-sm-center align-items-sm-center" style="background-image: url(&quot;none&quot;);"><i class="fa fa-navicon" style="font-size: 24px;"></i></span></button></div>
        <div
        class="collapse navbar-collapse navbar-mobile" id="navcol-1">
        <ul class="nav navbar-nav" style="color: white;">
            <li class="nav-item" role="presentation"><a class="nav-link active" href="blog.php" style="color: white;font-size: 14px;"><strong>HOME BLOG</strong></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: white;font-size: 14px;"><strong>SD</strong></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: white;font-size: 14px;"><strong>SMP</strong></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: white;font-size: 14px;"><strong>SMA</strong></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: white;font-size: 14px;"><strong>SBMPTN</strong></a></li>
            <li class="nav-item" role="presentation" id="animation-zen" style="position:relative;overflow:hidden; margin-right: 15px"><a class="nav-link active" href="#" style="color: white;font-size: 14px;overfow:hidden;position:relative"><strong>BLOG CATEGORIES</strong><span style="margin: 0 5px;overflow: hidden;height: 10px;position:relative;"><i class="fa fa-angle-down" style="padding: 5px;position:absolute;"></i></span></a></li>
            <li
            class="nav-item" role="presentation"><i class="fa fa-search" style="padding: .5rem .3rem;"></i></li>
            <li class="nav-item flex-row d-flex social-pc" role="presentation" id="social" style="right: 2rem;"><a class="nav-link active" href="#" style="font-size: 18px;padding-top: .2rem;color: white;margin: 0 5px;"><i class="fa fa-facebook"></i></a><a class="nav-link" href="#" style="font-size: 18px;padding-top: .2rem;color: white;margin: 0 5px;"><i class="fa fa-twitter"></i></a>
            <a
            class="nav-link" href="#" style="font-size: 18px;padding-top: .2rem;color: white;margin: 0 5px;"><i class="fa fa-instagram"></i></a>
        </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="d-flex flex-row wrap-post-zen" style="width: 100%;">
        <div class="d-flex flex-grow-1" style="padding-top: 2em;">
            <div class="flex-grow-1" style="margin-right: 3%;margin-left: 3%;">
                <!-- Zen posting -->
                <?php 
                $no = $mulai + 1;
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <div class="container flex-grow-1" style="margin-bottom: 6%;">
                        <div class="d-flex wrap-post-zen-0 rlv-zen">
                            <div class="author-zen" style="margin-right: 25px;float: left;padding-top: .3em;"><img style="width: 60px;height: 60px;border-radius: 30px" src="assets/img/Kaguya-sama.jpeg"></div>
                            <div class="flex-grow-1 title-post-zen" style="float:left">
                                <a href="#">
                                    <h2 style="font-weight: 400;margin: 0 1.5em 0 0;padding: 0 0 .1em;"><a href="blog2.php?id=<?=$data['id'] ?>"><?= $data['title'] ?></a><br></h2>
                                </a>
                            </div>
                            <div style="margin-left: 10px;"><span class="text-left comment-span" style="border-left: 1px solid rgba(0,0,0,.1);padding: 0 0 0 .7em;font-size: 14px;display: inline-block;min-width: 100px;font-weight: bold;width: 150px;">14 COMMENTS</span></div>
                        </div>
                        <div class="d-flex flex-column">
                            <div style="margin: 16px 0;"><button class="btn btn-primary" type="button" style="padding: 3px 15px;font-size: 11px;"><i class="fas fa-thumbs-up" style="margin-right: 10px;"></i>Suka 8</button></div>
                            <p><?= $data['summary'] ?><br></p>
                            <div style="margin: 0;margin-bottom: 15px;"><span style="padding: .2em .4em;background-color: #000000;color: #FFFDFF;font-weight: 600;font-size: 14px;margin-right: 1em;">FEATURED</span><span style="padding: .2em .4em;color: BLACK;font-weight: 700;font-size: 14px;margin-right: 1em;"><i class="fas fa-user" style="margin-right: 5px;"></i>SABDA PS</span></div>
                            <div
                            style="margin: 0;margin-bottom: 15px;"><a href="#" style="background-color: #009bc1;color: white;padding: .7em 1.3em;display: inline-block;"><span style="margin-right: 10px;font-weight: bold;font-family: 'Abhaya Libre', serif;">READ MORE</span><i class="fa fa-chevron-right"></i></a></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                
                <!-- Zen END -->

                <div class="container d-flex d-sm-flex d-md-flex flex-grow-1 justify-content-center justify-content-sm-center justify-content-md-center" style="margin-bottom: 6%;">
                    <?php
                    for ($i=1; $i<=$pages ; $i++){ 
                        ?>
                        <button class="btn btn-primary page-number-zen" id="page-active" type="button"><a href="?halaman=<?php echo $i; ?>" style="background-color: #f3f1f3;font-weight: 500;"><?php echo $i; ?></a></button>
                        <?php } 
                        ?>
                    </div>
                </div>
        </div>
                                <div class="sidebar-mobile" style="width: 350px;padding: 2em 3%;background-color: #F7F8F9;">
                                    <div class="search-widget widget-tablet" style="margin: 0 0 3.5em 0;">
                                        <form style="position:relative"><input class="form-control" type="search" style="padding: 0 3.5em 0 1em;font-size: 18px;font-weight: 500;padding-top: 0.8em;padding-bottom: 0.8em;" placeholder="Search"><button class="btn btn-primary" type="button" style="position: absolute;top: 0;right: 0;background-color: transparent;color: black;border:none"><i class="fa fa-search"></i></button></form>
                                    </div>
                                    <div class="widget-tablet" style="margin: 0 0 3.5em 0;">
                                        <h1 class="title-widget-utm" style="font-size: 14.5px;margin-bottom: 1em;font-weight: 700;position:relative">RECENT POST</h1>
                                        <ul class="post-widget">
                                            <?php 
                                            $halaman = 6;
                                            $query = mysqli_query($db,"SELECT * FROM article ORDER BY publidate DESC LIMIT $halaman");
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                                <li><a href="blog2.php?id=<?=$data['id'] ?>"><?= $data['title'] ?></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="widget-tablet" style="margin: 0 0 3.5em 0;">
                                        <h1 class="title-widget-utm" style="font-size: 14.5px;margin-bottom: 15px;font-weight: 700;"><strong>POPULAR POSTS</strong></h1>
                                        <ul class="post-widget">
                                            <?php 
                                            $halaman = 6;
                                            $query = mysqli_query($db,"SELECT * FROM article ORDER BY view DESC LIMIT $halaman");
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                                <li><a href="blog2.php?id=<?=$data['id'] ?>"><?= $data['title'] ?></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <footer style="background-color: #2e3038;color: white;padding: 2em 1em;padding-bottom: 1em;">
                                <div id="footer-blog" style="padding: 0;padding-top: 10px;max-width: 1320px;margin: 0px auto;margin-top: 25px;">
                                    <p><em>©2017 Zenius Education</em><br></p>
                                </div>
                            </footer>
                            <script src="assets/js/jquery.min.js"></script>
                            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                            <script src="assets/js/post.js"></script>
                        </body>

                        </html>