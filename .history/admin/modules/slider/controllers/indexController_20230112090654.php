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
    load_view('add_slider');
}
function list_sliderAction()
{
    load_view('list_slider');
}
