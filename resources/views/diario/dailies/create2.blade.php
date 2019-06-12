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
          <h1 class="font-medium-2 text-bold-600 mb-1 mt-2">Dados do Diário</h1>
          <hr class="mb-1">
        </div>
      </div>

      <div class="modal-body scrollbar-inner">
        <div class="col-md-12">

          <div id="error_all"  role="alert">
          </div>

          <div class="md-form">
            <i class="mdi mdi-account prefix"></i>
            <input type="text" id="description" name="description" value="{{ $item->description }}" class="form-control {{ isset($item->description) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off" autofocus>
            <label for="description" data-error="wrong" data-success="right" class="{{ isset($item->description) ? 'active' :null }}">Descrição do Diário</label>
          </div>
          <div class="md-form">
            <i class="prefix"></i>
            <input type="text" id="number" name="number" value="{{ $item->number }}" class="form-control {{ isset($item->number) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off" autofocus>
            <label for="number" data-error="wrong" data-success="right" class="{{ isset($item->number) ? 'active' :null }}">Número do Diário</label>
          </div>
          <div class="md-form">
            <span class="prefix"></span>
            <select class="form-control select" id="select" name="client_id" >
                <option value="">Cliente</option>
                @foreach ($clients as $client)
                    <option value="{{$client->id}}" {{ $item->client_id == $client->id ? 'selected': null }}>{{$client->name}}</option>
                @endforeach
              </select>
          </div>

          <div class="md-form">
            <i class="la la-calendar-o prefix"></i>
            <input type='text' name="date" class="form-control datarange-diario" placeholder="Selecione as datas"/>
            <label for="date" data-error="wrong" data-success="right" class="active">Datas</label>
          </div>

          <div class="md-form">
            <i class="mdi prefix"></i>
            <input type="text" id="year" name="year" value="{{ $item->year }}" class="form-control {{ isset($item->year) ? 'active' :null }}" size="65" maxlength="255" required autocomplete="off">
            <label for="year" data-error="wrong" data-success="right" class="{{ isset($item->year) ? 'active' :null }}">Ano</label>
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

