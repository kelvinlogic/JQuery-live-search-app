<?php
    require_once('connect.php');
    if(isset($_POST['q'])){
        $q = mysql_real_escape_string( $_POST["q"] );
        $count = mysql_query("SELECT COUNT(id) AS count FROM food_table WHERE  foodName LIKE '%". $q ."%' AND  available= '1'");
        $array = mysql_fetch_array ($count);
        $total = $array['count'];
        $query = mysql_query("SELECT * FROM food_table WHERE  foodName LIKE '%". $q ."%' AND  available= '1' LIMIT 3");
        $arr = array();
        while( $row = mysql_fetch_array ( $query )){
            $arr[] = array(
                "id"      => $row["id"],
                "name"    => $row["foodName"],
                "image"   => "http://www.sages-media.com/gallery/public_gallary/menu_gallery/".$row["foodImage"],
                "price"   => $row["foodPrice"],
                "content" => $row["foodDetails"]
            );
        }
        $data = array(
            "menu"=>$arr,
            "count"=>$total
        );
        echo json_encode($data);
        
    }else{
        $count = mysql_query("SELECT COUNT(id) AS count FROM food_table WHERE available= '1' ");
        $array = mysql_fetch_array ($count);
        $total = $array['count'];
        $query = mysql_query("SELECT * FROM food_table WHERE available= '1' LIMIT 3");
        $arr = array();
        while( $row = mysql_fetch_array ( $query )){
            $arr[] = array(
                "id"      => $row["id"],
                "name"    => $row["foodName"],
                "image"   => "http://www.sages-media.com/gallery/public_gallary/menu_gallery/".$row["foodImage"],
                "price"   => $row["foodPrice"],
                "content" => $row["foodDetails"]
            );
        }        
        $data = array(
            "menu"=>$arr,
            "count"=>$total
        );
        
        echo json_encode($data);
        
    }
    
?>