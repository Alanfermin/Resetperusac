<div class="barra light-blue darken-4">

        <div class="row">
        
            <div class="col s12">
            </div>
        
        </div>

    </div>


    
    <section id="contactenos" class="contacto no-padding">
        <div class="row no-margin">
            <div class="col s12 l6 no-padding">
                <div id="map"></div>
            </div>
            <div class="col s12 l6 no-padding">
                    
                
                

<!--
                    
                <div class="cognito">
                            <script src="https://services.cognitoforms.com/s/c0pYzWmPzE-Ph0meZx8XDA"></script>
                            <script>Cognito.load("forms", { id: "1" });</script>
               
                        <div class="footercog">
                            <div class="row">    
                                <div class="col s12"></div>
               
                            </div>
                        </div>
                </div>
               
            -->           
               
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
            
            
            
            
            </div>
        </div>
    </section>