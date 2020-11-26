<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!-- BEGIN: Content -->
<div class="content">
    <?= $this->include('components/topbar') ?>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add Product
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-12 xxl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="border-2 border-dashed rounded-md mt-3 pt-4">
                                <label for="photo">
                                <div class="flex flex-wrap px-4  justify-center items-center" role="button">
                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                        <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="<?= base_url('dist/images/preview-6.jpg') ?>">
                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                        <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="<?= base_url('dist/images/preview-12.jpg') ?>">
                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                        <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="<?= base_url('dist/images/preview-9.jpg') ?>">
                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                        <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="<?= base_url('dist/images/preview-13.jpg') ?>">
                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                    </div>
                                </div>
                                </label>
                                <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                    <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-theme-1 mr-1">Upload a file</span> or drag and drop
                                    <input type="file" id="photo" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-8">
                            <div>
                                <label for="product-name">Product Name</label>
                                <input type="text" id="product_name" class="input w-full border bg-gray-100 mt-2" placeholder="Name">
                            </div>
                            <div class="mt-3">
                                <label for="desc">Description</label>
                                <textarea id="desc" class="input w-full border mt-2" placeholder="Description"></textarea>
                            </div>
                            <div>
                                <label for="price">Price</label>
                                <input type="number" id="price" class="input w-full border bg-gray-100 mt-2" placeholder="Price">
                            </div>
                            <div>
                                <label for="qty">Quantity</label>
                                <input type="number" id="qty" class="input w-full border bg-gray-100 mt-2" value="1" placeholder="Quantity">
                            </div>
                            <button type="button" class="button w-20 bg-theme-1 text-white mt-3">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
        </div>
    </div>
</div>
<!-- END: Content -->
</div>
<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script> -->
<!-- END: JS Assets-->
<?= $this->endSection() ?>