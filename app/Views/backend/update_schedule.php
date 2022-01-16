<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1><?= $title?></h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url('admin')?>">Dashbaord</a></li>
					<li class="breadcrumb-item active"><?= $subtitle?></li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-5">
			<!-- Default box -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title"><?= $subtitle?></h3>

				</div>
				<div class="card-body">
					<?php foreach ($instructor as $schl) {
						# code...
					}?>
					<form id="create_instructor_form" action="<?=base_url('updates_schedule');?>" method="POST" class="singup-form">
						<div class="row">
							<label class="col-sm-12 col-sm-12 control-label"> <strong>Instructor Name</strong> </label>
							<div class="col-md-12">

								<input type="hidden" name="id"  class="form-control" data-id="<?= $schl['id'];?>" value="<?= $schl['id'];?>" placeholder="Your Email">
								<select  name="instructor" class="form-control"/>
								<option value="<?= $schl['instructor'];?>"><?= $schl['instructor'];?></option>
								<?php
								$i = 1;
								foreach ($names as $inst) {
									?>

									<option value="<?= $inst['name'];?>"><?= $inst['name'];?></option>
									<?php
									$i++;
								}?>

								</select>
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong> Class </strong> </label>
							<div class="col-md-12">

								<select  name="class" class="form-control" />
								<option value="<?= $schl['class'];?>"><?= $schl['class'];?></option>
								<?php
								$i = 1;
								foreach ($class as $acc) {
									?>

									<option ><?= $acc['name'];?></option>
									<?php
									$i++;
								}?>

								</select>
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong>Set Date</strong> </label>
							<div class="col-md-12" ng-app="myApp">

								<input type="text" id="date" name="date" value="<?= $schl['date']?>" class="form-control" datepicker placeholder="Select a Date" ng-model="datevalue" />
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong>Set Time from</strong> </label>
							<div class="col-md-12">

								<input type="time" name="fromtime" value="<?= $schl['fromtime']?>" class="form-control" placeholder="Phone Number">
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong>Set Time to</strong> </label>
							<div class="col-md-12">

								<input type="time" name="totime" value="<?= $schl['totime']?>" class="form-control" placeholder="Phone Number">
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong>Venue</strong> </label>
							<div class="col-md-12">

								<input type="text" name="venue" value="<?= $schl['venue'];?>" class="form-control" placeholder="Address Location">

							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong>Change Setting</strong> </label>
							<div class="col-md-12">

								<select name="status" class="form-control" required/>
								<option value="1"> Activate </option>
								<option value="0"> De-activate </option>

								</select>
								<hr>
							</div>


							<div class="col-md-12">
								<input type="submit" class="btn btn-success btn-sm btn-block" value="Update Changes">
							</div>
						</div>
					</form>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					Footer
				</div>
				<!-- /.card-footer-->
			</div>
			<!-- /.card -->
		</div>
		<div class="col-md-7">
			<!-- Default box -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title"><?= $subtitle; ?></h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fas fa-times"></i></button>
					</div>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-borderless table-hover">
						<thead>
						<th>#</th>
						<th>Instructor</th>
						<th>Course </th>
						<th>Date</th>
						<th>Time</th>
						<th>Venue</th>
						<th>Status</th>
						<th>Created</th>
						<th>Action</th>


						</thead>
						<tbody>
						<?php
						$i = 1;
						foreach ($schedule as $acc) {
							?>
							<tr id="<?=$acc['id']; ?>">
								<td><a href="#"><?= $i;?></a></td>
								<td><a href="#"><?= $acc['instructor'];?></a></td>

								<td><?= $acc['class'];?></td>
								<td><?= $acc['date'];?></td>
								<td><?= $acc['fromtime']." - ".$acc['totime'];?></td>
								<td><?= $acc['venue'];?></td>
								<td>
									<?php
									switch ($acc['status']) {
										case 0:
											echo '<strong style="color:red;"> Canceled </strong>';
											break;
										case 1:
											echo '<strong style="color:green;"> Active </strong>';
											break;
										default:
											echo "None";
											break;
									}
									?></td>
								<td><?=date("d-m-Y - H:i:s",$acc['created_at']);?></td>

								<td>
									<div class="btn-group">
										<a class="btn btn-warning btn-sm" href="<?= base_url('load_update_schedule/');?><?php echo $acc['id'];?>"> Update</a>
										<a class="btn btn-danger btn-sm" href="<?= base_url('load_update_schedule/');?><?php echo $acc['id'];?>"> Cancel</a>
									</div>
								</td>
							</tr>
							<?php
							$i++;
						}

						?>


						</tbody>
						<tfoot>
						<th>#</th>
						<th>Instructor</th>
						<th>Course </th>
						<th>Date</th>
						<th>Time</th>
						<th>Venue</th>
						<th>Status</th>
						<th>Created</th>
						<th>Action</th>

						</tfoot>
					</table>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<?= $subtitle; ?>				</div>
				<!-- /.card-footer-->
			</div>
			<!-- /.card -->
		</div>
	</div>



</section>
<!-- /.content -->

    <script src="<?= base_url('assets/backend/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/sweetalert/sweetalert.min.js');?>"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>

  

  
  <script type="text/javascript">    
   
  $(function(){

    $(document).on('submit', '#create_instructor_form', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('updates_schedule') ?>",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache:false,
                async:false,
                success: function (data) {

                    var json = null;
                    try {
                        json = JSON.parse(data);
                        if (json.hasOwnProperty("error")) {
                            done(json.error);
                        } else {
                            done(json.success);
                            $('#acc_model').hide();
                            $('#create_instructor_form')[0].reset();
                            window.location.reload();
                            window.location.href = "<?=base_url('manage_schedule');?>";
                        }
                    } catch (e) {
                        alert("System error please try again later");
                        console.log(e);
                    }
                }
            });
        });
 
  }) ;

 
 function done(value)
  {
   swal({
  name: "Oops!!",
  text:value ,
  type: "success",
  closeOnConfirm:false

          });
  }



  function myFunction() { 
       
        $("#update_guide_model").modal("show");
} 


</script>
<script>
    var myApp = angular.module('myApp', []);

    myApp.directive("datepicker", function () {

        function link(scope, element, attrs, controller) {
            // CALL THE "datepicker()" METHOD USING THE "element" OBJECT.
            element.datepicker({
                onSelect: function (dt) {
                    scope.$apply(function () {
                        // UPDATE THE VIEW VALUE WITH THE SELECTED DATE.
                        controller.$setViewValue(dt);
                    });
                },
                dateFormat: 'DD, d MM, yy'      // SET THE FORMAT.
            });
        }

        return {
            require: 'ngModel',
            link: link
        };
    });
</script>
