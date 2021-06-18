<?php


    /*$Destino = "arturitoagustin0@gmail.com";
	$Nombre = $_GET['nombre'];
	$Correo = $_GET['correo'];
	$Descripcion = $_GET['mensaje'];
	
	$contenido = "Nombre: ".$Nombre."\nCorreo: ".$Correo."\nMensaje: ".$Descripcion;
	$resultado= mail($Destino,"Correo de Consulta-Club RV",$contenido,"Consulta sobre el aplicativo");
	if($resultado){
	    echo "mensaje enviado";
	}else{
	    echo "mensaje no enviado";
	}*/
    use PHPMailer\PHPMailer\PHPMailer;	
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';

	if(isset($_POST["Mensaje"])){
        $Nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $cuerpoMail = $_POST['mensaje'];


        $mail = new PHPMailer(true); // Passing `true` enables exceptions                             
        try {
            //Server settings
            $mail->SMTPDebug = 0; // Enable verbose debug output                                 
            $mail->isSMTP(); //Set mailer to use SMTP                                      
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'arturitoagustin0@gmail.com'; // SMTP username
            $mail->Password = 'dragonperla4'; // SMTP application password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; // TCP port to connect to

            //Recipients
            $mail->setFrom('arturitoagustin0@gmail.com', 'Arturito'); // Sender email and name
            $mail->addAddress('arturitoagustin0@gmail.com'); // Reciver email

            // if you want to send email to multiple users, then add the email addresses you which you want to send.
            //$mail->addAddress('reciver2@gmail.com');
            //$mail->addAddress('reciver3@gmail.com');

            //For Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');  // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // You can specify the file name

            //Content
            $mail->isHTML(true);// Set email format to HTML                                  
            $mail->Subject = "Correo sobre consulta e inquietudes"; // Subject of the email
            $mensaje = "
                <!DOCTYPE html>
                <html lang='es'>
                <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Mensaje</title>
                
                <style>
                    * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    }
                
                    .container {
                    max-width: 1000px;
                    width: 90%;
                    margin: 0 auto;
                    }
                    .bg-dark {
                    background: #343a40;
                    margin-top: 40px;
                    padding: 20px 0;
                    }
                    .alert {
                    font-size: 1.5em;
                    position: relative;
                    padding: .75rem 1.25rem;
                    margin-bottom: 2rem;
                    border: 1px solid transparent;
                    border-radius: .25rem;
                    }
                    .alert-primary {
                    color: #004085;
                    background-color: #cce5ff;
                    border-color: #b8daff;
                    }
                
                    .img-fluid {
                    max-width: 100%;
                    height: auto;
                    }
                
                    .mensaje {
                    width: 80%;
                    font-size: 20px;
                    margin: 0 auto 40px;
                    color: #eee;
                    }
                
                    .texto {
                    margin-top: 20px;
                    }
                
                    .footer {
                    width: 100%;
                    background: #48494a;
                    text-align: center;
                    color: #ddd;
                    padding: 10px;
                    font-size: 14px;
                    }
                    h1,h3{
                        text-align: center;
                        color: #ddd;
                    }
                    .footer span {
                    text-decoration: underline;
                    }
                </style>
                </head>
                <body>
                <div class='container'>
                    <div class='bg-dark'>
                    <h1>Correo de Consulta <br></h1>
                    <h3>SUSTAINABLE COMPANY<br>-------------------------------------</h3>
                    <div class='alert alert-primary'>
                        <strong>Mensaje de: </strong> $Nombre<br>
                        <strong>Correo: </strong> $correo
                    </div>
                
                    <div class='mensaje'>

                        <div class='texto'>Contenido:</div>

                        <!--<img class='img-fluid' src='https://cdn.pixabay.com/photo/2016/11/14/04/45/bicycle-1822640__340.jpg' alt='Mensaje'>-->
                
                        <div class='texto'>$cuerpoMail</div>
                    </div>
                
                    <div class='footer'>
                        SUSTAINABLE COMPANY
                    </div>
                    </div>
                </div>
                </body>
                </html>
            ";
            //$mail->Body    = "Nombre: ".$Nombre."\nCorreo: ".$correo."\nMensaje: ".$cuerpoMail;
            $mail->Body    = $mensaje;

            $mail->send();
            echo 'Message has been sent';
            header("Location: ../index.php");
        } catch (Exception $e) {
            echo $mensaje;
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            
        }
    }
?>