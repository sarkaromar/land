        <!-- featured froperties -->
        <section class="featured_properties container">
            <!-- main_title -->
            <div class="main_title">
                <h2>Featured Properties</h2>
            </div>
            <!-- end main_title -->
            <div class="properties_item row">
                <?php $x = 0; foreach($packages as $package) : $x++; ?>
                <!-- generate here -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single_properties">
                    <div id="myCarousel<?=$x?>" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <div class="img_holder">
                                    <img src="<?=base_url()?>assets/img/package/<?=$package->m_image?>" alt="<?=$package->name?>" class="img-responsive">
                                </div> <!-- End .img_holder -->
                            </div>

                            <div class="item">
                                <div class="img_holder">
                                    <img src="<?=base_url()?>assets/img/package/<?=$package->m_image?>" alt="<?=$package->name?>" class="img-responsive">
                                </div> <!-- End .img_holder -->
                            </div>
                            
                            <div class="item">
                                <div class="img_holder">
                                    <img src="<?=base_url()?>assets/img/package/<?=$package->m_image?>" alt="<?=$package->name?>" class="img-responsive">
                                </div> <!-- End .img_holder -->
                            </div>
                            
                            <span class="price tooltip" title="$ 16,850">Tk. <?=$package->price?></span>
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
                                <h6><?=$package->name?></h6>
                                <span><i class="fa fa-map-marker"></i> <?=$package->area?></span>
                            </div> <!-- End .title -->
                            <div class="clear_fix"></div>
                        </div> <!-- End .properties_name -->
                        <ul class="properties_history">
                            <li><i class="fa fa-trello" style="padding-right:8px"></i> Facing <span class="tooltip" title="North-East">North-East</span></li>
                            <li><i class="fa fa-compress" style="padding-right:8px"></i> Total Area <span class="tooltip" title="1560 Sq.ft"><?=$package->size?></span></li>
                        </ul>
                        <?php
                            if($package->type == 'Sale'){
                                $type = "land_for_sale";
                            }elseif($package->type == 'Development'){
                                $type = "land_for_dev";
                            }elseif($package->type == 'Agro'){
                                $type = "land_for_agro";
                            }elseif($package->type == 'Industries'){
                                $type = "land_for_industries";
                            }
                        ?>
                        <a href="<?=base_url()?><?=$type?>/details/<?=$package->id?>" >View Package</a>
                    </div> <!-- End .text -->
                    
                </div> <!-- End .single_properties -->
                <?php endforeach; ?>
            </div> <!-- End .properties_item -->
        </section> <!-- End .featured_properties -->
        <!-- end featured properties -->