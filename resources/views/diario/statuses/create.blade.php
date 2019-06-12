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
          <h1 class="font-medium-2 text-bold-600 mb-1 mt-2">Dados do Status da Matéria</h1>
          <hr class="mb-1">
        </div>
      </div>

      <div class="modal-body scrollbar-inner">
        <div class="col-md-12">

          <div id="error_all"  role="alert">
          </div>

          <div class="md-form">
            <i class="mdi mdi-file prefix"></i>
            <input type="text" id="name" name="name" value="{{ $item->name }}" class="form-control {{ isset($item->name) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off" autofocus>
            <label for="name" data-error="wrong" data-success="right" class="{{ isset($item->name) ? 'active' :null }}">Nome do status da matéria</label>
          </div>
          <div class="md-form" type="text" style="width: calc(100% - 12rem); margin-left: 6rem!important; margin-bottom:12rem">
            <input id="color" name="color" value="{{ $item->color }}" class="form-control border-0 minicolors minicolors-input {{ isset($item->color) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off" data-control="hue">
            <label for="color" data-error="wrong" data-success="right" class="{{ isset($item->color) ? 'active' :null }}">Cor do status da matéria</label>
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

