<?php

$numbers = array(4, 3, 5, 6, 45, 34, 50);


?>

<table border = '1'>
    <thead>
        <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($numbers as $v ): ?>
        <tr>            
            <td><?= $v ?></td>
            <td><?= round(sqrt($v), 2) ?></td>                        
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>

