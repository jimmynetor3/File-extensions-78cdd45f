<?php
$input = $argv[1];
$pattern = '/[A-Z]{1,}/m';
if (preg_match($pattern,$input,$matches)) {
    $newstring = preg_replace_callback(
        $pattern,
        function ($matches) {
            return ((strtolower($matches[0])));
        },
        $input
    );
    echo $newstring;
}else{
    echo("nothing to change");
}