<?php
if (isset($_POST['submits'])) {
for( $a=10;$a>0;$a--)
{
for($b=1;$b>$a;$b--)
{
echo " ";
}
for( $c=10;$c>$a;$c--)
{
echo"*";
} 
echo "<br>";
}
}
?>