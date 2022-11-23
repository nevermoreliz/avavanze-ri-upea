
<!-- Modal -->
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login DRNI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="<?= base_url('client/Controller_logueo/session')?>" class="session_start_user">
      <div class="modal-body">
        <div class="row">
                    
                        <div class="row">
                            <div class="col-xs-12 login-form">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="form-group">
                                    <label class="icon-user" for="usuario"></label>
                                    <input class="form-control" placeholder="Usuario" type="text" name="usuario" id="usuario" required/>
                                    </div>                                
                                </div>                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 login-form">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <div class="form-group">
                                    <label class="icon-unlocked" for="pass"></label>
                                    <input class="form-control" placeholder="Contraseña" type="password" name="password" id="pass" required/>
                                    </div>                                
                                </div>                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 login-form">
                                <!--<button class="col-xs-4 col-xs-offset-1" type="submit">INICIAR</button>-->
                                <!--<button class="col-xs-4 col-xs-offset-1" type="reset" id="ocultar_login_modal">CANCELAR</button>-->
                            </div>
                        </div>
                                      
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">INICIAR</button>
      </div>
      </form>  
    </div>
  </div>
</div>