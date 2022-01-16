<section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> <?= $title; ?> </h3>
        <div class="row mt">
          <div class="col-lg-12">
           
            <div class="form-panel">
              
              <h2 class="mb text-align-center"> <?= $subtitle; ?></h2>
              <div class="row">
        <div class="col-lg-4">
          <div class="singup-text">
            
            <p>To be invited to the nearest Cali center and get free physical advice to learn more about the program.<hr></p>
          </div>
          <form id="create_instructor_form" action="<?=base_url('manipulate_schedule');?>" method="POST" class="singup-form">
            <div class="row">
              <label class="col-sm-12 col-sm-12 control-label"> <strong>Instructor Name</strong> </label>
              <div class="col-md-12">
                <input type="text" name="name" class="form-control" placeholder="Address Location">
              </div>
              <label class="col-sm-12 col-sm-12 control-label"> <strong> Class </strong> </label>
              <div class="col-md-12">
                
                <select  name="class" class="form-control" required/>
                    <option value="">Select Class Name</option>
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
                
               <input type="text" id="date" name="date" class="form-control" datepicker placeholder="Select a Date" ng-model="datevalue" />
              </div>
              <label class="col-sm-12 col-sm-12 control-label"> <strong>Set Time from</strong> </label>
              <div class="col-md-12" >
                
                 <input type="time" name="fromtime" class="form-control" placeholder="Phone Number">
              </div>
               <label class="col-sm-12 col-sm-12 control-label"> <strong>Set Time to</strong> </label>
              <div class="col-md-12">
                
                <input type="time" name="totime" class="form-control" placeholder="Phone Number">
              </div>
              <label class="col-sm-12 col-sm-12 control-label"> <strong>Venue</strong> </label>
              <div class="col-md-12">
                
                <input type="text" name="venue" class="form-control" placeholder="Address Location">
                <hr>
              </div>
              
              <div class="col-md-12">
                <input type="submit" class="btn btn-info btn-sm btn-block btn-sm" value="Create Schedule">
              </div>
            </div>
          </form>
        </div>
        <div class="col-xl-8">
        
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 desc">
            <table class="table table-bordered table-striped">
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
                        <tr>
                          <td colspan="9"> <h2 class="mb text-align-center"> Send Schedule to Our Client</h2>
                            <form method="POST" id="sendSchedule" action="<?=base_url('manipulate_send_schedule');?>">
                              <input type="submit" class="btn btn-success btn-sm btn-block btn-sm" value="Send Weekly Schedule">
                            </form>
                            
                           </td>
                        </tr>
                    
                    </tbody>
                  </table>
          </div>
      </div>
            </div>
          
          </div>

        </div>
      </section>
      <!-- /wrapper -->
    </section>
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
                url: "<?php echo base_url('manipulate_schedule') ?>",
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
                            window.location.href = "<?=base_url('add_schedule');?>";
                        }
                    } catch (e) {
                        alert("System error please try again later");
                        console.log(e);
                    }
                }
            });
        });
 
  }) ;

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