<div class="modal-dialog" id="modal-dialog" role="document">
  <div class="modal-content">
    <form id="form-item-store" method="POST" @if( isset($item->id)) action="{{ route($ctrl['route'].'.update', $item->id) }}">
      {{ method_field('put') }}
      @else
      action="{{ route($ctrl['route'].'.store') }}">
      @endif
      {{ csrf_field() }}

      <div class="modal-header bg-white border-0 p-0">
        <div class="col-md-12">
          <h1 class="font-medium-2 text-bold-600 mb-1 mt-2">Dados do Perfil</h1>
          <hr class="mb-1">
        </div>
      </div>

      <div class="modal-body scrollbar-inner">
        <div class="col-md-12">

          <div id="error_all"  role="alert">
          </div>

          <div class="md-form">
            <i class="mdi mdi-file-outline prefix"></i>
            <input type="text" id="cnpj_cpf" name="cnpj_cpf" value="{{ $item->cnpj_cpf }}" class="form-control text-right {{ isset($item->cnpj_cpf) ? 'active' :null }}" size="25" maxlength="18" data-mask="000.000.000-00">
            <label for="cnpj_cpf" data-error="wrong" data-success="right" class="{{ isset($item->nome) ? 'active' :null }}">CPF</label>
          </div>
          <div class="md-form">
            <i class="mdi mdi-account prefix"></i>
            <input type="text" id="nome" name="nome" value="{{ $item->nome }}" class="form-control {{ isset($item->nome) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off">
            <label for="nome" data-error="wrong" data-success="right" class="{{ isset($item->nome) ? 'active' :null }}">Nome Completo</label>
          </div>
          <div class="md-form">
            <i class="mdi mdi-phone prefix"></i>
            <input type="text" id="telefone" name="telefone" value="{{ $item->telefone }}" class="form-control text-right" maxlength="15"  data-mask="(00) 00000-0000">
            <label for="telefone" data-error="wrong" data-success="right" class="">Telefone</label>
          </div>
          <div class="md-form">
            <span class="prefix"></span>
            <select class="form-control select" id="select" name="select" >
                <option value="" >Tipo</option>
                <option value="rg" {{ $item->select == 'rg' ? 'selected': null }}>RG</option>
                <option value="cnh" {{ $item->select == 'cnh' ? 'selected': null }}>CNH</option>
                <option value="crea" {{ $item->select == 'crea' ? 'selected': null }}>CREA</option>
                <option value="crm" {{ $item->select == 'crm' ? 'selected': null }}>CRM</option>
                <option value="cro" {{ $item->select == 'cro' ? 'selected': null }}>CRO</option>
                <option value="oab" {{ $item->select == 'oab' ? 'selected': null }}>OAB</option>
              </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        {{ csrf_field() }}
        <a href="#" class="swal-button swal-button--cancel btn-warning swal-button--loading" data-dismiss="modal"><i class="mdi mdi-close"></i> CANCELAR</a>
        <button type="submit" class="swal-button swal-button--success btn-success"><i class="mdi mdi-content-save"></i> SALVAR</button>
      </div>
    </form>
  </div>
</div>

