
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
						<h3 class="card-title"><?= $title?></h3>

					</div>
					<div class="card-body">
						<form class="form-horizontal style-form " method="POST" enctype="multipart/form-data" action="<?= base_url("manipulate_class");?>" >

							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Class Name</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" name="name" placeholder="Class Name" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Class profile</label>
								<div class="col-sm-12">
									<input type="file" class="form-control" name="photo" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Days</label>
								<div class="col-sm-12">
									<select  name="days" class="form-control" required/>
									<option>Select Work Days</option>
									<option value="Monday">Monday</option>
									<option value="Tuesday">Tuesday</option>
									<option value="Wednesday">Wednesday</option>
									<option value="Thurday">Thurday</option>
									<option value="Friday">Friday</option>

									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Time</label>
								<div class="col-sm-12">
									<input type="text" class="form-control" name="time" placeholder="Work from 08h00 - 14h00" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Session Cost</label>
								<div class="col-sm-12">
									<input type="number" class="form-control" name="cost" placeholder="Cost amount from Session" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Class Description</label>
								<div class="col-sm-12">
									<textarea class="form-control" name="desc" id="summernote" rows="3" required/></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Instructor Name</label>
								<div class="col-sm-12">
									<select  name="inst_name" class="form-control" required/>
									<option>Select Instructor Name</option>
									<?php
									$i = 1;
									foreach ($class as $class) {
										?>

										<option ><?= $class['name'];?></option>
										<?php
										$i++;
									}?>

									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Instructor Title</label>
								<div class="col-sm-12">
									<select  name="inst_title" class="form-control" required/>
									<option>Select Instructor Title</option>
									<?php
									$i = 1;
									foreach ($post as $pos) {?>
										<option value="<?= $pos['title'];?>"><?= $pos['title'];?></option>
										<?php
										$i++;
									}?>


									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-12 col-sm-12 control-label">Class profile</label>
								<div class="col-sm-12">
									<input type="file" class="form-control" name="inst_profile" required/>
								</div>
							</div>
							<div class="form-group">

								<div class="col-sm-12">
									<input type="submit" class="btn btn-info btn-sm btn-block" name="submit" value="Create Class">
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
						<h3 class="card-title"><?= $subtitle?></h3>

					</div>
					<div class="card-body">
						<table  id="example1" class="table table-borderless table-hover">
							<thead>
								<th>#</th>
								<th>Profile</th>
								<th>Class </th>
								<th>Days</th>
								<th>Time</th>
								<th>Description</th>
								<th>Inst Profile</th>
								<th>Instructor </th>
								<th>Instructor title</th>
								<th>Status</th>
								<th>Created</th>
								<th>Action</th>
							</thead>
							<tbody>
							<?php $i = 1; foreach ($classes as $row):?>
								<tr>
									<td><?= $i;?></td>
									<td>
										<div class="m-r-10"><img src="<?=base_url('assets/backend/webimg/class');?>/<?=$row['photo'];?>" alt="user" class="rounded" width="45"></div>
									</td>
									<td><?= $row['name'];?></td>
									<td><?= $row['days'];?></td>
									<td><?= $row['time'];?></td>
									<td><?php
										$pos = 40;
										echo substr($row['desc'], 0 , $pos);
										?></td>
									<td>
										<div class="m-r-10"><img src="<?=base_url('assets/backend/webimg/class');?>/<?=$row['inst_profile'];?>" alt="user" class="rounded" width="45"></div>
									</td>
									<td><?= $row['inst_name'];?></td>
									<td><?= $row['inst_title'];?></td>
									<td>
										<?php
										switch ($row['status']) {
											case 0:
												echo '<span class="badge badge-dark">Locked</span> ';
												break;
											case 1:
												echo '<span class="badge badge-success">Active</span> ';
												break;

											default:
												echo "None";
												break;
										}
										?>
									</td>
									<td><?= $row['created_at'];?></td>
									<td>
										<div class="btn-group">
											<a class="btn btn-warning btn-sm" href="<?= base_url('load_update_class/');?><?php echo $row['id'];?>"> Update</a>
											<a class="btn btn-danger btn-sm" href="<?= base_url('deletedata/');?><?php echo $row['id'];?>"> Delete</a>
										</div>
									</td>
								</tr>

							<?php $i++; endforeach;?>
							</tbody>
							<tfoot>
								<th>#</th>
								<th>Profile</th>
								<th>Class Name</th>
								<th>Days</th>
								<th>Time</th>
								<th>Description</th>
								<th>Inst Profile</th>
								<th>Instructor name</th>
								<th>Instructor title</th>
								<th>Status</th>
								<th>Created</th>
								<th>Action</th>
							</tfoot>
						</table>

					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<?= $subtitle?>
					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->
			</div>
		</div>



	</section>
	<!-- /.content -->

    <script src="<?= base_url('assets/backend/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/backend/sweetalert/sweetalert.min.js');?>"></script>

  
   <script type="text/javascript">    
   
  $(function(){

    $(document).on('submit', '#create_instructor_form', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('manipulate_class') ?>",
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
                            window.location.href = "<?=base_url('add_class');?>";
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
