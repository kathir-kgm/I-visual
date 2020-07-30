<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Visual </title>

      <!-- favicon -->

<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff"> 
  
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mediaquery.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <style type="text/css">
    body{
  margin: 0;
  padding: 0;
  background: #000;
}
    .thankyoubanner {
        position: absolute;
        top: 60%;
        color: red;
        font-size: 26px;
        transform: translateY(-40%);
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
    }
    
    .logo {
        position: relative;
        bottom: 0;
    }
    
    .thankyoubanner h2 {
        font-size: 28px;
        color: #000;
        padding-top: 50px;
    }
    
    .thankyoubanner h2 strong {
        color: #76c04e;
    }
    
    
    .home {
           text-align: center;
    position: relative;
    top: 35%;
    transform: translateY(-65%);
    }
    
    .thankyoubanner {
        display: block;
    }
    
    .thankyouhide {
        display: none;
    }
    
    @media(max-width: 768px) {
    .home {
         text-align: center;
         position: relative;
         top: 20%;
        transform: translateY(-80%);
     }
        .logo {
            top: 0px;
        }
        .ivisual {
            position: relative;
            top: 30px;
        }
        .thankyoubanner {
         font-size: 18px;
         position: absolute;
         top: 35%;
         text-align: center;
         width: 90%;
         margin: 0 auto;
     }
        .thankyoubanner h2 {
            font-size: 17px;
        }
    }
    
    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
        .thankyoubanner {
            font-size: 25px;
            position: absolute;
            top: 50%;
            text-align: center;
            width: 70%;
            margin: 0 auto;
        }

        .home {
            text-align: center;
            position: relative;
            top: 30%;
            transform: translateY(-70%);
        }
        .thankyoubanner h2 {
            font-size: 30px;
            padding-top: 100px;
        }
    }
    </style>
</head>

<body >
    <!--  LOGO  -->
    <div id="banner" class="banner1">
        <div id="main" class="home">

<div  class="logo"> 
    <img data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear" class="mainlogo1" src="images/smalllogo.png" alt="Ivisual" >
     <img class="mainlogo2" src="images/line.jpg" >
     <img data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear" class="mainlogo3" src="images/logo2.png" alt="Ivisual" >
     <img class="sublogo" src="images/logo1.png"> 
 </div>
            
            <div class="ivisual">
                <h1>WE</h1> <strong><h1 id="headerquote" class="header"></h1></strong>
                <h1 class="header-blink"></h1> </div>
        </div>
        <!-- NAVBAR  -->
        <div class="menu">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="index.html">HOME</a> </li>
                <li class="nav-item"> <a class="nav-link" href="about.html">WE DO</a> </li>
                <li class="nav-item"> <a class="nav-link" href="visuals.html">VISUALS</a> </li>
                <li class="active" class="nav-item"> <a class="nav-link" href="contact.html">CONTACT US</a> </li>
            </ul>
            <div class="socialmedias">
                <ul>
                    <!-- <a href="#"><li><i class="fa fa-behance-square" aria-hidden="true"></i></li></a>
 -->
                    <a href="https://www.instagram.com/ivisual.in/">
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                    </a>
                    <a href="https://www.facebook.com/ivisual.in">
                        <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                    </a>
                    <a href="https://www.linkedin.com/company/ivisualin">
                        <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                    </a>
                </ul>
            </div>
        </div>
        <!--     MENU BUTTON   -->
        <div id="menu" class="menu-btn">
            <div class="main-btn"></div>
            <div class="close-btn"> </div>
        </div>
    <!-- SIDEMENU -->
    <div class="sidemenu">
    <div class="title1"><a class="sidemenu1" href="about.html">WE DO
  <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a> </div>
    <div class="title2"><a class="sidemenu2" href="visuals.html">VISUALS
  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
    </div>
    </div>
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"> </script>
    <script src = "js/bootstrap.min.js"> </script>
    <script src="js/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.menu-btn').on('click', function() {
            $('.menu').toggleClass('visible');
            $('.menu-btn').toggleClass('visible1');
            $('.home').toggleClass('visible2');
            $('.ivisual').toggleClass('hide1');
            $('.banner1').toggleClass('hide2');
            $('.sidemenu').toggleClass('hide3');
            $('.ivisual1').toggleClass('hide4');
            $('.banner1').toggleClass('homepage');
            $('.main-btn').toggleClass('homepage1');
            $('.mainlogo1').toggleClass('mainlogohide');
            $('.mainlogo2').toggleClass('mainlogohide');
            $('.mainlogo3').toggleClass('mainlogohide');
            $('.sublogo').toggleClass('sublogovisible');
            $('.thankyoubanner').toggleClass('thankyouhide');
            $('.smalllogo').toggleClass('smalllogohide');
            $('.close-btn').toggleClass('close-btn-visible');
        });
    });
    </script>

    <!--       background color change on hover  -->

<script type="text/javascript">
$(document).ready(function(){
$('.title1').mouseover(function(){
  $('body').css('background-color','#76c04e');
  $('.title2 a').css('color','#000');
  $('.title1 a').css('color','#000');
});
$('.title1').mouseout(function(){
  $('body').css('background-color','black');
    $('.title2 a').css('color','#76c04e');
    $('.title1 a').css('color','#76c04e');

});

$('.title2').mouseover(function(){
  $('body').css('background-color','#76c04e');
  $('.title1 a').css('color','#000');
  $('.title2 a').css('color','#000');

});
$('.title2').mouseout(function(){
  $('body').css('background-color','black');
  $('.title1 a').css('color','#76c04e');
  $('.title2 a').css('color','#76c04e');

});

});

</script>

    <script type="text/javascript">
    // List of sentences
    var _CONTENT = ["ARE DESIGN INTELLIGENT.", "DO BRANDING.", "DO UI/UX DESIGN.", "DO WEBSITE.", "DO ECOMMERCE.", "DO WEB APPLICATION.", "DO MOBILE APPLICATION."];
    // Current sentence being processed
    var _PART = 0;
    // Character number of the current sentence being processed 
    var _PART_INDEX = 30;
    // Holds the handle returned from setInterval
    var _INTERVAL_VAL;
    // Element that holds the text
    var _ELEMENT = document.querySelector("#headerquote");
    // Implements typing effect
    function Type() {
        // Get substring with 1 characater added
        var text = _CONTENT[_PART].substring(0, _PART_INDEX + 1);
        _ELEMENT.innerHTML = text;
        _PART_INDEX++;
        // If full sentence has been displayed then start to delete the sentence after some time
        if(text === _CONTENT[_PART]) {
            clearInterval(_INTERVAL_VAL);
            setTimeout(function() {
                _INTERVAL_VAL = setInterval(Delete, 100);
            }, 3000);
        }
    }
    // Implements deleting effect
    function Delete() {
        // Get substring with 1 characater deleted
        var text = _CONTENT[_PART].substring(0, _PART_INDEX - 1);
        _ELEMENT.innerHTML = text;
        _PART_INDEX--;
        // If sentence has been deleted then start to display the next sentence
        if(text === '') {
            clearInterval(_INTERVAL_VAL);
            // If current sentence was last then display the first one, else move to the next
            if(_PART == (_CONTENT.length - 1)) _PART = 0;
            else _PART++;
            _PART_INDEX = 0;
            // Start to display the next sentence after some time
            setTimeout(function() {
                _INTERVAL_VAL = setInterval(Type, 100);
            }, 200);
        }
    }
    // Start the typing effect on load
    _INTERVAL_VAL = setInterval(Type, 100);
    </script>
</body>

</html>
<div class="thankyoubanner">
    <?php
if (isset($_POST['submit'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ivisualdd@gmail.com";
    $email_subject = "New form submissions";

    function problem($error)
    {
        echo "$error  <br>";
        echo "Please go back and fix those errors.<br>";
        die();
    }
    
    // validation expected data exists
    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['company']) ||
        !isset($_POST['phone']) ||
       !isset($_POST['comment']) 

    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $company = $_POST['company']; // required
    $phone = $_POST['phone']; // required
    $message = $_POST['comment']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= ' The Email address is invalid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= ' The Name is invalid.<br>';
    }
     $number_exp = "/^\d{10}$/";

    if (!preg_match($number_exp, $phone)) {
        $error_message .= ' The Phone number is invalid.<br>';
    }

/*    if (!preg_match($string_exp, $company)) {
        $error_message .= 'Please fill your company name.<br>';
    }
   
    if (strlen($message) < 2) {
        $error_message .= 'Please fill your enquiry.<br>';
    }
*/
    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name : " . clean_string($name) . "\n";
    $email_message .= "Email : " . clean_string($email) . "\n";
    $email_message .= "Phone No : " . clean_string($phone) . "\n";
    $email_message .= "Company Name : " . clean_string($company) . "\n";
    $email_message .= "Enquiry : " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);



                   echo" <html><h2>Mail sent.thank you <strong>$name</strong>. We will contact you shortly.</h2></html>";

                    
                    ?>
        <?php
}
?>
</div>