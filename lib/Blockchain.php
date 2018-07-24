<?php
require_once __DIR__ . '\autoload.php';
namespace AStar\Client;

use AStar\Client\Token as token;
use AStar\Client\Api as api;
use AStar\Util as util;

    class Blockchain
    {
        public $token;
        public $account;
        public $user;
        public $pass;

        // Blockchain Main
        //function Blockchain($token, $account, $user, $pass)
        function __construct($token, $account, $user, $pass)
        {
            $this->token = isset($token) ? $token : null;
            $this->account = isset($account) ? $account : null;
            $this->user = isset($user) ? $pass : null;
            $this->pass = isset($pass) ? $pass : null;
        }

        // Registrar Documento
        public function registrarDocumento($bytesFile, $blockchainNetwork, $testMode, $force){

            $hash = DoubleSha256.hashFile($bytesFile);
            return registrarConteudo($hash, $blockchainNetwork, $testMode, $force);

        }

        //  POST Registrar Conteudo
        /*

        $conteudo = "texto qualquer"
        $blockchainNetwork = blockchainNetwork.ETHEREUM
        $testMode = 1
        $force = false
        
        */
        public function registrarConteudo($conteudo, $blockchainNetwork, $testMode, $force){

            //$this->token = getMyToken();
            
            $sendApi = new SendAPI();
            $singleResult = $sendApi.sendHash(
                $this->token, $this->account, $this->user, $this->pass, $conteudo, $blockchainNetwork, $testMode, $force);

            if ($singleResult.getResult() !== null && $singleResult.getStatus()){
                //return ID - number
                return $singleResult.getResult();
            }

            return null;
        }

        //  GET Receber o Token
        private function getMyToken() {
            $this->token = token.sign(token);
            return token;
        } 

    }


?>