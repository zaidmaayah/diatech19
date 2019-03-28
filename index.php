<?php

if (!empty($_POST['lunchPreOrder'])) {






$student = '';
$error = false;

if (isset($_POST['yearSelect'])) 
{ 
$year = $_POST["yearSelect"];
} 


if (isset($_POST['dropdown1'])) 
{ 
$meal = $_POST["dropdown1"];
} 


 if(empty($_POST["student"]))
 {
  $error = true;
 }
 else
 {
  $student = $_POST["student"];
 }

 if($error == false)
 {
  $filereader = fopen("lunch.csv", "a");
  $check = count(file("lunch.csv"));

  $formdata = array(
   'student'  => $student,
   'year'  => $year,
   'meal' => $meal,
  );
  $openingRow = array(
   "Student Name", "Year Level", "Meal Ordered"
  );

    if($check <= 1)
  {
   fputcsv($filereader, $openingRow);
  }
  fputcsv($filereader, $formdata);
  echo "<script type=\"text/javascript\">window.alert('Success');
window.location.href = '/index.php';</script>";
  $students = '';

}
}







if (!empty($_POST['adminLogin'])) {


  $input = $_POST["passwordField"];




if ($input == "DTportal_19") {
    header('Location: demo.php'); ;
} else {
    echo "<script type=\"text/javascript\">window.alert('Incorrect password!');
window.location.href = '/index.php';</script>";
}



}








if (!empty($_POST['boardRequest'])) {

$students = '';
$project = '';
$color = '';
$error = false;

if (isset($_POST['dropdown2'])) 
{ 
$category = $_POST["dropdown2"];
} 

 if(empty($_POST["students"]))
 {
    $error = true;

 }
 else
 {
  $students = $_POST["students"];
 }
 if(empty($_POST["project"]))
 {
    $error = true;

 }
 else
 {
  $project = $_POST["project"];
 }

 if(empty($_POST["color"]))
 {
  $error = true;
 }
 else
 {
  $color = $_POST["color"];
 }

 if($error == false)
 {
  $filereader = fopen("boards.csv", "a");
  $check = count(file("boards.csv"));

  $formdata = array(
   'students'  => $students,
   'project'  => $project,
   'category' => $category,
   'color' => $color
  );
  $openingRow = array(
   "Student Names", "Project Name", "Category", "Board Color"
  );

    if($check <= 1)
  {
   fputcsv($filereader, $openingRow);
  }
  fputcsv($filereader, $formdata);
  echo "<script type=\"text/javascript\">window.alert('Success');
window.location.href = '/index.php';</script>";
  $students = '';
  $project = '';
  $color = '';

}

}   

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>DIATECH 2019</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- Icon -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
        <!-- Slicknav -->
        <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
        <!-- Nivo Lightbox -->
        <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">
        <!-- Animate -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- Main Style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <!-- Responsive Style -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <!-- AddEvent script -->
        <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer>
        </script>

        <script>
            window.onload = function() {
                var temp1 = document.getElementById("lunch");
                var temp2 = document.getElementById("boards");
                var temp3 = document.getElementById("adminPanel");
                var back = document.getElementById("return");
                temp1.style.display = "none";
                temp2.style.display = "none";
                temp3.style.display = "none";
                back.style.display = "none";
            }
        </script>

        <script>
            function returnToMainMenu() {
                var temp1 = document.getElementById("b1");
                var temp2 = document.getElementById("b2");
                var temp3 = document.getElementById("b3");
                var back = document.getElementById("return");
                var temp4 = document.getElementById("lunch");
                var temp5 = document.getElementById("boards");
                var temp6 = document.getElementById("adminPanel");
                temp1.style.display = "block";
                temp2.style.display = "block";
                temp3.style.display = "block";
                back.style.display = "none";
                temp4.style.display = "none";
                temp5.style.display = "none";
                temp6.style.display = "none";
            }
        </script>


        <script>

            function displayLunch() {
                var temp1 = document.getElementById("b2");
                var temp2 = document.getElementById("lunch");
                var temp3 = document.getElementById("b3");
                var back = document.getElementById("return");                
                temp1.style.display = "none";
                temp2.style.display = "block";
                temp3.style.display = "none";
                back.style.display = "block";
            }

        </script>

        <script>

            function displayBoard() {
                var temp1 = document.getElementById("b1");
                var temp2 = document.getElementById("boards");
                var temp3 = document.getElementById("b3");    
                var back = document.getElementById("return");                           
                temp1.style.display = "none";
                temp2.style.display = "block";
                temp3.style.display = "none";
                back.style.display = "block";
            }
        </script>

        <script>

            function displayAdmin() {
                var temp1 = document.getElementById("b1");
                var temp2 = document.getElementById("adminPanel");
                var temp3 = document.getElementById("b2");
                var back = document.getElementById("return");
                temp1.style.display = "none";
                temp2.style.display = "block";
                temp3.style.display = "none";
                back.style.display = "block";
            }
        </script>

    </head>

    <body>
        <!-- Header Area wrapper Starts -->
        <header id="header-wrap">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="icon-menu"></span>
                            <span class="icon-menu"></span>
                            <span class="icon-menu"></span>
                        </button>
                        <a href="index.php" class="navbar-brand"><img src="dtlogo.png" style="width:57px;height:57px;"></a>
                    </div>
                </div>

            </nav>
            <!-- Navbar End -->

        </header>
        <!-- Header Area wrapper End -->

        <!-- Countdown Section Start -->
        <section class="countdown-timer section-padding">

      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="wallpaper.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">


            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="heading-count">
                            <br>
                            <br>
                            <h3 class="wow fadeInDown" data-wow-delay="0.2s">14th Annual DIATECH - Web Portal</h3>
                            <i><h3 class="wow fadeInDown" data-wow-delay="0.4s">Thursday, May 2nd, 2019</h3></i>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                            <div id="clock" class="time-count"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        </section>
        <!-- Countdown Section End -->

        <!-- Counter Area Start-->
        <section class="counter-section section-padding">

            <div class="container">
                <div class="row">

                      <!-- Counter Item -->
                    <div id="return" class="col-md-6 col-lg-2 col-xs-12 work-counter-widget text-center">
                        <a onclick="returnToMainMenu()">
                            <div class="counter">
                                <div class="icon"><i class="lni-arrow-left"></i></div>
                                <p>Return</p>
                            </div>
                        </a>
                    </div>

                    <!-- Counter Item -->
                    <div id="b1" class="col-md-6 col-lg-2 col-xs-12 work-counter-widget text-center">
                        <a onclick="displayLunch()">
                            <div class="counter wow fadeInRight">
                                <div class="icon"><i class="lni-dinner"></i></div>
                                <p>Lunch Pre-Order</p>
                            </div>
                        </a>
                    </div>

                    <!-- Counter Item -->
                    <div id="b2" class="col-md-6 col-lg-2 col-xs-12 work-counter-widget text-center">
                        <a onclick="displayBoard()">
                            <div class="counter wow fadeInRight">
                                <div class="icon"><i class="lni-blackboard"></i></div>
                                <p>Board Request</p>
                            </div>
                        </a>
                    </div>

                    <!-- Counter Item -->
                    <div id="b3" class="col-md-6 col-lg-2 col-xs-12 work-counter-widget text-center">
                        <a onclick="displayAdmin()">
                            <div class="counter wow fadeInRight">
                                <div class="icon"><i class="lni-cog"></i></div>
                                <p>Admin Panel</p>
                            </div>
                        </a>
                    </div>

                    <div id="lunch" class="col-md-6 col-lg-2 col-xs-12 work-counter-widget text-center">

                        <form action="" method="post">
                            <fieldset>
                                Student Name
                                <br>
                                <input type="text" name="student">
                                <br> Year
                                <br>
                                <select id="yearSelect" name="yearSelect">
                                    <option value="7">Year 7</option>
                                    <option value="8">Year 8</option>
                                    <option value="9">Year 9</option>
                                    <option value="10">Year 10</option>
                                    <option value="11">Year 11</option>
                                    <option value="12">Year 12</option>
                                </select>
                                <br> Meal
                                <br>
                                <select id="dropdown1" name="dropdown1">
                                    <option value="Combo 1">Combo 1</option>
                                    <option value="Combo 2">Combo 2</option>
                                    <option value="Combo 3">Combo 3</option>
                                    <option value="Combo 4">Combo 4</option>
                                    <option value="Combo 5">Combo 5</option>
                                    <option value="Combo 6">Combo 6</option>
                                </select>
                                <br>
                                <br>
                                <input type="submit" name="lunchPreOrder" value="Place Order">
                            </fieldset>
                        </form>

                    </div>

                    <div id="boards" class="col-md-6 col-lg-2 col-xs-12 work-counter-widget text-center">

                        <form action="" method="post">
                            <fieldset>
                                Student Names
                                <br>
                                <input type="text" name="students">
                                <br> Project Name
                                <br>
                                <input type="text" name="project">
                                <br> Category
                                <br>
                                <select id="dropdown2" name="dropdown2">
                                    <option value="Year 7 PD">Year 7 PD</option>
                                    <option value="Year 8 DD">Year 8 DD</option>
                                    <option value="Year 9 DD">Year 9 DD</option>
                                    <option value="Year 10 PD">Year 10 PD</option>
                                    <option value="Year 10 DD">Year 10 DD</option>
                                    <option value="Year 11 PD">Year 11 PD</option>
                                    <option value="Year 11 DD">Year 11 DD</option>
                                </select>
                                <br> Board Color
                                <br>
                                <input type="text" name="color">
                                <br>
                                <br>
                                <input type="submit" name="boardRequest" value="Confirm">
                            </fieldset>
                        </form>

                    </div>

                     <div id="adminPanel" class="col-md-6 col-lg-2 col-xs-12 work-counter-widget text-center">

                         <form action="" method="post">
                            <fieldset>
                                Enter Admin Password
                                <br>
                                <input type="password" name="passwordField">
                                <br>
                                <br>
                                <input type="submit" name="adminLogin" value="Login">
                            </fieldset>
                        </form>

                    </div>

                </div>
            </div>
        </section>
        <!-- Counter Area End-->
        <div id="preloader">
            <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
            </div>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/jquery-min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.nav.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/jquery.slicknav.js"></script>
        <script src="assets/js/nivo-lightbox.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.min.js"></script>
        <script src="assets/js/map.js"></script>
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>

    </body>

    </html>
