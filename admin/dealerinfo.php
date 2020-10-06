<?php
include "header.php";
?>

<div class="main-panel">
	<div class="content">
			<div class="page-inner">

				<div>
					<ul class="breadcrumbs">
						<li class="nav-home">
							<a href="index.php">
								<i class="flaticon-home"></i>
							</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="realtime.php">Dealer Information</a>
						</li>
					</ul>
				</div>
				<hr>
				
				<div class="row mb-3">
					<div class="col-lg-12">
						<button id="btn_add" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal_dealer" >Add</button>
					</div>
				</div>

				<!-- Modal Add Dealer -->
				<div class="modal fade" id="modal_dealer" tabindex="-1" role="dialog"  aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form id="add_dealerinfo">
								<div class="modal-body">
									<input id="dealer_id" name="dealer_id" type='text' style="display:none;">
									<div class="row">
										<div class="form-group form-floating-label col-12">
											<input onkeyup="this.value = this.value.toUpperCase();" id="dealer_name"  name="dealer_name" type="text" class="form-control " autocomplete="off" >
											<label for="dealer_name" class="placeholder">Dealer Name</label>
										</div>
										<div class="form-group form-floating-label col-12">
											<input onkeyup="this.value = this.value.toUpperCase();" id="dealer_area"  name="dealer_area" type="text" class="form-control " autocomplete="off" >
											<label for="dealer_area" class="placeholder">Dealer Area</label>
										</div>	

										<div class="form-group form-floating-label col-12">
											<input onkeyup="this.value = this.value.toUpperCase();" id="profile_pic"  name="profile_pic" type="file" class="form-control " autocomplete="off" >
											<label for="profile_pic" class="placeholder">Profile Picture</label>
										</div>

										<div class="form-group form-floating-label col-12">
											<input onkeyup="this.value = this.value.toUpperCase();" id="profile_level"  name="profile_level" type="file" class="form-control " autocomplete="off" >
											<label for="profile_level" class="placeholder">Profile Level</label>
										</div>

										<div class="form-group form-floating-label col-12">
											<input onkeyup="this.value = this.value.toUpperCase();" id="booster_ticket"  name="booster_ticket" type="file" class="form-control " autocomplete="off" >
											<label for="booster_ticket" class="placeholder">Booster Ticket</label>
										</div>

											
									</div>

										
								</div>
								<div class="modal-footer">
									<button class="addx btn btn-primary"></button>
								</div>
						
								</div>

							</form>
						</div>
					</div>
				</div>

				<!-- Modal Delete -->
				<div class="modal fade" id="modal_delete" tabindex="-1" role="dialog"  aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h3>Are you sure you want to delete this dealer id <b><span id="id_here"></span></b> permanently?</h3>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary btn_delete">Delete</button>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<h5 class="card-header">Dealer  Info</h5>
					<div class="card-body" >


						<div class="table-responsive">
							<table class="table-bordered table-bordered-bd-warning mt-4" id="myTable">
								<thead style="font-size: 12px !important;text-align: center;" >
									<tr>
										<th style="vertical-align: center;width: 5%">Dealer ID</th>
										<th style="vertical-align: center;width: 10%">Dealer Name</th>
										<th style="vertical-align: center;width: 10%" >Dealer Area</th>
										<th style="vertical-align: center;width: 5%">Profile</th>
                                        <th style="vertical-align: center;width: 5%">Level</th>
										<th style="vertical-align: center;width: 5%">Booster Ticket</th>
										<th style="vertical-align: center;width: 5%">Action</th>
                           
                                        
                                        
										
									</tr>
								</thead>
								<tbody id="load_dealerinfo" style="text-align: center; color:black">
									
								</tbody>
							</table>
						</div>

					</div>
				</div>

			</div>



<?php
include "footer.php";
?>
