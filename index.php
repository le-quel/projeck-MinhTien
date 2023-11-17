<?php
session_start();
ob_start();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
    $_SESSION["total_order"] = 0;
}

//connect db
require_once "model/connectDB.php";
//user
require_once "model/user.php";
//category
require_once 'model/category.php';
//product
// require_once "model/product.php";
//cart
// xrequire_once "model/cart.php";

require_once "view/header.php";

//data home page
// $flashSaleProducts = get_product_flash_sale();
// $new_product = get_new_product();
// $hot_product = get_hot_product();

// $list_category = get_category();


//router
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'about.php':
            require_once 'view/about.php';
            case 'contact.php':
                require_once 'view/contact.php';
        //trang chủ
        case 'home':

            require_once 'view/home.php';
            break;

        //trang đăng nhập
        case 'login':
            require_once 'view/login.php';
            break;

        //chức năng đăng nhập
        case 'login-function':
            if (isset($_POST["btn-login"]) && $_POST["btn-login"]) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                
                $result = checkUser($username, $password);

                if (is_array($result) && count($result) > 0) {
                    $_SESSION["user"] = $result;
                    extract($result);
                    header("Location: index.php");
                } else {
                    // Đăng nhập không thành công, đặt thông báo lỗi
                    $error_message = "Tên đăng nhập hoặc mật khẩu không đúng.";
                    $_SESSION["message"] = $error_message;
                    header('Location: index.php?page=login');
                }
            }

            break;

        //trang đằng ký
        case 'register':
            require_once 'view/register.php';
            break;

        //chức năng đăng ký
        case 'register-function':

            // kiểm tra tồn tại nút đăng kí và nút đăng ký đc nhấn
            if (isset($_POST["btn-register"]) && $_POST["btn-register"]) {
                //lấy thông tin từ form
                $username = $_POST["username"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                //kiêm tra xem username đã tồn tại
                if (usernameExists($username)) {
                    $re_message = "Tên tài khoản đã được sử dụng";
                    $_SESSION["message_re"] = $re_message;
                    header('Location: index.php?page=register');
                    //kiểm tra email đẫ tồn tại
                } elseif (emailExists($email)) {
                    $re_message = "Địa chỉ email đã được sử dụng";
                    $_SESSION["message_re"] = $re_message;
                    header('Location: index.php?page=register');
                } else {
                    user_insert($username, $email, $password);
                    $re_message = "Đăng Ký Thành Công! <a href='index.php?page=login'>Đăng Nhập Ngay</a>";
                    $_SESSION["message_re"] = $re_message;
                    header('Location: index.php?page=register');
                }
            }

            break;

        //đăng xuất
        case 'logout':
            if (isset($_SESSION["user"]) && count($_SESSION["user"]) > 0) {
                session_destroy();
            }
            header('Location: index.php?page=login');
            break;

        case "search":
            require_once 'view/search.php';
            break;

        default:
            // http_response_code(404);
            // require_once "view/404page.php";
            require_once "view/home.php";
            break;
    }
} else {
    require_once 'view/home.php';
}

require_once "view/footer.php";

ob_end_flush();