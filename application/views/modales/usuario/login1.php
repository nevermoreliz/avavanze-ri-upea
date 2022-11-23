<div class="col-xs-12">
        <div class="modal_login_of" id="modal_login">
            <div class="col-md-4 col-sm-6 col-xs-8 col-md-offset-4 col-sm-offset-3 col-xs-offset-2 fondo">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 login-cebecera text-center">
                        <span class="icon-user-tie"></span>
                        <p>Inicie session por favor..</p>                        
                    </div>
                </div>
                <div class="row">
                    <form method="POST" action="<?= base_url('client/Controller_logueo/session')?>" class="session_start_user">
                        <div class="row">
                            <div class="col-xs-12 login-form">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <label class="icon-user" for="usuario"></label>
                                    <input placeholder="Usuario" type="text" name="usuario" id="usuario" required/>
                                </div>                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 login-form">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <label class="icon-unlocked" for="pass"></label>
                                    <input placeholder="Contraseña" type="password" name="password" id="pass" required/>
                                </div>                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 login-form">
                                <button class="col-xs-4 col-xs-offset-1" type="submit">INICIAR</button>
                                <button class="col-xs-4 col-xs-offset-1" type="reset" id="ocultar_login_modal">CANCELAR</button>
                            </div>
                        </div>
                    </form>                    
                </div>
                <div id="error-logueo">                        
                </div>
            </div>
        </div>    
    </div>