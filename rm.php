<?php
$file_pointer = "/home/students/2018spf/public_html/UserImg/dolphin/1557162670851.png";
        if (!unlink($file_pointer))
        {
           echo ("$file_pointer cannot be deleted due to an error");
        }
        else
        {
           echo ("$file_pointer has been deleted");
        }
?>
