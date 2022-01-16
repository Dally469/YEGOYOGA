
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
		<div class="col-md-4">
			<!-- Default box -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title"><?= $title?></h3>

				</div>
				<div class="card-body">
					<div class="singup-text">
						<h3>Register for Our Client</h3>
					</div>
					<form  action="<?=base_url('manipulate_client');?>" method="POST" class="singup-form">
						<div class="row">
							<label class="col-sm-12 col-sm-12 control-label"> <strong> First Name </strong> </label>
							<div class="col-md-12">

								<input type="text" name="firstname" class="form-control" placeholder="First Name">
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong> Last Name </strong> </label>
							<div class="col-md-12">

								<input type="text" name="lastname" class="form-control" placeholder="Last Name">
							</div>
							<label class="col-sm-12 col-sm-12 control-label"> <strong> Email </strong> </label>
							<div class="col-md-12">

								<input type="email" name="email" class="form-control" placeholder="Your Email">


								<hr>
							</div>
							<div class="col-md-12">
								<input type="submit" class="btn btn-info btn-sm btn-block btn-sm" value="Create Account">
							</div>
						</div>
					</form>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<?= $title?>
				</div>
				<!-- /.card-footer-->
			</div>
			<!-- /.card -->
		</div>
		<div class="col-md-8">
			<!-- Default box -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title"><?= $subtitle?></h3>
				</div>
				<div class="card-body">
					<table id="example1" class="table table-borderless table-hover">
						<thead>
						<tr>
							<th>#</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th width="100">Email</th>
							<th>Joined At</th>
							<th>Status</th>

						</tr>
						</thead>
						<tbody>
						<?php
							$i = 1;
							foreach ($client as $row):
						?>
							<tr>
								<td><?= $i?></td>
								<td><?= $row['firstname']?></td>
								<td><?= $row['lastname']?></td>
								<td><?= $row['email']?></td>
								<td><?= $row['created_at'] ?></td>
								<td>
									<?php if($row['status'] == 1):?>
										<span class="badge badge-success"> Subscribed</span>
									<?php else:?>
										<span class="badge badge-danger"> Unsubscribed</span>
									<?php endif;?>
								</td>
							</tr>

						<?php
							$i++;
							 endforeach;
						?>
						</tbody>
						<tfoot>
						<tr>
							<th>#</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Email</th>
							<th>Joined At</th>
							<th>Status</th>
						</tr>
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
                url: "<?php echo base_url('manipulate_client') ?>",
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
                            window.location.href = "<?=base_url('add_client');?>";
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
