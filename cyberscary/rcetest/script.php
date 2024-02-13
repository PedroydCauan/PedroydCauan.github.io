<?php
$fullpath  = $_SERVER['REQUEST_URI'];
$filename  = basename($fullpath);
$ip        = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];

echo "path of the url (here): $fullpath;<br>
cuhh ur on doxbin
file u opened: $filename;<br>
ya nice IP: $ip;<br>
browsah agent: $useragent";
