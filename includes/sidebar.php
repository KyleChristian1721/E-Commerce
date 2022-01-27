<div class="row">
	<div class="box box-solid">
	  	<div class="box-header">
	    	<h3 class="box-title">Most Viewed Today</h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<style>
	.box{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}
	.box-header{
		background-color: gray;
		color: white;
		text-align: center;
	}
	.box-header h3{
		font-family: 'Poppins', sans-serif;
	}
</style>
