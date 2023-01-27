<?php

include_once "../includes/config.php";

$stars = $_POST['stars'];
for($i=0; $i<$stars; $i++): 
    if($i<$stars) : include "../src/elements/normal_star.php"; else: include "../src/elements/grey_stars.php"; endif; 
endfor; 

?>