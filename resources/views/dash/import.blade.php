<!-- Modal -->
<div class="modal fade" id="Modal-import-{{('import') }}" tabindex="-1" role="dialog" aria-labelledby="importarPlanillaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #8B1E06 !important;">
            <h5 class="modal-title text-white" id="importarPlanillaModalLabel">Importar Planilla</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de importación con validación -->
                <form action="{{ url('dash/importData')}}" enctype="multipart/form-data" method="post" class="was-validated">
                    @csrf
                    <div class="form-group">
                        <label for="excel">Seleccionar archivo Excel</label>
                        <input type="file" name="excel" id="excel" class="form-control" accept=".xlsx, .xls" required>
                        <div class="invalid-feedback">Por favor, selecciona un archivo Excel.</div>
                    </div>

                    <!-- Sugerencias para el usuario -->
                    <div class="alert alert-info mt-3" role="alert" style="font-weight: bold; color: black;">
                        Antes de importar, asegúrate de:
                        <ul>
                            <li>Ingresar una Persona.</li>
                            <li>Ingresar un Afiliado.</li>
                        </ul>
                        <a style="color: black;">¡Luego haga clic en Importar!</a>
                    </div>
                </div>
                <div class="modal-footer">
    <!-- Botón "Importar" -->
    <button type="submit" class="btn btn-success btn-sm">Importar</button>
    <!-- Botón "Cerrar" -->
    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
</div>
            </form>
        </div>
    </div>
</div>
<!-- ... (código de la vista) -->

<!-- ... (código de la vista) -->

@if(Session::has('import_success'))
    <div id="importSuccessMessage" class="alert alert-info alert-dismissible fade show mt-3" role="alert" style="background-color: #8B0000; font-weight: bold; color: white; font-size: 14px; max-width: 300px; position: fixed; top: 20px; right: 20px; z-index: 9999;">
        {{ Session::get('import_success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script>
        // Cerrar la alerta después de 7 segundos
        setTimeout(function() {
            document.getElementById('importSuccessMessage').style.display = 'none';
        }, 7000);
    </script>
@endif
