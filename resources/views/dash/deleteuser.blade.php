<style>
    #alert {
        position: fixed;
        top: 50px; /* Ajusta según sea necesario */
        right: 50px; /* Ajusta según sea necesario */
        z-index: 1000; /* Asegura que la alerta esté en la parte superior */
    }
</style>

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$users['ID']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ url('users/destroy', $users['ID']) }}" method="post"> 
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header" style="background-color: #8B1E06 !important; color: white;">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminación De Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Deseas eliminar el registro? "<strong>{{ $users['Name'] }}</strong>"
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                    <button class="btn btn-primary btn-sm">Eliminar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@if(session('delete_success'))
    <div id="alert" class="alert alert-success mt-3" role="alert" style="background-color: #87CEEB; color: #000; font-weight: bold;">
        {{ session('delete_success') }}
    </div>

    <script>
        // Cerrar la alerta después de 5 segundos
        setTimeout(function() {
            document.getElementById('alert').style.display = 'none';
        }, 5000);
    </script>
    <?php session()->forget('delete_success'); ?>  <!-- Agrega esta línea para eliminar la variable de sesión después de mostrar la alerta -->
@endif
