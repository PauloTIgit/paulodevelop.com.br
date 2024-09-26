<?php

class Controller
{
    private $server;
    private $port;

    /////////////////////// FUNCTION GET
        private function getServer()
        {
            return $this->server;
        }
        private function getPort()
        {
            return $this->port;
        }
    /////////////////////// Função SET
        private function setServer($server)
        {   
            $this->server = $server;
        }
        private function setProt($port)
        {
            $this->port = $port;
        }
    /////////////////////// METHOD = SETTINGS
        /////////////////////// SETTING
            public function settingViewers($dataSettings)
            {
                $ObjViewer = new Viewer;
                $ObjViewer->ControllerViewer($dataSettings);
            }
            public function settingServer($server, $port, $maintenance)
            {
                $this->setServer($server);
                $this->setProt($port);
                $this->setMaintenance($maintenance);
            }
            public function settingMaintenance() 
            {
                $Maintenance = $this->getMaintenance();
                $result = $Maintenance;
                return $result;
            }
            public function settingImage() 
            {
                $perfil = 'image/perfil/perfil.jpg';
                $about = 'image/perfil/about.jpg';
                $portfolio = 'image/portfolio/makeflix.png';
                $coockie = 'image/data/coockie.png';
                $c_basic = 'image/certificado/c_Basic.png';
                $loading = 'image/loading/loading.gif';
                $maintenance = 'image/maintenance/manutencao.gif';
                $result = [
                    'perfil'        =>      $perfil,
                    'about'         =>      $about,
                    'portfolio'     =>      $portfolio,
                    'c#Basic'       =>      $c_basic,
                    'coockie'       =>      $coockie,
                    'loading'       =>      $loading,
                    'maintenance'   =>      $maintenance,
                ];
                return $result;
            }
            public function settingEmail($nome,$email,$celular,$orcamento,$assunto,$headerEmail)
            {
                try {
                    // Definir configurações SMTP
                    // ini_set("SMTP", "smtp.teste.com");
                    // ini_set("smtp_port", "123");
                    // ini_set("smtp_auth", "true");
                    // ini_set("smtp_username", "suporte@paulodevelop.com.br");
                    // ini_set("smtp_password", "teste@123");
                    $nome = $nome;
                    $email = $email;
                    $celular = $celular;
                    $orcamento = $orcamento;
                    $assunto = $assunto;
                    $headerEmail = $headerEmail;
                    $to =  'suporte@paulodevelop.com.br';

                    $mensagemEmail = "
                        <html>
                            <head>
                                <title>Contato do Portfolio</title>
                            </head>
                            <body>
                                <p><b>Nome:</b> $nome</p>
                                <p><b>E-mail:</b> $email</p>
                                <p><b>Celular:</b> $celular</p>
                                <p><b>Orçamento:</b> $orcamento</p>
                                <p><b>Assunto:</b> $assunto</p>
                                <p><b>Mensagem:</b></p>
                                <p>$headerEmail</p>
                            </body>
                        </html>
                    ";
                    
                    $headers ="MIME-Version: 1.0" . "\r\n";
                    $headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .='From: <pauloferreira@paulodevelop.com.br>' . "\r\n";

                    $sendEmail = mail($to, $assunto, $mensagemEmail, $headers);
                    if($sendEmail){
                        $result = '200';
                    }else{
                        $result = '500';
                    }
                    
                } catch (\Throwable $th) {
                    $result = '403';
                }
                return $result;
            }
        /////////////////////// METHOD
            public function gerarLog($result,$local, $mensagem) 
            {
                $timestamp = date("Y-m-d H:i:s");
                if($result != '200'){
                    $logMessage =  "[$timestamp] Error: $mensagem\n" ;
                    $logPath = "log/". $local . date("Y-m-d") . ".log";
                    file_put_contents($logPath, $logMessage, FILE_APPEND);
                    echo 'Verifique o log';
                    die();
                }
            }
            
        /////////////////////// CONTROLLERS
            // public function ControllerEmail()
            // {
                
            // }
            
}