<?php
session_start();
if($_GET["destroy"] == true){
    session_destroy();   
    header('Location: renderStudentsInfoHTML.php');
    exit;
}

$name = $_GET["name"];
$age = $_GET["age"];
$submited = $_GET["submited"];

if (isset($submited, $name, $age)) {   
    $i = $_SESSION["i"]++;
    $_SESSION["nameAgeStudent"][$name] = $age;          
}
?>

<?php if (isset($name, $age)): ?> 
    
<table border = '1'>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($_SESSION["nameAgeStudent"] as $k => $v ): ?>
        <tr>            
            <td><?= $k ?></td>
            <td><?= $v ?></td>                        
        </tr>
        <?php endforeach; ?>
    </tbody>    
</table>

<?php endif; ?>

<?php include 'renderStudentsInfoHTML.php'; ?>
