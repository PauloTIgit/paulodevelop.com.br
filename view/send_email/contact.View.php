<?php
header('Content-Type: application/json');
require "./app/setting/Mail.php";

function Validador($input)
{
  if ($input == null || $input == '' || $input == '‎' || empty($input)) {
    return null;
  } else {
    return $input;
  }
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $nome = Validador(trim(strip_tags(filter_input(INPUT_POST, 'name', FILTER_DEFAULT))));
  $email = Validador(trim(strip_tags(filter_input(INPUT_POST, 'email', FILTER_DEFAULT))));
  $celular = Validador(trim(strip_tags(filter_input(INPUT_POST, 'phone', FILTER_DEFAULT))));
  $assunto = Validador(trim(strip_tags(filter_input(INPUT_POST, 'subject', FILTER_DEFAULT))));
  $headerEmail = Validador(trim(strip_tags(filter_input(INPUT_POST, 'message', FILTER_DEFAULT))));
  
  
  
  $message = "
    <!DOCTYPE html>
    <html lang='pt-BR'>
    
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Email HTML</title>
      <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
          margin: 0;
          padding: 0;
        }
    
        .email-container {
          max-width: 600px;
          margin: 0 auto;
          background-color: #ffffff;
          padding: 20px;
          border: 1px solid #dddddd;
        }
    
        .header {
          background-color: #faaa2a;
          color: #ffffff;
          padding: 10px 0;
          text-align: center;
        }
    
        .content {
          padding: 20px;
          text-align: left;
        }
    
        .footer {
          background-color: #f4f4f4;
          color: #333333;
          padding: 10px 0;
          text-align: center;
          font-size: 12px;
        }
    
        .button {
          display: inline-block;
          padding: 10px 20px;
          color: #ffffff;
          background-color: #4e4caf;
          text-decoration: none;
          border-radius: 5px;
        }
    
        span {
          color: #333333;
          font-weight: 600;
        }
          
        p{
          color: #333333;
        }
      </style>
    </head>
    
    <body>
      <div class='email-container'>
        <div class='header'>
          <h1>Nova mensagem</h1>
        </div>
        <div class='content'>
          <p>Mensagem vinda do site <a href='https://paulodevelop.com/'>paulodevelop.com</a>!</p>
          <hr>
          <p><span>Nome: </span> " . $nome . "</p>
          <p><span>E-mail:</span> " . $email . "</p>
          <p><span>Celular:</span> " . $celular . "</p>
          <p><span>Assunto:</span> " . $assunto . "</p>
          <p><span>Mensagem:</span> " . $headerEmail . "</p>
          <hr>
          <div class='footer'>
            <p>&copy; 2024 Paulo develop. Todos os direitos reservados.</p>
          </div>
        </div>
      </div>
    </body>
    
    </html>"
  ;

  if(enviarEmail($assunto, $message)){
    $resposta = [
      "sucesso" => true,
      "mensagem" => 'Mensagem enviada',
    ];

  }else{
    $resposta = [
      "sucesso" => false,
      "mensagem" => $SendEmail,
    ];
  }

}else{
  $resposta = [
    "sucesso" => false,
    "mensagem"=> 'interno, consulte o suporte'
  ];
}

print_r(json_encode($resposta));
