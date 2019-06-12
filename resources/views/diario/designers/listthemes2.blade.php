<div class="card mb-0">
  <div class="card-header" id="card-item-header" >
    <h4 class="card-title">Publicações do Diário - {{ $daily->id }}</h4>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
    <div class="heading-elements">
      <ul class="list-inline mb-0">
        {{-- <li>{{ $itens->firstItem() }} - {{ $itens->lastItem() }} de {{ $itens->total() }}</li>
        <li>{{ $itens->render() }}</li> --}}
      </ul>
    </div>
  </div>
  <div class="card-content">
    <table id="tabela-item-lista" class="table table-fixed table-striped table-hover table-middle mb-0">
      <thead>
        <tr>
          <th><a href="#" class="order" order="id" sort="ASC">Data</a></th>
          <th><a href="#" class="order" order="client_id" sort="ASC">Título</a></th>
          <th><a href="#" class="order" order="date_released" sort="ASC">Layout</a></th>
          <th><a href="#" class="order" order="" sort="ASC">Aceito em:</a></th>
          <th><a href="#" class="order" order="diagrammed_by" sort="ASC">Status:</a></th>
          <th class="tools">Ver registro</th>
        </tr>
      </thead>
      <tbody class="scrollbar-inner">
        @forelse($itens as $i)
          <tr>
            <td>{{\Helper::formatDate($i->Daily->date_released)}}</td>
            <td>{{ $i->title }}</td>
            <td>{{ $i->Layout->name }}</td>
            <td>{{ \Helper::formatDate($i->accepted_at) }}</td>
            <td>{{ isset($i->diagrammed_by) ? 'Diagramado' : 'Não diagramado' }}</td>
            <td class="tools">
              <ul class="bqY">

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
