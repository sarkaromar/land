<!-- Left side column -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <!-- dashboard -->
            <li class="<?php if ($menu == 'dash') echo "active"; ?>">
                <a href="<?=site_url("admin_panel")?>" >
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- slider -->
            <li class="<?php if ($menu == 'slider') echo "active"; ?>">
                <a href="<?=site_url("admin_panel/slider")?>" >
                    <i class="fa fa-fw   fa-picture-o"></i>
                    <span>Slider</span>
                </a>
            </li>
            <!-- our package -->
            <li class="<?php if ($menu == 'package' || $page == 'back/package/edit_package') echo "active"; ?>">
                <a href="<?=site_url("admin_panel/package")?>" >
                    <i class="fa fa-fw fa-home"></i>
                    <span>Our Package</span>
                </a>
            </li>
            <!-- coverage area -->
            <li class="<?php if ($menu == 'area' || $page == 'back/coverage_area/edit_coverage_area') echo "active"; ?>">
                <a href="<?=site_url("admin_panel/coverage_area")?>" >
                    <i class="fa fa-fw fa-map-marker"></i>
                    <span>Coverage Area</span>
                </a>
            </li>

            <!-- about us -->
            <!-- <li class="<?php if ($menu == 'back/about_us/about_us') echo "active"; ?>">
                <a href="<?=site_url("admin_panel/about_us")?>" >
                    <i class="fa fa-fw fa-group"></i>
                    <span>About Us</span>
                </a>
            </li> -->

            
            
            <!-- faq's -->
            <!-- <li class="<?php if ($menu == 'faqs') echo "active"; ?>">
                <a href="<?=site_url("admin_panel/faqs")?>" >
                    <i class="fa fa-fw fa-question-circle"></i>
                    <span>FAQ's</span>
                </a>
            </li> -->
            <!-- common settings -->
            <li class="<?php if ($menu == 'com_set') echo "active"; ?>" >
                <a href="<?=site_url("admin_panel/common_settings")?>" >
                    <i class="fa fa-fw fa-gears"></i>
                    <span>Common Settings</span>
                </a>
            </li>
        </ul>
    </section>
</aside>