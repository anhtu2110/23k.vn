<?php

function construct()
{
}
function indexAction()
{
}
function regAction()
{
    load('lib', 'validation');
    global $error, $username, $num_phone, $address, $proof_document, $exhibit;
    if (isset($_POST['btn_reg'])) {
        $error = array();
    }
    load_view('reg');
}
