<div class="content-wrapper">
    <section class="content-header">
        <h1><?=$title?></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i><?=$title?></a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- add form -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add form</h3>
                    </div><!-- /.box-header -->
                    <!-- form -->
                    <?=form_open_multipart(site_url("admin_panel/add_coverage_area"), array("class" => "form-horizontal"))?>
                        <div class="box-body">
                            <!-- coverage area -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Coverage Area<sup style="color: red">*</sup></label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Coverage Area" name="area" required>
                                </div>
                            </div>
                            <!-- image -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Image<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" required>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Add</button>
                                    <button type="reset" value="Reset" class="btn btn-danger"><i class="fa fa-trash"></i> Reset</button>
                                </div>
                            </div>
                        </div>
                    <?=form_close()?>
                </div><!-- /.box -->
            </div>
        </div>
        
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- start data table -->
                <div style="clear:both;"></div><br>
                <!-- Input addon -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?=$title?></h3>
                        <div class="box-tools pull-right">
                            <button onclick="return refresh();" class="btn btn-default"><i class="fa fa-refresh"></i></button>
                        </div>    
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped datatable dataTables_wrapper form-inline dt-bootstrap" id="table-2" width="100%">
                            <thead>                         
                                <tr>
                                    <th data-hide="phone"><input type="checkbox" name="selectall" id="selectall"/></th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-map-o text-muted hidden-md hidden-sm hidden-xs"></i> Area Name</th>
                                    <th data-class="phone"><i class="fa fa-fw fa-image text-muted hidden-md hidden-sm hidden-xs"></i> Image</th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lists as $list): ?>
                                <tr id="row_<?=$list->id?>">
                                    <td><input class="checkbox1" type="checkbox" name="selected[]" id="del_<?=$list->id?>" value="<?=$list->id?>" /></td>
                                    <td><?=$list->area?></td>
                                    <<td><img src="<?=base_url()?>assets/img/area/<?=$list->image?>" width="80px" height="80px" alt="<?=$list->area?>" /></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                Action <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?=base_url()?>admin_panel/edit_coverage_area/<?=$list->id?>" title="Edit">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="<?=site_url('admin_panel/delete_area/' . $list->id . '/' . $list->image) ?>" title="Delete" >Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#table-2').DataTable();
                    });
                </script>
                <!-- end data table -->
            </div>
            <!-- notice -->
            <?php $s = $this->session->flashdata('success');
            if (!empty($s)) { ?>
                <div id='msg' data-animation="drop" class="notify center top notify-dismissible notify-success">
                    <div class="message"><?=$this->session->flashdata('success')?></div>
                    <button type="button" class="close" data-close="notify" data-animation="drop" >×</button>
                </div>
            <?php } ?>
             <?php $d = $this->session->flashdata('danger');
            if (!empty($d)) { ?>
                <div id='msg' data-animation="drop" class="notify center top notify-default notify-danger">
                    <div class="message"><?=$this->session->flashdata('danger')?></div>
                    <button type="button" class="close" data-close="notify" data-animation="drop">×</button>
                </div>
            <?php } ?>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->