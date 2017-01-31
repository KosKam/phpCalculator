<form method="get" action="calculateTwoNumbersGrafical.php">
    <div>Operation:
    <select name="operation">
        <option value="empty"></option>
        <option value="sum">Sum</option>
        <option value="subtract">Subtract</option>        
    </select>
    </div>    
    <div>Number 1:
        <input type="text" name="nOne"><br>       
    </div>    
    <div>Number 2:       
        <input type="text" name="nTwo"><br>        
    </div>    
    <div>       
        <input type="submit" name="calculate" value="Calculate!">
    </div>   
</form>

<?php

if (isset($_GET["calculate"])) {
    $operation = $_GET["operation"];
    $nOne = $_GET["nOne"];
    $nTwo = $_GET["nTwo"];
    
    echo "<div>";
    if ($operation == "sum") {        
         echo "<input type='text' name='nOne' disabled='disabled' readonly='readonly' value='".($nOne + $nTwo)."'><br>";
    }
    else if($operation == "subtract"){      
         echo "<input type='text' name='nOne' disabled='disabled' readonly='readonly' value='".($nOne - $nTwo)."'><br>";
    }
    else {             
        echo "<input type='text' name='nOne' disabled='disabled' readonly='readonly' value='Invalid operation!'><br>";
    }
     echo "</div>";
}



