<div class="dsy-aside dsy-aside-fixed">
    <div class="dsy-aside-brand">
        <div class="dsy-brand-logo">
            <a href="<?php echo PATH . "index.php"; ?>" class="main-logo">
                <img src="<?php echo PATH . "public/vendor/media/main-logo.png"; ?>" alt="logo">
            </a>
            <a href="<?php echo PATH . "index.php"; ?>" class="logo-icon">
                <img src="<?php echo PATH . "public/vendor/media/favicon.png"; ?>" alt="logo">
            </a>
        </div>
        <div class="nav-toggle-btn d-lg-none">
            <button class="btn-icon sidebar-toggle-mobile">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
    <div class="dsy-aside-menu-wrapper">
        <div class="dsy-aside-menu">
            <ul class="dsy-aside-nav sidebar-toggle-view">
                <!--<li class="dsy-menu-label">
                    <div class="dsy-menu-label-text">MENU</div>
                </li>
                <li class="dsy-menu-item sidebar-nav-item active">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-1"></i>
                        </span>-->
                <!--
                        <span class="dsy-menu-link-text">
                            <a href="index.php" class="dsy-menu-link">Dashboards</a>
                        </span>
                        -->
                <!--<span class="dsy-menu-count">03</span>-->
                <!--</a>-->
                <!--
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item active">
                            <a href="index.php" class="dsy-menu-link">Sales Monitoring</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="index2.php" class="dsy-menu-link">Website Analytics</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="index3.php" class="dsy-menu-link">Cryptocurrency</a>
                        </li>
                    </ul>
                    -->
                </li>
                <li class="dsy-menu-label">
                    <div class="dsy-menu-label-text">MENU</div>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-6"></i>
                        </span>
                        <span class="dsy-menu-link-text">Più Usati</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <?php
                        require_once(ROOT . "app/controller/menu/piu_usati.php");
                        ?>
                    </ul>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="<?php echo PATH . "app/view/lists/properties_list.php" ?>" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-4"></i>
                        </span>
                        <span class="dsy-menu-link-text">Proprietà</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="<?php echo PATH . "app/view/lists/properties_list.php" ?>" class="dsy-menu-link">Elenco</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="<?php echo PATH . "app/view/lists/property_types_list.php" ?>" class="dsy-menu-link">Tipi</a>
                        </li>
                    </ul>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="<?php echo PATH . "app/view/lists/rooms_list.php" ?>" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-4"></i>
                        </span>
                        <span class="dsy-menu-link-text">Stanze</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="<?php echo PATH . "app/view/lists/rooms_list.php" ?>" class="dsy-menu-link">Elenco</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="<?php echo PATH . "app/view/lists/rooms_type_list.php" ?>" class="dsy-menu-link">Tipi</a>
                        </li>
                    </ul>
                </li>
                <li class="dsy-menu-item">
                    <a href="<?php echo PATH . "app/view/lists/brand_list.php" ?>" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-3"></i>
                        </span>
                        <span class="dsy-menu-link-text">Brand</span>
                    </a>
                </li>
                <!--
                <li class="dsy-menu-item">
                    <a href="<?php //echo PATH . "app/view/lists/users_list.php" ?>" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-3"></i>
                        </span>
                        <span class="dsy-menu-link-text">Utenti</span>
                    </a>
                </li>
                <li class="dsy-menu-item">
                    <a href="<?php //echo PATH . "app/view/lists/nazionalities_list.php" ?>" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-3"></i>
                        </span>
                        <span class="dsy-menu-link-text">Nazioni</span>
                    </a>
                </li>
                -->
                <!--
                <li class="dsy-menu-item">
                    <a href="file-manager.php" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-4"></i>
                        </span>
                        <span class="dsy-menu-link-text">File Manager</span>
                    </a>
                </li>
                <li class="dsy-menu-item">
                    <a href="contact.php" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-5"></i>
                        </span>
                        <span class="dsy-menu-link-text">Contacts</span>
                    </a>
                </li>
                <li class="dsy-menu-label">
                    <div class="dsy-menu-label-text">PAGES</div>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-7"></i>
                        </span>
                        <span class="dsy-menu-link-text">User Pages</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="registration.php" class="dsy-menu-link">Registration</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="login.php" class="dsy-menu-link">Login</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="reset_psw.php" class="dsy-menu-link">Password Reset</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="profile.php" class="dsy-menu-link">Profile</a>
                        </li>
                    </ul>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-9"></i>
                        </span>
                        <span class="dsy-menu-link-text">Other Pages</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="connections.php" class="dsy-menu-link">Connections</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="groups.php" class="dsy-menu-link">Groups</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="events.php" class="dsy-menu-link">Events</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="blog.php" class="dsy-menu-link">Blog</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="pricing.php" class="dsy-menu-link">Pricing Plan</a>
                        </li>
                    </ul>
                </li>
-->
                <!--
                <li class="dsy-menu-label">
                    <div class="dsy-menu-label-text">COMPONENTS</div>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-11"></i>
                        </span>
                        <span class="dsy-menu-link-text">UI Elements</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="alart.php" class="dsy-menu-link">Alart</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="badge.php" class="dsy-menu-link">Badge</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="button.php" class="dsy-menu-link">Button</a>
                        </li>
                    </ul>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-10"></i>
                        </span>
                        <span class="dsy-menu-link-text">Forms</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="basic-form.php" class="dsy-menu-link">Basic Form</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="advanced-form.php" class="dsy-menu-link">Advanced Form</a>
                        </li>
                    </ul>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-12"></i>
                        </span>
                        <span class="dsy-menu-link-text">Tables</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="basic-table.php" class="dsy-menu-link">Basic Table</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="data-table.php" class="dsy-menu-link">Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-13"></i>
                        </span>
                        <span class="dsy-menu-link-text">Charts</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="chart-js.php" class="dsy-menu-link">ChartJs</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="apex-chart.php" class="dsy-menu-link">Apex Chart</a>
                        </li>
                    </ul>
                </li>
                <li class="dsy-menu-item sidebar-nav-item">
                    <a href="#" class="dsy-menu-link">
                        <span class="dsy-menu-link-icon">
                            <i class="flaticon-null-14"></i>
                        </span>
                        <span class="dsy-menu-link-text">Maps</span>
                        <span class="dsy-arrow-icon"><i class="flaticon-null-8"></i></span>
                    </a>
                    <ul class="dsy-sub-group sub-group-menu">
                        <li class="dsy-nav-item">
                            <a href="google-map.php" class="dsy-menu-link">Google Map</a>
                        </li>
                        <li class="dsy-nav-item">
                            <a href="vector-map.php" class="dsy-menu-link">Vector Map</a>
                        </li>
                    </ul>
                </li>
-->
            </ul>
        </div>
    </div>
</div>
