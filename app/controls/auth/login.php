<!-- header -->
<style>.wrapper{
    background:#f5f7fb!important
}</style>
<?php include("../../repositories/inc/header.php") ?>
<!-- /header -->

	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="../../repositories/img/logo/logo@4x.png" alt="Charles Hall" class="img-caption logo-navbar" width="132" height="132" />
									</div>
									<form>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
											<small>
                                                <a href="index.html">Forgot password?</a>
                                            </small>
										</div>
										<div>
											<label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                                                <span class="form-check-label">
                                                Remember me next time
                                                </span>
                                            </label>
										</div>
										<div class="text-center mt-3">
											<a href="index.html" class="btn btn-lg btn-primary">Sign in</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

<!-- footer -->
<?php include("../../repositories/inc/footer.php") ?>
<!-- /footer -->