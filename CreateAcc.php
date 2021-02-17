<?php
include"Top.php";
?>
	<div class="page-top-info">
		<div class="container">
			<h4>Create Account</h4>
			<div class="site-pagination">
				<a href="./">Home</a> 
			</div>
		</div>
	</div>
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3 class="text-center">Create Account</h3>
						<div class="cart-table-warp">
                            <div >
                            
<?php 
if(isset($_GET['Status']))
{
  if($_GET['Status'])
  {
?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>Created </strong>
                    </div>
                    <?php
  }
  else
  {
?>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <strong>Failed !!!</strong>
                    </div>
                    <?php
  }
}
 ?>
     <form action="Account.php" method="POST" class="form-horizontal form-label-left " novalidate>  
            <input type ="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
                     <div class="item form-group ">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_name">Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-12 col-xs-2" id="user_name" data-validate-words="2" name="user_name" placeholder="Enter Name"  type="text">
                        </div>
                      </div>  
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_mail">Mail</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-12 col-xs-2" id="user_mail" data-validate-words="2" name="user_mail" placeholder="Enter Mail"  type="text">
                        </div>
                      </div>  
                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_password">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-12 col-xs-2" id="user_password" data-validate-words="2" name="user_password" placeholder="Enter Password"  type="password">
                        </div>
                      </div> 
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_address">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-12 col-xs-2" id="user_address" data-validate-words="2" name="user_address" placeholder="Enter address"  type="text">
                        </div>
                      </div>  
                            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_phone">Phone</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-12 col-xs-2" id="user_phone" data-validate-words="2" name="user_phone" placeholder="Enter phone"  type="text">
                        </div>
                      </div>
                            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_tc">TC number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-12 col-xs-2" id="user_tc" data-validate-words="2" name="user_tc"  placeholder="Enter TC "  type="text">
                        </div>
                      </div>
                           <button class="site-btn" id="send" type="submit"  style="float: none; margin: 10; width: 100%">Create Account</button>
                           <br>
                           <br>
                        </form>					
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