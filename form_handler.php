<?php

    $inc = 1;
    $colr = [];

    if(isset($_GET['sub']))
    {
        $mail = $_GET['mail'];
        $pass = $_GET['pass'];
        $gender = $_GET['gender'];
        
        for($i=0; $i<3; $i++)
        {
            if(isset($_GET["paint$inc"]))
            {
               array_push($colr, $_GET["paint$inc"]);
            }
            $inc++;
        }

        passValidate($pass, $mail, $gender, $colr);
    }
    else
    {
        redirect();
    }
    function passValidate($password, $em, $gen, $fav)
    {
        if(strlen($password)< 8 || strlen($password) > 16)
        {
            echo("<script> alert('Password Must Be Between 8 and 16 digites'); window.location.href=\"form.html\";</script>");
            return;
        }
        if(count($fav)<1)
        {
            echo "mail: $em <br/>Gender: $gen <br/>Favorite Color: No Favorite Color!";
        }
        else
        {

            echo "mail: $em <br/>Gender: $gen <br/>Favorite Color:";

            for($i=0; $i<count($fav); $i++)
            {
                echo "<div style='width 30px; height:30px;'>$fav[$i]</div>";
            }
            
        }
    }
    function redirect()
    {
        echo("<script> alert('plese fill the form'); window.location.href=\"form.html\";</script>");
    }
?>