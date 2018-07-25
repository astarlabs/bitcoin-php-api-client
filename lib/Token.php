<?php

namespace AStar\Client;

use \phpseclib\Crypt;
use \Firebase\JWT\JWT;

class Token {

    public function sign($key) {
        
        $hex = hex2bin($key);
        
        $rsa = new Crypt\RSA();
        $rsa->loadKey($hex);

        $token = array(
            "exp" => time() + 10,   /*EXPIRATION_TIME*/
            "iat" => time(),        /*ISSUED_AT*/
            "jti" => "123",         /*JWT_ID*/
            "nbf" => time() - 2     /*NOT_BEFORE*/
        );

        $jwt = JWT::encode($token, $rsa->getPrivateKey(), "RS256");

        return $jwt;

    }

}

?>