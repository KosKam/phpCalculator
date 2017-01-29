<?php
session_start();
$name = $_GET["name"];
$age = $_GET["age"];
$submited = $_GET["submited"];

$nameStudent = array();
$ageStudent = array();
$i = 0;

if (isset($submited, $name, $age)) {
    
    $nameStudent[$i] = $name;
    $ageStudent[$i] = $age;
    $i++;       
}

$_SESSION["nameStudent"] = $nameStudent;
$_SESSION["ageStudent"] = $ageStudent;
$_SESSION["i"] = 0;
$_SESSION["i"]++;

?>
<?php    var_dump($_SESSION["i"]); ?>

<?php if (isset($names, $ages)): ?> 

    
    <table border = 1>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php for($ii = 0; $ii < count($nameStudent); $ii++): ?>
        <tr>
            <td><?= $nameStudent[$ii] ?></td>
            <td><?= $ageStudent[$ii] ?></td>
        </tr>
        <?php endfor; ?>
    </tbody>    
</table>;

<?php endif; ?>

 <?php include 'renderStudentsInfoHTML.php'; ?>
