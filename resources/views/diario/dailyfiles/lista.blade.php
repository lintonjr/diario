<div class="card mb-0">
  <div class="card-header" id="card-item-header" >
    <h4 class="card-title">Lista de Diários</h4>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
    <div class="heading-elements">
      <ul class="list-inline mb-0">
        <li>{{ $itens->firstItem() }} - {{ $itens->lastItem() }} de {{ $itens->total() }}</li>
        <li>{{ $itens->render() }}</li>
      </ul>
    </div>
  </div>
  <div class="card-content">
    <table id="tabela-item-lista" class="table table-fixed table-striped table-hover table-middle mb-0">
      <thead>
        <tr>
          <th><a href="#" class="order" order="date_released" sort="ASC">Data</a></th>
          <th><a href="#" class="order" order="description" sort="ASC">Descrição</a></th>
          <th><a href="#" class="order" order="number" sort="ASC">Número</a></th>
          <th><a href="#" class="order" order="client_id" sort="ASC">Cliente</a></th>
          <th class="tools"></th>
        </tr>
      </thead>
      <tbody class="scrollbar-inner">
        @forelse($itens as $i)
          <tr>
            <td>{{\Helper::formatDate($i->date_released)}}</td>
            <td>{{$i->description}}</td>
            <td>{{ $i->number }}</td>
            <td>{{ $i->clients->name }}</td>
            <td class="tools">
              <ul class="bqY">
                  <a href="{{ route($ctrl['route'].'.edit', $i->id) }}" class="bqX"><i class="mdi mdi-arrow-up-bold-hexagon-outline"></i></a>
                {{-- <li class="bqX btn-item-create" data-tooltip="Adicionar Arquivo" data-backdrop="static" data-toggle="modal" data-target="#modal-crud" data-route="{{ route($ctrl['route'].'.edit', $i->id) }}"><i class="mdi mdi-arrow-up-bold-hexagon-outline"></i></li> --}}
                {{-- <li class="bqX btn-item-delete" data-tooltip="Excluir" data-backdrop="static" data-route="{{ route($ctrl['route'].'.destroy', $i->id) }}"><i class="mdi mdi-delete"></i></li> --}}
              </ul>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5">{{ $ctrl['title'] }} inexistente ou não encontrado</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
