<?php include 'css/css.html'; ?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])){    //user logging in
        require ('login.php');
    }
    elseif (isset($_POST['register'])){ //user registering
        require 'register.php';
    }
}
?>
<title>Log In</title>
<div class="form">
    <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">

        <div id="login">
            <h1>Welcome Back!</h1>

            <form action="index.php" method="post" autocomplete="off">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" required autocomplete="off" name="email"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off" name="password"/>
                </div>
                <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
                <button class="button button-block" name="login" />Log In</button>
            </form>
        </div>

        <div id="signup">
            <form action="index.php" method="post" autocomplete="off">
                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name='firstname' />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off" name='lastname' />
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off" name='email' />
                </div>

                <div class="field-wrap">
                    <label>
                        Confirm Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off" name='password'/>
                </div>

                <button type="submit" class="button button-block" name="register" />Register</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src="js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>