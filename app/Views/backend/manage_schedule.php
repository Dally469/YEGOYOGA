<!--main content start-->


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
		<div class="col-md-12">
			<!-- Default box -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title"><?= $subtitle; ?></h3>

				</div>
				<div class="card-body">
					<h2 class="mb text-align-center"> Weekly Schedule From
						<?php
						$now = date("d-M-Y");

						echo $now;
						?></h2>
					<table id="example1" class="table table-borderless table-striped table-hover">

					<thead>
						<th>#</th>
						<th>Instructor name</th>
						<th>Course name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Venue</th>
						<th>Status</th>
						<th>Created</th>
						<th >Action</th>
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
								<td><?= $acc['created_at'] ;?></td>

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
						<tr>
							<td colspan="9"> <h2 class="mb text-align-center"> Send Schedule to Our Client</h2>
								<form method="POST"  action="<?=base_url('manipulate_send_schedule');?>">
									<div class="form-group">
										<textarea id="summernote" name="news_update" rows="10" cols="100" required></textarea>
										<!--                                    <textarea id="summernote" name="news_update"></textarea>-->
									</div>
									<input type="submit" class="btn btn-success btn-sm btn-block btn-sm" value="Send Mail Weekly Schedule">
								</form>

							</td>
						</tr>

						</tbody>
						<tfoot>
						<th>#</th>
						<th>Instructor name</th>
						<th>Course name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Venue</th>
						<th>Status</th>
						<th>Created</th>
						<th >Action</th>

						</tfoot>
					</table>

			</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<?= $subtitle; ?>
				</div>
				<!-- /.card-footer-->
			</div>
			<!-- /.card -->
		</div>
	</div>



</section>


  <script src="<?= base_url('assets/backend/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/sweetalert/sweetalert.min.js');?>"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>

  
  <script type="text/javascript">    
   
 
  $(function(){

    $(document).on('submit', '#sendSchedule', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('manipulate_send_schedule') ?>",
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
                            $('#sendSchedule')[0].reset();
                            window.location.reload();
                            window.location.href = "<?=base_url('admin');?>";
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
