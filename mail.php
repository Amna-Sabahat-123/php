<?php

$conn=mysqli_connect("localhost","root","","contact_us");

            $text =$_POST['first_name'];
            $text1 =$_POST['last_name'];
            $text2 =$_POST['message'];
            $text3 =$_POST['email'];
            $text4 =$_POST['city'];
            $text5 =$_POST['number'];

            $sql = "INSERT INTO `contact_info` ( `First_name`, `Last_name`, `Message`, `Email`,`City`,`Contact_number`) VALUES ( '$text', '$text1', '$text2', '$text3','$text4','$text5');"
            $rs = mysqli_query($conn, $sql);
            if($rs)
{
	echo "Contact Records Inserted";
}

?>
  