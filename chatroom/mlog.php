<?php
function mlog($tfile,$txt)
{ 
    $myfile = fopen("mlog.txt", "a+") or die("Unable to open file!");
    fwrite($myfile,$tfile . '    '. $txt . "\n");
    fclose($myfile);
}

?>