<div class="card mb-0">
  <div class="card-header" id="card-item-header" >
    <h4 class="card-title">Adicionar Permissão para Papel - {{$itens->name}}</h4>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                {{-- <li>{{ $itens->firstItem() }} - {{ $itens->lastItem() }} de {{ $itens->total() }}</li>
                <li>{{ $itens->render() }}</li> --}}
            </ul>
        </div>
    </div>

    <div class="card-content">
    <form id="" method="POST" action="{{ route($ctrl['route'].'.storepermissions', $itens->id) }}">
        {{ csrf_field() }}
        <div class="md-form">
            <span class="prefix"></span>
            <select class="form-control select-permissions" id="select" name="permission_id" >
                <option value="">Permissões</option>
                @foreach ($permissions as $permission)
                    <option value="{{$permission->id}}">{{$permission->name}}</option>
                @endforeach
              </select>
          </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
    <div class="card mb-0">
  <div class="card-header" id="card-item-header" >
    <h4 class="card-title">Lista de Permissões de {{$itens->name}}</h4>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
  </div>
  <div class="card-content">
    <table id="tabela-item-lista" class="table table-fixed table-striped table-hover table-middle mb-0">
      <thead>
        <tr>
          <th><a href="#" class="order">Nome</a></th>
          <th><a href="#" class="order">Descrição</a></th>
          <th><a href="#" class="order">Area</a></th>
          <th class="tools"></th>
        </tr>
      </thead>
      <tbody class="scrollbar-inner">
        @forelse($itens->permissions as $i)
          <tr>
            <td>{{$i->name}}</td>
            <td>{{$i->description}}</td>
            <td>{{$i->area}}</td>
            <td class="tools">
              <ul class="bqY">
                <form action="{{route($ctrl['route'].'.destroypermission',[$itens->id,$i->id])}}" method="post">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button title="Deletar" class="bqX"><i class="mdi mdi-delete"></i></button>
                </form>
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

  </div>
</div>
@push('scripts')
<script type="text/javascript">
  $('.select-permissions').select2();
</script>
@endpush
