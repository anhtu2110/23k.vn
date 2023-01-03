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
        if (empty($_POST['username'])) {
            $error['username'] = '*Vui lòng nhập họ tên';
        } else {
            $username = $_POST['username'];
        }
    }
    load_view('reg');
}
