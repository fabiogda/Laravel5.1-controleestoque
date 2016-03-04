<div class="modal fade" id="registar" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title">Registrar novo usuario</h2>
      </div>
      <div class="modal-body">
        @include('users.forms.usr')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="registar">Registrar</button>
      </div>
    </div>
  </div>
</div>
