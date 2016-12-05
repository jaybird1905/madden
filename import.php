<?php
// Retrieve a file stream and saves it as a gzip file
file_put_contents('./uploads/'.$_SERVER['REMOTE_ADDR'].'-'.time().'.gz', file_get_contents('php://input'));
?>
