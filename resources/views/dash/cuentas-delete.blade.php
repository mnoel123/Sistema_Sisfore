<div class="modal fade" id="modal-delete-{{$cuentas['COD_CUENTA']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
  <form action="{{url('cuentas/destroy',$cuentas['COD_CUENTA'])}}" method = "post" > 
      @csrf
      @method('DELETE')
    <div class="modal-content">
      <div class="modal-header" style="background-color: #8B1E06 !important;">
        <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseas eliminar la cuenta: {{$cuentas['COD_CUENTA']}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="{url('cuenta/delete',$cuentas['COD_CUENTA'])}"><button class="btn btn-danger">ELIMINAR</button></a>
      </div>
    </div>
    </form>
  </div>
</div>