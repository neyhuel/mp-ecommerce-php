<?php
echo("Success");
echo("<br />");
foreach($_GET as $key => $value){
    echo $key . " : " . $value . "<br />\r\n";
}
echo("<br />");
echo(json_encode($_GET));

?>