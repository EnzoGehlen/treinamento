<? $server = shell_exec("uname -n"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bem vindo a <? echo $server; ?></title>
    <style>
      body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 18px;
        line-height: 1.42857143;
        color: #333;
        background-color: ;
      }
      .container {
        margin: 0 auto;
        max-width: 100%;
        text-align: center;
      }
      .container .text-muted {
        margin: 20px 0;
      } 
      </style>
  </head>
  <body>
    <div class="container">
      <h1>Bem vindo</h1>
      <h4 class="text-muted">
        Servidor que processou a requisição: <strong> <? echo $server; ?> </strong>
    </h4>
    </div>
  </body>
</html>