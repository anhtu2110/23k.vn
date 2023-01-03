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
    load_view('reg');
}
