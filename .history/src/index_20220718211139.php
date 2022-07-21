<? $server = shell_exec("uname -n"); ?>

<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <h1>Hello, World!</h1>
    <p>This is a simple web page.</p>
    <p>The server is: <? echo $server; ?></p>
  </body>
</html>