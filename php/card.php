<?php
include('updateValue.php');
?>

<div class="card white-box" style="width: 95%; height: 380px;">
    <div class="card-body">
        <h5 class="card-title"><?php print 'Question ' . $id . '<br>' . $question; ?></h5>
        <p class="card-text"><?php print $description; ?></p>
        <a href="html/Question_<?php echo $id?>.php" class="btn btn-primary">More Info</a>
    </div>
</div>

