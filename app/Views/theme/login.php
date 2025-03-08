<?php include 'header.php';?>
<!-- ======================= Login Detail ======================== -->
<section class="gray">
	<div class="container">
		<div class="row align-items-start justify-content-center">
			<div class="col-xl-5 col-lg-8 col-md-12">

				<div class="signup-screen-wrap" data-aos="example-anim1">
					<div class="signup-screen-single">
						<div class="text-center mb-4">
							<h4 class="m-0 ft-medium">Login Your Account</h4>
						</div>

						<form class="submit-form">
							<div class="form-group">
								<label class="mb-1">User Name</label>
								<input type="text" class="form-control rounded" placeholder="Username*">
							</div>

							<div class="form-group">
								<label class="mb-1">Password</label>
								<input type="password" class="form-control rounded" placeholder="Password*">
							</div>

							<div class="form-group">
								<div class="d-flex align-items-center justify-content-between">
									<div class="flex-1">
										<input id="dd" class="checkbox-custom" name="dd" type="checkbox" checked>
										<label for="dd" class="checkbox-custom-label">Remember Me</label>
									</div>
									<div class="eltio_k2">
										<a href="#" class="theme-cl">Lost Your Password?</a>
									</div>
								</div>
							</div>

							<div class="form-group">
								<button type="submit"
									class="btn btn-md full-width theme-bg text-light rounded ft-medium">Sign
									In</button>
							</div>

							<div class="form-group text-center mb-0">
								<p class="extra">Or login with</p>
								<div class="option-log">
									<div class="single-log-opt"><a href="javascript:void(0);" class="log-btn"><img
												src="assets/img/c-1.png" class="img-fluid" alt="" />Login with
											Google</a></div>
									<div class="single-log-opt"><a href="javascript:void(0);" class="log-btn"><img
												src="assets/img/facebook.png" class="img-fluid" alt="" />Login with
											Facebook</a></div>
								</div>
							</div>

							<div class="form-group text-center mt-4 mb-0">
								<p class="mb-0">You Don't have any account? <a href="signup"
										class="ft-medium text-success">Sign Up</a></p>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- ======================= Login End ======================== -->

<?php include 'footer.php';?>