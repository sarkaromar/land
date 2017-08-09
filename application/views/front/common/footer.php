        <!-- Get Free Advice -->
        <div class="free_advice">
            <div class="overlay">
                <div class="container advice_content">
                    <!-- Section title -->
                    <h2>Get Free Advice Before You Decide</h2>
                    <div class="row">
                        <!-- item 1 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single_content">
                                <div class="icon_holder border_round hvr-grow">
                                    <a href="property-details.html"><img src="<?=base_url()?>assets/images/home4/icon-1.png" alt="icon"></a>
                                </div> <!-- End .icon_holder -->
                                <div class="text">
                                    <h6>Soil Test</h6>
                                    <p>Explore Your Option, Find Here What Your Money Can actually Buy</p>
                                    <a href="#" class="tran3s">Read More</a>
                                </div> <!-- End .text -->
                            </div> <!-- End .single_content -->
                        </div>
                        <!-- item 2 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single_content">
                                <div class="icon_holder border_round hvr-grow">
                                    <a href="property-details.html"><img src="<?=base_url()?>assets/images/home4/icon-2.png" alt="icon"></a>
                                </div> <!-- End .icon_holder -->
                                <div class="text">
                                    <h6>Building Design</h6>
                                    <p>Compare Localities & Projects in Depth Comparioson For Smart Decisions</p>
                                    <a href="#" class="tran3s">Read More</a>
                                </div> <!-- End .text -->
                            </div> <!-- End .single_content -->
                        </div>
                        <!-- item 3 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single_content">
                                <div class="icon_holder border_round hvr-grow">
                                    <a href="property-details.html"><img src="<?=base_url()?>assets/images/home4/icon-3.png" alt="icon"></a>
                                </div> <!-- End .icon_holder -->
                                <div class="text">
                                    <h6>Material Supply</h6>
                                    <p>Read About Tax Implications or Documents Required For Property</p>
                                    <a href="#" class="tran3s">Read More</a>
                                </div> <!-- End .text -->
                            </div> <!-- End .single_content -->
                        </div>
                        <!-- item 3 -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single_content">
                                <div class="icon_holder border_round hvr-grow">
                                    <a href="#"><img src="<?=base_url()?>assets/images/home4/icon-4.png" alt="icon"></a>
                                </div> <!-- End .icon_holder -->
                                <div class="text">
                                    <h6>Consultancy</h6>
                                    <p>After Getting Legal Advice You Can Decide What You Do Next Property</p>
                                    <a href="#" class="tran3s">Read More</a>
                                </div> <!-- End .text -->
                            </div> <!-- End .single_content -->
                        </div>
                    </div>
                </div> <!-- End .container/.advice_content -->
            </div>
        </div> <!-- End .free_advice -->
        <!-- End  Get Free Advice -->
        <!-- footer -->
        <footer>
            <div class="main_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="about_estate">
                                <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/skin/f-logo.png" alt="logo" id="fLogo"></a>
                                <p>As a property developers every project  we offer quality Properties and Services for our trustable customers. <span></span>
                                If you are interested in real estate do not wait and BUY IT NOW!</p>
                                <ul class="icon_footer">
                                    <li class="border_round tran3s tooltip" title="Facebook"><a href="<?=$this->settings->info->fb?>" target="_blank"<i class="fa fa-facebook"></i></a></li>
                                    <li class="border_round tran3s tooltip" title="Twitter"><a href="<?=$this->settings->info->twt?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="border_round tran3s tooltip" title="Google Plus"><a href="<?=$this->settings->info->g_plus?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="border_round tran3s tooltip" title="Linkedin"><a href="<?=$this->settings->info->link?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul> <!-- End .icon_header -->
                            </div> <!-- End .about_estate -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="useful_link">
                                <div class="footer_title">
                                    <h4>Usefull Links</h4>
                                </div>
                                <ul>
                                    <li><a href="<?=site_url()?>" class="tran3s"><i class="fa fa-angle-right"></i> Home</a></li>
                                    <li><a href="<?=site_url('about_us')?>" class="tran3s"><i class="fa fa-angle-right"></i> About Us</a></li>
                                    <li><a href="<?=site_url('land_for_sale')?>" class="tran3s"><i class="fa fa-angle-right"></i> Land for Sale</a></li>
                                    <li><a href="<?=site_url('land_for_development')?>" class="tran3s"><i class="fa fa-angle-right"></i> Land for Development</a></li>
                                    <li><a href="<?=site_url('faq')?>" class="tran3s"><i class="fa fa-angle-right"></i> FAQ's</a></li>
                                    <li><a href="<?=site_url('contact_us')?>" class="tran3s"><i class="fa fa-angle-right"></i> Conatct Us</a></li>
                                </ul>
                            </div> <!-- End .useful_link -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="featured_properties_footer">
                                <div class="footer_title">
                                    <h4>Latest Properties</h4>
                                </div>
                                <div class="history">
                                <?php if(empty($this->footer_package->lists)) {?>
                                    <p>Not found any package list</p>
                                <?php } else {?>

                                    <?php foreach($this->footer_package->lists as $list) : ?>
                                    <div class="item">
                                        <div class="image_holder">
                                            <img src="<?=base_url()?>assets/img/package/<?=$list->m_image?>" alt="<?=$list->name?>" width="70px">
                                        </div>
                                        <div class="text">
                                            <a href="property-details.html"><h6><?=$list->name?></h6></a>
                                            <span><i class="fa fa-map-marker"></i> <?=$list->area?></span>
                                            <h4>Tk. <?=$list->price?></h4>
                                        </div> <!-- End .text -->
                                    </div> <!-- End .item -->
                                    <?php endforeach; ?>

                                <?php }?>
                                </div> <!-- End .history -->
                            </div> <!-- End .featured_properties_footer -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact_info">
                                <div class="footer_title">
                                    <h4>Contact Info</h4>
                                </div>
                                <ul>
                                    <li> Address: <?=$this->settings->info->add?></li>
                                    <li>Phone: <?=$this->settings->info->phn1?></li>
                                    <li>Email: <?=$this->settings->info->mail2?></li>
                                    <li><a href="<?=base_url()?>" class="tran3s">Web: domain.com</a></li>
                                    <li>Monday - Sunday 9.00 - 18.00 <br>
                                        Saturday - Sunday Holiday</li>
                                </ul>
                            </div> <!-- End .contact_info -->
                        </div>
                    </div> <!-- End .row -->
                </div> <!-- End .container -->
            </div> <!-- End .main_footer -->
            <div class="bottom_footer">
                <div class="container">
                    <div class="text">
                        <p>Copyright &copy; 2015 Company name here | Developed by <a href="http://cloudnextbd.com/" target="_blank"><img src="<?=base_url()?>assets/img/logo/footer_logo.png" alt=""></a> </p>
                    </div> <!-- End .text -->
                    <div class="footer_nav">
                        <ul>
                            <li><a href="" class="tran3s">Sitemap</a></li>
                            <li><a href="" class="tran3s">Privacy Policy</a></li>
                            <li><a href="<?=site_url('contact_us')?>" class="tran3s">Contact Us</a></li>
                        </ul>
                    </div> <!-- End .footer_nav -->
                </div>
            </div> <!-- End .bottom_footer -->
        </footer>
        <!-- JavaScript -->
        <script src="<?=base_url()?>assets/js/jquery-2.1.4.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/js/jQuery.style.switcher.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.tooltipster.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery-ui.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.fancybox.pack.js"></script>
        <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>       
        
        <script src="<?=base_url()?>assets/js/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="<?=base_url()?>assets/js/revolution/jquery.themepunch.revolution.min.js"></script>
        <script src="<?=base_url()?>assets/js/revolution/revolution.extension.slideanims.min.js"></script>
        <script src="<?=base_url()?>assets/js/revolution/revolution.extension.layeranimation.min.js"></script>
        <script src="<?=base_url()?>assets/js/revolution/revolution.extension.navigation.min.js"></script>
        
        <script src="<?=base_url()?>assets/js/main.js"></script>
        <script src='<?=base_url()?>assets/js/cli_add_more_btn.js'></script>

<script>
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();

    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>

    </div> <!-- End .boxed_wrapper -->
    </body>
</html>