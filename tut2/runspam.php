<?php 

$how_much_to_run = 80;

echo "Started Spam. ","\n";

$points = array('.','..','...','....','.....');



for ($i=0;$i<$how_much_to_run;$i++){
$random = rand(1,5);

$array_index = $i%5;

$multipliedstring = str_repeat($points[$array_index], $random);

$string_to_be_run = "php new_task.php Running_$i"."$multipliedstring";
shell_exec("$string_to_be_run");


}






?>
