<?php $page = 'home'; include 'header.php'; ?>
<div class="container">
<div class="carousel-row">
<div class="col-lg-12">
<div id="epoxyBrosCarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<?php
                                $files = scandir("../pics/home_carousel/");
//                                print_r($files);
                            ?>
<?php
                                 $i = 0;
                                 for ($a = 2; $a < count($files); $a++):
                             ?>
<li data-target="#epoxyBrosCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>"></li>
<?php
							    $i++;
							    endfor;
							?>
</ol>
<div class="carousel-inner" role="listbox">
<?php
                                $i = 0;
                                for ($a = 2; $a < count($files); $a++):
                            ?>
<div class="carousel-item carousel-size <?php echo $i == 0 ? 'active' : ''; ?>">
<img src="../pics/home_carousel/<?php echo $files[$a]; ?>" />
<div class="carousel-caption">
<button type="button" class="btn btn-primary bg-dark">
<a href="contact-us.php" class="navbar-dropdown-color">Contact Us</a></button>
</div>
</div>
<?php
                                    $i++;
                                    endfor;
                                ?>
</div>
<a class="carousel-control-prev" href="#epoxyBrosCarousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#epoxyBrosCarousel" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row pt-3 pb-3">
<div class="col-lg-12">
<h3><strong>Experts</strong></h3>
<h4>Epoxy, Staining/Sealing, Microtopping, Polishing and Concrete Grinding for Residential, Commercial, and Industrial. <hr /></h4>
</div>
<div class="col-lg-12">
<h3><strong>Experience</strong></h3>
<h4>As a preferred contractor to many, we've resurfaced tens of thousands of square feet. Whether your project
is new construction or a renovation, we educate you and get you the finish you desire. <hr /></h4>
</div>
<div class="col-lg-12">
<h3><strong>Safety</strong></h3>
<h4>We are committed to the long term health of our customers and our employees.
We educate customers and staff of the products we use, have certified installers on every job site,
and utilize the most advanced equipment, some being OSHA certified HEPA vacuum filtration systems
and dustless grinders.</h4>
</div>
</div>
</div>
<?php include 'footer.php'; ?>