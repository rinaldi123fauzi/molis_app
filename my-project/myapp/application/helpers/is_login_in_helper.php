<?php

function is_logged_in(){
    $ci = get_instance();
    if (empty($ci->session->userdata('id'))) {
        # code...
        redirect('auth');
    }
}