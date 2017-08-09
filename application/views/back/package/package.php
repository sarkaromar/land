<div class="content-wrapper">
    <section class="content-header">
        <h1><?=$title?></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-users"></i><?=$title?></a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
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
                            <a class="btn btn-success" href="<?=base_url()?>admin_panel/add_package" title="Add Package"><i class="fa fa-plus"></i></a>
                            <a href="#" onclick="return refresh();" class="btn btn-default" title="Refrash"><i class="fa fa-refresh"></i></a>
                            <script>
                                var table = ['package'];
                                var image = "";
                            </script>
                            <a href="#" class="btn btn-danger" onclick="return deleteall(table,image);" title="Multi Delete"><i class="fa fa-trash-o"></i></a>
                        </div>    
                    </div>
                    
                    <div class="box-body">
                        <table class="table table-bordered table-striped datatable dataTables_wrapper form-inline dt-bootstrap" id="table-2" width="100%">
                            <thead>                         
                                <tr>
                                    <th data-hide="phone"><input type="checkbox" name="selectall" id="selectall"/></th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-heart text-muted hidden-md hidden-sm hidden-xs"></i> Pack. Type</th>
                                    <th data-class="phone"><i class="fa fa-fw fa-bank text-muted hidden-md hidden-sm hidden-xs"></i> Area</th>
                                    <th data-class="phone"><i class="fa fa-fw fa-bank text-muted hidden-md hidden-sm hidden-xs"></i> Pack. Name</th>
                                    <th data-class="phone"><i class="fa fa-fw fa-bank text-muted hidden-md hidden-sm hidden-xs"></i> Size</th>
                                    <th data-class="phone"><i class="fa fa-fw fa-bank text-muted hidden-md hidden-sm hidden-xs"></i> Price</th>
                                    <th data-class="phone"><i class="fa fa-fw fa-bank text-muted hidden-md hidden-sm hidden-xs"></i> Status</th>
                                    <th data-class="phone"><i class="fa fa-fw fa-bank text-muted hidden-md hidden-sm hidden-xs"></i> Banner Image</th>
                                    <th data-hide="phone"><i class="fa fa-fw fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lists as $list): ?>
                                <tr id="row_<?=$list->id?>">
                                    <td><input class="checkbox1" type="checkbox" name="selected[]" id="del_<?=$list->id?>" value="<?=$list->id?>" /></td>
                                    <td><?=$list->type?></td>
                                    <td><?=$list->area?></td>
                                    <td><?=$list->name?></td>
                                    <td><?=$list->size?></td>
                                    <td><?=$list->price?></td>
                                    <td>
                                    <?php if($list->status == 1): ?>
                                        <span><a href="<?=base_url()?>admin_panel/pack_status/<?=$list->id?>/0" class = "btn btn-success">Enable</a></span>
                                    <?php else: ?>
                                        <span><a href="<?=base_url()?>admin_panel/pack_status/<?=$list->id?>/1" class = "btn btn-danger">Disable</a></span>
                                    <?php endif; ?>
                                    </td>
                                    <td><img src="<?=base_url()?>assets/img/package/<?=$list->m_image?>" width="80px" height="80px" alt="<?=$list->name?>" /></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                Action <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?=base_url()?>admin_panel/edit_package/<?=$list->id?>" title="Edit">Edit</a>
                                                </li>
                                                <li>
                                                    <script>
                                                        var table = ["package"];
                                                        var image = "";
                                                    </script>
                                                    <a href="<?=site_url('admin_panel/delete_package/' . $list->id . '/' . $list->m_image) ?>" title="Delete" >Delete</a>
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