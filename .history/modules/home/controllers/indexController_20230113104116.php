<?php

function construct()
{
}
function indexAction()
{
    load('lib', 'database_oop');
    $db = new DB;
    $list_slider = $db->get("tbl_slider_desktops", $field = array(), $where = "");
    // $list_slider = db_fetch_array("SELECT * FROM `tbl_slider_desktop`");
    $data = array(
        'list_slider' => $list_slider,
    );
    load_view('index', $data);
}