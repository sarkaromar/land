            <div class="register_page container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 register_form">
                        <!-- Main_title -->
                        <div class="main_title">
                            <h2 style="margin-top:0;">Add your property in our website</h2>
                        </div>
                        <!-- End Main_title -->
                        <p style="margin: 34px 0 33px 0;">Thank you for your Choosing Real Estate. Property consisting of land and the buildings on it, along with its natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited unit auction, we had approached Developers to release incremental units to fulfill the demands at a stepped up cut-off price. Shortlisteed bidders will be called for unit allocation on First Come First Serve Basis. There are many variations of passages slightly believable.</p>
                        <!-- Login form -->
                        <div class="login">
                            
                            <?php $s = $this->session->flashdata('success');
                            if (!empty($s)) { ?>
                                <!-- notice -->
                                <div class="alert alert-success">
                                    <strong>Success!</strong> <?=$this->session->flashdata('success')?>
                                </div>
                            <?php } ?>

                            <?php $d = $this->session->flashdata('danger');
                            if (!empty($d)) { ?>
                                <!-- notice -->
                                <div class="alert alert-danger">
                                    <strong>Error!</strong> <?=$this->session->flashdata('danger')?>
                                </div>
                            <?php } ?>
                                
                            <!--validation error-->
                            <?php $d = $this->session->flashdata('danger');
                            if (validation_errors()) { ?>
                            <div class="alert alert-danger">
                                <strong><?=validation_errors()?></strong>
                            </div>
                            <?php } ?>
                            <?=form_open_multipart(site_url("add_property/add_client"))?>
                                <h6>Write your property details</h6>
                                <!-- name -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Property Name<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <div id="near_full_width" class="single_form">
                                            <input type="text" name="name" value="<?=set_value('name')?>" placeholder="e.g: Sheltech project">
                                        </div>
                                    </div>
                                </div>
                                <!-- type -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Property Type<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="single_form" name="type">
                                            <option value="Sale">Sale</option>
                                            <option value="Development">Development</option>
                                            <option value="Agro">Agro</option>
                                            <option value="Industries">Industries</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- area -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Area<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <select class="single_form" name="area">
                                            <?php foreach ($areas as $area) : ?>
                                                <option value="<?= $area->area ?>"><?= $area->area ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- size -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Size<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <div id="half_width" class="single_form">
                                            <input type="text" name="size" value="<?=set_value('size')?>" placeholder="e.g: 1500 sft. / 10 katha / 5 across">
                                        </div>
                                    </div>
                                </div>
                                <!-- price -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Price<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <div id="half_width" class="single_form">
                                            <input type="text" name="price" value="<?=set_value('price')?>" placeholder="e.g: 50,000">
                                        </div>
                                    </div>
                                </div>
                                <!-- address -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Address<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <div id="near_full_width" class="single_form">
                                            <textarea class="form-control" name="add" value="<?=set_value('add')?>" placeholder="e.g: Road no 25/ Plot no 202 etc.."  rows="2" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- short desc -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Short Description<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <div id="near_full_width" class="single_form">
                                            <textarea class="form-control" name="s_desc" value="<?=set_value('s_desc')?>" placeholder="write description here.."  rows="2" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- long desc -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Long Description<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <div id="near_full_width" class="single_form">
                                            <textarea class="form-control" name="l_desc" value="<?=set_value('l_desc')?>" placeholder="write description here.."  rows="2" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- main image -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Main image<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <div id="near_full_width" class="single_form">
                                             <input type="file"  name="m_image"  />
                                        </div>
                                    </div>
                                </div>
                                <!-- other image -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"> Other Images<sup style="color: red">*</sup></label>
                                    <div class="col-sm-10">
                                        <div id="near_full_width" class="single_form">
                                            <input type="file"  name="other_images[]" multiple />
                                        </div>
                                    </div>
                                </div>
                                <!-- feature's -->
                                <div>
                                    <div class="form-group">
                                        <!--main field-->
                                        <label class="col-sm-2 control-label"> Key Feature's<sup style="color: red">*</sup></label>
                                        <div class="col-sm-8">
                                            <div id="full_width" class="single_form">
                                                <input class="form-control" type="text" name="feat[]" placeholder="e.g: write feature here..."  required>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" id="add_feat_btn" class="btn btn-info" title="Add more feature" ><i class="fa fa-fw fa-plus-square fa-lg"></i> Add More</button>
                                        </div>
                                        <!--more field-->
                                        <div id="feat_fields">
                                            
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="tran3s">Submit</button>            
                            <?=form_close()?>
                            <a href="#">Need Help?</a>
                            <div class="clear_fix"></div>
                        </div> <!-- End .login -->
                    </div> <!-- End .register_form -->
                </div> <!-- End .row -->
            </div> <!-- End .register_page -->