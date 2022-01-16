  <section class="content" style="margin-top: 5px;">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-6" style="align-content: center;">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"> Message Contact</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="schdule-table table ">
            <thead class="thead-light">
              <tr>
                <th class="head" scope="col">Date</th>
                <th class="head" scope="col">Time</th>
                <th class="head" scope="col" colspan="2">Class , Instructor & Venue</th>
                
              </tr>
               <tr>
                <td colspan="4"><?= $updates;?></td>
              </tr>
            </thead>
            <tbody>
              <?php
                          $i = 1;
                               foreach ($schedule as $sch) {
                                           ?>
              <tr>
                <td rowspan="3"> <?= $sch['date'];?></td>
                <td rowspan="3"> <?= $sch['fromtime'] ." - ".$sch['totime'] ;?></td>
                <td rowspan="1" style="color: green;" colspan="2"><strong><?= $sch['class'];?></strong>  </td>

              </tr>
              <tr>
                <td colspan="2"><strong>  <?= $sch['instructor'];?> </strong> </td>
              </tr>
              <tr>
                <td style="color: orange;"> <strong> <?= $sch['venue'];?> </strong> </td>
                <td> 
                  <?php 
                                        switch ($sch['status']) {
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
                                    ?>
                                                              
                                </td>
              </tr>
              <?php
                                 $i++;
                                  }

                                ?>
            
            </tbody>
          </table>
          <hr>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-left">
                  <p>Email From: ziptechnoltd@ziptech.rw</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>