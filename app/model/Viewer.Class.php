<?php

/*******************************
 * ...............................
 * |       SITEMA DE VIEW        |
 * |            V.1              |
 * |.............................|
 * autor - Paulo Fernando Ferreira Pires
 * creation - 11/04/2024 at 20:59
 * 
 * Este sistem foi pensado em fornecer de maneira rapida as tela e paginas do projeto,
 * usando as rotas na url.
 * 
 * Como usar o objeto em 3 passos:
 *  1. Adcione esse arquivo a seu projeto, recomendo usado um outoload, pois existem
 *      outros aquivos para incluir, ficara mais facil de usar.
 *  2. Chame o metodo no index do projeto, Ex.: $ObjViewer = new Viewer();
 *  3. Aa chamar o Objeto informe as configurações iniciais, informando o cabeçalho,
 *      corpo inicial, tela de erro 404, rodapé, e uma tela de caregamento.
 *  
 * Pronto a rota esta funcionando.
 * 
 * */

class Viewer extends Controller
{
    /////////////////////// PROTOPIPOS
        private $veiw;
        public $maintenance;
        public $statusMaintenance;
        public $header;
        public $callback;
        public $footer;
        public $loader;
        public $pageDefoult;
        private $mutant;
    /////////////////////// FUNCTION GET
        private function getVeiw()
        {
            return $this->veiw;
        }
        public function getMaintenance()
        {
            return $this->maintenance;
        }
        public function getHeader(){
            return $this->header;
        }
        public function getCallback()
        {
            return $this->callback;
        }
        public function getFooter(){
            return $this->footer;
        }
        public function getLoader(){
            return $this->loader;
        }
        public  function getPageDefoult()
        {
            return $this->pageDefoult;
        }
        public function getMutant() {
            return $this->mutant;
        }
        public function getStatusMaintenance()
        {
            return $this->statusMaintenance;
        }
    /////////////////////// FUNCTION SET

        private function setVeiw($veiw)
        {
            $this->veiw = $veiw;
        }
        public function setMaintenance($maintenance)
        {
            $this->maintenance = $maintenance;
        }
        public function setHeader($header)
        {
            $this->header = $header;
        }
        public function setCallback($callback)
        {
            $this->callback = $callback;
        }
        public function setFooter($footer)
        {
            $this->footer = $footer;
        }
        public function setLoader($loader){
            $this->loader = $loader;
        }
        public  function setPageDefoult($pageDefoult)
        {
            $this->pageDefoult = $pageDefoult;
        }
        private function setMutant($mutant){
            $string = '';
            if($mutant == []){
                $mutant = false;
                $result = '200';
            }elseif ($mutant != []) {
                foreach ($mutant as $key => $value) {
                    if (is_array($value)) {
                        $string .= "$key: " . implode(", ", $value) . ", ";
                    } else {
                        $string .= "$key: $value, ";
                    }
                }
                $mutant = rtrim($string, ", ");
                $result = '200';
            }else{
                $result = '403';
            }
            $this->mutant = $mutant;
            $this->gerarLog($result, '_setMutat_', 'setMutat com erro '.$mutant. '');
        }
        private function setStatusMaintenance($statusMaintenance)
        {
            $this->statusMaintenance = $statusMaintenance;
        }
    /////////////////////// METHOD = FUNCTION
        public function viewerWeb() {
                $header = $this->getHeader();
                $view = $this->getPageDefoult();
                $footer = $this->getFooter();
                $loader = $this->getLoader();
                $maintenance = $this->settingMaintenance();
                $mutant = $this->getMutant();
                $menuDesktop = 'view/component/menuDesktop.View.php';
                $menuMobile = 'view/component/menuMobile.View.php';

                $arrayView = explode('/',$view);
                $arrayView = [
                    'ROUTE' => $arrayView[0],
                    'VIEW' => $arrayView[1]
                ];

                include $header;

                if($arrayView['ROUTE'] == 'view'){
                    include $loader;
                    include $menuDesktop;
                    // include $menuMobile;
                }

                if(file_exists($view)){
                    include $view;
                }else{
                    echo 'erro 404';
                }


                if ($mutant != []) {
                    // print_r('array não vazio');
                    $arrayMutant = count($mutant);
                    for ($i=0; $i < $arrayMutant ; $i++) { 
                        $viewerUrl = $mutant[$i];
                        if(file_exists($viewerUrl)){
                            include $viewerUrl;
                        }else{
                            echo " 
                                <section class='pfWeb-erro' id='view'>
                                    <p class='infErro'></p>
                                    <p>O Visualizador <span>".$mutant[$i]."'</span>, não foi encontrado na <span>./view/<span>!</p>
                                </section>
                            ";
                        }
                    }
                }else{
                    // print_r('array vazio');
                }

                include $footer;
        }
        public function manualPage($url, $page)
        {
            $loader = $this->getLoader();
            $header = $this->getHeader();
            $menuDesktop = 'view/component/menuDesktop.View.php';
            $menuMobile = 'view/component/menuMobile.View.php';
            $footer = $this->getFooter();
            $page = $page.'.View.php';

            if($url == 'send_email'){
                include  "view/$url/$page";
                die();
            }

            include $header;

            if($url == 'page' || $url == 'pagina' || $url == 'view'){
                include $loader;
                include $menuDesktop;
                $view = "view/$page";
            }else{
                $view = "view/$url/$page";
            }

            if(!file_exists($view)){
                $view = $this->getCallback();
            }

            include $view;
            include $footer;
            
        }
        public function viewerMutant(){
            $mutant = $this->getMutant();
            if ($mutant != '' && $mutant != null){
                if ($mutant == false) {
                    $mutant = false;
                }
                if($mutant){
                    $string = $mutant;
                    $parts = explode(", ", $string);// Divide a string
                    $reversedArray = [];
                    foreach ($parts as $part) {
                        $pair = explode(": ", $part, 2);// Divide cada parte em chave
                        if (count($pair) === 2) {
                            $key = trim($pair[0]);// Remove espaços em branco
                            $value = trim($pair[1]);
                            if (is_numeric($value)) {
                                $value = (int)$value;// Verifica se o valor é numérico e converte-o se necessário
                            }
                            $reversedArray[$key] = $value;// Adiciona o par chave-valor ao array resultante
                        }// Verifica se o par chave-valor está no formato correto
                        $mutant = $reversedArray;
                    }
                }
            }
            return $mutant;
        }
        
        public function ControllerViewer($dataSettings){
            if($dataSettings !== []){
                ////////// View
                    $this->setCallback('view/'.$dataSettings['callback'].'.View.php');
                    $this->setLoader('view/'.$dataSettings['loader'].'.View.php');
                    $this->setHeader('view/'.$dataSettings['header'].'.View.php');
                    $this->setPageDefoult('view/'.$dataSettings['pageDefoult'].'.View.php');
                    $this->setFooter('view/'.$dataSettings['footer'].'.View.php');
                    $this->setMaintenance('view/'.$dataSettings['pageMaintenance'].'.View.php');
                ////////// Array e booleam
                    $this->setStatusMaintenance($dataSettings['statusMaintenance']);
                    $this->setMutant($dataSettings['mutant']);
                ////////// Criando o objeto view
                    if (strpos($_SERVER["REQUEST_URI"], '?') !== false){
                        $param_parts = explode('=', explode('?', $_SERVER["REQUEST_URI"])[1]);
                        $callPage = $param_parts[0];// Atribuir o valor da chamada a page
                        $page = $param_parts[1];// Atribui o valor da page
                        $this->manualPage($callPage,$page);
                    }
                    if(strpos($_SERVER['REQUEST_URI'], '?') == false){
                        $this->viewerWeb();
                    }
                    $result = '200';
            }else{
                $result = '403';
            }
            // gerar log se ter erro informe $result booleam,  $mensagem mensagem do log, $local de onde vem o erro do log;
            $this->gerarLog($result, '_settingDefault_', 'não foi possivel definiar os dados da settingDefault.');
        }

}
