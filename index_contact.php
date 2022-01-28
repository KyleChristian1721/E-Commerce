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
                            <div class="card">
								<div class="card-body">
                                    <img src="images/grayoff-photo.jpg" alt="Contact-Photo">
                                </div>
                            </div>
							<div class="card">
								<div class="card-body">
                                    <div class="card-content">								
                                        <div class="grid">
                                            <div class="col">
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h4>DO YOU HAVE ANY QUESTIONS?</h4>
                                                    </div>
                                                    <p><i><b>Sales Inquiries:</b></i>&nbsp;&nbsp;&nbsp;sales@grayoff.com <br>
                                                    <p><i><b>Customer Support:</b></i>&nbsp;&nbsp;&nbsp;support@grayoff.com <br>
                                                    <p><i><b>Shipping and Products Inquiries:</b></i>&nbsp;&nbsp;&nbsp;support@grayoff.com</p>
                                                </div>
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h4>QUICK LINKS:</h4>
                                                    </div>
                                                    <a href="https://www.grayoff-asia.com/ph/terms.php" target="_blank" rel="noopener noreferrer">Terms and Conditions</a> <br>
                                                    <a href="https://www.grayoff-asia.com/ph/privacy.php" target="_blank" rel="noopener noreferrer">Data Protection</a> <br>
                                                    <a href="https://www.grayoff-asia.com/ph/refunds.php" target="_blank" rel="noopener noreferrer">Refunds</a>
                                                </div>
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h4>CONNECT WITH US:</h4>
                                                    </div>
                                                    <span>
                                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
	    	                                        <a href="#"><i class="fab fa-instagram-square"></i></a>
                                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
		.card-body{
            background-color: #E7E6E6;
            color: #2F5B80;
            font-size: 1.2rem;
        }
        .card-content{
            padding: 15px 20px;
        }
        .faq__title h4{
            color: #2F5B80;
            font-weight: bold;
            letter-spacing: 1px;
            font-family: Poppins, sans-serif;
            padding: 3px 0px;
        }
        .faq p{
            text-align: justify;
        }
        .faq span i{
            color: #2F5B80;
            font-size: 2.3rem;
            padding-right: 5px;
        }
	</style>

	<?php include 'includes/scripts.php'; ?>
</body>
</html>