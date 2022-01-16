<link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css"); ?> "/>
<link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?> "/>
  <section class="content" style="margin-top: 5px;">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6" style="align-content: center;">
            <div class="card card-primary card-outline">
              <div class="card-header">
              
                <img src="<?= base_url("assets/img/header-schedule.jpg");?>" style="width: 100%">
              </div>

              <!-- /.card-header -->
              <div class="card-body">
				  <div class="col-md-10">
					  <h2 class="text-center"> Updates</h2>
					  <div class="container">
						  <h5 style="padding: 3px; font-size: 20px;" ><?= $news_update; ?></h5>
					  </div>

				  </div>

               
                <table class="schdule-table table table-striped table-bordered"  style="width: 100%">
              <thead class="thead-light">
                
                <tr>
                  <th class="head" style="padding: 10px; color: black;" scope="col"><h3>Date</h3></th>
                  <th class="head" style="padding: 10px; color: black;" scope="col"><h3>Time</h3></th>
					        <th class="head" style="padding: 10px; color: black;" scope="col" colspan="2"><h3>Class , Instructor & Venue</h3></th>
                  <hr>
                </tr>
                <tr>
                <td colspan="4"></td>
              </tr>
              </thead>
              <tbody>
                <?php
                            $i = 1;
                                 foreach ($schedule as $sch) {
                                             ?>
                <tr style="margin-top: 10px">
                  <td rowspan="3"><strong style="font-size: 18px;"><?= $sch['date'];?></strong> </td>
                  <td rowspan="3"><strong style="font-size: 18px;"><?= $sch['fromtime'] ." - ".$sch['totime'] ;?></stron></td>
                  <td rowspan="1" style="color: green;  font-size: 16px" colspan="2"><br><strong><?= $sch['class'];?></strong>  </td>
                </tr>
                <tr>
                  <td colspan="2" style="padding: 8px; font-size: 16px"><strong>  <?= $sch['instructor'];?> </strong> </td>
                </tr>
                <tr>
                  <td style="color: orange;font-size: 17px"> <strong> <?= $sch['venue'];?> </strong>  </td>
                  <td> 
                    <?php 
                                          switch ($sch['status']) {
                                              case 0:
                                                    echo '<strong style="color:red;font-size: 15px"> Canceled </strong>';
                                                     break;
                                              case 1:
                                                  echo '<strong style="color:green;font-size: 15px"> Active </strong>';
                                                  break;
                                                  default:
                                                      echo "None";
                                                      break;
                                           }
                                      ?>
                                                                
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
                <div class="float-left">
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
