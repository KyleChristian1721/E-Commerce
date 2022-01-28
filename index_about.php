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
									<img src="images/banner1.png" alt="Home-Photo">
								</div>
							</div>
                            <div class="card">
								<div class="card-body">
									<img src="images/banner2.png" alt="Home-Photo">
								</div>
							</div>
                            <div class="card">
								<div class="card-body">
									<img src="images/banner3.png" alt="Home-Photo">
								</div>
							</div>
                            <div class="card">
								<div class="card-body">
									<img src="images/banner4.png" alt="Home-Photo">
								</div>
							</div>
                            <div class="card">
								<div class="card-body">
									<img src="images/banner5.png" alt="Home-Photo">
								</div>
							</div>
							<div class="card">
								<div class="card-body">
                                    <div class="card-content">								
                                        <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
                                        <div class="grid">
                                            <div class="col">
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h5>How GrayOFF helps your hair?</h5>
                                                    </div>
                                                    <p>All hair regardless of its colour contains a colouring pigment. The application of GrayOFF spray, allows the production of colouring pigment, which accumulates with each successive application.</p>
                                                </div>
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h5>How does GrayOFF restore the natural hair colour?</h5>
                                                    </div>
                                                    <p>When applied onto the hair, GrayOFF combines with the basic hair protein – keratin – to form a pigment, the amount of which increases after every use.</p>
                                                </div>
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h5>When to expect visible results from using GrayOFF spray?</h5>
                                                    </div>
                                                    <p>The process of colour restoration with GrayOFF spray begins immediately, but the colour returns gradually and the results are enhanced with each successive application.</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h5>What makes GrayOFF better than other products?</h5>
                                                    </div>
                                                    <p>GrayOFF includes only natural products that work locally to increase the production of melanin and stop the process of discoloration, making it also the perfect prevention method. This is why GrayOFF has no analogue on the market.</p>
                                                </div>
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h5>Is GrayOFF suitable for both men and women?</h5>
                                                    </div>
                                                    <p>Yes, our research shows that Gray Off provides excellent results for both men and women.</p>
                                                </div>
                                                <div class="faq">
                                                    <div class="faq__title">
                                                        <h5>Where can I buy GrayOFF spray?</h5>
                                                    </div>
                                                    <p>GrayOFF is available only here, on it’s official website. For your comfort and security, the payment is upon delivery and you even get the delivery for free!</p>
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
            background-color: lightgray;
            color: #2F5B80;
        }
        .card-content{
            padding: 15px 20px;
        }
        h2.section-title{
            font-family: Poppins, sans-serif;
            text-align: center;
            font-weight: bold;
            margin: 0px 0px 15px;
        }
        .faq__title{
            background-color: gray;
        }
        .faq__title h5{
            color: white;
            font-family: Poppins, sans-serif;
            padding: 6px 6px;
        }
        .faq p{
            text-align: justify;
        }
	</style>

	<?php include 'includes/scripts.php'; ?>
</body>
</html>