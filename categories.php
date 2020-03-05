<?php require "includes/partials/_header.php" ?>

<?php require "includes/partials/_navbar.php" ?>

<header class="bg-dark text-white py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h1 class="text-center">
				<i class="fas fa-text-height text-primary"></i>
          Manage Categories</h1>
			</div>
		</div>
	</div>
</header>

<!-- Main Area -->
<section class="container py-2 mb-4">
	<div class="row">
		<div class="offset-md-1 col-lg-10" style="min-height: 400px;">
			<form action="categories.php" method="post">
				
				<div class="card bg-danger text-dark mb-3">
					<div class="card-header">
						<h4 class="text-center">MANAGE CATEGORIES</h4>
					</div>

					<div class="card-body">
						<div class="form-group">
							<label for="title"><span  style="color: pink !important; font-family: helvetica !important;">CATEGORY TITLE</span>:</label>
							<input type="text" name="title" id="title" class="form-control" placeholder="Enter Category name" value="" >
						</div>

						<div class="row" style="min-height: 50px;">
							<div class="col-lg-6">
								<a href="dashboard.php" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"></i>BACK TO DASHBOARD</a>
							</div>

							<div class="col-lg-6">
								<button type="submit" class="btn btn-block btn-success" name="category_btn"><i class="fas fa-check"></i>PUBLISH</button>
								
							</div>
						</div>


						
					</div>
				</div>

			</form>
			
		</div>
	</div>
</section>

<!-- End of Main Area -->


<?php require "includes/partials/_footer.php" ?>

