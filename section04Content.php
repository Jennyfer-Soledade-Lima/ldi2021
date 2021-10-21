
<?php 

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

// Posteriormente vamos substituir por uma consulta ao BD
$adminUser = "admin";
$adminPass = "123456";
// ======================================================

$outArray = array();
if( isset($_REQUEST['user']) && isset($_REQUEST['pass'])){
    if (($user==$adminUser)&&($pass==$adminPass)){
        $outArray = array( "login"=>"true", "message"=> "Administrador Autenticado" );
    }else{
        $outArray = array( "login"=>"false", "message"=> "Usuário não Autenticado" );
    }    
} else {
    $outArray = array( "login"=>"false", "message"=> "Informe Usuário e Senha" );
}

echo json_encode($outArray, JSON_UNESCAPED_UNICODE);

?>