<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Final Website by Benjamin Atsu</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/client.css" />
  <link rel="stylesheet" href="css/nav.css"/>
   <!--jQuery -->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <!--MenuMaker Plugin -->
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <!--Icon Library -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <script src="js/script.js"></script>
 </head>
 <body> 
   <main >
    <header>
         <div class="logo"><a href="../template.html"> <img src="images/logo.PNG" alt="Website Logo"></a></div>
         <nav  id="cssmenu">
             <ul class="nav-links">
                 <li><a class="active" href="template.html">TimesUp!</a></li>
                              <!-- drop down menu for Shop pages -->
                 <li><a href="#">Shop</a>
                     <ul class> 
                          <li><a href="men.html">Men</a></li>
                          <li><a href="women.html">Women</a></li>
                          <li><a href="accessories.html">Accessories</a></li>
                    </ul>
                 </li>
                 <li><a href="lookbook.html">LookBook</a></li>
                 <li><a href="#"> Cart</a></li> 
             </ul> 
        </nav>
     </header>
       <!-- START MAIN CONTENT -->
       <section class="fullwidth">
           <h2>Contact Us</h2>
               <?php
            /*
             * Below are 2 different forms to be re-used       
             * 
             * Only use one at a time, comment out the other!       
             *
             */

            include 'includes/contact_include.php'; #site keys & code here

            $toAddress = "Batabent@gmail.com";  //place your/your client's email address here
            $toName = "Benjamin Atsu"; //place your client's name here
            $website = "TimesUP!";  //place NAME of your client's website

            echo loadContact('simple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>

       </section>
       <!-- END MAIN CONTENT -->

       <!-- START BOTTOM SECTION -->
           <nav id="bottomnav">
                <div class="lowernav">
                    <a href="#">About</a>
                    <a href="contact.php">Contact</a>
                </div>
                <div class="socialmedia-icons">
                    <a href="https://www.facebook.com/vitabrevis.sw/"><i class="fa fa-facebook-official"></i></a>
                    <a href="https://www.instagram.com/vitabrevis.sw/?hl=en"><i class="fa fa-instagram" ></i></a>
                </div>
                <div class="language-bar">
                    <a href="#googtrans(en)" class="lang-en lang-select" data-lang="en"><img src="images/flag-usa.png" alt="USA"></a>
                    <a href="#googtrans(pt)" class="lang-es lang-select" data-lang="pt"><img src="images/flag-brazil.png" alt="Brazil"></a>
               </div>
    
           </nav>
       <!-- END BUTTOM SECTION -->
       <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
            }

            function triggerHtmlEvent(element, eventName) {
              var event;
              if (document.createEvent) {
                event = document.createEvent('HTMLEvents');
                event.initEvent(eventName, true, true);
                element.dispatchEvent(event);
              } else {
                event = document.createEventObject();
                event.eventType = eventName;
                element.fireEvent('on' + event.eventType, event);
              }
            }

            jQuery('.lang-select').click(function() {
              var theLang = jQuery(this).attr('data-lang');
              jQuery('.goog-te-combo').val(theLang);

              //alert(jQuery(this).attr('href'));
              window.location = jQuery(this).attr('href');
              location.reload();

            });
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

       <!-- SCRIPT FOR lANGUAGE MENU -->
       
       <!-- END OF SCRIPT FOR lANGUAGE MENU -->
       <footer>
              <p><small>&copy; 2019 by <a href="contact.php">Contact Benjamin Atsu </a>, All Rights Reserved ~  <a href="disclaimer.html" target="_blank">Disclaimer</a>~
                  <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
       </footer>
  </main>
 </body>
</html>