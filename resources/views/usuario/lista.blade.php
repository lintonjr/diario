<div class="card mb-0">
  <div class="card-header" id="card-item-header" >
    <h4 class="card-title">Lista de {{ $ctrl['title'] }}</h4>
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
          <th><a href="#" class="order" order="nome" sort="ASC">Nome</a></th>
          <th><a href="#" class="order" order="razao_social" sort="ASC">Empresa</a></th>
          <th>Perfil</th>
          <th><a href="#" class="order" order="email" sort="ASC">E-mail</a></th>
          <th>Telefone</th>
          <th class="tools"></th>
        </tr>
      </thead>
      <tbody class="scrollbar-inner">
        @forelse($itens as $i)
        @can($ctrl['read'], $i)
        <tr>
          <td>{{ $i->nome }}</td>
          <td>{{ isset($i->empresa->nome_fantasia) ? $i->empresa->nome_fantasia : null }}</td>
          <td>
            @foreach($i->roles as $r)
            <span>{{ substr($r->nome, $qtdsci) }}</span>
            @endforeach
          </td>
          <td>{{$i->contatos->where('tipo_contato', '1')->last()['descricao']}}</td>
          <td>{{Helper::fone($i->contatos->where('tipo_contato', '2')->last()['descricao'])}}</td>
          <td class="tools">
            <ul class="bqY">
              <li class="bqX btn-item-show" data-tooltip="Visualizar"  data-backdrop="static" data-toggle="modal" data-target="#modal-show" data-route="{{ route($ctrl['route'].'.show', $i->id) }}"><i class="mdi mdi-eye"></i></li>
              @can($ctrl['update'], $i)
              <li class="bqX btn-item-create" data-tooltip="Editar" data-backdrop="static" data-toggle="modal" data-target="#modal-crud" data-route="{{ route($ctrl['route'].'.edit', $i->id) }}"><i class="mdi mdi-pencil"></i></li>
              @endcan
              @can($ctrl['delete'], $i)
              <li class="bqX btn-item-delete" data-tooltip="Excluir" data-backdrop="static" data-route="{{ route($ctrl['route'].'.destroy', $i->id) }}"><i class="mdi mdi-delete"></i></li>
              @endcan
            </ul>
          </td>
        </tr>
        @endcan
        @empty
        <tr>
          <td colspan="5">{{ $ctrl['title'] }} inexistente ou não encontrado</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>