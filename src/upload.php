<?php 
/**
 * TODO: make documentation of this code.
 * 
 * Error handling can be handled with echo statements on this page, 
 * if all goes well user should be forwarded to the result page.
 */
// copy file into script folder so it resides with script.
copy($_FILES["fileToUpload"]["tmp_name"], "script/".$_FILES["fileToUpload"]["name"]);

//run script
exec("script/script.sh ".$_FILES["fileToUpload"]["name"]. " & ");

// forward user to result page
header("Location: result.php");
