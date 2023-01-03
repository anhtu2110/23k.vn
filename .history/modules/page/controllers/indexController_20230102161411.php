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
            if (is_username($_POST['number_phone'])) {
                $number_phone = $_POST['number_phone'];
            } else {
                $error['number_phone'] = '*Số điện thoại không đúng định dạng.';
            }
        }
    }
    load_view('reg');
}
