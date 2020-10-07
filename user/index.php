<?php
include "header.php";
?>

<style>
body, html {
  height: 100%;
  margin:auto;

}


.cardx{
	height: 100%;
	background-image: url("../assets/img/profilebg2.png");
	background-position: center;
  	background-repeat: no-repeat;
 	background-size: cover;
	position:relative;


}


.content {
  position: absolute;
  height:100%;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0,0); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

.banner{
	width: auto;
	height: auto;
}	
.press_start:hover{
    transform: scale(1.1);
}   

@media only screen and (max-height:522px) {
	.cardx{
	height: 496px; 
	width: 999px;
	background-image: url("../assets/img/profilebg2.png");
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;

	
	 
	
	}
	.profilex{
		width:250px !important;
	}
	.levelx{
		width:350px !important;
	}
	.carou{
		width:350px !important;
		height:200px !important;

		
	}
	.modulesx{
		width:250px !important;
				
	}
	.buttonx{
		margin-top:170px !important;
		margin-left:40px;
	}



}

</style>
<div class="cardx" >
	<div class="content">
		<div class="">

		
			<div class="">
	   			<div class="row">
				   <div class="col-md-4  ">
					   <?php
					   		$sql = $conn->queryOnerow("SELECT profile_pic FROM dealer_info WHERE dealer_id=%s",$_SESSION['dealerId'])
					   ?>
				  		<img class="profilex" src="<?=$sql['profile_pic']?>"  >
					</div>

					<div class="col-md-4 ">
						<div>
							<?php
								$sql = $conn->queryOnerow("SELECT profile_level FROM dealer_info WHERE dealer_id=%s",$_SESSION['dealerId'])
							?>
							<img class="levelx"  src="<?=$sql['profile_level']?>" style="display:table;margin:auto;" >
						</div>
							<br>
							<br>
														
							<div id="demo" class="carousel slide carou" data-ride="carousel" style="width:450px;" >
								<ul class="carousel-indicators">
									<li data-target="#demo" data-slide-to="0" class="active"></li>
									<li data-target="#demo" data-slide-to="1"></li>
									<li data-target="#demo" data-slide-to="2"></li>
		
								</ul>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="banner carou" src="../assets/uploads/banner/banner1.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
									<div class="carousel-item">
										<img class="banner carou" src="../assets/uploads/banner/banner2.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
									<div class="carousel-item">
										<img class="banner carou" src="../assets/uploads/banner/banner3.png"  >
										<div class="carousel-caption">
										</div>   
									</div>

								</div>
									<a class="carousel-control-prev" href="#demo" data-slide="prev">
										<span class="carousel-control-prev-icon"></span>
									</a>
									<a class="carousel-control-next" href="#demo" data-slide="next">
										<span class="carousel-control-next-icon"></span>
									</a>
							</div>
					

					</div>


					<div class="col-md-4 modulesx " >
				
						<div style="margin-top:230px; margin-left:40px;" class="buttonx">
						
						
									<a href="playvideos.php">
										<img class="press_start modulesx" src="../assets/img/buttons/playvideos.png" style="display:table;margin:auto;">
									</a>
									<a href="booster.php">
										<img class="press_start modulesx" src="../assets/img/buttons/booster.png" style="display:table;margin:auto;">
									</a>
									<a href="event_sched.php">
										<img class="press_start modulesx" src="../assets/img/buttons/eventsched.png" style="display:table;margin:auto;">
									</a>
									<a href="prizes.php" >
										<img class="press_start modulesx" src="../assets/img/buttons/prizes.png" style="display:table;margin:auto;">
									</a>
									<a href="../assets/php/logout.php" >
										<img class="press_start modulesx" src="../assets/img/buttons/logout.png" style="display:table;margin:auto;">
									</a>
										
					
						</div>
					</div>
				</div>	
			</div>
		</div>


	</div>
</div>

<?php
include "footer.php";
?>
					
			