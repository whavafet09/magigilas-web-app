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
	background-image: url("assets/img/login2.png");
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;
	background-attachment:fixed;
	
	 
	
}


.content {
  position: absolute;
  height:100%;
  background: rgb(0, 0, 0); 
  background: rgba(0, 0, 0, 0); 
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
.font {
	 color: #111;
	 font-family: 'Helvetica Neue', sans-serif;
	  font-weight: bold; 
	  letter-spacing: -1px; 
	  line-height: 1;
	   text-align: center;
	   }

.press_start:hover{
    transform: scale(1.1);
}
@media only screen and (min-height: 768px) {
	.cardx{
	height: 100%; 
	background-image: url("assets/img/loginbg2.png");
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;
	background-attachment:fixed;
	
	 
	
	}
	#login{
		margin-top:470px;
	}

}

@media only screen and (max-width: 999px) {
	.cardx{
	height: 522px; 
	width: 999px; 
	background-image: url("assets/img/loginbg2.png");
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;
	background-attachment:fixed;
	
	 
	
	}
	#login{
		margin-left:-90px;
		margin-top:-45px;
		
	}

}


</style>
<div class="cardx" >
	<div class="content" class="row">
		<div style="margin-left:145px; margin-top:370px;" class=" .col-xl-4">
			<form id="login" >
	
					<div class="form-group ">

						
						<input style="width:320px;" type="text" class="form-control  font press_start" id="dealerId" name="dealerId" placeholder="PLAYER LOG IN">

					</div>
				
					
					<input type="image" src="assets/img/Untitled-2.png" alt="Submit" class="press_start">
					
			
			</form>
		</div>
	</div>
</div>

<?php
include "footer.php";
?>