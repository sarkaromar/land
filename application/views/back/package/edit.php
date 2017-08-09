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
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?=$title?> form</h3>
                    </div><!-- /.box-header -->
                    <!-- form -->.
                    <?php echo form_open_multipart(site_url("admin_panel/do_edit_package"), array("class" => "form-horizontal")) ?>
                        <div class="box-body">
                            <!-- name -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Package Name<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Package Name" name="name" value="<?=$list[0]->name?>" required>
                                </div>
                            </div>
                            <!-- type -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Package Type<sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="type">
                                        <?php if($list[0]->type == 'Sale'){
                                            echo '<option value="Sale" selected >For Sale</option>
                                                  <option value="Development">For Development</option>
                                                  <option value="Agro">Agro</option>
                                                  <option value="Industries">Industries</option>';
                                        }elseif($list[0]->type == 'Development'){
                                            echo '<option value="Sale">For Sale</option>
                                                  <option value="Development" selected >For Development</option>
                                                  <option value="Agro">Agro</option>
                                                  <option value="Industries">Industries</option>'; 
                                        }elseif($list[0]->type == 'Agro'){
                                            echo '<option value="Sale">For Sale</option>
                                                  <option value="Development">For Development</option>
                                                  <option value="Agro" selected>Agro</option>
                                                  <option value="Industries">Industries</option>';
                                        }elseif($list[0]->type == 'Industries'){
                                            echo '<option value="Sale">For Sale</option>
                                                  <option value="Development">For Development</option>
                                                  <option value="Agro">Agro</option>
                                                  <option value="Industries" selected>Industries</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- Area -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Area<sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="area">
                                        <?php foreach($areas as $area) : ?>
                                        <option value="<?=$area->area?>" <?php if ($area->area == $list[0]->area) echo 'selected'; ?> ><?=$area->area?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- size -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Size<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: 1400 square feet/ 3 katha/ 1 acres etc.." name="size" value="<?=$list[0]->size?>" required>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> price<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: 10,000,00" name="price" value="<?=$list[0]->price?>" required>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Address<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: Road no 25/ Plot no 202 etc.." name="add" value="<?=$list[0]->add?>" required>
                                </div>
                            </div>
                            <!-- short desc -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Short Description<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="s_desc" placeholder="Short Description here.."  rows="2"><?=$list[0]->s_desc?></textarea>
                                </div>
                            </div>
                            <!-- long desc -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Long Description<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="l_desc" placeholder="Long Description here.."  rows="8"><?=$list[0]->l_desc?></textarea>
                                </div>
                            </div>
                            <!-- main image -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Main Image</label>
                                <div class="col-sm-2">
                                    <input type="file"  name="m_image"  id="myFile" onchange="main_image(this);" />
                                    <input type="hidden" name="old_m_image" value="<?=$list[0]->m_image?>" />
                                </div>
                                <div class="col col-lg-4">
                                    <img id="preview_m_img" src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" width="130px" />
                                    <script>
                                        function main_image(input) {

                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function(e) {
                                                    $('#preview_m_img')
                                                            .attr('src', e.target.result)
                                                            .width(130);
                                                }
                                                reader.readAsDataURL(input.files[0]);

                                            } else {
                                                var filename = "";
                                                filename = "file:\/\/" + input.value;
                                                document.form2.preview_m_img.src = filename;
                                                document.form2.preview_m_img.style.width = "80px";
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                            <!-- old feature's -->
                            <hr />
                            <div>
                                <!--main field-->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Key Feature's </label>
                                    <div id="feat_fields">
                                        <?php $x = 0; foreach($feats as $feat) : $x++ ?>
                                        <div id="feat_field" class="form-group">
                                            <?php if($x == 1): ?>
                                                <div class="col-sm-3">
                                                    <input class="form-control" type="text" value="<?=$feat->feature?>">
                                                </div>
                                            <div class="col-sm-4">
                                                <button type="button" id="add_feat_btn" class="btn btn-info" title="Add more feature" ><i class="fa fa-fw fa-plus-square"></i></button>
                                            </div>
                                            <?php else: ?>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-3">
                                                    <input class="form-control" type="text" value="<?=$feat->feature?>">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Other images -->
                            <hr />
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Other images</label>
                                <div class="col-sm-2">
                                    <input type="file"  name="other_images[]" multiple/>
                                </div>
                                <div class="col col-lg-8">
                                    <?php foreach($ot_images as $ot_image) : ?>
                                        <img src="<?=base_url()?>assets/img/package/<?=$ot_image->image?>" width="130px" style="margin-right: 5px" />
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <input type="hidden" name="id" value="<?=$list[0]->id?>" />
                                    <button type="submit" class="btn btn-primary">Update</button>
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