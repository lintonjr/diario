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
              <span class="prefix font-small-1"></span>
              <label class="active" for="name">Status</label>
              <input class="active" type="text" value="{{ $item->name }}" disabled>
            </div>
            <div class="md-form">
              <span class="prefix font-small-1"></span>
              <label class="active" for="name">Cor</label>
              <input class="active" type="text" value="{{ $item->color }}" disabled>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        {{ csrf_field() }}
        <a href="#" class="swal-button swal-button--cancel btn-warning swal-button--loading" data-dismiss="modal"><i class="mdi mdi-close"></i> FECHAR</a>

      </div>
  </div>
</div>
