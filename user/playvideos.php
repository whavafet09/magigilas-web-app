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
	background-image: url("../assets/img/bgvideo2.png");
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
.modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }



.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}
@media only screen and (max-width:999px) {
	.cardx{
	height: 496px; 
	width: 999px;
	background-image: url("../assets/img/bgvideo2.png");
	background-position: center center;
  	background-repeat: no-repeat;
 	background-size: cover;
		 	
	}
    .vid{
        width:250px;
        height:130px;
    }




}


</style>
<div class="cardx" >
	<div class="content">
    
    <div class="row " style="margin-top:120px;">
        <div class="col-md-4 ">
            <iframe class="vid" style="display:table;margin:auto;" src="https://www.youtube.com/embed/-1HhPjXN83g"  width="300" height="190" frameborder="0"  allowfullscreen></iframe>
        </div>


        <div class="col-md-4 ">
            <iframe class="vid" style="display:table;margin:auto;" src="https://www.youtube.com/embed/1fH1J866zRI" width="300" height="190" frameborder="0"  allowfullscreen></iframe>
        </div>

        <div class="col-md-4 ">
            <iframe class="vid" style="display:table;margin:auto;" src="https://www.youtube.com/embed/wEaRWfwBywY" width="300" height="190" frameborder="0"  allowfullscreen></iframe>
        </div>
    
    </div>
        <br>
    <div class="row" >
        <div class="col-md-4 ">
            <iframe class="vid" style="display:table;margin:auto;" src="https://www.youtube.com/embed/2ofS2E9ty9o?start=3" width="300" height="190" frameborder="0"  allowfullscreen></iframe>
        </div>


        <div class="col-md-4 ">
            <iframe class="vid" style="display:table;margin:auto;" src="https://www.youtube.com/embed/wLFjw2YdMS8" width="300" height="190" frameborder="0"  allowfullscreen></iframe>
        </div>

        <div class="col-md-4 ">
        <iframe class="vid" style="display:table;margin:auto;" src="https://www.youtube.com/embed/vbhrJimC5J0" width="300" height="190" frameborder="0"  allowfullscreen></iframe>
        </div>
    
    </div>         
    
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
    Play Video 2
    </button> -->
    
        <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/IP7uGKgJL8U" data-target="#myModal">
    Play Video 2
    </button> -->
    
    
        <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/A-twOC3W558" data-target="#myModal">
    Play Video 3
    </button> -->
    
    

    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
    
        
        <div class="modal-body">
    
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>        
            <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
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
<script>
$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});



</script>
					
			