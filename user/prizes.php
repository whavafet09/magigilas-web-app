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
	background-color:skyblue;
	background-image: url("../assets/img/prizes.png")!important;
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
.carou{
    margin-top:115px;
}

@media  screen and (max-width: 999px){
	.cardx{
	height: 496px; 
	width: 999px;
	background-image: url("../assets/img/prizes.png")!important;
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;
	}
    .carou{
        width:670px;
        display:table;
        margin:auto;
        margin-top:100px;
  

    }


}

/* @media only screen and (max-height:1366px;) {
	.cardx{
	height: 768px; 
	width: 1366px;
	background-image: url("../assets/img/prizes2.png")!important;
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;	
	}

} */

</style>
<div class="cardx" >
	<div class="content">
   
                <div id="demo" class="carousel slide carou" data-ride="carousel" style="width:950px; dispaly:table;margin:auto; " >
								<ul class="carousel-indicators">
									<li data-target="#demo" data-slide-to="0" class="active"></li>
									<li data-target="#demo" data-slide-to="1"></li>
									<li data-target="#demo" data-slide-to="2"></li>
                                    					<li data-target="#demo" data-slide-to="3"></li>
									<li data-target="#demo" data-slide-to="4"></li>
									<li data-target="#demo" data-slide-to="5"></li>
									<li data-target="#demo" data-slide-to="6"></li>
									<li data-target="#demo" data-slide-to="7"></li>
									<li data-target="#demo" data-slide-to="8"></li>
		
								</ul>

								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="banner carou" src="../assets/img/prizes/prizes1.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
									<div class="carousel-item">
										<img class="banner carou" src="../assets/img/prizes/prizes2.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
									<div class="carousel-item">
										<img class="banner carou" src="../assets/img/prizes/prizes3.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
                                    					<div class="carousel-item">
										<img class="banner carou" src="../assets/img/prizes/prizes4.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
									<div class="carousel-item">
										<img class="banner carou" src="../assets/img/prizes/prizes5.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
									<div class="carousel-item">
										<img class="banner carou" src="../assets/img/prizes/prizes6.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
                                    					<div class="carousel-item">
										<img class="banner carou" src="../assets/img/prizes/prizes7.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
									<div class="carousel-item">
										<img class="banner carou" src="../assets/img/prizes/prizes8.png"  >
										<div class="carousel-caption">
										</div>   
									</div>
                                    					<div class="carousel-item">
										<img class="banner carou" src="../assets/img/prizes/prizes9.png"  >
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
</div>

<?php
include "footer.php";
?>
					
			
