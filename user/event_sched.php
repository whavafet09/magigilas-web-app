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
	background-image: url("../assets/img/sched3.png");
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

.event_sched {
	display:table;
	margin:auto;
	margin-top:120px;
}  



@media only screen and (max-width:999px) {
	.cardx{
	height: 496px; 
	width: 999px;
	background-image: url("../assets/img/sched3.png");
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;
		 	
	}
	.event_sched {
	display:table;
	margin:auto;
	margin-top:90px;
	width:700px;
} 
 




} 

</style>
<div class="cardx" >
	<div class="content">
		<div>
			<img class="event_sched" src="../assets/img/sched/event.png" width="950"  >
		</div>


	</div>
</div>

<?php
include "footer.php";
?>
					
			