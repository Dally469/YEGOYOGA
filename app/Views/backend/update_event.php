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
					<?php foreach ($event as $eve) {
						# code...
					}?>
					<form id="create_instructor_form" action="<?=base_url('update_event');?>" method="POST" class="singup-form">

						<div class="row">
							<label class="col-sm-12 col-sm-12 control-label">Event profile</label>
							<div class="col-sm-12">
								<input type="hidden" name="id" value="<?= $eve['id'];?>" data-id="<?= $eve['id'];?>" class="form-control" placeholder="Write Event name">
								<img src="<?= base_url('assets/backend/webimg/event/'); ?><?=$eve['photo'];?>" class="pic">
								<input type="hidden" class="pic" name="photo" value="<?=$eve['photo'];?>">
								<input type="file" class="form-control" name="photo" value="<?=$eve['photo'];?>" required/>
							</div>

							<label class="col-sm-12 col-sm-12 control-label"> <strong>Event Name</strong> </label>
							<div class="col-md-12">
								<input type="text" name="name" value="<?= $eve['name'];?>" class="form-control" placeholder="Write Event name">
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong> Event hoster </strong> </label>
							<div class="col-md-12">

								<input type="text" name="host" class="form-control" value="<?= $eve['host'];?>" placeholder="Write hoster name">
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong>Description</strong> </label>
							<div class="col-md-12">
                <textarea id="summernote" name="description">
                  <?= $eve['description'];?>
                </textarea>

							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong>Date</strong> </label>
							<div class="col-md-12">

								<input type="date" name="date" value="<?= $eve['date'];?>" class="form-control" placeholder="Phone Number">
							</div>

							<label class="col-sm-12 col-sm-12 control-label"> <strong>Avenue</strong> </label>
							<div class="col-md-12">

								<input type="text" name="avenue" value="<?= $eve['avenue'];?>" class="form-control" placeholder="Address Location">
								<hr>
							</div>

							<div class="col-md-12">
								<input type="submit" class="btn btn-info btn-sm btn-block btn-sm" value="Create Event">
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
					<table id="example1" class="table table-borderless table-hover">
						<thead class=" text-primary">
						<th>#</th>
						<th>Instructor name</th>
						<th>Course name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Venue</th>
						<th>Status</th>
						<th>Created</th>
						<th width="150">Action</th>


						</thead>
						<tbody>
						<?php
						$i = 1;
						foreach ($events as $acc) {
							?>
							<tr id="<?=$acc['id']; ?>">
								<td><a href="#"><?= $i;?></a></td>
								<td>
									<div class="m-r-10"><img src="<?=base_url('assets/backend/webimg/event/');?><?=$acc['photo'];?>" alt="user" class="rounded" width="45"></div>
								</td>
								<td><a href="#"><?= $acc['name'];?></a></td>

								<td><?= $acc['host'];?></td>
								<td><?= $acc['date'];?></td>
								<td><?= $acc['avenue'];?></td>
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
										<a class="btn btn-warning btn-sm" href="<?= base_url('load_update_event/');?><?php echo $acc['id'];?>"> Update</a>
										<a class="btn btn-success btn-sm" href="<?= base_url('load_update_event/');?><?php echo $acc['id'];?>"> Activate</a>
									</div>
								</td>
							</tr>
							<?php
							$i++;
						}

						?>

						</tbody>
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
    <script type="text/javascript" src="<?=base_url('assets/backend/sweetalert/sweetalert.min.js');?>"></script>

  
  <script type="text/javascript">    
   
  $(function(){

    $(document).on('submit', '#create_instructor_form', function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url('update_event') ?>",
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
                          
                            $('#create_instructor_form')[0].reset();
                            window.location.reload();
                            window.location.href = "<?=base_url('manage_event');?>";
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
