<?php

session_start();
include "config.php";

if(mysqli_connect_error()){
    echo"
    <script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
    </script>;
    ";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase'])){

        $query1="INSERT INTO `order_manager`( `Full_Name`, `Address`, `Pay_Mode`, `Phone_No`) VALUES ('$_POST[fullname]','$_POST[address]','$_POST[pay_mode]','$_POST[phone_no]')";
        if(mysqli_query($conn,$query1))
        {
            $Order_Id=mysqli_insert_id($conn);
            $query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($conn,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"
                <script>
                alert('Order Placed');
                window.location.href='index.php';
                </script>;
                ";

            }
            else
            {
                echo"
                <script>
                alert('Sql Query Prepare Error');
                window.location.href='mycart.php';
                </script>;
                ";
            }
        }
        else{
            echo"
                <script>
                alert('Sql Error');
                window.location.href='mycart.php';
                </script>;
                ";
        }
    }
}
?>