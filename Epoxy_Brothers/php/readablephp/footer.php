<div class = "container-fluid">
    <div class ="row">
        <div class = "col-lg-4 bg-dark text-lg-center card-footer">
            <img class = "w-10 h-auto text-center" src="../pics/epoxy_brothers_logo.gif" />
            <footer class = "card-footer bg-dark">&copy; 2018 - <?php echo date("Y"); ?> Epoxy Brothers, LLC. All rights reserved.<br> Developed by Taras Derewecki<br> DereweckiT@gmail.com</footer>
        </div>

        <div class = "col-lg-4 bg-dark card-footer">
        </div>

        <div class = "col-lg-4 bg-dark card-footer">
            <h4 class ="pl-4-5 navIntroColor">Connect with Us!</h4>
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                <div class = "container">
                    <ul class ="nav navbar-nav">
                        <li class = "nav-item">
                            <a class ="nav-link" href="https://www.facebook.com/epoxybrothers/"><img src="../pics/facebook_icon.png" alt ="Follow us on Facebook!"/></a>
                        </li>

                        <li class = "nav-item pt-1">
                            <a class ="nav-link" href="https://www.instagram.com/epoxy_brothers/"><img src="../pics/instagram_icon_footer.png" alt ="Follow us on Instagram!" /></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <a id ="footer-text" class = "nav-link footer-text" href = "#"><h5 class ="pl-4">Click Here to Contact Us</h5></a>
        </div>
    </div>
</div>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<?php echo $page == 'photos' ? '<script src=\'../js/gallery-filter.min.js\'></script>' : null; ?>
</body>
</html>