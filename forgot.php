<?php 
session_start();
if( is_array($_SESSION['LOGGEDUSER']) ){
$user=$_SESSION['LOGGEDUSER'];
header("Location: index.php");

}else{

	
	//print_r($_SESSION['LOGGEDUSER']);
}
?>
<?php include("header.php"); 
?>
<?php
// session_unset();
// session_destroy(); 
?> 
<!-- Start Page Title Area --> <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url(bnn4.jpg);"> <div class="container"> <div class="page-title-content"> <h2>Amjaad</h2> <p>Login</p> </div> </div> </div> <!-- End Page Title Area -->
<body class="page-template page-template-elementor_canvas page page-id-1263 theme-tryo cookies-not-set woocommerce-no-js elementor-default elementor-template-canvas elementor-kit-1419 elementor-page elementor-page-1263">
			<div data-elementor-type="wp-page" data-elementor-id="1263" class="elementor elementor-1263" data-elementor-settings="[]" style="margin-bottom: 20px;">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<div class="elementor-element elementor-element-ec240dc elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="ec240dc" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-fcd2c19 elementor-column elementor-col-100 elementor-top-column" data-id="fcd2c19" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-465412a elementor-widget elementor-widget-Signin" data-id="465412a" data-element_type="widget" data-widget_type="Signin.default">
				<div class="elementor-widget-container">
					<section class="login-area">
			<div class="row m-0">
				<div class="col-lg-6 col-md-12 p-0">
					<div class="login-image" style="background-image:url( bnn4.jpg );">
						<img class="" src="bnn4.jpg" alt="image"/>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 p-0">
					<div class="login-content">
						<div class="d-table">
							<div class="d-table-cell">
								<div class="login-form">
									<div class="logo">
										<a href="index.php">
										<img style="width: 100px;" src="wp-content/uploads/2020/06/logo.png" alt='Amjaad'/>
												</a>
									</div>
									<?php if(isset($_GET['r']) && $_GET['r']==1){ ?>
										<h3>Password changed successfully.You can now Login here.</h3>
										<a href="login.php">Login</a>
										<?php
									}else if(isset($_GET['r']) && $_GET['r']==2){ ?>
										<h3>The email address does not exist.</h3>
									</p>
										<form method="post" action="action_forgot.php" autocomplete="off">
										<div class="form-group">
											<input type="email" name="email" placeholder="Username/Email" class="form-control" required="required"/>
										</div>

										<div class="form-group">
											<input type="hidden" name="pswd" placeholder="Password" value="none" class="form-control" required="required"/>
										</div>
										
										
										<input type="hidden" name="action" value="my_login_action" />
										
										<button type="submit" name="submit" class="btn btn-primary">Change Password</button>
										
									</form>
									<?php }else if(isset($_GET['r']) && $_GET['r']==3){
									$_SESSION['LOGGEDUSER'];
									$thuser=$_SESSION['fLOGGEDUSER']; ?>
										<p>Enter a new password									</p>
										<form method="post" action="action_forgot.php" autocomplete="off">
										<div class="form-group">
											<input type="hidden" value="<?php echo $thuser['email']; ?>" name="email" placeholder="Username/Email" class="form-control" required="required"/>
										</div>

										<div class="form-group">
											<input type="password" name="pswd" placeholder="Password" class="form-control" required="required"/>
										</div>
										
										
										<input type="hidden" name="action" value="my_login_action" />
										
										<button type="submit" name="submit" class="btn btn-primary">Change Password</button>
										
									</form>


									<?php } else{ ?>
										<p>New to Litchman Consultants?
										<a href="register.php">
												Sign up											</a>
									</p>
										<form method="post" action="action_forgot.php" autocomplete="off">
										<div class="form-group">
											<input type="email" name="email" placeholder="Username/Email" class="form-control" required="required"/>
										</div>

										<div class="form-group">
											<input type="hidden" value="none" name="pswd" placeholder="Password" class="form-control" required="required"/>
										</div>
										
										
										<input type="hidden" name="action" value="my_login_action" />
										
										<button type="submit" name="submit" class="btn btn-primary">Change Password</button>
										
									</form>

									<?php } ?>							


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</div>
						</div>
			</div>

		</div>
		<?php include("footer.php"); ?>
