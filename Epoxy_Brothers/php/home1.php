<?php $page = 'home'; include 'header.php'; ?>


    <!----------------------------------------------------------------Carousel------------------------------------------------------------------>
    <div class = "container">
        <div class = "carousel-row">
            <div class = "col-lg-12">


                <video class="text-align-center" autoplay="autoplay">
                    <source src="../pics/carousel.mp4" type="video/mp4" />
                </video>
<!--                <div class="embed-responsive embed-responsive-16by9">-->
<!--                    <iframe class="embed-responsive-item" src="../pics/carousel.mp4"></iframe>-->
<!--                </div>-->
<!--                -->

            </div>
        </div>
    </div>
    <!------------------------------------------------------------End Carousel------------------------------------------------------------------>

    <!------------------------------------------------About the Company briefly and what is used------------------------------------------------>
    <div class = "container">
        <div class = "row">
            <div class ="col-lg-12 border border-light border-2 bg-dark text-lg-center">
                <p>Awaiting Content to be given by CEO</p>
            </div>
        </div>
    </div>
    <!----------------------------------------------End About the Company briefly and what is used---------------------------------------------->

<script>
    // var fillVideo = function(vid){
    //     var vid = document.getElementsByTagName("video")[0];
    //     var video = $(vid);
    //     var actualRatio = vid.videoWidth/vid.videoHeight;
    //     var targetRatio = video.width()/video.height();
    //     var adjustmentRatio = targetRatio/actualRatio;
    //     var scale = actualRatio < targetRatio ? targetRatio / actualRatio : actualRatio / targetRatio;
    //     video.css('-webkit-transform','scale(' + scale  + ')');
    // };

</script>


<?php include 'footer.php'; ?>