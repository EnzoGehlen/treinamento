<? $server = shell_exec("uname -n"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to <? echo $server; ?></title>
    <script>
  </head>
  <body>
    <h1>Hello, World!</h1>
    <p>This is a simple web page.</p>
    <p>The server is: <? echo $server; ?></p>
  </body>
</html>