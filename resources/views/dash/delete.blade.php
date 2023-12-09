<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$planillas['COD_PLANILLA']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{url('planillas/destroy',$planillas['COD_PLANILLA'])}}" method = "post" > 
      @csrf
      @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminacion De Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseas eliminar el registro {{$planillas['COD_PLANILLA']}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
        <a href="{{url('planillas/delete',$planillas['COD_PLANILLA'])}}"><button class="btn btn-primary btn-sm">ELIMINAR</button></a>
      </div>
    </div>
    </form>
  </div>
</div>
