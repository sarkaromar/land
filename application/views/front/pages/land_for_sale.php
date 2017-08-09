        <!-- Find Home Table -->
        <section class="container">
            <div class="find_home">
                <div class="table_content">
                    <h3 class="table_title" style="margin-top: 0px">
                        <i class="fa fa-home"></i>
                        Please Select a Area For Find Your Dream Place
                    </h3>
                    <?=form_open(site_url("land_for_sale/find"))?>
                        <!-- selectmenu_type_1 -->
                        <div class="space_fix single_form" style="width: 80%">
                            <select class="selectmenu" name="area">
                                <?php if(empty($s_area)): ?>
                                    <option selected="selected">Choose a Area</option>
                                    <?php foreach($areas as $area) : ?>
                                    <option value="<?=$area->area?>"><?=$area->area?></option>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <option>Choose a Area</option>
                                    <?php foreach($areas as $area) : ?>
                                    <option value="<?=$area->area?>" <?php if($area->area == $s_area){ echo "selected";} ?> ><?=$area->area?></option>
                                    <?php endforeach; ?> 
                                <?php endif; ?>
                            </select>
                        </div> <!-- End .single_form -->
                        <div class="single_form" style="vertical-align:top;">
                            <button type="submit" class="search">Find</button>
                        </div> <!-- End .single_form -->
                    <?=form_close()?>
                </div> <!-- End .table_content -->
            </div> <!-- End .find_home -->
        </section>
        <!-- End Find Home Table -->
        <!-- Featured Properties -->
        <section class="featured_properties container">
            <!-- Main_title -->
            <div class="main_title">
                <h2>Land for Sale</h2>
            </div>
            <!-- End Main_title -->
            <div class="properties_item row">
                
            <?php if(empty($lists)): ?>

                <h1>There is no package to show!</h1>

            <?php else: ?>
                
                <?php $x = 0; foreach($lists as $list) : $x++; ?>
                <!-- generate here -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single_properties">
                    <div id="myCarousel<?=$x?>" class="carousel slide" data-ride="carouse<?=$x?>">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item  active" >
                                <div class="img_holder">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list->m_image?>" alt="<?=$list->name?>" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img_holder">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list->m_image?>" alt="<?=$list->name?>" class="img-responsive">
                                </div>
                            </div>
                            <div class="item">
                                <div class="img_holder">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list->m_image?>" alt="<?=$list->name?>" class="img-responsive">
                                </div> <!-- End .img_holder -->
                            </div>
                            <span class="price tooltip" title="">Tk. <?=$list->price?></span>
                            <span class="property_tag">Latest</span>
                        </div> <!-- End .carousel-inner -->
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel<?=$x?>" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel<?=$x?>" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> <!-- End .carousel slide -->
                    <div class="text">
                        <div class="properties_name">
                            <div class="title">
                                <h6><?=$list->name?></h6>
                                <span><i class="fa fa-map-marker"></i> <?=$list->area?></span>
                            </div> <!-- End .title -->
                            <div class="clear_fix"></div>
                        </div> <!-- End .properties_name -->
                        <ul class="properties_history">
                            <li><i class="fa fa-trello" style="padding-right:8px"></i> Facing <span class="tooltip" title="North-East">North-East</span></li>
                            <li><i class="fa fa-compress" style="padding-right:8px"></i> Total Area <span class="tooltip" title="1560 Sq.ft">1400*500</span></li>
                        </ul>
                        <a class="tran3s" href="<?=base_url()?>land_for_sale/details/<?=$list->id?>" >View Package</a>
                    </div> <!-- End .text -->
                </div> <!-- End .single_properties -->
                <?php endforeach; ?>
                
            <?php endif; ?>
            </div> <!-- End .properties_item -->
            
            <?php if(!empty($lists)): ?>
            <?=$this->pagination->create_links()?>
            <?php endif; ?>
            
        </section> <!-- End .featured_properties -->
        <!-- End Featured Properties -->