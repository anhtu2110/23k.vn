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
    global $error, $fullname, $number_phone, $address, $check_address, $proof_document, $exhibit, $list_exhibit;
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
            if (is_num_phone($_POST['number_phone'])) {
                $number_phone = $_POST['number_phone'];
            } else {
                $error['number_phone'] = '*Số điện thoại không đúng định dạng.';
            }
        }
        //Kiểm tra số điện thoại
        if (empty($_POST['address'])) {
            $error['address'] = '*Vui lòng nhập địa chỉ';
        } else {
            $address = $_POST['address'];
        }
        //Kiểm tra địa chỉ 
        if (empty($_POST['check_address'])) {
            $error['check_address'] = '*Vui lòng chọn Có hoặc Không';
        } else {
            $check_address = $_POST['check_address'];
        }
        //Kiểm tra xem trùng địa chỉ không
        if (!empty($_POST['check_address']) && $_POST['check_address'] == 'no') {
            if (empty($_POST['proof_document'])) {
                $error['proof_document'] = '*Vui lòng nhập tên giấy tờ chứng minh';
            } else {
                $proof_document = $_POST['proof_document'];
            }
        }
        //Kiểm tra giấy tờ chứng minh nhà
        if (empty($_POST['list_exhibit'])) {
            $error['exhibit'] = '*Vui lòng chọn hoặc điền giấy tờ bạn để lại';
        } else {
            $error['exhibit'] = '';
            $list_exhibit = $_POST['list_exhibit'];
        }
    }
    load_view('reg');
}
function check_regAction()
{
    load('lib', 'validation');
    global $error, $fullname, $number_phone, $address, $check_address, $proof_document, $exhibit, $list_exhibit;
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = '*Vui lòng nhập họ tên';
    } else {
        $error['fullname'] = '';
        $fullname = $_POST['fullname'];
    }
    //Kiểm tra họ và tên
    if (empty($_POST['number_phone'])) {
        $error['number_phone'] = '*Vui lòng nhập số điện thoại';
    } else {
        if (is_num_phone($_POST['number_phone'])) {
            $error['number_phone'] = '';
            $number_phone = $_POST['number_phone'];
        } else {
            $error['number_phone'] = '*Số điện thoại không đúng định dạng.';
        }
    }
    //Kiểm tra số điện thoại
    if (empty($_POST['address'])) {
        $error['address'] = '*Vui lòng nhập địa chỉ';
    } else {
        $error['address'] = '';
        $address = $_POST['address'];
    }
    //Kiểm tra địa chỉ 
    if (empty($_POST['check_address'])) {
        $error['check_address'] = '*Vui lòng chọn Có hoặc Không';
    } else {
        $error['check_address'] = '';
        $check_address = $_POST['check_address'];
    }
    //Kiểm tra xem trùng địa chỉ không
    if (!empty($_POST['check_address']) && $_POST['check_address'] == 'no') {
        if (empty($_POST['proof_document'])) {
            $error['proof_document'] = '*Vui lòng nhập tên giấy tờ chứng minh';
        } else {
            $error['proof_document'] = '';
            $proof_document = $_POST['proof_document'];
        }
    }
    //Kiểm tra giấy tờ chứng minh nhà
    if (empty($_POST['list_exhibit'])) {
        $error['exhibit'] = '*Vui lòng chọn hoặc điền giấy tờ bạn để lại';
    } else {
        $error['exhibit'] = '';
        $list_exhibit = $_POST['list_exhibit'];
    }
    // echo json_encode($error);
    echo $fullname;
}
function send_info_customerAction()
{
    load('lib', 'email');
    global $address;
    $fullname = htmlspecialchars($_POST['fullname']);
    $number_phone = htmlspecialchars($_POST['number_phone']);
    $address = htmlspecialchars($_POST['address']);
    $proof_document = htmlspecialchars($_POST['proof_document']);
    $number_loan = htmlspecialchars($_POST['number_loan'] . " triệu");
    $list_exhibit = htmlspecialchars($_POST['list_exhibit']);
    echo $list_exhibit;
}
