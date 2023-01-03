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
    global $error, $fullname, $number_phone, $address, $proof_document, $exhibit;
    if (isset($_POST['btn_reg'])) {
        $error = array();
        if (empty($_POST['fullname'])) {
            $error['fullname'] = '*Vui lòng nhập họ tên';
        } else {
            $fullname = $_POST['fullname'];
        }
        //Kiểm tra họ và tên
        if (empty($_POST['number_phone'])) {
            $error['number_phone'] = '*Vui lòng nhập số điện thoại';
        } else {
            if (is_username($_POST['username'])) {
                $username = $_POST['username'];
            } else {
                $error['username'] = 'Username không đúng định dạng.';
            }
        }
    }
    load_view('reg');
}
