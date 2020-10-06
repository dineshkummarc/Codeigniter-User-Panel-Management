<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Upload Backup Log
            <small>Backup Log Upload Process</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Select your sql or gz.sql file for backup installation.</h3>
                        <div class="box-tools">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <div class="panel-body">
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
                                <form role="form" action="<?php echo base_url() ?>logHistoryUploadFile" method="post" id="LoghistoryUpload" role="form" enctype="multipart/form-data"
                                    accept-charset="utf-8">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="role">Log Table Backups</label>
                                                    <select class="form-control" id="optionfilebackup" name="optionfilebackup">
                                                        <option value="0">Select Reserve</option>
                                                        <?php
                                            if(!empty($backups))
                                            {
                                                    foreach ($backups as $k => $v)
                                                    {       
                                                    if (!is_array($v))
                                                    {
                                                    ?>
                                                            <option value="<?php echo $v ?>">
                                                                <?php echo $v ?>
                                                            </option>
                                                            <?php
                                                }
                                            }
                                            }
                                            ?>
                                                    </select>
                                                    <div class="form-group">
                                                        <label for="filebackup">Select file</label>
                                                        <input type="file" id="filebackup" name="filebackup">
                                                        <p class="help-block">For backup installation, you must select backup from server or select file.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <input type="submit" class="btn btn-primary" value="Load" />
                                        <input type="reset" class="btn btn-default" value="Reset" />
                                    </div>
                                </form>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>