<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $grade = $_POST["grade"];
    }
        if($grade >=70){
            echo $name,",you passed!";
        }
        elseif($grade>=60){
            echo $name,", you need take a remedial.";
        }
        else{
            echo $name,", you failed.";
        }

?>
