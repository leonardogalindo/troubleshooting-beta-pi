<html lang="en" class="ls-theme-blue">
<head>
    <!--meta tags e CSS-->
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
        <title>Debug envio SMTP</title>
</head>
<body>

  <div class="ls-topbar ">

  <!-- Barra de Notificações -->

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="index.php"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>

  <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="index.php" class="ls-ico-panel-cloud">
        Formulário de testes
      </a>
    </h1>

  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>
        <!-- box -->
    <main class="ls-main">
      <div class="container-fluid">
        <h1 class="ls-title-intro">Debug do envio</h1>

        <?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


#use PHPMailer\PHPMailer\PHPMailer;
#use PHPMailer\PHPMailer\Exception;



//Puxando os dados do method post da pagina email

$email = $_POST["email"];
$host = $_POST['host'];
$usuario = $_POST['user'];
$senha = $_POST['password'];
$criptografia = $_POST['criptografia'];
$porta = $_POST['porta'];
$destinatario = $_POST['destino'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$arquivo = $_FILES['anexo'];

try {
#$mailer = new PHPMailer;
#$mailler = new PHPMailer(true);
$mailer =  new \PHPMailer\PHPMailer\PHPMailer();
$mailer->isSMTP();                                      // Set mailer to use SMTP

#$mailer->SMTPOptions = array(
#    'ssl' => array(
#        'verify_peer' => false,
#        'verify_peer_name' => false,
#        'allow_self_signed' => true
 #   )
#);




$mailer->Host = $host;  // Servidor que realiza o envio
$mailer->SMTPAuth = true; // Enable SMTP authentication
$mailer->isHTML(true);  // Set email format to HTML
$mailer->CharSet = 'utf-8';
$mailer->Port = "$porta";   // Porta de Envio
#if(isset($criptografia)){

    #$mailer->SMTPSecure = "$criptografia";

#}

$mailer->Username = "$usuario";  // SMTP username
$mailer->Password = "$senha";  // SMTP password

#$mailer->SMTPDebug = SMTP::DEBUG_SERVER;
#$mailer->Debugoutput = 'html';
#$mailer->setLanguage('pt');

//setando formato HTML da mensagem, para envio ser aceito corretamente.

$corpoMSG = "<!DOCTYPE html>";
$corpoMSG .= "<html>";
$corpoMSG .= "<head>";
$corpoMSG .= "</head>";
$corpoMSG .= "<body>";
$corpoMSG .= "$mensagem";
$corpoMSG .= "</body>";
$corpoMSG .= "</html>";


$mailer->AddAddress($destinatario);
$mailer->From = $email;  // E-mail que está enviando
$mailer->FromName = $email; //Nome que será exibido
$mailer->Sender = $email;  // E-mail que está enviando
$mailer->Subject = $assunto; // assunto da mensagem
$mailer->body = $corpoMSG; // corpo da mensagem
if ($arquivo['error'] == 0){
$mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']);

}



#if(!$mailer->Send()) {
#   echo "Erro: " . $mailer->ErrorInfo;
#  } else {
 #  echo "Mensagem enviada com sucesso!";
 # }
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mailer->ErrorInfo}";
}

?>      
    </main>
        
        <!--footer com js-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>

    
</body>

</html>
