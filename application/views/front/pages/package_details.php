        <!-- Inner Banner -->
        <section id="inner_banner">
            <div class="overlay">
                <div class="container">
                    <div class="title">
                        <h2>Property Detail</h2>
                        <ul>
                            <li><a href="index-1.html">Home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><?=$list[0]->name?></li>
                        </ul>
                    </div> <!-- End .title -->
                </div> <!-- End .container -->
            </div> <!-- End .overlay -->
        </section> <!-- End .inner_banner -->
        <!-- End Inner Banner -->
        <!-- Property details page content -->
        <div class="property_details_page container single_gallery">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 single_property_info">
                    <!-- Main_title -->
                    <div class="main_title">
                        <h2 style="margin-top:0"><?=$list[0]->name?></h2>
                    </div>
                    <!-- Single gallery Slider -->
                        <div class="slider_wrapper">
                        <div class="single-gallery-carousel-content-box owl-carousel owl-theme">
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                            <div class="item">
                                <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" />
                            </div>
                        </div>
                        <div style="margin:10px 46px 0 46px;">
                            <div class="single-gallery-carousel-thumbnail-box owl-carousel owl-theme">
                                <div class="item"> 
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item"> 
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                                <div class="item">
                                    <img src="<?=base_url()?>assets/img/package/<?=$list[0]->m_image?>" alt="<?=$list[0]->name?>" width="100px" height="100px" />
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <p><?=$list[0]->l_desc?></p>
                    </div> <!-- End .slider_wrapper -->

                    <!-- Public Facilities -->
                    <div class="public_facilities">
                        <!-- Main_title2 -->
                        <div class="main_title2">
                            <h2>Public Facilities</h2>
                        </div>
                        <!-- End Main_title2 -->
                        <ul>
                        <?php foreach($feats as $feat) : ?>
                            <li class="tooltip" title="<?=$feat->feature?>"><i class="fa  fa-arrow-right"></i> <?=$feat->feature?></li>
                        <?php endforeach; ?>
                        </ul>
                    </div> <!-- End .public_facilities -->
                    
                    <!-- Similar properties -->
                    <div class="similar_properties">
                        <!-- Main_title -->
                        <div class="main_title">
                            <h2>Similar Properties</h2>
                        </div>
                        <!-- End Main_title -->
                        <div class="properties_item_two row">
                            <!--  Item 1 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single_properties">
                                    <a href="#"><h4>North Parch California United States - 58696</h4></a>
                                    <div class="img_holder">
                                        <a href="<?=base_url()?>assets/images/home3/12.jpg" class="fancybox">
                                            <img src="<?=base_url()?>assets/images/home3/12.jpg" alt="images" class="img-responsive">
                                        </a>
                                    </div> <!-- End .img_holder -->
                                    <div class="property_details">
                                        <h4>$ 44,00,000</h4>
                                        <span>Marbella, Luxury Villa</span>
                                    </div>
                                    <ul>
                                        <li class="tooltip" title="East"><i class="fa fa-trello"></i>East</li>
                                        <li class="tooltip" title="2 Bedroom"><i class="fa fa-bed"></i>2 Br</li>
                                        <li class="tooltip" title="2 Bathroom"><i class="fa fa-wheelchair"></i>2 Ba</li>
                                        <li class="tooltip" title="560 Sq"><i class="fa fa-compress"></i>560 Sq</li>
                                    </ul>
                                </div> <!-- End .single_properties -->
                            </div>
                            <!-- Item 2 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single_properties">
                                    <span class="sale">Top</span>
                                    <a href="#"><h4>56/85 redfort California United Sates - 90021</h4></a>
                                    <div class="img_holder">
                                        <a href="<?=base_url()?>assets/images/home3/13.jpg" class="fancybox">
                                            <img src="<?=base_url()?>assets/images/home3/13.jpg" alt="images" class="img-responsive">
                                        </a>
                                    </div> <!-- End .img_holder -->
                                    <div class="property_details">
                                        <h4>$ 64,00,000 </h4>
                                        <span>Elveria, Beach Vila</span>
                                    </div>
                                    <ul>
                                        <li class="tooltip" title="East"><i class="fa fa-trello"></i>East</li>
                                        <li class="tooltip" title="3 Bedroom"><i class="fa fa-bed"></i>3 Br</li>
                                        <li class="tooltip" title="2 Bathroom"><i class="fa fa-wheelchair"></i>2 Ba</li>
                                        <li class="tooltip" title="840 Sq"><i class="fa fa-compress"></i>840 Sq</li>
                                    </ul>
                                </div> <!-- End .single_properties -->
                            </div>
                            <!-- Item 3 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single_properties">
                                    <span class="sale">Top</span>
                                    <a href="#"><h4>Raibow MAnor California United Sates - 58693</h4></a>
                                    <div class="img_holder">
                                        <a href="<?=base_url()?>assets/images/home3/14.jpg" class="fancybox">
                                            <img src="<?=base_url()?>assets/images/home3/14.jpg" alt="images" class="img-responsive">
                                        </a>
                                    </div> <!-- End .img_holder -->
                                    <div class="property_details">
                                        <h4>$ 52,25,000</h4>
                                        <span>Marbella, Romantic Villa</span>
                                    </div>
                                    <ul>
                                        <li class="tooltip" title="East"><i class="fa fa-trello"></i>East</li>
                                        <li class="tooltip" title="3 Bedroom"><i class="fa fa-bed"></i>3 Br</li>
                                        <li class="tooltip" title="2 Bathroom"><i class="fa fa-wheelchair"></i>2 Ba</li>
                                        <li class="tooltip" title="560 Sq"><i class="fa fa-compress"></i>560 Sq</li>
                                    </ul>
                                </div> <!-- End .single_properties -->
                            </div>
                        </div> <!-- End .properties_item_two -->
                    </div> <!-- End .similar_properties -->
                </div> <!-- End .single_property_info -->

                <!-- Sidebar -->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar_style_two">
                        <!-- Reduced Properties -->
                        <div class="reduced_properties">
                            <div class="main_title2">
                                <h3>Reduced Properties</h3>
                            </div>
                            <div class="item_wrapper">
                                <div class="itme">
                                    <div class="img_holder">
                                        <img src="<?=base_url()?>assets/images/home3/16.jpg" alt="images">
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h6>Jungle golf Villas</h6>
                                            <span><i class="fa fa-map-marker"></i> California</span>
                                            <h5>$ 14,500 / Month</h5>
                                        </a>
                                    </div> 
                                </div>
                                <div class="itme">
                                    <div class="img_holder">
                                        <img src="<?=base_url()?>assets/images/home3/17.jpg" alt="images">
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h6>Office Apartment</h6>
                                            <span><i class="fa fa-map-marker"></i> Sanfransisco</span>
                                            <h5>$ 18,000 / Month</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="itme">
                                    <div class="img_holder">
                                        <img src="<?=base_url()?>assets/images/home3/18.jpg" alt="images">
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h6>Rainbow Building</h6>
                                            <span><i class="fa fa-map-marker"></i> California</span>
                                            <h5>$ 15,000 / Month</h5>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- End .item_wrapper -->
                        </div> <!-- End .reduced_properties -->

                        <!-- Brochure Download -->
                        <div class="brochure_download">
                            <div class="main_title2">
                                <h3>Important Document's</h3>
                                <a href="#" class="pdf tran3s" download>Our Brochures.PDF</a>
                                <a href="#" class="txt tran3s" download>Our Brochures.TXT</a>
                            </div>
                        </div>
                    </div> <!-- End .sidebar_style_two -->
                </div> <!-- End of column -->
            </div> <!-- End .row -->
        </div> <!-- End .property_details_page -->
        <!-- End Property details page content -->