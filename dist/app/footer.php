<section id="contactenos" class="contacto no-padding">
<div class="row no-margin">
    <div class="col s12 l6 no-padding">
        <div id="map"></div>
    </div>
    <div class="col s12 l6 no-padding">
        <form class="form__contactenos" action="enviar.php" method="post">
            <div class="container">
                <div class="contacto__form">
                    <h4 class="text-upper center">ENVÍANOS UN MENSAJE</h4>
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
    </div>
</div>
</section>

<footer class="page-footer light-blue darken-4">
    <div class="container">
      <div class="row">
        <div class="col s12 l4 center-align">
            <div class="footer__icon__content">
                <i class="jp-map-iconf footer__icon__tam"></i>
                <h6 class="center text-upper white-text">DIRECCIÓN</h6>
                <p class="light">Mariano de los Santos No 115 Oficina 502 San Isidro,Lima,Perú</p>
            </div>
        </div>
        <div class="col s12 l4 center-align">
            <div class="footer__icon__content">
                <i class="jp-phone footer__icon__tam"></i>
                <h6 class="center text-upper white-text">TELÉFONO</h6>
                <p class="light">Telf.: (051) 2220480 - (051) 6640464</p>
                <p class="light">Cel: 991248450 - 991697142 </p>
            </div>
        </div>
        <div class="col s12 l4 center-align">
            <div class="footer__icon__content">
                <i class="jp-email-iconf footer__icon__tam"></i>
                <h6 class="center text-upper white-text">EMAIL</h6>
                <p class="light">ralupa@resetperusac.com</p>
            </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
            <div class="col s12 l4 center-align">
                <p>RESET PERU SAC todos los derechos reservados</p>
            </div>
            <div class="col s12 l4 center-align">
                <a href="https://www.facebook.com/resetperu.sac" rel="nofollow" target="_blank" class="footer__icon__color"><i class="jp-facebook small"></i></a> 
                <a href="https://www.instagram.com/resetperusac/" rel="nofollow" target="_blank" class="footer__icon__color"><i class="jp-instagram small "></i></a> 
                <a href="https://twitter.com/resetperu" rel="nofollow" target="_blank" class="footer__icon__color"><i class="jp-twitter small"></i></a> 
            </div>
            <div class="col s12 l4 center-align">
                <p>2017</p>
            </div>
        </div>
      </div>
    </div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/materialize.min.js"></script>   
<script src="js/events.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEy42HRFwBy9BVWvhLu2x0-VPko5ssLnA&callback=initMap"></script>
</body>
</html>