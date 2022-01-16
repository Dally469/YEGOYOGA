  <section class="content" style="margin-top: 5px;">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6" style="align-content: center;">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <img src="<?= base_url("assets/img/header-massage.jpg");?>">
                <h3 class="card-title"> Massage Request Appoitment</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                  <p class="form-control">Sender Names: <?=$names;?></p>
                </div>
                 <div class="form-group">
                  <p class="form-control">Type & Duration: <?=$type." ".$duration;?></p>
                </div>
                <div class="form-group">
                  <p class="form-control" style="text-align:justify; ">Sender Address: <?=$email." ".$phone;?></p>
                </div>
                <h1>Location</h1>
                <div class="form-group" >
                    <p id="compose-textarea" style="width:400px;text-align:justify;" readonly>
                      <?=$location;?>
                    </p>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-left">
                  <p>Email From: yogis@yegoyogarwanda.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>