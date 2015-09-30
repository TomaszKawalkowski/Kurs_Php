<?php
/**
 * Created by PhpStorm.
 * User: Dorota
 * Date: 2015-09-30
 * Time: 11:20
 */

require_once('connection_mysql.php');

$studentName = "Tomasz";
$studentAge = 39;

$sqlQuery = "INSERT INTO students(name, age) VALUES('$studentName',$studentAge)";

$result = $conn->query($sqlQuery);

if ($result == TRUE){
    ECHO ("STUDENT DODANU DO TABELKI,<BR>");
    ECHO ("jego id to: {$conn->insert_id}");
}

else{
    echo("Blad: .{$conn->error}");
}

$conn->close();
$conn = null;