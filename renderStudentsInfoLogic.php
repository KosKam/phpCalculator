<?php

$name = $_GET["names"];
$age = $_GET["ages"];
$submited = $_GET["submited"];

if (isset($name, $age)) {
    echo "<table border = 1>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>    
</table>";
}

