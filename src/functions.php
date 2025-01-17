<?php
    function check_login($con){
        if(isset($_SESSION["site_id"])){
            $id =$_SESSION["site_id"];
            $query="select * from new_account where site_id ='$id' limit 1 ";
            $result=mysqli_query($con,$query);
            if($result && mysqli_num_rows($result)>0){
                $user_data=mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        // redirect to sign in page
        header("Location: sign.php");
        die;
    }
?>