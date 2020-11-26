<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!-- BEGIN: Content -->
<div class="content">
    <?= $this->include('components/topbar') ?>
    <h2 class="intro-y text-lg font-medium mt-10">
        Orders
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Order</button>
            <div class="dropdown relative">
                <button class="dropdown-toggle button px-2 box text-gray-700">
                    <span class="w-5 h-5 flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-4 h-4">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg> </span>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 left-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="refresh-cw" class="w-4 h-4 mr-2"></i> Newest </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="refresh-cw" class="w-4 h-4 mr-2"></i> Oldest </a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of 150 entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700">
                    <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        <?php for ($i = 1; $i <= 20; $i++) {  ?>
            <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
                <div class="box">
                    <div class="flex items-start px-5 pt-5">
                        <div class="w-full flex flex-col lg:flex-row items-center">
                            <div class="w-16 h-16 image-fit">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-md" src="<?= base_url('dist/images/profile-2.jpg')?>">
                            </div>
                            <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                                <a href="" class="font-medium">Crewneck Champion</a>
                                <div class="text-gray-600 text-xs">1 Item</div>
                            </div>
                        </div>
                        <div class="absolute right-0 top-0 dropdown relative">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                            <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                                <div class="dropdown-box__content box p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center lg:text-left p-5">
                        <div>Jalan Mastrip No.45 Gg 2 RT003/RW004 Sumbersari</div>
                        <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-5"> <i data-feather="credit-card" class="w-3 h-3 mr-2"></i> Paid </div>
                        <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-1"> <i data-feather="dollar-sign" class="w-3 h-3 mr-2"></i> Rp 137.000 </div>
                    </div>
                    <div class="text-center lg:text-right p-5 border-t border-gray-200">
                        <button class="button button--sm text-white bg-theme-1 mr-2">Confirm</button>
                        <button class="button button--sm text-gray-700 border border-gray-300">Detail Order</button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- BEGIN: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
            <ul class="pagination">
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                </li>
                <li> <a class="pagination__link" href="">...</a> </li>
                <li> <a class="pagination__link" href="">1</a> </li>
                <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                <li> <a class="pagination__link" href="">3</a> </li>
                <li> <a class="pagination__link" href="">...</a> </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                </li>
            </ul>
            <select class="w-20 input box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>
</div>
<!-- END: Content -->
</div>
<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script> -->
<!-- END: JS Assets-->
<?= $this->endSection() ?>