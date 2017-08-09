<div class="content-wrapper">
    <section class="content-header">
        <h1><?=$title?></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin Panel</a></li>
            <li class="active"><?=$title?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- slider form row -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add form</h3>
                    </div><!-- /.box-header -->
                    <!-- form -->
                    <?=form_open_multipart(site_url("admin_panel/add_package"), array("class" => "form-horizontal"))?>
                        <div class="box-body">
                            <!-- name -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Package Name<sup style="color: red">*</sup></label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="package name" name="name" required>
                                </div>
                            </div>
                            <!-- type -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Package Type<sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="type">
                                        <option value="Sale">Sale</option>
                                        <option value="Development">Development</option>
                                        <option value="Agro">Agro</option>
                                        <option value="Industries">Industries</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Area -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Area<sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="area">
                                        <?php foreach($areas as $area) : ?>
                                        <option value="<?=$area->area?>"><?=$area->area?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- size -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Size<sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" placeholder="e.g: 1400 square feet/ 3 katha/ 1 acres etc.." name="size" required>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> price<sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" placeholder="e.g: 10,000,00" name="price" required>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Address<sup style="color: red">*</sup></label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="add" placeholder="e.g: Road no 25/ Plot no 202 etc.."  rows="2" required></textarea>
                                </div>
                            </div>
                            <!-- short desc -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Short Description<sup style="color: red">*</sup></label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="s_desc" placeholder="write description here.."  rows="3"></textarea>
                                </div>
                            </div>
                            <!-- long desc -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Long Description<sup style="color: red">*</sup></label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="l_desc" placeholder="write description here.."  rows="8"></textarea>
                                </div>
                            </div>
                            
                            <!-- main image -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Main image<sup style="color: red">*</sup></label>
                                <div class="col-sm-2">
                                    <input type="file"  name="m_image"  id="myFile" onchange="m_image(this);" />
                                </div>
                                <div class="col col-lg-4">
                                    <img id="m_image" width="130px" />
                                    <script>
                                        function m_image(input) {

                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function(e) {
                                                    $('#m_image')
                                                            .attr('src', e.target.result)
                                                            .width(130);
                                                }
                                                reader.readAsDataURL(input.files[0]);

                                            } else {
                                                var filename = "";
                                                filename = "file:\/\/" + input.value;
                                                document.form2.m_image.src = filename;
                                                document.form2.m_image.style.width = "80px";
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                            <!-- feature's -->
                            <hr />
                            <div>
                                <!--main field-->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Key Feature's <sup style="color: red">*</sup></label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" name="feat[]" placeholder="e.g: write feature here..."  required>
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" id="add_feat_btn" class="btn btn-info" title="Add more feature" ><i class="fa fa-fw fa-plus-square"></i></button>
                                    </div>
                                </div>
                                <!--more field-->
                                <div id="feat_fields"></div>
                            </div>
                            
                            <!-- additional images -->
                            <hr>
                            <!-- other image -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Other Image's</label>
                                <div class="col-sm-2">
                                    <input type="file"  name="other_images[]"  multiple/>
                                </div>
                            </div>
                            
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <button class="btn btn-primary" onclick="window.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Go back</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Add Package</button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->