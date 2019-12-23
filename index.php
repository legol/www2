<?hh // strict
require_once(__DIR__.'/vendor/autoload.hack');

<<__EntryPoint>>
async function main(): Awaitable<void> {
  Facebook\AutoloadMap\initialize();


  // try http://192.168.101.202:20010/index.php?test=abcd in chrome
  // and you will see
  // jay1:Hello World!1111
  // array(1) { ["test"]=> string(4) "abcd" } array(0) { } array(1) { ["test"]=> string(4) "abcd" }

  header('Access-Control-Allow-Origin: *');
  header(
    'Access-Control-Allow-Headers: Content-Type, Authorization, Content-Length, X-Requested-With',
  );

  echo "aaaa<div><B>jay1:Hello World!1111222</B></div>";

  $a = \HH\Lib\Vec\concat(vec[1, 2], vec[3, 4]);
  var_dump($a);

  var_dump($_GET); // Element 'foo' is string(1) "a"
  var_dump($_POST); // Element 'bar' is string(1) "b"
  var_dump($_REQUEST); // Does not contain elements 'foo' or 'bar'    

  exit(0);
}
