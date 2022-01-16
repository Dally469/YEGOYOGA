<style type="text/css">
                      .pic{
                        width: 150px;
                        height: 150px;
                        margin: 10px;
                        border-radius: 10px;
                        border: 2px green solid;
                      }
                    </style>

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
					<h3 class="card-title">Title</h3>

				</div>
				<div class="card-body">

					<?php foreach ($class as $acc) {
						# code...
					}?>
					<form class="form-horizontal style-form " method="POST" action="<?= base_url("update_class");?>" id="create_instructor_form">

						<div class="form-group">
							<label class="col-sm-12 col-sm-12 control-label">Class Name</label>
							<div class="col-sm-12">
								<input type="hidden" class="form-control" name="id" data-id="<?= $acc["id"]?>" value="<?= $acc["id"]?>" required/>
								<input type="text" class="form-control" name="name"  value="<?= $acc["name"]?>" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 col-sm-12 control-label">Class profile</label>
							<div class="col-sm-12">
								<img src="<?= base_url('assets/backend/webimg/class/'); ?><?=$acc['photo'];?>" class="pic">
								<input type="file" class="form-control" name="photo"  required/>
								<input type="hidden" class="pic" name="photo" value="<?=$acc['photo'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 col-sm-12 control-label">Days</label>
							<div class="col-sm-12">
								<select  name="days" class="form-control" required/>
								<option><?= $acc["days"]?></option>
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
								<input type="text" class="form-control" name="time" value="<?= $acc["time"]?>" required/>
							</div>

						</div>

						<div class="form-group">
							<label class="col-sm-12 col-sm-12 control-label">Cost Amout</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="cost" value="<?= $acc["cost"]?>" required/>
							</div>

						</div>

						<div class="form-group">
							<label class="col-sm-12 col-sm-12 control-label">Class Description</label>
							<div class="col-sm-12">
								<textarea class="form-control" id="summernote" name="desc" rows="6" required/>
								<?= $acc["desc"]?>
								</textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 col-sm-12 control-label">Instructor Name</label>
							<div class="col-sm-12">
								<select  name="inst_name" class="form-control" required/>
								<option><?= $acc["inst_name"]?></option>
								<?php
								$i = 1;
								foreach ($name as $n) {?>
									<option ><?= $n['name'];?></option>
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
								<option><?= $acc["inst_title"]?></option>
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
								<img src="<?= base_url('assets/backend/webimg/class/'); ?><?=$acc['inst_profile'];?>" class="pic">
								<input type="file" class="form-control" name="inst_profile" required/>
								<input type="hidden" class="pic" name="inst_profile" value="<?=$acc['inst_profile'];?>">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12"></div>
							<div class="col-sm-12">
								<input type="submit" class="btn btn-success btn-sm btn-block" name="submit" value="Save">
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
					<table id="example1" class="table table-bordered table-striped">
						<thead class=" text-primary">
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
									<div class="m-r-10"><img src="<?=base_url('assets/backend/webimg/class/');?><?=$row['photo'];?>" alt="user" class="rounded" width="45"></div>
								</td>
								<td><?= $row['name'];?></td>
								<td><?= $row['days'];?></td>
								<td><?= $row['time'];?></td>
								<td><?= $row['desc'];?></td>
								<td>
									<div class="m-r-10"><img src="<?=base_url('assets/backend/webimg/class/');?><?=$row['inst_profile'];?>" alt="user" class="rounded" width="45"></div>
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
								<td><?=date("d-m-Y - H:i:s",$row['created_at']);?></td>
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

    <script src="<?= base_url('assets/backend/jquery/jquery-3.2.1.min.js'); ?>"></script>
  <script type="text/javascript">    
   
  $(function(){

    $(document).on('submit', '#create_instructor_form', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('update_class') ?>",
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
                            window.location.href = "<?=base_url('manage_class');?>";
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
