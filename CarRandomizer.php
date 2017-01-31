<?php

$cars = $_GET["cars"];
$submited = $_GET["submited"];

$carsInArray = (explode(", ", $cars));
$colors = array("red", "green", "blue");



?>

<form method="get" action="CarRandomizer.php">    
    <div>
        Enter cars: 
        <input type="text" name="cars">        
    </div>    
    <div>     
        <input type="submit" name="submited" value="Show result!">        
    </div>   
    
</form>

<?php if(isset($submited)): ?> 

<table border = '1'>
    <thead>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($carsInArray as $c ): ?>
        <tr>            
            <td><?= $c ?></td>
            <td><?= $colors[rand(0, 2)] ?></td>    
            <td><?= rand(1, 5) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>
<?php endif; ?>


