--TEST--
Check if can be call write method
--EXTENSIONS--
hello
--FILE--
<?php
$hello = new Hello();
$write = $hello->write("Something happens and i'm head over heels.");

var_dump($write);
?>
--EXPECT--
string(42) "Something happens and i'm head over heels."
