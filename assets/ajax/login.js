$(document).ready(function(){

	$(document).on("submit","#login",function(e){

		e.preventDefault();


		var dealerId =  $("#dealerId").val();
	



		$.ajax({
			url:"assets/php/login.php",
			type:"POST",
			data:{
				formula:"select_login",
				dealerId:dealerId},
			success:function(result){
				if (result == "success") {

					window.location = "user/welcome.php";

				}
				else if (result == "invalid"){
					swal("Player ID does not exist", {
					  icon : "error",
					  buttons: {
					    confirm: {
					      className : 'btn btn-success'
					    }
					  },
					})
				}
				else if (result == "null"){
					swal("Please Input Player Id", {
					  icon : "warning",
					  buttons: {
					    confirm: {
					      className : 'btn btn-success'
					    }
					  },
					})
				}
				else{

					alert(result);

				}

			}

		})








	})



});
