<div class="card mb-0">
  <div class="card-header" id="card-item-header" >
    <h4 class="card-title">Lista de Status das Matérias</h4>
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
          <th><a href="#" class="order" order="name" sort="ASC">Status</a></th>
          <th><a href="#" class="order" order="name" sort="ASC">Cor</a></th>
          <th class="tools"></th>
        </tr>
      </thead>
      <tbody class="scrollbar-inner">
        @forelse($itens as $i)
          <tr>
            <td>{{ $i->name }}</td>
            <td>{{ $i->color }}</td>
            <td class="tools">
              <ul class="bqY">
                <li class="bqX btn-item-show" data-tooltip="Visualizar"  data-backdrop="static" data-toggle="modal" data-target="#modal-show" data-route="{{ route($ctrl['route'].'.show', $i->id) }}"><i class="mdi mdi-eye"></i></li>
                <li class="bqX btn-item-create" data-tooltip="Editar" data-backdrop="static" data-toggle="modal" data-target="#modal-crud" data-route="{{ route($ctrl['route'].'.edit', $i->id) }}"><i class="mdi mdi-pencil"></i></li>
                <li class="bqX btn-item-delete" data-tooltip="Excluir" data-backdrop="static" data-route="{{ route($ctrl['route'].'.destroy', $i->id) }}"><i class="mdi mdi-delete"></i></li>
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
