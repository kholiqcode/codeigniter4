<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- BEGIN: Head -->

<html lang="en">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="<?= base_url('dist/images/logo.svg') ?>" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title><?= $title ?></title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= base_url('dist/css/app.css') ?>" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="app">
    <?= $this->include('errors/app') ?>
    <?= $this->include('components/sidebar') ?>

    <?= $this->renderSection('content') ?>
    <!-- BEGIN: JS Assets-->
    <script src="<?= base_url('dist/js/app.js') ?>"></script>
    <!-- END: JS Assets-->
</body>

</html>