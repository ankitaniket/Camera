<?php
$conn = mysqli_connect("localhost","root","","webcam");

if(isset( ))

if(isset($_FILES["webcam"]["tmp_name"1])){
    $tmpName = $_FILES["webcam"]["tmp_name"];
    $imageName = date("Y.m.d"). "-". date("h.i.sa") . ' jpeg';
    move_uploaded_file($tmpName,'img/' . $imageName);

    $date = date("Y/m/d") . " & " . date("h:i:sa");
    $query = "INSERT INTO tb_image VALUES('','$date','$imageName')";
    mysqli_quary($conn,$query);

}