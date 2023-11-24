<!DOCTYPE html>
<html lang=en>
<?php
//
//    include_once("../minifier.php");
//
//    $js = array(
//        "../js/gallery-filter.js" 	=> "../js/gallery-filter.min.js",
//        "../js/jquery.js" 			=> "../js/jquery.min.js"
//    );
//    $css = array(
//        "../css/master.css"			=> "../css/master.min.css"
//    );
//
//    minifyJS($js);
//    minifyCSS($css);
//
//
//
//    ?>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1.0">
<meta name=description content="Epoxy Brothers, LLC is a professional coating company based in Lehigh Valley PA. We specialize in a variety of epoxy coatings including, metallic/designer epoxy, solid epoxy, flake/chip, quartz and urethan cement just to name a few. We also offer a variety of other services such as; sealant systems, concrete grinding, polished concrete and micro topping. All of our services are installed by trained coating professionals and our systems are high performing applications designed for commercial use, industrial use, and residential, including garages, basements and other rooms indoors and outdoors. We service in Allentown PA, Bethlehem PA, Quakertown PA, Lansdale PA, King of Prussia PA, Philadelphia PA, East Stroudsburg PA, Poconos PA, Harrisburg PA, Burlington NJ, Mercer NJ and Hunterdon NJ. Covering most of the Tri-State area. We strive to provide a safe work environment for both our customers and employees. We first evaluate the site/floor and recommend to you the best application for your needs. We then concrete grind, repair and clean the surface. We then apply the epoxy system or other applications. Then provide a maintenance/cleaning list for the floor so that the floor is well preserved for years to come.">
<title>Epoxy Brothers Surface Coating Professionals located in Lehigh Valley, Pennsylvania</title>
<link rel=stylesheet href=../css/bootstrap.min.css>
<link rel=stylesheet href=../css/master.min.css>
<?php echo $page == 'contact-us' ? '<script src=\'https://www.google.com/recaptcha/api.js\'></script>' : null; ?>
</head>
<body class=bg-main-color>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<nav class="navbar navbar-default fixed-top navbar-dark bg-dark navbar-expand-xl">
<div class=container-fluid>
<a href=home.php class=navbar-brand><img class="w-25 h-auto" alt src="../pics/navbarLogo.gif"/> Epoxy Brothers, LLC</a>
<button class=navbar-toggler data-toggle=collapse data-target=#navbarMenu>
☰
<span class=narbar-toggler-icon></span>
</button>
<div class="collapse navbar-collapse navbarSupportedContent" id=navbarMenu>
<ul class=mr-auto>
<li class="nav-item nav-link navIntroColor">Tel: (610) 393-4774</li>
<li class="nav-item nav-link navIntroColor">E-mail: info@epoxybrothers.com</li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item pr-2 <?php echo $page == 'home' ? 'active' : null; ?>">
<a class=nav-link href=home.php>Home</a>
</li>
<li class="dropdown pr-2">
<a class="nav-link dropdown-toggle <?php echo $page == "neat" || $page == "flake"|| $page == "metallic" || $page == "stout" || $page == "quartz" ||
                        $page == "urethane" || $page == "electrostatic" || $page == 'decorative-concrete' || $page == 'stain' || $page == 'seal' ||
                        $page == "polished-concrete" || $page == "micro" || $page == "spray" ? 'active active-navbar-dropdown-color' : null; ?>" data-toggle=dropdown>Services<b class=caret></b></a>
<ul class="dropdown-menu bg-dark">
<li class="dropdown-item-text dropdown dropdown-submenu">
<a class="nav-link dropdown-toggle <?php echo $page == "neat" || $page == "flake"|| $page == "metallic" || $page == "stout" || $page == "quartz" ||
                                $page == "urethane" || $page == "electrostatic" ? 'active active-navbar-dropdown-color' : null; ?>" data-toggle=dropdown>Epoxy<b class=caret></b></a>
<ul class="dropdown dropdown-menu bg-dark dropdown-submenu submenu">
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'neat' ? 'active active-navbar-dropdown-color' : null; ?>" href=neat.php>Neat</a></li>
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'flake' ? 'active active-navbar-dropdown-color' : null; ?>" href=flake.php>Flake</a></li>
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'metallic' ? 'active active-navbar-dropdown-color' : null; ?>" href=metallic.php>Metallic</a></li>
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'stout' ? 'active active-navbar-dropdown-color' : null; ?>" href=stout.php>Stout</a></li>
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'quartz' ? 'active active-navbar-dropdown-color' : null; ?>" href=quartz.php>Quartz</a></li>
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'urethane' ? 'active active-navbar-dropdown-color' : null; ?>" href=urethane.php>Cement Slurry</a></li>
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'electrostatic' ? 'active active-navbar-dropdown-color' : null; ?>" href=electrostatic.php>Electrostatic</a></li>
</ul>
</li>
<li class="dropdown-item-text dropdown dropdown-submenu">
<a class="nav-justified nav-link dropdown-toggle <?php echo $page == "micro" || $page == "spray" ? 'active active-navbar-dropdown-color' : null; ?>" data-toggle=dropdown>Overlay<b class=caret></b></a>
<ul class="dropdown dropdown-menu bg-dark dropdown-submenu submenu">
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'micro' ? 'active active-navbar-dropdown-color' : null; ?>" href=micro.php>Micro Finish</a></li>
<li class="dropdown-item bg-dark" tabindex=-1>
<a class="navbar-dropdown-color <?php echo $page == 'spray' ? 'active active-navbar-dropdown-color' : null; ?>" href=spray.php>Spray Finish</a></li>
</ul>
</li>
<li class="dropdown-item bg-dark">
<a class="navbar-dropdown-color <?php echo $page == 'stain' ? 'active active-navbar-dropdown-color' : null; ?>" href=stain.php>Stain</a>
</li>
<li class="dropdown-item bg-dark">
<a class="navbar-dropdown-color <?php echo $page == 'seal' ? 'active active-navbar-dropdown-color' : null; ?>" href=seal.php>Seal</a>
</li>
<li class="dropdown-item bg-dark">
<a class="navbar-dropdown-color <?php echo $page == 'concrete-grinding' ? 'active active-navbar-dropdown-color' : null; ?>" href=concrete-grinding.php>Concrete Grinding</a>
</li>
<li class="dropdown-item bg-dark">
<a class="navbar-dropdown-color <?php echo $page == 'polished-concrete' ? 'active active-navbar-dropdown-color' : null; ?>" href=polished-concrete.php>Polished Concrete</a>
</li>
</ul>
</li>
<li class="nav-item pr-2 <?php echo $page == 'photos' ? 'active' : null; ?>">
<a class=nav-link href=photos.php>Gallery</a>
</li>
<li class="nav-item pr-2 <?php echo $page == 'about-us' ? 'active' : null; ?>">
<a class=nav-link href=about-us.php>About</a>
</li>
<li class="nav-item pr-2 <?php echo $page == 'contact-us' ? 'active' : null; ?>">
<a class=nav-link href=contact-us.php>Contact</a>
</li>
</ul>
</div>
</div>
</nav>