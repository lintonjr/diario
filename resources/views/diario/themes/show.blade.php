<div class="modal-dialog fullscreen rounded-0 modal-lg" role="document">
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
              <label class="active" for="name">Diário</label>
              <input class="active" type="text" value="{{ $item->daily->description }}" disabled>
            </div>
          <div class="md-form">
            <span class="prefix font-small-1"></span>
            <input type="text" value="{{ Helper::formatDate($item->daily->date_released) }}" class="active" disabled>
            <label for="date" class="active">Data</label>
          </div>
          <div class="md-form">
            <span class="prefix font-small-1"></span>
            <input type="text" value="{{$user->name }}" class="active" disabled>
            <label for="user_created" class="active">Criado por:</label>
          </div>
          <div class="md-form">
            <span class="prefix font-small-1"></span>
            <input type="text" value="{{$item->Agency->name }}" class="active" disabled>
            <label for="agency" class="active">Órgão:</label>
          </div>
          <div class="md-form">
            <span class="prefix font-small-1"></span>
            <input type="text" value="{{$item->Type->name }}" class="active" disabled>
            <label for="type" class="active">Tipo:</label>
          </div>
          <div class="md-form">
            <span class="prefix font-small-1"></span>
            <input type="text" value="{{$item->Subtype->name }}" class="active" disabled>
            <label for="subtype" class="active">Subtipo:</label>
          </div>
          @if(isset($item->competence->id))
                <div class="md-form">
                    <span class="prefix font-small-1"></span>
                    <input type="text" value="{{$item->Competence->name }}" class="active" disabled>
                    <label for="competence" class="active">Competência:</label>
                </div>
          @else
                <div class="md-form">
                    <span class="prefix font-small-1"></span>
                    <input type="text" value="{{$item->act }}" class="active" disabled>
                    <label for="act" class="active">Nº do Ato:</label>
                </div>
          @endif
          <div class="md-form">
                <span class="prefix font-small-1"></span>
                <input type="text" value="{{$item->year }}" class="active" disabled>
                <label for="year" class="active">Ano:</label>
          </div>
          <div class="md-form">
                <span class="prefix font-small-1"></span>
                <input type="text" value="{{$item->Layout->name }}" class="active" disabled>
                <label for="layout" class="active">Layout:</label>
          </div>
          <div class="md-form">
                <span class="prefix font-small-1"></span>
                <input type="text" value="{{$item->title }}" class="active" disabled>
                <label for="title" class="active">Título:</label>
          </div>
          <div class="md-form">
                <span class="prefix font-small-1"></span>
                    {!!$item->content!!}
                <label for="content" class="active">Conteúdo:</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        {{ csrf_field() }}
        <a href="#" class="swal-button swal-button--cancel btn-warning swal-button--loading" data-dismiss="modal"><i class="mdi mdi-close"></i> FECHAR</a>
      </div>
  </div>
</div>
