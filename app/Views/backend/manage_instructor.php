<!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> <?= $title; ?></h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="adv-table">
              <h2 class="mb text-align-center"> <?= $subtitle; ?></h2>
             <table id="example1" class="table table-bordered table-striped">
                    <thead class=" text-primary">
                      <th>#</th>
                      <th>Profile</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Title</th>
                      <th>Bio</th>
                      <th>Class</th>
                      <th>Status</th>
                      <th>Created</th>
                      <th width="150">Action</th>

                    
                    </thead>
                    <tbody>
                     <?php
                                            $i = 1;
                                                foreach ($instructor as $acc) {
                                           ?>
                                            <tr id="<?=$acc['id']; ?>">
                                                <td><a href="#"><?= $i;?></a></td>
                                                <td>
                                                    <div class="m-r-10"><img src="<?=base_url('assets/backend/webimg/instructor/');?><?=$acc['profile'];?>" alt="user" class="rounded" width="45"></div>
                                                            </td>
                                                <td><a href="#"><?= $acc['name'];?></a></td>
                                                                                         
                                                <td><?= $acc['email'];?></td>
                                                <td><?= $acc['title'];?></td>
                                                <td><?= $acc['academic'];?></td>
                                                <td><a href="#"><?= $acc['class_id'];?></a></td> 
                                                <td> <?php 
                                                            switch ($acc['status']) {
                                                                case 0:
                                                                    echo '<span class="badge-dot badge-brand mr-1"></span>Locked ';
                                                                    break;
                                                                case 1:
                                                                    echo '<span class="badge-dot badge-success mr-1"></span>Active ';
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
                  </table>
            </div>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
