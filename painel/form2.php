<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Enviar e-mail com anexo</title>
</head>

<body>
    <form id="form1" name="form1" method="post" action="?acao=enviar" enctype="multipart/form-data">

        <table width="500" border="0" align="center" cellpadding="0" cellspacing="2">
            <tr>
                <td align="right">E-mail de Envio: </td>
                <td>
                    <input type="text" id="usuario" name="usuario" />
                </td>
            </tr>
            <tr>
                <td align="right">Senha: </td>
                <td>
                    <input type="text" id="senha" name="senha" />
                </td>
            </tr>
            <tr>
                <td align="right">Host: </td>
                <td>
                    <input type="text" id="host" name="host" />
                </td>
            </tr>
            <tr>
                <td align="right">Porta: </td>
                <td>
                    <input type="text" id="porta" name="porta" />
                </td>
            </tr>
            <tr>
                <select id="criptografia" align="center" name="criptografia">
                    <option value="">Nenhuma</option>
                    <option value="tls">TLS</option>
                    <option value="ssl">SSL</option>
                </select>

                <td align="right">Seu Nome:</td>
                <td>
                    <input type="text" name="nome" id="nome" />
                </td>
            </tr>
            <tr>
                <td align="right">Assunto:</td>
                <td>
                    <input type="text" name="assunto" id="assunto" />
                </td>
            </tr>
            <tr>
                <td align="right">E-mail Destino:</td>
                <td>
                    <input type="text" id="email" name="email" />
                </td>
            </tr>
            <tr>
                <td align="right">Mensagem:</td>
                <td>
                    <textarea name="mensagem" id="mensagem" cols="45" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td align="right">Anexo:</td>
                <td>
                    <input type="file" id="arquivo" name="arquivo" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Enviar" />
                </td>
            </tr>
        </table>
    </form>

    <?php
        require 'PHPMailerAutoload.php';
        require 'class.phpmailer.php';

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

if($_GET['acao'] == 'enviar'){
$nome          = $_POST['nome'];
$email   = $_POST["email"];
$assunto   = $_POST['assunto'];
$mensagem  = $_POST['mensagem'];
$arquivo   = $_FILES["arquivo"];

// dados da conta que adicionei lá em cima

$host = $_POST['host'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$porta = $_POST['porta'];
$criptografia = $_POST['criptografia'];

echo ($criptografia);

$mailer->Host = $host;  // Servidor que realiza o envio
$mailer->SMTPAuth = true;           // Enable SMTP authentication
$mailer->IsSMTP();
$mailer->isHTML(true);  // Set email format to HTML
$mailer->Port = $porta;   // Porta de Envio
// $mailer->SMTPSecure = $criptografia;  // Ativar TLS no envio
$mailer->CharSet = 'UTF-8';  // Ativar condição utf-8, para acentuação

$mailer->Username = $usuario;                 // SMTP username
$mailer->Password = $senha;                           // SMTP password

$mailer->SMTPDebug = 2;
$mailer->Debugoutput = 'html';
$mailer->setLanguage('pt');
$corpoMSG = "<strong>Nome:</strong> $nome<br> <strong>Mensagem:</strong> $mensagem";

$mailer->AddAddress($email, "destinatario");
$mailer->From = $usuario;  // E-mail que está enviando
$mailer->Sender = $usuario;  // E-mail que está enviando
$mailer->FromName = "Teste locaweb form"; // Nome de quem está enviando

$mailer->Subject = $assunto; // assunto da mensagem
$mailer->MsgHTML($corpoMSG); // corpo da mensagem
$mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']  ); // anexar arquivo

if(!$mailer->Send()) {
   echo "Erro: " . $mailer->ErrorInfo;
  } else {
   echo "Mensagem enviada com sucesso!";
  }
}

?>
</body>

</html>
