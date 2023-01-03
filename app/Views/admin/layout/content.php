<?= $this->include('admin/layout/header') ?>
<!--page-wrapper Start-->
<div class="page-wrapper">

    <!--Page Header Start-->
    <div class="page-main-header" data-intro="This is header">
        <div class="main-header-left" style="place-content: center;">
            <div class="logo-wrapper">
                <a href="/admin/dashboard">
                    <img src="/assets/images/victory-open-small.png" class="image-dark" alt="" style="margin: 0" />
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">                    
                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <a href="/logout"><i class="icofont icofont-power"></i></a>
                            <div class="media-body">
                                
                            </div>
                        </div>                        
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle">
                    <i class="icon-more"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">

        <!--Page Sidebar Start -->
        <?= $this->include('admin/layout/sidebar') ?>
        <!--Page Sidebar End -->

        <div class="page-body">
            <?= $this->renderSection('content'); ?>  
        </div>
                                            
    </div>
    <!--Page Body Ends-->

</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<?= $this->include('admin/layout/footer') ?>