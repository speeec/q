<?php
  $fileLocation = getenv("DOCUMENT_ROOT") . "/myfile.txt";
  $file = fopen($fileLocation,"w");
  $content = "Your text here";
  fwrite($file,$content);
  fclose($file);
?>
