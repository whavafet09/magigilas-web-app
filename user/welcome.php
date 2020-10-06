<?php
include "header.php";
?>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;

}


.content {
  position: absolute;
  background: rgba(0, 0, 0, 0.1);
  background-image: url("../assets/img/wecomebg.png");
  background-position: center;
  background-repeat: no-repeat;
 	background-size: cover;
  width: 100%;
  height:663px;
  padding: 20px;
}

#welcome{
		margin-top:370px;
	}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
.press_start:hover{
    transform: scale(1.1);
}

@media only screen and (min-height: 768px) {
  .content {
  position: absolute;
  background: rgba(0, 0, 0, 0.1);
  background-image: url("../assets/img/wecomebg.png");
  background-position: center;
  background-repeat: no-repeat;
 	background-size: cover;
  width: 100%;
  height:768px;
  padding: 20px;
}
  
	#welcome{
		margin-top:460px;
	}

}

@media only screen and (max-width: 991px) {
  .content {
  position: absolute;
  background: rgba(0, 0, 0, 0.1);
  background-image: url("../assets/img/wecomebg.png");
  background-position: center;
  background-repeat: no-repeat;
 	background-size: cover;
  width: 991px;
  height:529px;
  
}
#welcome{
		margin-top:270px;
	}



}
</style>   

<div class="content">
    <div >
		
        <div id="welcome"  class="form-group ">
                 <img style="margin:auto; display:table;" src="../assets/img/welcome.png"  >		
    			
          <a href="index.php"><img class="press_start" style="margin:auto; display:table;" src="../assets/img/start.png"></a>
        
        </div>
    </div>    


</div>



<?php
include "footer.php";
?>
					
			