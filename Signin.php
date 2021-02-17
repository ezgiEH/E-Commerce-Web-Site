<?php
include"Top.php";

?>
<div class="page-top-info">
    <div class="container">
        <h4>Sign In</h4>
        <div class="site-pagination">
            <a href="./">Home</a>
        </div>
    </div>
</div>
 <?php 
            if(isset($_GET['logout']))
            {
              ?>
                                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                Logout success
                                            </div>
                                            <?php 
            }

            if(isset($_GET['error']))
            {
              ?>
                                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                User Mail or password wrong
                                            </div>
                                            <?php 
            }
            ?>
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3 class="text-center">Sign In</h3>
                    <div class="cart-table-warp">
                        <div>
                            <a class="hiddenanchor" id="signup"></a>
                            <a class="hiddenanchor" id="signin"></a>
                            <div class="login_wrapper">
                                <div class="animate form login_form">
                                    <section class="login_content">
                                        <form action="SigninControl.php" method="POST">
                                           
                                            <div>
                                                <input type="text" name="uname" class="form-control" placeholder="Enter mail address" required="" />
                                            </div>
                                            <div>
                                                <br>
                                                <input type="password" name="password" class="form-control" placeholder="Enter password" required="" />
                                            </div>
                                            <br>
                                            <div>
                                                <input type="submit" value="Login" class="site-btn " style="float: none; margin: 10; width: 100%">
                                                <br><br>
                                                <a href="CreateAcc.php" class="site-btn sb-dark " style="float: none; margin: 10; width: 100%">Create Account</a>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="separator">
                                                <div class="clearfix"></div>
                                                <br />
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "Footer.php";
?>