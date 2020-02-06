<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/master_mobile.css">
    <script src="js/js1.js"></script>

    <!-- jquery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/js2.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Colours Promotion</title>
</head>

<body>
    <!-- navigation bar -->
    <section class="header sticky-top">
        <nav id="navbar" class="navbar navbar-expand-xl navbar-light">
            <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" alt="Image not found!"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" name="menu-bar"> <i class="fa fa-bars"></i> </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul id="ul" class="navbar-nav text-left">
                    <li class="nav-item"> <a id="nav_home" class="nav-link active-home" href="#">Home<span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a id="nav_services" class="nav-link" href="#services">Services</a> </li>
                    <li class="nav-item"> <a id="nav_ourclients" class="nav-link" href="#our_clients">Our Clients</a> </li>
                    <li class="nav-item"> <a id="nav_portfolio" class="nav-link" href="#portfolio">Portfolio</a> </li>
                    <li class="nav-item"> <a id="nav_aboutus" class="nav-link" href="#about_us">About Us</a> </li>
                    <li class="nav-item"> <a id="nav_contactus" class="nav-link" href="#contact_us">Contact Us</a> </li>
                </ul>
            </div>
        </nav>
    </section>

    <!-- slider -->
    <section id="home" class="welcome">
        <div class="bd-example">
            <div id="slider_images" class="carousel slide" data-interval="3000" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider_images" data-slide-to="0" class="active"></li>
                    <li data-target="#slider_images" data-slide-to="1" class=""></li>
                    <li data-target="#slider_images" data-slide-to="2" class=""></li>
                    <li data-target="#slider_images" data-slide-to="3" class=""></li>
                    <li data-target="#slider_images" data-slide-to="4" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide7.svg" class="d-block w-100" alt="...">
                        <div class="caption text-center">
                            <h2>Welcome to Colours Promotion</h2><br>
                            <h1>Here we promote our customers business to our network advertisement</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/p12.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide5.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide6.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider_images" role="button" data-slide="prev">
                    <span class="" aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i>
                </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slider_images" role="button" data-slide="next">
                    <span class="" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- demo section -->
    <section id="demo" class="demo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <h1>Here our demo</h1>
                    <h4>Here our sample video to promote your business through our best platform</h4>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <!-- <video class="img-fluid" width="" controls> -->
                    <iframe width="" height="" src="https://www.youtube.com/embed/xVOmMLk8nM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <!-- <source src="images/demo.mp4" type="video/mp4">
                        Your browser does not support HTML5 video. -->
                    <!-- </video> -->
                </div>
            </div>
        </div>
    </section>

    <!-- our services section -->
    <section id="services" class="our-services">
        <h1 id="heading1">Our Services</h1>
        <div class="container">
            <div class="row">
                <div id="our_ser_img1" class="col-lg-6 col-md-12 col-sm-12">
                    <img class="img-fluid" src="images/img1.png" alt="">
                </div>
                <div id="our_ser_txt1" class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <h2>Mobile Van Advertisement</h2>
                    <h3>Mobile van advertisement is a best way to promote your business in local areas & villages.</h3>
                </div>
            </div>
            <div class="row">
                <div id="our_ser_img2" class="col-lg-6 col-md-12 col-sm-12 hidden">
                    <img class="img-fluid" src="images/img2.svg" alt="">
                </div>
                <div id="our_ser_txt2" class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <h2>Digital wall painting</h2>
                    <h3>Give your business the attention it deserves with D'ART Digital Wall Painting Solutions</h3>
                </div>
                <div id="our_ser_img3" class="col-lg-6 col-md-12 col-sm-12 mob-hidden">
                    <img class="img-fluid" src="images/img2.svg" alt="">
                </div>
            </div>
            <div class="row">
                <div id="our_ser_img4" class="col-lg-6 col-md-12 col-sm-12">
                    <img class="img-fluid" src="images/img17.png" alt="">
                </div>
                <div id="our_ser_txt3" class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <h2>Audio Recording Advertisement</h2>
                    <h3>Mobile van advertisement is a best way to promote your business in local areas & villages.</h3>
                </div>
            </div>
            <div class="row">
                <div id="our_ser_img5" class="col-lg-6 col-md-12 col-sm-12 hidden">
                    <img class="img-fluid" src="images/img4.jpg" alt="">
                </div>
                <div id="our_ser_txt4" class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <h2>Flex printing</h2>
                    <h3>Flex printing is the safest and most durable way to apply your printed flex material to a banner or a sign rather than to clothing or other similar mediums.</h3>
                </div>
                <div id="our_ser_img6" class="col-lg-6 col-md-12 col-sm-12 mob-hidden">
                    <img class="img-fluid" src="images/img4.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div id="our_ser_img7" class="col-lg-6 col-md-12 col-sm-12">
                    <img class="img-fluid" src="images/img14.svg" alt="">
                </div>
                <div id="our_ser_txt5" class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <h2>LED Wall</h2>
                    <h3>Present your product, ideas and creativity through LED Wall in exhibitions, seminar and any other.</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- our clients section -->
    <section id="our_clients" class="our-clients">
        <h1 id="heading2">Our Clients</h1>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <img class="img-fluid" src="images/img5.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <img class="img-fluid" src="images/img6.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <img class="img-fluid" src="images/img7.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <img class="img-fluid" src="images/img8.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <img class="img-fluid" src="images/img9.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio section -->
    <section id="portfolio" class="portfolio">
        <h1 id="heading3">Portfolio</h1>
        <div class="bd-example">
            <div id="slider_images1" class="carousel slide" data-interval="3000" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider_images1" data-slide-to="0" class="active"></li>
                    <li data-target="#slider_images1" data-slide-to="1" class=""></li>
                    <li data-target="#slider_images1" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide4.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide8.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide9.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider_images1" role="button" data-slide="prev">
                    <span class="" aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slider_images1" role="button" data-slide="next">
                    <span class="" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <a class="portfolio-link" href="portfolio.html">More Pics</a>
    </section>

    <!-- about us section -->
    <section id="about_us" class="about_us">
        <h1 id="heading4">About Us</h1>
        <div class="container">
            <p>We concentrate exclusively on selling space for display of Advertising, by building long term relationship with Political parties , national & multinational companies. Our total focus is to provide effective and perfect media solution i.e.
                Outdoor advertising to our clients , due to that we could achieve loyal customer base and goodwill in the market. Our reputation is giving quality service and reliability and cost efficiency to the customer, we are trusted, prestigious
                brand in the market.</p>
            <h4>OUR VALUES</h4>
            <ul>
                <li>Honesty</li>
                <li>Faithfulness</li>
                <li>Reliability</li>
                <li>Commitments</li>
                <li>Focus on all types of customers</li>
                <li>True and fair with the clients</li>
            </ul>
            <h4>OUR MISSION</h4>
            <ul>
                <li>To provide perfect and effective media solutions.</li>
                <li>To confirm the highest safety standards.</li>
                <li>To reach the widest audience and focus on quality service & best competitive rates compared to others.</li>
                <li>To create trust in the minds of each of our clients and achieve the goodwill in the market.</li>
                <li>To provide premium and prime locations which are easily accessible to our clients and with best rates as compared to other.</li>
                <li>To keep happy & pleasant to our customer and recommend them for excellent appreciation.</li>
                <li>To keep happy & pleasant to our customer and recommend them for excellent appreciation.</li>
                <li>Our total focus is to provide effective and perfect media solutions to our client.</li>
            </ul>
        </div>
    </section>

    <!-- review section -->
    <section class="review">
        <h1 id="heading5">Reviews</h1>
        <div class="container">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item review-item active"> <img alt="Failed to load image!" src="images/p3.jpeg">
                            <div class="carousel-caption caption2">
                                <h6>Balu Dhanorkar</h6>
                                <small><b>MP Chandrapur Loksabha Maharashtra</b></small>
                                <p id="mv-1">पूर्वी लोकांसाठी समाजासाठी केलेली कामे. त्यांच्यापर्यंत टीव्ही वरील बातम्या किंवा वृत्तपत्राद्वारे पोहोचायची. पण आजच युग हे संगणक युग आहे. त्यामुळे लोक प्रसारमाध्यमे वापरतात. लोकप्रतिनिधी बॅनर होर्डिंग्ज बनवून किंवा मोबाईल
                                    व्हॅन द्वारे आपली कामे लोकांपर्यंत पोहोचवतात. या सगळ्यात मला Colors Promotion यांचं सहकार्य लाभलं. मी केलेल्या कामांचा खूप सुंदर प्रचार आणि प्रसार यांनी केला. याचा फायदा मला मागील निवडणुकीत झालाच त्याप्रमाणे इथून पुढेही
                                    होईल.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item review-item"> <img alt="Failed to load image!" src="images/p2.jpeg">
                            <div class="carousel-caption caption2">
                                <h6>Rajeshbhau Rangari</h6>
                                <small><b>Bharatiya Janata Party</b></small>
                                <p>आमच्यासारख्या लोकप्रतिनिधीनी पूर्वी लोकांसाठी समाजासाठी केलेली कामे. त्यांच्यापर्यंत टीव्ही वरील बातम्या किंवा वृत्तपत्राद्वारे पोहोचायची. पण आजच युग हे संगणक युग आहे. त्यामुळे लोक प्रसारमाध्यमे वापरतात. लोकप्रतिनिधी बॅनर
                                    होर्डिंग्ज बनवून किंवा मोबाईल व्हॅन द्वारे आपली कामे लोकांपर्यंत पोहोचवतात. या सगळ्यात मला Colors Promotion यांचं सहकार्य लाभलं. मी केलेल्या कामांचा खूप सुंदर प्रचार आणि प्रसार यांनी केला. याचा फायदा मला मागील निवडणुकीत
                                    झालाच त्याप्रमाणे इथून पुढेही होईल.</p>
                            </div>
                        </div>
                        <div class="carousel-item review-item"> <img alt="Failed to load image!" src="images/p1.jpeg">
                            <div class="carousel-caption caption2">
                                <h6>Nadu Bhau Kaner</h6>
                                <small><b>Shivsena</b></small>
                                <p id="mv-1">हिंदूहृदयसम्राट स्व. बाळासाहेब ठाकरे आणि शिवसेनाप्रमुख मु. उध्दवसाहेब ठाकरे यांच्या आदेशानुसार तसेच युवसेनाप्रमुख मंत्री महोदय आदित्यजी ठाकरे यांच्या मार्गदर्शनानुसार मी माझ्या विभागातील जनतेसाठी जी लोककल्याणकारी कामे केली..
                                    त्यांच्या समस्या सोडवण्याची जी काम केली ती Colors Promotion द्वारे प्रत्येक घराघरात पोहोचली. Colors promotion यांची मदत घेतल्यानंतर अनेक तरुण शिवसैनिक होऊन जनतेची सेवा करण्यासाठी उत्स्फूर्तपणे पुढे सरसावले आहे.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact us section -->
    <section id="contact_us" class="contact-us">
        <h1 id="heading6">Contact Us</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7125337791595!2d78.22384841493216!3d21.00415728601171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd415b0f27caeb1%3A0x5e06b2af3c86cd50!2sColours%20Led%20wall!5e0!3m2!1sen!2sin!4v1580749363011!5m2!1sen!2sin"
                        width="80%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2><i class="fa fa-envelope-o" aria-hidden="true"></i> We're ready to lead you into the future of advertising</h2>
                    <h3>Ready for offers and cooperation</h3>
                    <div class="contact-no">
                        <h4>
                            <section class="row">
                                <section class="col-2">Phone:</section>
                                <section class="col-10">+91 818 0984 564<br> +91 997 0865 804</section>
                            </section>
                        </h4>
                        <h4>
                            <section class="row">
                                <section class="col-2">Email:</section>
                                <section class="col-10">info@colourspromotion.com</section>
                            </section>
                        </h4>
                    </div>
                    <form action="" class="text-center" method="post">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="tel" name="phone" placeholder="Phone" required><br>
                        <input class="input-email" type="email" name="email" placeholder="E-mail"><br>
                        <textarea name="message" placeholder="Message" rows="4"></textarea><br>
                        <input type="submit" name="submit" class="input-sub" value="Send Message">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <section class="footer">
        <div class="container">
            <div class="text-center">
                <h4>CONNECT WITH US</h4>
                <div class="social-links">
                    <a href=""><img class="img-fluid" src="images/img13.png" alt=""></a>
                    <a href="https://www.facebook.com/Colours-Promotion-113439503530721/?view_public_for=113439503530721"><img class="img-fluid" src="images/img11.png" alt=""></a>
                    <a href=""><img class="img-fluid" src="images/img12.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="text-center cp">
            <span>@Copyright 2020 - All Rights Reserved By Colours Promotion<br>
                    Designed & Developed By <a href="https://teckytrick.com/">TeckyTrick</a> 
                </span>
        </div>
        </div>
    </section>
    <?php
      if(isset($_POST["submit"])){
        $message = "";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $cont_no = $_POST["phone"];
        $msg = $_POST["message"];

        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->Host='smtp.gmail.com';
        $mail->Port =587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure="tls";
        $mail->Username="kaizeninfotek@gmail.com";
        $mail->Password="kaizen@dreambig";

        $mail->setFrom($email,$name);
        $mail->addAddress("shingadesejal03@gmail.com");

        $mail->isHTML(true);
        $mail->Subject="Enquiry From Site : " .$name;
        $mail->Body="<b>Name : </b>" .$name. "<br><b>Email ID : </b>" .$email. "<br><b>Contact No. : </b>" .$cont_no. "<br><b>Message : </b><br><p>" .$msg. "</p>";

        if(!$mail->send()){
          $message = "Failed to send Details!";
        } else {
          $message = "Thank you contacting Us! We will get back to you soon!";
        }
        echo "<script>alert('$message')</script>";
      }
    ?>
</body>

</html>