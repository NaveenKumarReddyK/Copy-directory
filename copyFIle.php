<?php
// $oldf = fopen("clone.html","w");
// $newf = fopen("copy.html","w");
// $txt = "hi";
// fwrite($newf,$txt);
// copy("clone.html","copy.html");
// fclose("copy.html");
// fclose("clone.html");
// $existing_file = fopen("clone.html","r");
// fwrite($new_file,$existing_file);
$src_dir = 'E:\XAMPP\htdocs\Copyfolder';
$new_dir = 'E:\XAMPP\htdocs\NewCreatedFolder';
mkdir($new_dir,'0777');
$new_file_dir = 'E:\XAMPP\htdocs\NewCreatedFolder\newfile.html';
$old_file_dir = 'E:\XAMPP\htdocs\Copyfolder\clone.html';
fopen($new_file_dir,"w");
fopen($old_file_dir,"w");
copy($new_file_dir,$old_file_dir);
$curr_dir = getCwd();
$arr = scandir($src_dir);
print_r($arr);
foreach(scandir($src_dir) as $file){
    copy($src_dir.'/'.$file,$new_dir.'/'.$file);
}
echo $curr_dir;
fclose($old_file_dir);
fclose($new_file_dir);

// if(!file_exists($new_dir)){
  
    // copy($new_dir,$src_dir);

// }

?>