<!doctype html>
<html lang="en" class="ls-theme-green">
<head>
    <!--meta tags e CSS-->
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Debug envio SMTP</title>
</head>
<body>

    <!--navbar - barra de navegação -->
    <?php
      require_once('navbar.php');
      require_once('aside.php');
    ?>

        <!-- box -->
    <main class="ls-main">
      <div class="container-fluid">
        <h1 class="ls-title-intro">Debug do envio</h1>

        <?php
require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';


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


$mailer = new PHPMailer;

//$mailer->SMTPDebug = 2;                               // Enable verbose debug output

$mailer->isSMTP();                                      // Set mailer to use SMTP

$mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);




$mailer->Host = $host;  // Servidor que realiza o envio
$mailer->SMTPAuth = true; // Enable SMTP authentication
$mailer->isHTML(true);  // Set email format to HTML
$mailer->CharSet = 'utf-8';
$mailer->Port = "$porta";   // Porta de Envio
if(isset($criptografia)){

    $mailer->SMTPSecure = "$criptografia";

}

$mailer->Username = "$usuario";  // SMTP username
$mailer->Password = "$senha";  // SMTP password

$mailer->SMTPDebug = 2;
$mailer->Debugoutput = 'html';
$mailer->setLanguage('pt');

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
$mailer->Sender = $email;  // E-mail que está enviando
$mailer->Subject = $assunto; // assunto da mensagem
$mailer->MsgHTML($corpoMSG); // corpo da mensagem
if ($arquivo['error'] == 0){
$mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']);

}



if(!$mailer->Send()) {
   echo "Erro: " . $mailer->ErrorInfo;
  } else {
   echo "Mensagem enviada com sucesso!";
  }


?>      
    </main>
        
        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
</body>
</html>

    
</body>

</html>
