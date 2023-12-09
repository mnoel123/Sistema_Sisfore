 <!-- Modal -->
 <div class="modal fade" id="Modal-import-{{('import') }}" tabindex="-1" role="dialog" aria-labelledby="importarPlanillaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #8B1E06 !important;">
                        <h5 class="modal-title" id="importarPlanillaModalLabel">Importar Planilla</h5>
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
                    </div>
                    <div class="modal-footer">
                        <a href="{{('import')}}"> <button class="btn btn-success btn">Importar</button></a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

