<?php
include_once('createDatabase.php');
$query = mysqli_query($conn, "SELECT * FROM question_table");
    
$rows = array();
while ($record = mysqli_fetch_row($query)){
    array_push($rows, array('id' => $record[0], 'question' => $record[1], 'description' => $record[2], 'content' => $record[3]));
}

$id = $rows[$cardCount]['id'];
$question = $rows[$cardCount]['question'];
$description = str_replace('@', '</br>', $rows[$cardCount]['description']);
$content = str_replace('@', '</br>', $rows[$cardCount]['content']);
$cardCount++;
?>