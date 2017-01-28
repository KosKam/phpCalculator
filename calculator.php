<?php

if (isset($_GET["calculate"])) {
    $operation = $_GET["operation"];
    $nOne = $_GET["nOne"];
    $nTwo = $_GET["nTwo"];
    
    $output = "";
    
    if ($operation == "sum") {        
         $output = $nOne + $nTwo;
    }
    else if($operation == "subtract"){      
         $output = $nOne - $nTwo;
    }
    else {             
        $output = "Invalid operation!";
    }
     echo "</div>";
}

include 'calculator_frontend.php';
