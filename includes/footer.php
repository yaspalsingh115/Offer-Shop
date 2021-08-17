   <footer class="footer-style">
       <div class="container">
           <?php
            if (!isset($_SESSION["email"])) {
            ?>
               <div class="row footer-1">
                   <div class="col-xs-4">
                       <h4 class="footer-text-size">Information</h4><a class="footer-text" href="about.php">About Us</a><br><a class="footer-text" href="contact.php">Contact Us</a>
                   </div>
                   <div class="col-xs-4">
                       <h4 class="footer-text-size">My Account</h4><a class="footer-text" href="" data-toggle="modal" data-target="#exampleModal">Login</a><br><a class="footer-text" href="signup.php">Sign Up</a>
                   </div>
                   <div class="col-xs-4">
                       <h4 class="footer-text-size">Contact Us</h4>
                       <p class="footer-text">Contact: +91-123-000000</p>
                   </div>
               </div>
               <div class="row text-center footer-2">
                   <div class="social-apps flex">
                       <span><a href="https://github.com/yaspalsingh115" target="_blank"> <i class="fab fa-github social"></i></a></span>
                       <span><a href="https://www.instagram.com/yashpalsingh115/" target="_blank"> <i class="fab fa-instagram social"></i></a></span>
                       <span><a href="https://www.linkedin.com/in/yaspal-singh-115trig115/" target="_blank"> <i class="fab fa-linkedin social"></i></a></span>
                       <span><a href="mailto:yaspalharyana@gmail.com" target="_blank"> <i class="fab fa-google-plus social"></i></a></span>
                   </div>
                   <div class="col-xs-12 text-center footer-text">
                       Copyright &copy; Offer-Shop | All Rights Reserved | Made by <span class="orange">YASPAL SINGH</span>
                   </div>
               </div>
           <?php
            } else {
            ?>
               <div class="row">
                   <div class="col-xs-12 text-center footer-text">
                       Copyright &copy; Offer-Shop | All Rights Reserved | Contact Us: +91-123-000000
                       <p>Made by <span class="orange">YASPAL SINGH</span></p>
                   </div>
               </div>
           <?php
            }
            ?>
       </div>
   </footer>