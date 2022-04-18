<?php

file('file.txt');  
// returns the data inside a file in an array format 

file_get_contents('file.txt'); 
//Reads entire file into a string, returns the data inside a file in an string format 

file_put_contents('file.txt', 'not found',FILE_APPEND); 
// Write a string to a file and Delete the file content unless the FILE_APPEND flag is set.
//This function returns the number of bytes that were written to the file, or false on failure
//FILE_APPEND - Append content to existing file.

fopen('file.txt','r');
// fopen — Opens file or URL  https://www.php.net/manual/en/function.fopen
// Returns a file pointer resource on success, or false on failure

$file = fopen('file.txt','r');
$content = fread($file, filesize($file));
fclose($file);

/** 
    require '';
    include '';
    copy();
    chmod();
    basename();
    dirname();
    mkdir();
    rmdir();
    file_exists();
    filetype(); 
    filesize();
    is_dir();
    is_file();
    is_writable();
    is_readable();
    is_executable();
    unlink();
    touch();
*/
