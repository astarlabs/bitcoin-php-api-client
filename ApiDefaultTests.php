<?php
require_once __DIR__ . '\autoload.php';

use AStar\Client\Blockchain;
use AStar\Client\Token;

//vars
$stoken = "2d2d2d2d2d424547494e20525341205055424c4943204b45592d2d2d2d2d0a4d494942496a414e42676b71686b6947397730424151454641414f43415138414d49494243674b4341514541776f59434e6a2f76697042722f5279646b6536360a7045636a6339485a536274667230417937343551654c344756524361796d717665456244352b4a374e53474843786d785536535473316374675530486c4f4a430a744b37454a744172354233684d556d47722f7355537033674c4d433159744373794c4b4a64484d34414d656a44722f4d39416f595765576f37783930614755730a343452707836596556626e4155664e7776495361314e753232786a5a6165624a714e37507963677448424c5468676272374d4f416f4e544d705a56756e4237300a745552696a76486c494b655a517a5a33524632585568314b4567524b3341724e5837427662434366716741722f30355233504d4e4c51653766523646325231470a723359435461456e72754e2f4e7a58654b77475950333470307044584436616b5235325a584679452b65575a67383434686430565269475a364d674e625a714e0a67774944415141420a2d2d2d2d2d454e4420525341205055424c4943204b45592d2d2d2d2d0a";
$account = 3;
$user = "test";
$pass = "test";

$api_instance = new AStar\Client\Api\SearchApi();

$token = new AStar\Client\Token();
$tokenParameter = $token->sign($stoken); // string | a signed JWT token with the company privatekey.
$account = 56; // int | API ID for Account where the coins must be spend.
$user = "user_example"; // string | API user name.
$pass = "pass_example"; // string | API user password.
$id = 56; // int | API id for blockchain transaction

//var_dump($token);

//$objBlockchain = new Blockchain; //antes era o nome da function, mudou para __construct
$objBlockchain = new Blockchain($token, $account, $user, $pass);
//var_dump($objBlockchain);
$objBlockchain->registrarConteudo("conteúdo de teste", "ETHEREUM", 1, false);



?>