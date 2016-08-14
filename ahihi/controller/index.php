<?php
 	include '../model/connect.php';
	include '../model/user.php';
	include '../model/products.php';
	include '../model/customer.php';
        include '../model/order.php';
        include '../model/cart.php';
	
	session_start();	
         
         // Tạo mảng thông tin về giỏ hàng
         if(!isset($_SESSION['cartview']))
         $_SESSION['cartview'] = array();
         
	if(isset($_GET['action'])){
		$action=$_GET['action'];
	}elseif (isset($_POST['action']))
     {
         $action=$_POST["action"];
     }
     else
         $action="home";
	 unset($_SESSION['messages']);	 
	switch($action){
		case "home":
            include "../view/trangchu.php";
            break;
        
        case "payments":
            
           $username = $_SESSION['check'];
          
           $quest = new user();
           $result = $quest->getInfoById($username); 
           $userid=$result[0];
          
            $o = new order();
            $orderid = $o->createOrder($userid);
            $_SESSION['order_id']=$orderid;
           
            $total = 0;
            foreach($_SESSION['cartview'] as $key => $item)
                 {
                 $o->insertOrderDetail($orderid,$key,$item['cost'], $item['qty'], $item['total']);
                 $total += $item['total'];
                 }
                 $o->updateOrderTotal($orderid, $total);
           include "../view/products_payments.php";
            break;
         case "show_order":
             if (isset($_SESSION['order_id']))
             {
                 include "../view/products_payments.php";
                 break;
             }
             else
             {
                 
                 header ("Location:index.php?action=show_cart");
                 break;
             }
         case "orders_view":
        include '../view/admin/orders_view.php';
        break;   
         case "products":
             $action = "products";
             $Category ="Áo";
            include "../view/products.php";
            break;
        case "products_details":
            include "../view/products_details.php";
            break;
         case "add_cart":
         echo add_item($_POST['productkey'],$_POST['itemqty']);
            include "../view/products_addcart.php";
            break;
         case "show_cart":
            include '../view/products_addcart.php';
            break;
         case "update_cart":
             $new_list = $_POST['newqty'];
             
             foreach($new_list as $key => $qty)
             {
                
                 if($_SESSION['cartview'][$key] != $qty)
                 {
                     update_item($key,$qty);
                 }
             }
             
          include '../view/products_addcart.php';
          break;
         case "empty_cart":
             unset($_SESSION['cartview']);
             include '../view/products_addcart.php';
             break;
        
		case "login":
            include "../view/login.php";
            break;
                case "logout":
                    include "../view/logout.php";
                    break;
		case "login_action":
                    
            $username = $_POST['txtusername'];
            $_SESSION['txtusername'] = $username; 
            $password = $_POST['txtpassword'];	
            $_SESSION['txtpassword'] = $password;   
			$user = new customer();
			if($username == "" || $password == ""){
                                 $_SESSION['messages'] = "Bạn phải nhập thông tin đầy đủ";
                                 include "../view/login.php";
                                 break;
			}else{
				if($user->checkUser($username,$password)){
					$result = $user->userid($username, $password);
					$userid = $result[0];
                                        $_SESSION['check'] = $username;
					header ("Location:./index.php");
					break;
				}  else {
                                    $_SESSION['messages'] = "Sai thông tin đã nhận";
                                 include "../view/login.php";
                                 break;
                                }
			}
		case "register":
			include "../view/register.php";
            break;
        
		case "register_action":
			$tmpUsername = $_POST['txtusername'];
			$tmpPassword = $_POST['txtpassword'];
			$tmpName = $_POST['txtfullname'];
			$tmpEmail = $_POST['txtemail'];
			
			$register = new user();
			$register->insertUser($tmpUsername,$tmpPassword,$tmpName,$tmpEmail);
			header ("location:./index.php");
			break;
;
	}
?>