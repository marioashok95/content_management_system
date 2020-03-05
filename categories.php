<?php require "includes/partials/_header.php" ?>
<?php require "includes/db.php"; ?>
<?php require "includes/utilities/sessions.php"; ?>


<?php require "includes/partials/_navbar.php" ?>

<?php


if(isset($_POST['category_btn']))
{
$category_title = htmlspecialchars($_POST['title']);
$author='admin';
$date = date("Y-m-d");

if(empty($category_title))
{
	$_SESSION['successMessage']='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Field cannot be empty</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	header("Location:categories.php");

}else if(strlen($category_title)<3)
{
	$_SESSION['successMessage']='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Field must be between 4 and 100 characters </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	header("Location:categories.php");
}else{
	$sql="INSERT INTO category(title,author,date_posted) VALUES(:a,:b,:c)";
$insert_category = $connection->prepare($sql);
$result=$insert_category->execute(array(':a'=>$category_title,':b'=>$author,':c'=>$date));

if($result)
{
	$_SESSION['successMessage']='<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Record added</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	header("Location:categories.php");
}

}


}

?>

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

			<?php echo errorMessage(); ?>

			<?php

			if(isset($_SESSION['successMessage']))
	{
		echo $_SESSION['successMessage'];
	}

			?>
			
			<?php
			if(isset($result))
			{
				echo $result;
			}
			?>
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

