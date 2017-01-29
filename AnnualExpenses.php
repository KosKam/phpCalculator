<?php

$beginYears = $_GET["years"];
$submited = $_GET["submited"];
$endYear = 2016 - $beginYears;

$money = array();

for($i = 2016; $i > $endYear; $i--){
    $money[$i] = array($i, rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), rand(0, 999), "Total");
    $totalMoney = $money[$i][1] + $money[$i][2] + $money[$i][3] + $money[$i][4] + $money[$i][5] + $money[$i][6] + $money[$i][7] + $money[$i][8] + $money[$i][9] + $money[$i][10] + $money[$i][11] + $money[$i][12];
    $money[$i][13] = $totalMoney;
}


?>

<form method="get" action="AnnualExpenses.php">    
    <div>
        Enter number of years: 
        <input type="text" name="years">        
    </div>    
    <div>     
        <input type="submit" name="submited" value="Show cost">        
    </div>  
</form>

<?php if(isset($submited)): ?> 

<table border = '1'>
    <thead>
        <tr>
            <th>Year</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Total:</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($money as $m ): ?>
        
        <tr>            
            <td><?= $m[0] ?></td>
            <td><?= $m[1] ?></td>    
            <td><?= $m[2] ?></td> 
            <td><?= $m[3] ?></td>
            <td><?= $m[4] ?></td>
            <td><?= $m[5] ?></td>
            <td><?= $m[6] ?></td>
            <td><?= $m[7] ?></td>
            <td><?= $m[8] ?></td>
            <td><?= $m[9] ?></td>
            <td><?= $m[10] ?></td>
            <td><?= $m[11] ?></td>
            <td><?= $m[12] ?></td>
            <td><?= $m[13] ?></td>
        </tr>
        
        <?php endforeach; ?>
        
        
    </tbody>    
</table>
<?php endif; ?>

