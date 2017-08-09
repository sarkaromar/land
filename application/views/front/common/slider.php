        <!-- Main Banner -->
        <div id="main_banner" class="clear_fix">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <div id="main_slider" class="rev_slider fullwidthabanner" data-version="5.0.7">
                        <ul>
                            <?php foreach($sliders as $slider) : ?>
                            <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?=base_url()?>assets/images/home/thum1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="<?=$slider->title?>" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="<?=base_url()?>assets/img/slider/<?=$slider->image?>"  alt="<?=$slider->title?>"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption rent-box tp-resizeme rs-parallaxlevel-0" 
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','50']" 
                                    data-y="['top','top','top','top']" data-voffset="['208','208','185','100']" 
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="wrap"
                                    data-transform_idle="o:1;"
                                    data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                                    data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                    data-start="1500" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" 
                                    data-elementdelay="0.05" 
                                    style="z-index:5;">
                                        <div class="rent-content">
                                            <div class="title-rent">
                                                <h2><?=$slider->title?></h2>
                                                <a href="<?=$slider->link?>">Details</a>
                                            </div>
                                            <div class="text">
                                                <h4><?=$slider->title?></h4>
                                                <p><?=$slider->desc?></p>
                                                <h4>Tk. <?=$slider->info_04?></h4>
                                            </div>
                                            <ul>
                                                <li class="tooltip" title="Facing"><i class="fa fa-trello"></i> <?=$slider->info_01?></li>
                                                <li class="tooltip" title="SQ ft"><i class="fa fa-compress"></i> <?=$slider->info_02?> sq ft</li>
                                            </ul>
                                        </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tp-static-layers"></div>
                        <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>    
                    </div>
                </div><!-- END REVOLUTION SLIDER -->
        </div> <!-- End #main_banner -->
        <!-- End Main Banner -->