<div class="modal-dialog rounded-0" role="document">
  <div class="modal-content rounded-0">
    <form id="form-item-store" method="POST" @if( isset($item->id)) action="{{ route($ctrl['route'].'.update', $item->id) }}">
      {{ method_field('put') }}
      @else
      action="{{ route($ctrl['route'].'.store') }}">
      @endif
      {{ csrf_field() }}

      <div class="modal-header bg-white border-0 p-0">
        <div class="col-md-12">
          <h1 class="font-medium-2 text-bold-600 mb-1 mt-2">Dados Principais</h1>
          <hr class="mb-0">
        </div>
      </div>
      <div class="modal-body scrollbar-inner">
        <div class="col-md-12">
          <div id="error_all"  role="alert">
          </div>
          @php
            $formItens = [
              [ 'tag' => 'input', 'type' => 'text', 'id' => 'nome', 'name' => 'nome', 'value' => $item['nome'], 'label' => 'perfil_nome', 'attribute' => 'required' ],
              [ 'tag' => 'input', 'type' => 'text', 'id' => 'descricao', 'name' => 'descricao', 'value' => $item['descricao'], 'label' => 'descricao', 'attribute' => 'required' ],
            ];
          @endphp
          @foreach($formItens as $fi)
            @component('layouts.form', $fi)
            @endcomponent
          @endforeach

        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="swal-button swal-button--cancel btn-warning swal-button--loading" data-dismiss="modal"><i class="mdi mdi-close"></i> CANCELAR</a>
        <button type="submit" class="swal-button swal-button--success btn-success"><i class="mdi mdi-content-save"></i> SALVAR</button>
      </div>
    </form>
  </div>
</div>