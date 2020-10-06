
$(document).on("click","#btn_add",function(){

	$(".addx").text("Add");
	$(".modal-title").text("Add Dealer Info")

  
})

$(document).on("click",".delete",function(){
	
	let dealer_id = $(this).attr("id");
	
	$("#id_here").html(dealer_id);
	

  
})

$(document).on("click",".btn_delete",function(){

	let delete_id = $("#id_here").text();

	$.ajax({
		url:"../assets/php/select_dealer.php",
		type:"POST",
		data:{
			formula:"delete_dealer",
			delete_id:delete_id

		},
		success:function(result){
			if (result == "success"){
				alert("Successfuly Delete Dealer")
				select_dealerInfo()
				$(".modal").modal("hide")
			}else{
				alert(result)
			}


		}
	})
	
})


$(document).on("click",".update",function(){
	
	let = dealer_id = $(this).attr("id");

	$(".addx").text("Update");
	$(".modal-title").text("Update Dealer Info");

	$.ajax({
		url:"../assets/php/select_dealer.php",
		type:"POST",
		data:{
			formula:"select_update",
			dealer_id:dealer_id

		},
		dataType:"JSON",
		success:function(result){

			$("#dealer_name").val(result[0].dealer_name);
			$("#dealer_area").val(result[0].dealer_area);
			$("#dealer_id").val(result[0].dealer_id);

		}
	})

  
})



$(document).on("submit","#add_dealerinfo",function(e){
	e.preventDefault();
	var formData = new FormData($(this)[0]);
	if($(".addx").text() == "Add"){
		//insert dealer
			$.ajax({
				url:"../assets/php/dealerinfo.php?formula=insert_dealerinfo",
				type:"POST",
				data: formData,
				cache: false,
				contentType: false,
				processData: false, 
				success:function(result){
					alert(result)
					select_dealerInfo()
					$("#add_dealerinfo")[0].reset()
					$(".modal").modal("hide")

		
				}
		
			})

		
	}else{
		//update dealer
		$.ajax({
			url:"../assets/php/dealerinfo.php?formula=update_dealerinfo",
			type:"POST",
			data: formData,
			cache: false,
			contentType: false,
			processData: false, 
			success:function(result){
				alert(result);
				select_dealerInfo()
				$("#add_dealerinfo")[0].reset()
				$(".modal").modal("hide")
	
			}
	
		})
		
	}

})


select_dealerInfo()
function select_dealerInfo(){
	
	$.ajax({
		url:"../assets/php/select_dealer.php",
		type:"post",
		data:{
			formula:"select_dealer_Info"
		},
		dataType:"JSON",
		success:function(result){
			console.log(result)
			construct_select_dealerInfo(result)
		}
	})

}

function construct_select_dealerInfo(result){

	
	var str ="";

	if(!$.isEmptyObject(result)){

			result.forEach(function(x){

				str += "<tr>"+
				"<td>"+
                      x.dealer_id+
                 "</td>"+
                 "<td>"+
					  x.dealer_name+
                 "</td>"+
                  "<td>"+
				  	  x.dealer_area+
                  "</td>"+
				  "<td>"+
				  	"<img height='90'  src='" +x.profile_pic+"'  >"+
                 "</td>"+
                  "<td >"+
				  "<img height='90'   src='" +x.profile_level+"'  >"+
				  "</td>"+
				  "<td >"+
				  "<img height='90'   src='" +x.booster_ticket+"'  >"+
                  "</td>"+
                  "<td>"+
				  "<a class='update' id='"+x.dealer_id+"'  data-toggle='modal' data-target='#modal_dealer' ><i class='fas fa-edit' style='color:#01579b;'></i></a>"+
				  "<a class='delete' id='"+x.dealer_id+"'  data-toggle='modal' data-target='#modal_delete' ><i class='fas fa-trash' style='color:red;'></i></a>"+

				 "</td>"+
                "</tr>"
			})

		}
		$("#myTable").DataTable().destroy();
		$("#load_dealerinfo").empty().html(str);
		$("#myTable").DataTable({
			"lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
			dom: 'lBfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});	


}