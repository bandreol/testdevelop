<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hour Of Day</title>
    </head>
    <body>
        <?php
        print DisplayGreeting(3);
        function DisplayGreeting ($hourOfDay){
            $time = "";
            $hourOfDay = (int)$hourOfDay;
            print "<p>Hour: " . $hourOfDay . "</p>";
            if($hourOfDay < 6 ){
                $time = "Good Night!";
            }else if($hourOfDay < 12){
                $time = "Good Morning!";
            }else if($hourOfDay < 18){
                $time = "Good Afternoon!";
            }else if($hourOfDay < 22){
                $time = "Good Evening!";
            }else{
                $time = "Good Night!";
            }
            return $time;
        }
        ?>
    </body>
</html>
