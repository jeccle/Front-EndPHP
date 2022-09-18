
<div class="col card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?php print $question + $id ?></h5>
        <p class="card-text"><?php print $description ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

<?php 
function template( $file, $args){
    if ( !file_exists( $file ) ) {
        return '';
      }
      // Make values in the associative array easier to access by extracting them
      if ( is_array( $args ) ){
        extract( $args );
      }
      // buffer the output (including the file is "output")
      ob_start();
        include $file;
      return ob_get_clean();
}
?>
