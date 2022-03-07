<?
$dir = __DIR__;
$files = array(
  "",
);
$class = "";
$class_var = "\$";
// -------------
// END OF CONFIG
// -------------
echo "Welcome to FLAA version 0.0.5\n";
usleep(1000000);
echo "Starting mounting...\n\n";
foreach($files as $file) {
  $fileList = glob($dir.'/*');
  if (! in_array($dir.'/'.$file, $fileList)) {
    echo "\e[0;31mERROR: $file does not exist in $dir!";
    $error = true;
  } else {
    echo "Now mounting $file...\n";
  echo "███"; usleep(10000);
echo "███"; usleep(10000);
echo "███"; usleep(10000);
echo "███"; usleep(10000);
echo "███"; usleep(10000);
  include $dir.'/'.$file;
echo "███"; usleep(10000);
echo "██"; usleep(10000);
echo "███"; usleep(10000);
echo "██"; usleep(10000);
  echo "\nMounted $file!\n\n";
  }
}
if ($error) {
  //
} else {
  function startclass() {
    return "$class_var = new $class;";
  }
  startclass();
  echo "Loading complete!\n\n\n";
}
?>
