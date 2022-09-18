<?php
include_once('createDatabase.php');
if (!$conn){
$rows = array(
    array('id' => 1, 'question' => 'question content', 'description' => "description content", 'content' => 'content content'),
    array('id' => 2, 'question' => 'question content', 'description' => "description content", 'content' => 'content content'),
    array('id' => 3, 'question' => 'question content', 'description' => "description content", 'content' => 'content content'),
    array('id' => 4, 'question' => 'question content', 'description' => "description content", 'content' => 'content content'),
    array('id' => 5, 'question' => 'question content', 'description' => "description content", 'content' => 'content content'),
    array('id' => 6, 'question' => 'question content', 'description' => "description content", 'content' => 'content content'),
    array('id' => 7, 'question' => 'question content', 'description' => "description content", 'content' => 'content content'),
    array('id' => 8, 'question' => 'question content', 'description' => "description content", 'content' => 'content content'),
    array('id' => 9, 'question' => 'question content', 'description' => "description content", 'content' => 'content content')
);
}

else {
    $query = mysqli_query($conn, "SELECT * FROM question_table");
    
    $rows = array();
    while ($record = mysqli_fetch_row($query)){
        array_push($rows, array('id' => $record[0], 'question' => $record[1], 'description' => $record[2], 'content' => $record[3]));
    }
}

$id = $rows[$cardCount]['id'];
$question = $rows[$cardCount]['question'];
$description = $rows[$cardCount]['description'];
$cardCount++;
?>
<div class="card" style="width: 95%; height: 375px;">
    <div class="card-body">
        <h5 class="card-title"><?php print 'Question ' . $id . '<br>'; print $question; ?></h5>
        <p class="card-text"><?php print $description; ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

