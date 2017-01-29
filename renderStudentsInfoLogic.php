<?php
session_start();
include 'renderStudentsInfoHTML.php'; 

$separator = $_GET["separator"];
$name = $_GET["name"];
$age = $_GET["age"];
$submited = $_GET["submited"];

if (isset($submited, $name, $age)) {
    
    $arrayOfNames = explode($separator, $name);
    $arrayOfAges = explode($separator, $age);                
}
?>

<?php if (isset($name, $age)): ?> 

    <table border = 1>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php for($ii = 0; $ii < count($arrayOfNames); $ii++): ?>
        <tr>
            <td><?= $arrayOfNames[$ii] ?></td>
            <td><?= $arrayOfAges[$ii] ?></td>
        </tr>
        <?php endfor; ?>
    </tbody>    
</table>

<?php endif; ?>

