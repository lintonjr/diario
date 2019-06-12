<div class="modal-dialog rounded-0 modal-lg" role="document">
  <div class="modal-content rounded-0">
      <div class="modal-header bg-white border-0 p-0">
        <div class="col-md-12">
          <h1 class="font-medium-2 text-bold-600 mb-1 mt-2">Dados Principais</h1>
          <hr class="mb-0">
        </div>
      </div>
      <div class="modal-body scrollbar-inner">
        <div class="col-md-12">
          <div class="md-form">
            <span class="prefix"></span>
            <input type="text" value="{{ $item->cnpj_cpf }}"  class="active" disabled>
            <label for="cnpj_cpf"  class="active">CPF</label>

          </div>
          <div class="md-form">
            <span class="prefix font-small-1">Nome</span>
            <label class="active" for="nome">Nome</label>
            <input class="active" type="text" value="{{ $item->nome }}" disabled>
          </div>
          <div class="md-form">
            <i class="mdi mdi-phone prefix"></i>
            <label class="active" for="telefone">Telefone</label>
            <input class="active" type="text" value="{{ $item->telefone }}" disabled>
          </div>
          <div class="md-form">
            <span class="prefix font-small-1">DOC</span>
            <input type="text" value="{{ $item->select }}" class="active" disabled>
            <label for="select" class="active">Doc</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        {{ csrf_field() }}
        <a href="#" class="swal-button swal-button--cancel btn-warning swal-button--loading" data-dismiss="modal"><i class="mdi mdi-close"></i> CANCELAR</a>
        <button type="submit" class="swal-button swal-button--success btn-success"><i class="mdi mdi-content-save"></i> SALVAR</button>
      </div>
  </div>
</div>
