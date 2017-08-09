        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                <!-- Properties Banner slider -->
                <div class="properties_slider_banner">
                    <div id="properties_slider_3">

                        <?php if(empty($this->area->lists)) {?>

                            <p>Not found any area list</p>

                        <?php } else {?>

                            <?php foreach($this->area->lists as $area_list) : ?>
                                <!-- area name -->
                                <div class="single_properties item">
                                    <div class="properties_name">
                                        <span><i class="fa fa-map-marker"></i> <?=$area_list->area?></span>
                                    </div>
                                    <img src="<?=base_url()?>assets/img/area/<?=$area_list->image?>" alt="<?=$area_list->image?>">
                                    <div class="clear_fix"></div>
                                </div>

                            <?php endforeach; ?>

                        <?php } ?>

                    </div>
                </div> <!-- End .properties_slider_banner -->  
            </div>
        </div>

        <!-- Featured Properties -->
        <section class="featured_properties container">
            <!-- Main_title -->
            <div class="main_title">
                <h2>Land for Agro</h2>
            </div>
            <!-- End Main_title -->
            <div class="properties_item row">
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
                        <a class="tran3s" href="<?=base_url()?>land_for_agro/details/<?=$list->id?>" >View Package</a>
                    </div> <!-- End .text -->
                    
                </div> <!-- End .single_properties -->
                <?php endforeach; ?>
            </div> <!-- End .properties_item -->
            <?=$this->pagination->create_links()?>
        </section> <!-- End .featured_properties -->
        <!-- End Featured Properties -->