<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$varname        = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$varemail       = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
$varsubject     = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
$varmessage     = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
// $varfone	    = filter_var($_POST["telefone"], FILTER_SANITIZE_STRING);
$varzoiao       = filter_var($_POST["zoiao"], FILTER_SANITIZE_STRING);

if ($varzoiao != "") {
    # code...
    echo '<img src="https://www.bloominprojetos.com.br/roberto/you_shall_not_pass.jpg" style=" display:block; margin:0 auto; " alt="you shall not pass!!!" title="you shall not pass!!!">';
    die();
}
if (preg_match_all("/http/i", implode($_POST), $out) > 0) {
    $spam = true;
}
if ($spam) {
    echo ("<script>alert('Desculpe, mas esta mensagem parece ser SPAM! \\nFavor não inserir links!');</script>");
    echo ("<script>window.location = 'contato'</script>");
    die();
}

/*
if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}
if (!$captcha_data) {
    echo ("<script>alert('Por favor, confirme o reCAPTCHA.');</script>");
    echo ("<script>window.location = 'contato'</script>");    
    exit;
}
$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=your_site_key&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
if ($resposta.success) {
*/
require("inc/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mailer->SMTPDebug = 2; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
$mail->SMTPSecure = 'tls';//tipo de autenticação do SMTP
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); // Configurações de compatibilidade para autenticação em TLS 
$mail->Host = "mail.bloomin.com.br"; // Endereço do servidor SMTP    
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'mail@bloomin.com.br'; // Usuário do servidor SMTP
$mail->Port = "587";
$mail->Password = 'bloomin2022'; // Senha do servidor SMTP
$mail->From = 'mail@bloomin.com.br'; // Seu e-mail
$mail->FromName = $varname; // Nome do solicitante
$mail->AddReplyTo($varemail); // Responde para o e-mail do solicitante

$mail->AddAddress("contato@cliente.com.br");

//$mail->AddCC('teste@bloomin.com.br'); // Copia
$mail->AddBCC('formularios@bloomin.com.br', 'Template'); // Cópia Oculta


// //Anexo
// // Array com as extensões permitidas
// // Imagens comuns, Docs word, pdf
// $extensoes_permitidas = array('.jpg', '.jpeg', '.gif', '.png', '.bmp', '.webp', '.eps',  '.tif', '.tiff', '.raw', '.cr2', '.nef', '.orf', '.sr2', '.doc', '.dot', '.docx', '.dotx', '.docm', '.dotm', '.pdf');

// // Faz a verificação da extensão do arquivo enviado
// $formatodoarquivo = strrchr($_FILES['arquivo1']['name'], '.');

// // Faz a validação do arquivo enviado
// if (in_array($formatodoarquivo, $extensoes_permitidas) === true) {
//     $path1 = $_FILES['arquivo1']['tmp_name'];

//     if (!empty($_FILES['arquivo1']['name'])) {
//         // $mail->AddAttachment($path1, $_FILES['arquivo1']['name']);
//         $mail->AddAttachment($path1, '=?UTF-8?B?' . base64_encode($_FILES['arquivo1']['name']) . '?='); // Com caracteres especiais
//     }
// } else {
//     echo ("<script>alert('Extensão de arquivo não permitida! Envie uma arquivo válido');</script>");
//     echo ("<script>window.location = 'contato'</script>");
// }


// Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
$mail->Subject  = '=?UTF-8?B?' . base64_encode("Contato - Fort Embalagens") . '?=';
$mail->Body = "<strong>Nome: </strong>" . $varname;
/*$mail->Body .= "<br><strong>Telefone: </strong>".$varfone;*/
$mail->Body .= "<br><strong>E-mail: </strong>" . $varemail;
$mail->Body .= "<br><strong>Assunto: </strong>" . $varsubject;
$mail->Body .= "<br><strong>Mensagem: </strong>" . $varmessage;

$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n";
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultados
if ($enviado) {
    echo ("<script>alert('Mensagem Enviada!');</script>");
    echo ("<script>window.location = 'obrigado'</script>");
} else {
    echo "Não foi possível enviar o e-mail.<br /><br />";

    echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}

//}

?>