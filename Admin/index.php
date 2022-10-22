<?php
session_start();
$auth = $_SESSION['auth'] ?? 0;
if(isset($_SESSION["auth"]) && $_SESSION["auth"] ===  true){
    $mod = $_GET['mod'] ?? "dashboard";
    switch ($mod){
        case "dashboard":
            require_once "Controllers/DashboardController.php";
            $dashboardM = new DashboardController();
            $dashboardM->getData();
            break;
        case "account":
            require_once "Controllers/AccountController.php";
            $accController = new AccountController();
            $act = $_GET['act'] ?? "";
            if($act === "store"){
                $accController->handleAdd();
            }elseif ($act === "detail"){
                $accController->viewDetail();
            }
            elseif ($act==="delete"){
                $accController->handleDelete();
            }else{
                $accController->getAll();
            }
            break;
        case "banner":
            require_once "Controllers/BannerController.php";
            $bannerObj = new BannerController();
            $act = $_GET['act'] ?? "";
            if($act === "store"){
                $bannerObj->handleAdd();
            }elseif ($act==="detail"){
                $bannerObj->viewDetail();
            }
            elseif ($act === "delete"){
                $bannerObj->handleDelete();
            }else{
                $bannerObj->getAll();
            }
            break;
        case "product":
            require_once "Controllers/ProductController.php";
            $product_ctl = new ProductController();
            $act = $_GET['act'] ?? "";
            if($act==="store"){
                $product_ctl->handleAdd();
            }elseif ($act==="detail"){
                $product_ctl->handleViewDetail();
            }
            elseif ($act === "delete"){
                $product_ctl->handleDelete();
            }
            else{
                $product_ctl->getAll();
            }
            break;
        case "productType":
            require_once "Controllers/ProductTypeController.php";
            $productTypeObj = new ProductTypeController();
            $act = $_GET['act'] ?? "";
            if($act === "store"){
                $productTypeObj->handleAdd();
            }elseif ($act==="detail"){
                $productTypeObj->viewDetail();
            }
            elseif ($act === "delete"){
                $productTypeObj->handleDelete();
            }else{
                $productTypeObj->handleGetAll();
            }
            break;
        case "category":
            require_once "Controllers/CategoryController.php";
            $categoryObj = new CategoryController();
            $act = $_GET['act'] ?? "";
            if($act==="store"){
                $categoryObj->handleAdd();
            }elseif ($act==="detail"){
                $categoryObj->viewDetail();
            }
            elseif ($act==="delete"){
                $categoryObj->handleDelete();
            }
            else{
                $categoryObj->handleGetAll();
            }
            break;
        case "promotion":
            require_once "Controllers/PromotionController.php";
            $promotionObj = new PromotionController();
            $act = $_GET['act'] ?? "";
            if($act==="store"){
                $promotionObj->handleAdd();
            }elseif ($act==="detail"){
                $promotionObj->viewDetail();
            }elseif ($act === "delete"){
                $promotionObj->handleDelete();
            }
            else{
                $promotionObj->handleGetAll();

            }
            break;
    }
} else{
    header("location: ../?page=home");
}
