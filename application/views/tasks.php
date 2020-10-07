<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-users"></i> All Tasks
      <small>All Tasks in Our Panel</small>
    </h1>
  </section>
  <section class="content">
    <div class="col-xs-12">
      <div class="text-right">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>addNewTask">
          <i class="fa fa-plus"></i> Add Task</a>
      </div>
      <div class="box">
        <div class="box-header">
          <div class="box-tools">
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
            <?php } ?>
            <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } ?>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Explanation</th>
                    <th>Condition</th>
                    <th>Priority</th>
                    <th>Creator User</th>
                    <th>Creator User Authorization</th>
                    <th>Creation Date</th>
                    <th>End Date</th>
                    <th>Transactions</th>
                    <th>Finish Task</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      if(!empty($taskRecords))
                      {
                          foreach($taskRecords as $record)
                          {
                      ?>
                    <tr>
                      <td>
                        <?php echo $record->id ?>
                      </td>
                      <td>
                        <?php echo $record->title ?>
                      </td>
                      <td>
                        <?php echo $record->comment ?>
                      </td>
                      <td>
                        <div class="label label-<?php
                        if ($record->statusId == '1')
                        echo 'danger';
                        else if ($record->statusId == '2')
                        echo 'success';
                        ?>">
                          <?php echo $record->status ?>
                        </div>
                      </td>

                      <td>
                        <div class="label label-<?php
                        if ($record->priorityId == '1')
                        echo 'danger';
                        else if ($record->priorityId == '2')
                        echo 'warning';
                        else if ($record->priorityId == '3')
                        echo 'info'
                        ?>">
                          <?php echo $record->priority ?>
                        </div>
                      </td>
                      <td>
                        <?php echo $record->name ?>
                      </td>
                      <td>
                        <?php echo $record->role ?>
                      </td>
                      <td>
                        <?php echo $record->createdDtm ?>
                      </td>
                      <td>
                        <?php echo $record->endDtm ?>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOldTask/'.$record->id; ?>" title="Edit">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-sm btn-danger deleteUser" href="<?php echo base_url().'deleteTask/'.$record->id; ?>" data-userid="<?php echo $record->id; ?>"
                          title="Sil">
                          <i class="fa fa-trash"></i>
                        </a>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-primary" href="<?= base_url().'endTask/'.$record->id; ?>" title="Finish Mission">
                          <i class="fa fa-check-circle"></i>
                        </a>
                      </td>
                    </tr>
                    <?php
                          }
                      }
                      ?>
                </tbody>
              </table>
            </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>
</section>
</div>