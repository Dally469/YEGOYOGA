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
					<h3 class="card-title"><?= $subtitle?></h3>

				</div>
				<div class="card-body">
					<div class="form-panel">
						<?php foreach ($instructor as $acc) {
							# code...
						}?>
						<h2 class="mb text-align-center"> New Instructor Information</h2>
						<form class="form-horizontal style-form " method="POST" action="<?= base_url("update_instructor");?>" id="create_instructor_form">
							<div class="form-group">
								<label class="control-label">Instructor profile</label>
								<div >
									<img src="<?= base_url('assets/backend/webimg/instructor/'); ?><?=$acc['profile'];?>" class="pic">
									<input type="hidden" class="form-control" name="id" value="<?= $acc['id'];?>" data-id="<?= $acc['id'];?>" required/>
									<input type="file" class="form-control" name="profile" required/>
									<input type="hidden" class="pic" name="profile" value="<?=$acc['profile'];?>">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Instructor Name</label>
								<div>
									<input type="text" class="form-control" name="name" value="<?= $acc['name'];?>" placeholder="Instructor Name" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Email</label>
								<div>
									<input type="email" class="form-control" name="email" value="<?= $acc['email'];?>" required/>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Title</label>
								<div>
									<select  name="title" class="form-control" required/>
									<option><?= $acc['title'];?></option>

									<?php
									$i = 1;
									foreach ($post as $pos) {
										?>

										<option value="<?= $pos['title'];?>" ><?= $pos['title'];?></option>
										<?php
										$i++;
									}?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Assign Class</label>
								<div>
									<select  name="class_id" class="form-control" required/>
									<option><?= $acc['class_id'];?></option>
									<?php
									$i = 1;
									foreach ($class as $c) {
										?>

										<option value="<?= $c['name'];?>"><?= $c['name'];?></option>
										<?php
										$i++;
									}?>

									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Academic Status</label>
								<div>
									<textarea class="form-control" name="academic" rows="5" required/>
									<?= $acc['academic'];?>
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<input type="submit" class="btn btn-success btn-sm btn-block" name="submit" value="Save Change">
								</div>
							</div>



						</form>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<?= $subtitle?>
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
						<thead >
						<th>#</th>
						<th>Profile</th>
						<th>Name</th>
						<th>Email</th>
						<th>Title</th>
						<th>Class</th>
						<th>Status</th>
						<th>Created</th>
						<th>Action</th>


						</thead>
						<tbody>
						<?php
						$i = 1;
						foreach ($instructors as $acc) {
							?>
							<tr id="<?=$acc['id']; ?>">
								<td><a href="#"><?= $i;?></a></td>
								<td>
									<div class="m-r-10"><img src="<?=base_url('assets/backend/webimg/instructor/');?><?=$acc['profile'];?>" alt="user" class="rounded" width="45"></div>
								</td>
								<td><a href="#"><?= $acc['name'];?></a></td>

								<td><?= $acc['email'];?></td>
								<td><?= $acc['title'];?></td>
								<td><a href="#"><?= $acc['class_id'];?></a></td>
								<td> <?php
									switch ($acc['status']) {
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
									?></td>
								<td><?=date("d-m-Y - H:i:s",$acc['created_at']);?></td>

								<td>
									<div class="btn-group">
										<a class="btn btn-warning btn-sm" href="<?= base_url('load_update_instructor/');?><?php echo $acc['id'];?>"> Update</a>
										<a class="btn btn-danger btn-sm" href="<?= base_url('deletedata/');?><?php echo $acc['id'];?>"> Delete</a>
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
						<th>Profile</th>
						<th>Name</th>
						<th>Email</th>
						<th>Title</th>
						<th>Class</th>
						<th>Status</th>
						<th>Created</th>
						<th>Action</th>
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
<!-- /.content -->
    <script src="<?= base_url('assets/backend/jquery/jquery-3.2.1.min.js'); ?>"></script>
  <script type="text/javascript">    
   
  $(function(){

    $(document).on('submit', '#create_instructor_form', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('update_instructor') ?>",
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
                            window.location.href = "<?=base_url('manage_instructor');?>";
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
