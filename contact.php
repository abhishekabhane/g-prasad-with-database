<?php
    include("database.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Abhishek Abhane">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <title>G Prasad Import and Export</title>
</head>

<body id="jumbotron">

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar1">
        <div class="container">
            <a class="navbar-brand" href="./index.html">
                <img src="img/logo1.png" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" id="navbarlist">
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                      </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./company.html">Company</a></li><br />
                            <li><a class="dropdown-item" href="./certification.html">Certification</a></li><br />
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                      </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./handicraft.html">Wooden Handicraft</a></li><br />
                            <li><a class="dropdown-item" href="./copper.html">Copper Products</a></li><br />
                            <li><a class="dropdown-item" href="./ceramic.html">Ceramic and clay Products</a></li><br />
                            <li><a class="dropdown-item" href="./cashew.html">Cashew Nut Products</a></li><br />
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.html" class="nav-link contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- COMPANY -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-6">Contact Us</h1>
            <p class="lead"><a href="./index.html">HOME</a> / <a href="./contact.html">CONTACT US</a></p>
        </div>
    </div>

    <!-- CONNECT -->
    <div class="connect">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h6>Email</h6>
                    <p>
                        <a href="mailto:gprasad.importandexportpvt.ltd@gmail.com" style="text-decoration: none;">
                            <i class="fa fa-envelope mr-2 footer-icon"></i> gprasad.importandexportpvt.ltd@gmail.com
                        </a>
                    </p>
                    <h6>Contact Number</h6>
                    <p><i class="fa fa-phone mr-2 footer-icon"></i><a href="tel:+91 9146809407" style="text-decoration: none;">+91 9146809407</a></p>
                    <h6>Address</h6>
                    <p><i class="fa fa-home footer-icon"></i> Shitole Nagar, Old sangvi, Pune 411027</p>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-4" id="requirement">Send us Your <strong style="color: #f1c111;">requirements</strong></h1>
                    <form action="database.php" method="POST" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                            <div class="col-lg-6 col-12 inputbar">
                                <input type="text" class="form-control input" name="name" placeholder="Name" id="name" required>
                            </div>

                            <div class="col-lg-6 col-12 inputbar">
                                <input type="email" class="form-control input" name="email" placeholder="Email" id="email" required>
                            </div>

                            <div class="col-lg-12 col-12 inputbar">
                                <textarea class="form-control input" rows="6" name="message" placeholder="Message" id="message" required></textarea>
                            </div>
                            <div class="col-lg-5 mx-auto col-7 inputbar">
                                <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                            </div>
                            <div id="error">
                                <!-- <?php echo $emailErr; ?> -->
                            </div>
                            <div id="success"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">A destination for quality <span style="color: #a3830d;">exporting </span>service</h1>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200" id="contactinfo">
                    <h4 class="my-4" style="color: #a3830d !important;">Contact Info</h4>
                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i><a href="tel:+91 9146809407" style="text-decoration: none;">+91 9146809407</a>
                    </p>
                    <p>
                        <a href="mailto:gprasad.importandexportpvt.ltd@gmail.com" style="text-decoration: none;">
                            <i class="fa fa-envelope mr-2 footer-icon"></i> gprasad.importandexportpvt.ltd@gmail.com
                        </a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300" id="contactinfo">
                    <h4 class="my-4" style="color: #a3830d !important;">Our Products</h4>
                    <p class="mb-1">
                        <a href="./handicraft.html" style="text-decoration: none;">Wooden Handicraft</a>
                    </p>
                    <p class="mb-1"><a href="./copper.html" style="text-decoration: none;">Copper Products</a></p>
                    <p class="mb-1"><a href="./ceramic.html" style="text-decoration: none;">Ceramic and Clay Products</a></p>
                    <p><a href="./cashew.html" style="text-decoration: none;">Cashew Nut Products</a></p>
                </div>
                <div class="col-lg-4 mx-lg-auto  col-md-8 col-12" data-aos="fade-up" id="contactinfo">
                    <p class="copyright-text">Copyright &copy;
                        <script>
                            const date = new Date();
                            const year = date.getFullYear();
                            document.write(year);
                        </script> <a href="#" target="_blank" style="text-decoration: none;">G Prasad Import and Export Pvt Ltd.</a>
                        <br>
                </div>
                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up">
                    <ul class="social-icon">
                        <li>
                            <a href="#" target="_blank" class="fa fa-instagram"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="fa fa-linkedin"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script>
        AOS.init();


        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
        $("#submit-button").click(function() {
            if ($("#name").val() == "") {
                alert("please enter your name...");
            } else if ($("#email").val() == "" || isEmail($("#email").val()) == false) {
                alert("please enter a valid email...");
            } else if ($("#message").val() == "") {
                alert("please enter your message...");
            } else if ($("#name").val() != "" && $("#email").val() != "" && $("#message").val() != "") {
                alert("your message has been send...");
            } else {
                alert("there was an error");
            }
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    -->
</body>

</html>