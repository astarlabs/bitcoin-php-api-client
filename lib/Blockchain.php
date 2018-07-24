<?php

namespace AStar\Client;

use AStar\Client\Token;
use AStar\Client\Api;
use AStar\Util;

    class Blockchain
    {
        public $token;
        public $account;
        public $user;
        public $pass;

        function Blockchain($token, $account, $user, $pass)
        {
            $this->token = isset($token) ? $token : null;
            $this->account = isset($account) ? $account : null;
            $this->user = isset($user) ? $pass : null;
            $this->pass = isset($pass) ? $pass : null;
        }


        public function registrarDocumento($bytesFile, $blockchainNetwork, $testMode, $force){

            $hash = DoubleSha256.hashFile($bytesFile);
            return registrarConteudo($hash, $blockchainNetwork, $testMode, $force);

        }

        public function registrarConteudo($conteudo, $blockchainNetwork, $testMode, $force){

            //$this->token =

            $sendApi = new SendAPI;
            $singleResult = $sendApi.sendHash(
                $this->token, $this->account, $this->user, $this->pass, $conteudo, $blockchainNetwork, $testMode, $force);

            if ($singleResult.getResult() !== null && $singleResult.getStatus()){
                return $singleResult.getResult();
            }

            return null;
        }

        private function getMyToken() {
            $this->token = Token.sign(token);
            return token;
        } 

    }


?>