<div class="card mb-0">
  <div class="card-header" id="card-item-header" >
    <h4 class="card-title">Diários</h4>
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
          <th><a href="#" class="order" order="id" sort="ASC">Diário</a></th>
          <th><a href="#" class="order" order="client_id" sort="ASC">Cliente</a></th>
          <th><a href="#" class="order" order="description" sort="ASC">Nome do Diário</a></th>
          <th><a href="#" class="order" order="date_released" sort="ASC">Data do Diário</a></th>
          <th><a href="#" class="order" order="" sort="ASC">Publicações</a></th>
          <th class="tools"></th>
        </tr>
      </thead>
      <tbody class="scrollbar-inner">
        @forelse($itens as $i)
          <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->clients->name }}</td>
            <td>{{ $i->description }}</td>
            <td>{{ \Helper::formatDate($i->date_released) }}</td>
            <td><div class="badge badge-glow badge-pill badge-info">{{ \App\Models\Operational\Theme::where('status', 'Aprovado')->where('daily_id', $i->id)->count() }}</div></td>
            <td class="tools">
              <ul class="bqY">
                <a href="{{ route('designers.showthemes', $i->id) }}" class="bqX"><i class="mdi mdi-folder-move"></i></a>
                {{-- @if($i->status == 'Reprovado')
                    <li class="bqX btn-item-create" data-tooltip="Editar" data-backdrop="static" data-toggle="modal" data-target="#modal-crud" data-route="{{ route($ctrl['route'].'.edit', $i->id) }}"><i class="mdi mdi-pencil"></i></li>
                @endif --}}
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
