<nav class="navbar navbar-inverse navbar-fixed-top nav-pad">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand brand">Offer-Shop</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <?php
                if(isset($_SESSION["email"])){ 
            ?>
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php" class="white-text"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php" class="white-text"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php" class="white-text"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            <?php
            }
            else{
            ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php" class="white-text"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModal" class="white-text"><span
                                class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php" class="white-text"><span class="glyphicon glyphicon-tasks"></span>  About Us</a></li>
                    <li><a href="contact.php" class="white-text"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                </ul>
            <?php
            }
            ?>
        </div>
    </div>
</nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title title-display" id="exampleModalLabel" style="display: inline;">LOGIN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p>Don't have an account? <a href="signup.php">Register</a></p>
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <?php
                                if(isset($_GET["error"])){
                                    echo '<div class="top-margin"> <b class="alert-danger error-padding">'. $_GET['error'].' </b>
                                    </div>
                                    <br>';
                                }
                            ?> 
                        </div>
                        <a href="recover_email.php">Forgot Password?</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
    