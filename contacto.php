<!DOCTYPE html>
<html lang="es" xml:lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type='image/x-icon' href="imagenes/reset-peru-sac.ico"/>
    <link rel="apple-touch-icon" sizes="57x57" href="imagenes/reset-peru-sac.ico">        
    <title>Reset Perú - Soluciones en software y hardware Lima, San Isidro</title>
    <meta name="description" content="Contacto, Contáctanos, Reparación ,servicio técnico ,mantenimiento, software, hardware, diseño web, seo, community manager, cursos , asesorias, camara de vigilancia, servidores, robótica">    
    <link rel="stylesheet" href="css/main.css">
</head>


<?php include('header.php'); ?>

<?php include('banneprinc.php'); ?>




    <section class="ws">
            <div class="container">
              <div class="row">
                 
                    <div class="col s12 m6 center-align">
                        <div class="baner__inferior">
                            <a href="https://api.whatsapp.com/send?phone=51991697142" target="_blank" class="iconws"><i class="jp-whatsapp"></i></a>
                            <h4 class="center text-upper Black-text">+51 991 697 142</h4> 
                            <!--No pude bajar el iconode ws al número, o subir el numero al ícono-->                            
                        </div>
                    </div>                          
                    <div class="col s12 m6 center-align">
                        <div class="footer__icon__content">
                            <img src="imagenes/delivery.png">
                            <h4 class="center text-upper Black-text">Servicio Delivery</h4>
                        </div>
                    </div>
               </div>
            </div>
    
				<form class="form__contactenos" action="enviar.php" method="post">
                    <div class="container">
                        <div class="contacto__form">
                            <h4 class="text-upper center">SOLICITA UNA COTIZACIÓN</h4>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="jp-user prefix"></i>
                                    <input id="nombres" type="text" class="validate">
                                    <label for="nombres" data-error="Datos invalidos verifique porfavor" data-success="Datos correctos">Nombre*</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="jp-envelope prefix"></i>
                                    <input id="email" type="email" class="validate">
                                    <label for="email" data-error="Datos invalidos verifique porfavor" data-success="Datos correctos">Correo*</label>
                                </div>
                                <div class="input-field col s12 l6">
                                    <i class="jp-list-alt prefix"></i>   
                                    <input id="asunto" type="text" class="validate">
                                    <label for="asunto" data-error="Datos invalidos verifique porfavor" data-success="Datos correctos">Asunto*</label>
                                </div>
                                <div class="input-field col s12 l6">
                                    <i class="jp-phone prefix"></i>
                                    <input id="telefono" type="text" class="validate" pattern="[0-9]{1,9}">
                                    <label for="telefono" data-error="Datos invalidos verifique porfavor" data-success="Datos correctos">Teléfono/Celular*</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="jp-pencil prefix"></i>
                                    <textarea id="mensaje" class="materialize-textarea"></textarea>
                                    <label for="mensaje">Mensaje</label>
                                </div>
                                <div class="container">
                                    <div class="row center-align">
                                        <button class=" btn waves-effect waves-light btn-large" type="submit" name="action">ENVIAR MENSAJE
                                            <i class="jp-paper-plane right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </form> 
    </section>
<?php include('footer.php'); ?>