<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
		<?php include 'includes/navbar.php'; ?>
		
		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-sm-9">
							<?php
								if(isset($_SESSION['error'])){
									echo "
										<div class='alert alert-danger'>
											".$_SESSION['error']."
										</div>
									";
									unset($_SESSION['error']);
								}
							?>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
								<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
								</ol>
								<div class="carousel-inner">
								<div class="item active">
									<img src="images/banner1.png" alt="First slide">
								</div>
								<div class="item">
									<img src="images/banner2.png" alt="Second slide">
								</div>
								<div class="item">
									<img src="images/banner3.png" alt="Third slide">
								</div>
								</div>
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="fa fa-angle-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="fa fa-angle-right"></span>
								</a>
							</div>
							<br>
							<div class="card">
								<div class="card-body" id="home-page">
									<img src="images/banner1.png" alt="Home-Photo">
								</div>
							</div>			
						</div>
						<div class="col-sm-3">
							<?php include 'includes/sidebar.php'; ?>
						</div>
					</div>
				</section>
			
			</div>
		</div>
	
		<?php include 'includes/footer.php'; ?>	
	</div>

	<style>
		.card-body img{
			width: 100%;
    		height: 100%;
    		object-fit: cover;
    		overflow: hidden;
		}
	</style>

	<?php include 'includes/scripts.php'; ?>
</body>
</html>