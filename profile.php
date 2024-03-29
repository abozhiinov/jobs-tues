<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
<?php include 'header.php';?>
	<div class="site-wrapper">
		
		<main class="site-main">
			<section class="section-fullwidth">
				<div class="row">	
					<div class="flex-container centered-vertically centered-horizontally">
						<div class="form-box box-shadow">
							<div class="section-heading">
								<h2 class="heading-title">My Profile</h2>
							</div>
							<form>
								<div class="flex-container justified-horizontally">
									<div class="primary-container">
										<h4 class="form-title">About me</h4>
										<div class="form-field-wrapper">
											<input type="text" placeholder="First Name*"/>
										</div>
										<div class="form-field-wrapper">
											<input type="text" placeholder="Last Name*"/>
										</div>
										<div class="form-field-wrapper">
											<input type="text" placeholder="Email*"/>
										</div>
										<div class="form-field-wrapper">
											<input type="text" placeholder="Password"/>
										</div>
										<div class="form-field-wrapper">
											<input type="text" placeholder="Repeat Password"/>
										</div>
										<div class="form-field-wrapper">
											<input type="text" placeholder="Phone Number"/>
										</div>
									</div>
									<div class="secondary-container">
										<h4 class="form-title">My Company</h4>
										<div class="form-field-wrapper">
											<input type="text" placeholder="Company Name"/>
										</div>
										<div class="form-field-wrapper">
											<input type="text" placeholder="Company Site"/>
										</div>
										<div class="form-field-wrapper">
											<textarea placeholder="Description"></textarea>
										</div>
									</div>		
								</div>					
								<button class="button">
									Save
								</button>
							</form>
						</div>
					</div>
				</div>
			</section>	
		</main>

	</div>
	<?php include 'footer.php';?>
</body>
</html>