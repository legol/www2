<?hh // strict

<<__EntryPoint>>
function main():noreturn{
  // try http://192.168.101.202:10020/index.php?test=abcd in chrome
  // and you will see
  // jay1:Hello World!1111
  // array(1) { ["test"]=> string(4) "abcd" } array(0) { } array(1) { ["test"]=> string(4) "abcd" }

  echo "<div><B>jay1:Hello World!1111</B></div>";

  var_dump($_GET); // Element 'foo' is string(1) "a"
  var_dump($_POST); // Element 'bar' is string(1) "b"
  var_dump($_REQUEST); // Does not contain elements 'foo' or 'bar'

  exit(0);
}
