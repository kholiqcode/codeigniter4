<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<!-- BEGIN: Content -->
<div class="content">
    <?= $this->include('components/topbar') ?>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add User
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-12 xxl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="border border-gray-200 rounded-md p-5">
                                <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="<?= base_url('dist/images/profile-11.jpg')?>">
                                    <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                </div>
                                <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="button w-full bg-theme-1 text-white">Upload Photo</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-8">
                            <div>
                                <label for="full-name">Full Name</label>
                                <input type="text" name="full-name" class="input w-full border bg-gray-100 mt-2" placeholder="Full Name">
                            </div>
                            <div class="mt-3">
                                <label for="address">Address</label>
                                <textarea name="address" class="input w-full border mt-2" placeholder="Address"></textarea>
                            </div>
                            <div>
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="input w-full border bg-gray-100 mt-2" placeholder="Phone">
                            </div>
                            <div>
                                <label for="user-name">Username</label>
                                <input type="text" name="user-name" class="input w-full border bg-gray-100 mt-2" placeholder="User Name">
                            </div>
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" name="email" class="input w-full border bg-gray-100 mt-2" placeholder="Email Address">
                            </div>
                            <div>
                                <label for="password">Password</label>
                                <input type="password" name="password" class="input w-full border bg-gray-100 mt-2" placeholder="Password">
                            </div>
                            <div>
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" name="confirm-password" class="input w-full border bg-gray-100 mt-2" placeholder="Confirm Password">
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