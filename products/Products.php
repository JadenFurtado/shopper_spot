<?php 
    //session_start();
    include('add_product.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- my css-->
<style type="text/css">
    .signup_form{
        padding: 50px;
    }
</style>
 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Shop</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
<!--this is just a demo-->
<?php
if(!isset($_SESSION['user_id'])){
    echo "you have to log in to access this page!";
    header("https://localhost/vfl/403.php");
}
else{
    ?>
    <div style="padding:20px;">
    <h3>Add products</h3>
    <form method="POST">
        <table>
            <tr>
                <td>
                    product name
                </td>
                <td>
                    <input type="text" name="product_name">
                </td>
            </tr>
            <tr>
                <td>
                    Category
                </td>
                <td>
                    <select name="product_category">
                        <option value="electronics">electronics</option>
                        <option>food</option>
                        <option>clothing</option>
                        <option>odds and ends</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    subcat
                </td>
                <td>
                    <select name="product_subcat">
                        <option value="mobile">mobile</option>
                        <option>womens</option>
                        <option>mens</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    quantity
                </td>
                <td>
                    <input type="text" name="product_quantity">
                </td>
            </tr>
            <tr>
                <td>
                    price
                </td>
                <td>
                    <input type="text" name="product_price">
                </td>
            </tr>
            <tr>
                <td>
                    Product description
                </td>
                <td>
                    <input type="text" name="product_description">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button name='submit'>submit</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
<?php
        if(isset($_POST['submit'])){
            $new_product=new Products();
            //$prod_name,$prod_description,$prod_price,$prod_quantity,$prod_category
            if($new_product->add_product($_POST['product_name'],$_POST['product_description'],$_POST['product_price'],$_POST['product_quantity'],$_POST['product_category'],$_POST['product_subcat'])){
                echo "<script>alert('success!');</script>";
    
            }
        }
    }
?>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>