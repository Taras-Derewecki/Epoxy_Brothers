<?php $page = "contact-us"; include "header.php"; ?>


    <div class = "container pb-3" id="contact_bg">
        <div class = "row">
            <div class = "col-lg-12">

                <h2 class ="text-center pt-3">We’d love to hear from you!</h2>
                <br>

                Thank you for your interest in our services.
                We specialize in a variety of coating services for your concrete surface and are happy to help you on any project you may have for us.
                Please fill out the information and someone from our team will be in touch with you!
            </div>

            <div class="col-lg-6">

                <form role="form" method="POST" action = "contact.php" id="reused_form">
                    <div class="form-group">
                        <br>
                        <label for="name"> Name:</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Full Name" required maxlength="50">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required maxlength="50">
                    </div>

                    <div class="form-group">
                        <label for="name">Message:</label>
                        <textarea class="form-control" type="textarea" name="message" id="message"
                                  placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LfS-YsUAAAAAALHrFg-EQ84a16tDnpe8eaDWY_6"></div><br>
                    <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Send →</button><br>
                </form>
            </div>

            <div class = "col-lg-6 mt-4 pl-5">
                <h5 class="pt-2">Epoxy Brothers, Licensed and Insured</h5>
                <h5 class="pt-2">Tel: (610) 393-4774</h5>
                <h5 class="pt-2">E-mail: info@epoxybrothers.com</h5>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>
