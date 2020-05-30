<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Business Website">
        <meta name="author" content="Alejandro Moracen">
        <title>TechTouch</title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="../favicon.png">
        <!-- My styles for this template -->
        <link href="../mycss/mystyle.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Acme|Fira+Sans+Extra+Condensed" rel="stylesheet" type="text/css">
    </head>
    <body class="bg-light-blue">
        <?php session_start();?>
        <div class="container-fluid pb-5">
             <!-- Navigation -->
             <nav class="navbar navbar-expand-lg navbar-dark bg-dark-blue  sticky-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button id="nav-toggle-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand text-white ml-5 text-font-Acme" href="../index.html"><h4>TechTouch</h4></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../index.html">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link text-white dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                    <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item text-dark" href="../services.html">
                                            I.T Consultan</a>
                                        <a class="dropdown-item text-dark" href="../services.html">
                                            Server Set-up</a>
                                        <a class="dropdown-item text-dark" href="../services.html">
                                            Website Design</a>
                                        <a class="dropdown-item text-dark" href="../services.html">
                                            Special Offer</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../request.html">Request Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="./contactUs.php">Contact Us <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- div class="container-fluid" -->
            </nav>

            <!-- Page Content -->
            <div class="container mb-1">
                <!-- Heading Row -->
                <div class="jumbotron bg-transparent">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1 class="text-white text-font-Acme">TechTouch</h1>
                            <hr class="my-2">
                        </div> <!--/.col-lg-6 -->
                    </div>
                </div>

                <!--Contact Form-->
                 <div class="row">
                    <div class="col-md-12 bg-dark-blue">
                        <h2 class="text-white text-font-Acme text-center ">Contact Us</h2>
                    </div>
                </div>
                <div class="row bg-white font-weight-bold">
                    <div class="col-md-7 py-3 pb-5 border border-white">
                        <h4>Need more assistance?</h4>
                        <form autocomplete="off" action ="./contactServer.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name="inputName" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPhoneNumber">Phone Number</label>
                                    <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputSubject">Subject</label>
                                    <select id="inputSubject" name="serviceArea" class="form-control" required>
                                        <option selected>Choose...</option>
                                        <option value="I.T Consultan">I.T Consultan</option>
                                        <option value="Server Set-up">Server Set-up</option>
                                        <option value="Website Design">Website Design</option>
                                        <option value="Special Offer">Special Offer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputMessage">Message</label>
                                <textarea type="text" class="form-control" name="message" rows="3" required></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                                </div>
                                <div class="form-group col-md-3">
                                    <p class="text-center">
                                        <?php if( isset($_SESSION['Success']) ){echo $_SESSION['Success']; unset($_SESSION['Success']); }?>
                                        <?php if( isset($_SESSION['Error']) ){echo $_SESSION['Error']; unset($_SESSION['Error']); }?></p>
                                </div>
                            </div>
                        </form>
                    </div><!--div class="col-md-12 py-3 pb-5 border"-->
                    <!-- Contact Information -->
                    <div class="col-md-5 py-3 pb-5 border border-white text-white bg-dark-blue text-center">
                        <h4>Contact Information:</h4>
                        <h4>Call Us</h4>
                        <p>800-..</p>
                        <h4>Email Us</h4>
                        <p>techtouch@gmail.com....</p>
                        <h4>Hours of Operation</h4>
                        <p>Monday-Friday</p>  
                        <p>09:00am-05:00pm</p>  
                        <p>*Emergency service available for after hours.</p>
                        <h4>Address</h4>
                        <p>123 Morogoro ....</p>
                    </div>
                </div><!--div class="row"-->
            </div><!--/.container-->
        </div><!--div class="container-fluid-->

        <!-- Footer-->
        <footer class="py-1 bg-dark-blue">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h5 class="text-white">About us</h5>
                        <p class="text-white text-font-Fira">TechTouch offers unmatched IT services and solutions designated for today’s business computer systems, once clients join we keep their business up and running. Our team has real-world experience treating the entirety of your technology problems, and we understand the importance of our services for your success.</p>
                    </div><!-- /.col-md-5 -->

                    <div class="col-md-4 ml-auto">
                            <h5 class="text-white text-center">Contact us</h5>
                            <ul >
                                <li><a class="text-white" href="./contactUs.php">Phone Number</a></li>
                                <li><a class="text-white" href="./contactUs.php">Email</a></li>
                            </ul>
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->

                <div class="row text-center">
                    <div class="col-lg-12">
                        <h6 class="text-white">Made by <a class="text-blue">HUSSEIN TWAHA CEO</a></h6>
                    </div>
                </div>
            </div><!--div class="container fluid-->
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/jquery-3.3.1.js"></script>
    </body>
</html>