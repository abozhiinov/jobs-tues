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
								<h2 class="heading-title">Job Name - Applicant Name</h2>
							</div>
							<form>
								<div class="flex-container justified-horizontally flex-wrap">
									<div class="form-field-wrapper width-medium">
										<input type="text" placeholder="Email" readonly />
									</div>
									<div class="form-field-wrapper width-medium">
										<input type="text" placeholder="Phone Number" readonly />
									</div>			
									<div class="form-field-wrapper width-large">
										<textarea placeholder="Custom Message" readonly ></textarea>
									</div>
								</div>	
								<button type="submit" class="button">
									Download CV
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