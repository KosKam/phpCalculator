<?php
$beginYears = $_GET["digits"];
$submited = $_GET["submited"];

$arrayOfStrings = explode(", ", $beginYears);

$arrayOfSimbols = array();

$arraySum = array();

$arrayStrAndSum =  array();

for($i = 0; $i < count($arrayOfStrings); $i++){
    
    $arrayOfSimbols[$i] = str_split($arrayOfStrings[$i]);
    foreach ($arrayOfSimbols[$i] as $v){
    
    $arraySum[$i] += intval($v);
}
    
}

for($s = 0; $s < count($arrayOfStrings); $s++){
    
    $arrayStrAndSum[$arrayOfStrings[$s]] = $arraySum[$s];
}

?>

<form method="get" action="SumOfDigits.php">    
    <div>
        Enter number of years: 
        <input type="text" name="digits">        
    </div>    
    <div>     
        <input type="submit" name="submited" value="Show cost">        
    </div>  
</form>

<?php if(isset($submited)): ?> 

<table border = '1'>    
    <tbody>        
        <?php foreach ($arrayStrAndSum as $v => $s ): ?>
        
        <tr>            
            <td><?= $v ?></td>
            <td><?= $s ?></td>   
        </tr>
        
        <?php endforeach; ?>      
    </tbody>    
</table>

<?php endif; ?>
