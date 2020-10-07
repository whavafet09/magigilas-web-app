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
	background-image: url("../assets/img/modules/booster3.png")!important;
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

.tickets {
	display:table;
	margin:auto;
	margin-top:120px;
}  

@media  screen and (max-width: 999px){
	.cardx{
	height: 496px; 
	width: 999px;
	background-image: url("../assets/img/modules/booster3.png")!important;
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;

	
	}
	.tickets {
	display:table;
	margin:auto;
	margin-top:100px;
	width:800px;
	

}  

}

/* @media only screen and (min-height:768px;) {
	.cardx{
	height: 100%; 
	background-image: url("../assets/img/modules/booster.png")!important;
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;	
	}

} */

</style>
<div class="cardx" >
	<div class="content">
		<div>
		<?php
			$sql = $conn->queryOnerow("SELECT booster_ticket FROM dealer_info WHERE dealer_id=%s",$_SESSION['dealerId'])
		?>
			<img class="tickets" src="<?= $sql["booster_ticket"]?>" width="1055"  >
		</div>


	</div>
</div>

<?php
include "footer.php";
?>
					
			