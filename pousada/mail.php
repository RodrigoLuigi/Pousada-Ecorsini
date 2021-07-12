<?php

$dest = "digaor@gmail.com";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$menssagem = $_POST['menssagem'];


        $headers = "MIME-Version 1.1\n";
        $headers .= "From: Contato - Site <" . $dest  . ">\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "Content-type: text/html; charset-ult-8\n";        
        $headers .= "Return-Path: " . $nome . " <" . $email . ">\n";
        $headers .= "Cc: Contato - Site <contato@servidor.com.br\n";
        $headers .= "Replay-to: " . $email . "\n";
        $to = "Contato - Orçamento <" . $dest . ">";
        $subject = "Contato - site - Meu Site";

        $conteudo .= "

                <h3>Contato enviado pelo Site do Progammer BR</h3>     
                Nome: " . $nome . "<br />
                E-mail: " . $email ."<br /> 
                Telefone: " . $telefone . "<br />
                menssagem: " . $menssagem . "<br />
        ";

        $envio = mail($to, $subject, $conteudo , $headers);

        if($envio){
            ?> 
            <script>
                alert("Enviado com sucesso!");
                history.go(-1);
            </script> 
            <?php   
        }else
            ?>
            <script>
                alert("Ocorreu um erro, tente novamente ou entre em contato com o administrador");
                history.go(-1);
            </script>    

        



?>