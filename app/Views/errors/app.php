<?php
function form_error($field = null)
{
    $errors = session()->getFlashdata('errors');
    if(!$errors) return;
    if (is_null($field)) {
        foreach ($errors as $error) :
            return '<div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white"> <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>' . $error . ' <i data-feather="x" class="w-4 h-4 ml-auto"></i> </div>';
        endforeach;
    } else {
        return '<div class="text-theme-6 mt-2">' . $errors[$field] . '</div>';
    }
    return;
}
