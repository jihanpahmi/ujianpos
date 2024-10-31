<?php
$module = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($module) {
    case 'view': default:
        include('penyediajasa/view.php');
        break;
    case 'add':
        include('penyediajasa/add.php');
        break;
    case 'save':
        include('penyediajasa/save.php');
        break;
    case 'edit':
        include('penyediajasa/edit.php');
        break;
    case 'update':
        include('penyediajasa/update.php');
        break;
    case 'delete':
        include('penyediajasa/delete.php');
        break;
    }