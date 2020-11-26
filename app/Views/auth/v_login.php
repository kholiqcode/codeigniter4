<?= $this->include('errors/app') ?>
<?= $this->extend('layouts/auth') ?>
<?= $this->section('content') ?>
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?= base_url('dist/images/logo.svg') ?>">
                <span class="text-white text-lg ml-3"> Light<span class="font-medium">Stuff</span> </span>
            </a>
            <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="<?= base_url('dist/images/illustration.svg') ?>">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    A few more clicks to
                    <br>
                    sign in to your account.
                </div>
                <div class="-intro-x mt-5 text-lg text-white">Manage all your e-commerce accounts in one place</div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign In
                </h2>
                <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                <?php view('components/alert') ?>
                <?= form_open(base_url('auth')) ?>
                <div class="intro-x mt-8">
                    <?= form_input(['type' => 'text', 'name' => 'email', 'id' => 'email', 'value' => $data['email'] ?? '', 'class' => 'intro-x login__input input input--lg border border-gray-300 block', 'placeholder' => 'Email', 'required' => true]) ?>
                    <?= form_error('email')  ?>
                    <?= form_password(['name' => 'password', 'class' => 'intro-x login__input input input--lg border border-gray-300 block mt-4', 'id' => 'password', 'placeholder' => 'Password', 'required' => true]) ?>
                    <?= form_error('password')  ?>
                </div>
                <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
                    <div class="flex items-center mr-auto">
                        <?= form_checkbox(['name' => 'remember_me', 'id' => 'remember-me', 'value' => $data['password'] ?? '', 'class' => 'input border mr-2']) ?>
                        <?= form_label('Remember me', 'remember-me', ['class' => 'cursor-pointer select-none']) ?>
                    </div>
                    <a href="">Forgot Password?</a>
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
                    <button onclick="location.href='<?= base_url('auth/register') ?>'" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign up</button>
                </div>
                <?= form_close() ?>
                <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
                    By signin up, you agree to our
                    <br>
                    <a class="text-theme-1" href="">Terms and Conditions</a> & <a class="text-theme-1" href="">Privacy Policy</a>
                </div>
            </div>
        </div>
        <!-- END: Login Form -->
    </div>
</div>
<?= $this->endSection() ?>