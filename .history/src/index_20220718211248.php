<? $server = shell_exec("uname -n"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to <? echo $server; ?></title>
    <style>
      body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
      }
      .container {
        margin: 0 auto;
        max-width: 800px;
      }
      .container .text-muted {
        margin: 20px 0;
      } 
      </style>
  </head>
  <body>
    <div class="container">
      <h1>Welcome to <? echo $server; ?></h1>
      <p class="text-muted">
        This is a simple web server running on <? echo $server; ?>.
      </p>
      <
    <h1>Hello, World!</h1>
    <p>This is a simple web page.</p>
    <p>The server is: <? echo $server; ?></p>
  </body>
</html>