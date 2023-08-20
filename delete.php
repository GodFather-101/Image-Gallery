<?php

include "db.php";
if (isset($_GET['id'])) {
    $Gained_data = $_GET['id'];
    $Split = explode("_", $Gained_data);
    $image_id = $Split[1];

    $Table_Name = $Split[0];

    $LoginId = $Split[2];

    $arr = array($Table_Name,$LoginId);
    $Navigate = join('_',$arr);

    $sql = "DELETE FROM $Table_Name WHERE Id=$image_id";

    $res = mysqli_query($conn, $sql);

    if($res){
        // echo "Deleted Successfully";
        header("Location: /Image_Gallery/view.php?id=$Navigate");
        // header("Location: /Image_Gallery/upload.php?image=$LoginId");

        // echo "<script>location.reload()</script>";
    }

}
