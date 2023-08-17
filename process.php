<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:ind.php?error');
       }
       else
       {
           $to = "suprajaravichandran03@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:ind.php?success");
           }
       }
    }
    else
    {
        header("location:ind.php");
    }



?>