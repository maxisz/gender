<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?= lang('Files.Menu') ?></li>

                <li>
                    <a href="<?= base_url('/admin'); ?>">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"><?= lang('Files.Dashboard') ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('/admin/plans'); ?>" >
                        <i data-feather="credit-card"></i>
                        <span data-key="t-apps"><?= lang('Plans') ?></span>
                    </a>
                    
                </li>

                <li>
                    <a href="<?= base_url('/admin/users'); ?>" >
                        <i data-feather="users"></i>
                        <span data-key="t-authentication"><?= lang('Users') ?></span>
                    </a>
                   
                </li>
                <li>
                    <a href="<?= base_url('/admin/keys'); ?>" >
                        <i data-feather="key"></i>
                        <span data-key="t-authentication"><?= lang('Keys') ?></span>
                    </a>
                   
                </li>
                <li>
                    <a href="<?= base_url('/admin/names'); ?>" >
                        <i data-feather="file-text"></i>
                        <span data-key="t-authentication"><?= lang('Names') ?></span>
                    </a>
                   
                </li>
                <li>
                    <a href="<?= base_url('/admin/invoices'); ?>" >
                        <i data-feather="dollar-sign"></i>
                        <span data-key="t-authentication"><?= lang('Invoices') ?></span>
                    </a>
                   
                </li>


                <li class="menu-title mt-2" data-key="t-components"><?= lang('Site') ?></li>

             

                <li>
                    <a href="#" class="has-arrow">
                        <i data-feather="sliders"></i>
                        <span data-key="t-tables"><?= lang('Settings') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('admin/settings'); ?>" data-key="t-basic-tables"><?= lang('General') ?></a></li>
                        <li><a href="<?= base_url('admin/faqs'); ?>" data-key="t-basic-tables"><?= lang('faq') ?></a></li>
                        <li><a href="<?= base_url('admin/password'); ?>" data-key="t-basic-tables"><?= lang('password') ?></a></li>
                  
                        <!-- <li><a href="tables-basic" data-key="t-basic-tables"><?= lang('') ?></a></li> -->

                    </ul>
                </li>
                <li>
                    <a href="<?= base_url('/admin'); ?>" >
                        <i data-feather="hard-drive"></i>
                        <span data-key="t-authentication"><?= lang('Backup') ?></span>
                    </a>
                   
                </li>


<!-- 

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="cpu"></i>
                        <span data-key="t-icons"><?= lang('Files.Icons') ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons" data-key="t-boxicons"><?= lang('Files.Boxicons') ?></a></li>
                        <li><a href="icons-materialdesign" data-key="t-material-design"><?= lang('Files.Material_Design') ?></a></li>
                        <li><a href="icons-dripicons" data-key="t-dripicons"><?= lang('Files.Dripicons') ?></a></li>
                        <li><a href="icons-fontawesome" data-key="t-font-awesome"><?= lang('Files.Font_Awesome_5') ?></a></li>
                    </ul>
                </li> -->

               

            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16"><?= lang('Need A custom system?') ?></h5>
                        <p class="font-size-13"><?= lang("For all pcustom projects, content management systems and scripts") ?>.</p>
                        <a href="https://micsofte.co.ke" class="btn btn-primary mt-2"><?= lang('Contact us') ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->