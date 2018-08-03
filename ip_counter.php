<?php
    $servername="sql210.byethost17.com";
    $dbusername="b17_19870100";     //variable  oi page r sathe same hoya jabena
    $dbpassword="sourcecode";
    $dbname1="b17_19870100_iplab"; 

    $con = new mysqli($servername,$dbusername,$dbpassword,$dbname1);

    if($con->connect_error)
    {
        die ("Connection failed".mysqli_connect_error());
    }
    /*
    else
    {
        echo "Connection Successful";
    }
    */
?>

<?php

$ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
		$sql= mysqli_query($con, "INSERT INTO user_ip (ip_address) VALUES ( '".$ipaddress."' )");

echo "AA";
?>

<?php
        require "init.php";
        $sql_query ="select id from user_ip;";
        $result = mysqli_query($con,$sql_query);

        //echo "$result";
        
        while ($row = mysqli_fetch_array($result))
        {
            $current_counts = $row['id'];
            $new_count = $current_counts ;
            //$update_count = "UPDATE user_count SET counts = $new_count;";
            //$res = mysqli_query($con,$update_count);
            
                //echo "<h2>Total Hits : $new_count</h2>";
        }
        
    
        
        ?>
        
        

<?php echo "$new_count";?>