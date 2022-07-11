<?php
require_once('Models\circuitModel.php');

if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'dashboard':
            include('Views\circuitVue.php');
            break;
    }
}