<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?= base_url('dist/images/logo.svg')?>">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="<?= base_url('admin') ?>" class="menu menu--active">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="<?= base_url('admin/pos') ?>" class="menu">
                <div class="menu__icon"> <i data-feather="shopping-cart"></i> </div>
                <div class="menu__title"> Point of Sale </div>
            </a>
        </li>
        <li>
            <a href="<?= base_url('admin/orders') ?>" class="menu">
                <div class="menu__icon"> <i data-feather="shopping-bag"></i> </div>
                <div class="menu__title"> Orders </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="box"></i> </div>
                <div class="menu__title"> Product <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="<?= base_url('admin/product') ?>" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Products </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/product/add') ?>" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-square"></i> </div>
                        <div class="menu__title"> Add Product </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="users"></i> </div>
                <div class="menu__title"> User <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="<?= base_url('admin/user') ?>" class="menu">
                        <div class="menu__icon"> <i data-feather="list"></i> </div>
                        <div class="menu__title"> Users </div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/user/add') ?>" class="menu">
                        <div class="menu__icon"> <i data-feather="plus-square"></i> </div>
                        <div class="menu__title"> Add User </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?= base_url('admin/settings') ?>" class="menu">
                <div class="menu__icon"> <i data-feather="settings"></i> </div>
                <div class="menu__title"> Settings </div>
            </a>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="" class="intro-x flex items-center pl-5 pt-4">
            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?= base_url('dist/images/logo.svg')?>">
            <span class="hidden xl:block text-white text-lg ml-3"> Light<span class="font-medium">Stuff</span> </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="<?= base_url('admin') ?>" class="side-menu <?= current_url() == base_url('admin')? 'side-menu--active': '' ?> ">
                    <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                    <div class="side-menu__title"> Dashboard </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/pos') ?>" class="side-menu <?= current_url() == base_url('admin/pos')? 'side-menu--active': '' ?>">
                    <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                    <div class="side-menu__title"> Point of Sale </div>
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/orders') ?>" class="side-menu <?= current_url() == base_url('admin/orders')? 'side-menu--active': '' ?>">
                    <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                    <div class="side-menu__title"> Orders </div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="side-menu <?= current_url() == base_url('admin/product') || current_url() == base_url('admin/product/add') ? 'side-menu--active': '' ?>">
                    <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                    <div class="side-menu__title"> Product <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="<?= current_url() == base_url('admin/product') || current_url() == base_url('admin/product/add')? 'side-menu__sub-open': '' ?>">
                    <li>
                        <a href="<?= base_url('admin/product') ?>" class="side-menu <?= current_url() == base_url('admin/product')? 'side-menu--active': '' ?>">
                            <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                            <div class="side-menu__title"> Products </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/product/add') ?>" class="side-menu <?= current_url() == base_url('admin/product/add')? 'side-menu--active': '' ?>">
                            <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                            <div class="side-menu__title"> Add Product </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="side-menu <?= current_url() == base_url('admin/user') || current_url() == base_url('admin/user/add') ? 'side-menu--active': '' ?>">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title"> User <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                </a>
                <ul class="<?= current_url() == base_url('admin/user') || current_url() == base_url('admin/user/add')? 'side-menu__sub-open': '' ?>">
                    <li>
                        <a href="<?= base_url('admin/user') ?>" class="side-menu <?= current_url() == base_url('admin/user')? 'side-menu--active': '' ?>">
                            <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                            <div class="side-menu__title"> Users </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/user/add') ?>" class="side-menu <?= current_url() == base_url('admin/user/add')? 'side-menu--active': '' ?>">
                            <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                            <div class="side-menu__title"> Add User </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url('admin/settings') ?>" class="side-menu <?= current_url() == base_url('admin/settings')? 'side-menu--active': '' ?>">
                    <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
                    <div class="side-menu__title"> Settings </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END: Side Menu -->