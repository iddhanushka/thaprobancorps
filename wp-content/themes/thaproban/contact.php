<?php 

    // Template Name: Contact page

    get_header();

?>

<section id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="contact-form" data-aos="fade-right" data-aos-duration="1500">
                                    <h1>Get in touch with us!</h1>
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="fName">First name</label>
                                                <input type="text" class="form-control" id="fName">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="lName">Last name</label>
                                                <input type="text" class="form-control" id="lName">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6">
                                                <label for="contact">Contact number</label>
                                                <input type="text" class="form-control" id="contact">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" id="message" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-secondary">Send</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-12">
                                <div class="follow-us" data-aos="fade-left" data-aos-duration="1500">
                                    <h2>Contact us</h2>
                                    <ul>
                                        <li>
                                            <ul class="sub-list">
                                                <li><i class="fas fa-map-marker-alt"></i></li>
                                                <li>
                                                    <h3>Office Location</h3>
                                                    <address>
                                                        Thaproban Corps. Security & Investigations (Pvt) Ltd. </br>
                                                        No.264, 2nd Floor,</br>
                                                        Jana Jaya City, Rajagiriya 10107,</br>
                                                        Sri Lanka.
                                                    </address>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul class="sub-list">
                                                <li><i class="fas fa-phone-alt"></i></li>
                                                <li><h3>Telephone</h3> <a href="tel:+940113042718">(+94) 011 ­30 ­42 718</a></li>
                                            </ul>
                                    
                                        </li>

                                        <li>
                                            <ul class="sub-list">
                                                <li><i class="fas fa-mobile"></i></li>
                                                <li><h3>Hotline</h3><a href="tel:+94­077­0070777">(+94) ­077 ­00 70 777</a></li>
                                            </ul>
                                    
                                        </li>

                                        <li>
                                            <ul class="sub-list">
                                                <li><i class="fas fa-envelope"></i></li>
                                                <li><h3>Email</h3><a href="mailto:thaprobancorps@gmail.com">thaprobancorps@gmail.com</a></li>
                                            </ul>
                                    
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="location">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 pl-0 pr-0">
                <div class="map" data-aos="zoom-in"  data-aos-duration="1500">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13322.643816884187!2d79.88855998232816!3d6.909045977113628!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x24ab3079dde678db!2sJana%20Jaya%20City%20Mall%20Rajagiriya%20(%20JJC%20MALL%20)!5e0!3m2!1sen!2slk!4v1601319744059!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>