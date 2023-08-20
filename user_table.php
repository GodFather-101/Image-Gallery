<?php
include "db.php";
$Table = "CREATE TABLE IF NOT EXISTS `$imageId` (
    `Id` tinyint(3) NOT NULL AUTO_INCREMENT,
    `imageType` varchar(25) NOT NULL DEFAULT '',
    `imageId` varchar(25) NOT NULL,
    `imageData` mediumblob NOT NULL,
    PRIMARY KEY (`Id`)
  )";
mysqli_query($conn, $Table);

?>