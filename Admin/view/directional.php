<?php
$route = $_GET["mod"] ?? "dashboard";

switch ($route) {
    case "dashboard":
        require_once("dashboard/dashboard.php");
        break;
    case "account":
        require_once ("account/account.php");
        break;
    case "banner":
        require_once "banner/banner.php";
        break;
    case "product":
        require_once "product/product.php";
        break;
    case "productType":
        require_once "producttype/productype.php";
        break;
    case "category":
        require_once "category/category.php";
        break;
    case "promotion":
        require_once "promotion/promotion.php";
        break;
    default:
        require_once "dashboard/dashboard.php";
        break;
}