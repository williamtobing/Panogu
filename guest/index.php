<?php
    include("header.php");
?>

        <header class="masthead text-center text-white d-flex">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-uppercase">
                            <strong class="sr-icons">WELCOME TO LAKE TOBA</strong>
                        </h1>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <!--<p class="text-faded mb-5">A Piece of Heaven in The Land of Batak</p>-->
                        <p class="text-faded mb-5 sr-icons">A Piece of Heaven in The Land of Batak</p>
                        <hr class="sr-icons">
                        <a class="btn btn-primary btn-xl js-scroll-trigger sr-icons" href="#cari_guide">Find Your Guide</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading text-white">Panogu in Toba</h2>
                        <hr class="light my-4">
                        <p class="text-faded mb-4">Panogu is an application that aims to help the community to practice being a tour guide. You can also search for guides here.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="login.php">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
        

<!-- Page Content -->
<div class="container">

<div class="col-lg-12 text-center">
    <h2 style="" id="cari_guide">Choose Your Guide<br><hr style="padding-bottom: 25px;"></h2>
</div>

<!-- Page Heading/Breadcrumbs -->
<!--<h1 class="mt-4 mb-3">Services
  <small>Subheading</small>
</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Home</a>
  </li>
  <li class="breadcrumb-item active">Services</li>
</ol>-->

<!-- Image Header -->
<!--<img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">-->



<!-- Marketing Icons Section -->

<div class="row">


<?php 
    while($ngisi = mysqli_fetch_array($result)) { 
?>

  <div class="col-lg-4 mb-4">
    <div class="card h-100">
      <!--<h4 class="card-header">Card Title</h4>-->
      <center><img class="card-img-top" style="width:18vw; height:40vh;" src="../guide/<?php echo $ngisi['foto']; ?>" alt=""></center>
      <div class="card-body">
        <!--<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>-->
        <center><p class="card-text"><?php echo $ngisi['nama']; ?></p>
        <p class="card-text">Location :&nbsp<?php echo $ngisi['lokasi']; ?></p></center>
      </div>
      <div class="card-footer">
        <!--<center><a href="detail.php?id_guide=<?php echo $ngisi['id_guide']; ?>" class="btn btn-primary">Detail</a></center>-->
        <center><a href="detail.php?id_guide=<?php echo $ngisi['id_guide']; ?>">Detail</a></center>
      </div>
    </div>
  </div>
  <!--<div class="col-lg-4 mb-4">
    <div class="card h-100">
      <h4 class="card-header">Card Title</h4>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4">
    <div class="card h-100">
      <h4 class="card-header">Card Title</h4>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </div>-->
<?php
    }
?>

</div>
<!-- /.row -->



</div>
<!-- /.container -->

        <!--</section>

        <section>
            <div class="container">
                <div class="row">
                 <div class="col-lg-6 col-md-10 mx-auto">
                    <div class="accordion" data-role="accordion" data-closeany="true">
                        <legend style="text-transform: uppercase; color: #212529"><b>Find Your Guide</b></legend>
                        <table class="" border=0>
                                <tr>
                                    <td>a</td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                </tr>-->
                                <?php 
                                    /*while($ngisi = mysqli_fetch_array($result)) { 
                                ?>

                                
                                
                                <tr>
                                    <td rowspan="3"><img class="card-img-top" style="width:18vw; height=30vh" src="../guide/<?php echo $ngisi['foto']; ?>" alt=""></td>
                                    <td><?php echo $ngisi['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td>Saat ini Berada di&nbsp<?php echo $ngisi['lokasi']; ?></td>
                                </tr>
                                <tr>
                                    <td><a href="detail.php?id_guide=<?php echo $ngisi['id_guide']; ?>">DETAIL Guide</a></td>
                                </tr>
                                <tr>
                                    <td><br><br></td>
                                </tr>





                                    <!--<div class="card-body">
                                        <h4 class="card-title">
                                            <img class="card-img-top" style="width:18vw; height=30vh" src="../guide/<?php //echo $ngisi['foto']; ?>" alt=""> 
                                                <div class="caption"><?php//echo $ngisi['nama']; ?>
                                                    <div class="caption">Saat ini Berada di&nbsp<?php //echo $ngisi['lokasi']; ?>
                                                        <p><a href="detail.php?id_guide=<?php //echo $ngisi['id_guide']; ?>">DETAIL Guide</a></p>
                                                    </div>
                                                </div>
                                            </div>	-->
                                <?php
                                    }*/
                                ?>
                       <!-- </table>
                    </div>
                </div>
                </div>
            </div>
        </section>-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 id="services" class="section-heading">At Your Service</h2>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Professional Guide</h3>
                            <p class="text-muted mb-0">We provide quality guides that will guide your trip.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Ready to Guide</h3>
                            <p class="text-muted mb-0">Our guide is absolutely ready to guide your trip.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Up to Date</h3>
                            <p class="text-muted mb-0">We update every need for travelling.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Made with Love</h3>
                            <p class="text-muted mb-0">Panogu is made with love these days!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0" id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters popup-gallery">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../img/portfolio/fullsize/1.jpg">
                            <img class="img-fluid" src="../img/portfolio/thumbnails/1.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <!-- <div class="project-category text-faded">
                                        Category
                                    </div> -->
                                    <div class="project-name">
                                        Panatapan Huta Ginjang
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../img/portfolio/fullsize/2.jpg">
                            <img class="img-fluid" src="../img/portfolio/thumbnails/2.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <!-- <div class="project-category text-faded">
                                        Category
                                    </div> -->
                                    <div class="project-name">
                                        Tiara Bunga
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../img/portfolio/fullsize/3.jpg">
                            <img class="img-fluid" src="../img/portfolio/thumbnails/3.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <!-- <div class="project-category text-faded">
                                        Category
                                    </div> -->
                                    <div class="project-name">
                                        Kunjungan Jokowi
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../img/portfolio/fullsize/4.jpg">
                            <img class="img-fluid" src="../img/portfolio/thumbnails/4.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <!-- <div class="project-category text-faded">
                                        Category
                                    </div> -->
                                    <div class="project-name">
                                        Pantai Bulbul
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../img/portfolio/fullsize/5.jpg">
                            <img class="img-fluid" src="../img/portfolio/thumbnails/5.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <!-- <div class="project-category text-faded">
                                        Category
                                    </div> -->
                                    <div class="project-name">
                                        Panatapan
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="../img/portfolio/fullsize/6.jpg">
                            <img class="img-fluid" src="../img/portfolio/thumbnails/6.jpg" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <!-- <div class="project-category text-faded">
                                        Category
                                    </div> -->
                                    <div class="project-name">
                                        Air Terjun
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading">Let's Get In Touch!</h2>
                        <hr class="my-4">
                        <p class="mb-5">Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center">
                        <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                        <p>0823-3456-6789</p>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                        <p>
                            <a href="mailto:your-email@your-domain.com">feedback@panogu.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark text-white">
            <!--<div style="margin-top: 150px; margin-bottom: 150px;" class="container text-center">-->
            <div class="container text-center">
                <h2 class="mb-4">Don't Forget to Come Again!</h2>
                <a id="logout" class="btn btn-light btn-xl sr-button" href="../index.php">LOGOUT</a>
            </div>
        </section>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="../js/creative.min.js"></script>

    </body>