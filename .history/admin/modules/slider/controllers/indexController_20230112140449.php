<?php
function construct()
{
}
function indexAction()
{
}
function add_sliderAction()
{
    load('lib', 'upload');
    load('lib', 'database_oop');
    global $error, $success, $error_mobile, $success_mobile;
    if (isset($_POST['add_slider_desktop'])) {
        #Xử lý upload đúng file ảnh
        // show_array($_FILES);
        $error = array();
        $success = array();
        $type_allow = array('png', 'jpg', 'gif', 'jpeg');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type), $type_allow)) {
            $error['type'] = "Chỉ được upload file có định dạng png, jpg, gif, jpeg";
        } else {
            $file_size = $_FILES['file']['size'];
            if ($file_size < 21000000) {
                $file_dir = "../public/uploads/slider_desktop/";
                $file_name =  pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
                $upload_file = $file_dir . $file_name . '.' . $type;
            } else {
                $error['size'] = "File phải có kích thước nhỏ hơn 20MB";
            }
        }
        if (empty($error)) {
            $path_client = './public/uploads/slider_desktop/' . $file_name . '.' . $type;
            if (file_exists($upload_file)) {
                $upload_file = $file_dir . $file_name . ' - Copy' . '.' . $type;
                $path_client = './public/uploads/slider_desktop/' . $file_name . ' - Copy' . '.' . $type;
            }
            $i = 2;
            while (file_exists($upload_file)) {
                $upload_file = $file_dir . $file_name . ' - Copy(' . $i . ')' . '.' . $type;
                $path_client = './public/uploads/slider_desktop/' . $file_name . ' - Copy(' . $i . ')' . '.' . $type;
                $i++;
            }
            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                $data = array(
                    'path_client' => $path_client,
                    'path_admin' => $upload_file,
                    'creator' => $_SESSION['user_login'],
                    'created_date' => date("d-m-Y H:i:s"),
                );
                $table = "tbl_slider_desktop";
                $db = new DB;
                if ($db->insert_true($table, $data)) {
                    $success['upload'] = "Upload file thành công";
                }
            }
        }
    }
    // END ADD SLIDER DESKTOP 
    if (isset($_POST['add_slider_mobile'])) {
        error_reporting(0);
        #Xử lý upload đúng file ảnh
        // show_array($_FILES);
        $error_mobile = array();
        $success_mobile = array();
        $type_allow = array('png', 'jpg', 'gif', 'jpeg');
        $type = pathinfo($_FILES['file_mobile']['name'], PATHINFO_EXTENSION);
        if (!in_array(strtolower($type), $type_allow)) {
            $error_mobile['type'] = "Chỉ được upload file có định dạng png, jpg, gif, jpeg";
        } else {
            $file_size = $_FILES['file_mobile']['size'];
            if ($file_size < 21000000) {
                $file_dir = "../public/uploads/slider_mobile/";
                $file_name =  pathinfo($_FILES['file_mobile']['name'], PATHINFO_FILENAME);
                $upload_file = $file_dir . $file_name . '.' . $type;
            } else {
                $error_mobile['size'] = "File phải có kích thước nhỏ hơn 20MB";
            }
        }
        if (empty($error)) {
            $path_client = './public/uploads/slider_mobile/' . $file_name . '.' . $type;
            if (file_exists($upload_file)) {
                $upload_file = $file_dir . $file_name . ' - Copy' . '.' . $type;
                $path_client = './public/uploads/slider_mobile/' . $file_name . ' - Copy' . '.' . $type;
            }
            $i = 2;
            while (file_exists($upload_file)) {
                $upload_file = $file_dir . $file_name . ' - Copy(' . $i . ')' . '.' . $type;
                $path_client = './public/uploads/slider_mobile/' . $file_name . ' - Copy(' . $i . ')' . '.' . $type;
                $i++;
            }
            if (move_uploaded_file($_FILES['file_mobile']['tmp_name'], $upload_file)) {
                $data = array(
                    'path_client' => $path_client,
                    'path_admin' => $upload_file,
                    'creator' => $_SESSION['user_login'],
                    'created_date' => date("d-m-Y H:i:s"),
                );
                $table = "tbl_slider_mobile";
                $db = new DB;
                if ($db->insert($table, $data)) {
                    $success_mobile['upload'] = "Upload file thành công";
                }
            }
        }
    }
    // END ADD SLIDER MOBILE
    load_view('add_slider');
}
function list_sliderAction()
{
    load('lib', 'database_oop');
    $data_send = array(
        'slider_desktop' => db_fetch_array("SELECT * FROM `tbl_slider_desktop`"),
        'slider_mobile' => db_fetch_array("SELECT * FROM `tbl_slider_mobile`")
    );
    load_view('list_slider', $data_send);
}
function del_slider_deskAction()
{
    load('lib', 'database_oop');
    $id = $_POST['id'];
    $db = new DB;
    $slider_item = db_fetch_row("SELECT * FROM `tbl_slider_desktop` WHERE `id` = $id");
    echo $slider_item;
}