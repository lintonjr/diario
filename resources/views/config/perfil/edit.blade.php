@extends('layouts.app')
@push('style')
<style type="text/css">
#btn-perfil-tools {
  margin-top: -7px!important;
  right: 10px;
  width: 76px;
  height: 50px;
  float: right!important;
}
#content-central, #content-right {
  height: calc(100% - 59px);
  overflow: hidden!important;
}
.grid-table:nth-child(odd) {
  background-color: #fbfbfb;
}
.grid-table:hover .perfil  {
  display: none;
}
.grid-table:hover {
  background-color: rgba(187, 255, 108, 0.29)!important;
}
.pagination-bottom {
  bottom: -50px!important;
}
#grid-table-header {
  border: 1px solid #eeeeee;
  border-right: 0;
  border-bottom: 1px solid #8BC34A;
}
#grid-table-footer {
  border: 1px solid #eeeeee;
  border-right: 0;
}
#grid-table-footer > div {
  padding: 16px;
  font-size: 16px;
  font-weight: 100;
  font-family: 'Roboto', sans-serif;
  white-space: nowrap;
  text-overflow: ellipsis;
  border-left: 1px solid #fafafa;
}
#btn-tools {
  text-align: right;
  margin-right: 20px;
}
#btn-search {
  margin-right: 5px;
}
.btn-perfil-create{
  color: green;
}
.form-group {
  margin-bottom: 10px;
  margin-top: 10px;
}
.grid-table > div {
  padding: 10.78px 15px;
  font-size: 16px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  border-left: 1px solid #fafafa;
}
.grid-table > div:first-child {
  padding: 10.78px 15px;
  font-size: 16px;
  overflow: hidden;
  white-space: initial;
  text-overflow: initial;
}
#grid-table-header div {
  margin-right: 0px;
}
.alert-danger {
  color: #bb0400;
  background-color: #fff7f7;
  border-color: #ebccd1;
  margin: 20px;
}
.content {
  overflow: auto;
}
.mdi-checkbox-marked-outline {
  color: #8BC34A;
}
.table-condensed>tbody>tr>td, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>td, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>thead>tr>th {
  padding: 0px 10px;
}
.mdi-checkbox-blank{
  color: #8BC34A8a;
}

</style>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="col-sm-12">
    <h1>{{ $perfil->descricao }} ({{ substr($perfil->nome, $qtdsci) }})</h1>
  </div>
</section>
<!-- Main content -->
<section class="content scrollbar-inner">
  <div id="editar-venda" class="hidden" style="position: fixed; background-color: rgba(255, 255, 255, 0.90); left: 0; right: 0; top: 60px; bottom: 0; z-index: 2;">
    <form class="form" method="post" action="{{ route($ctrl['route'].'.update', $perfil->id) }}" style="margin-left: 80px; margin-top: 15px;">
      {{ method_field('put') }}
      {{ csrf_field() }}
    </form>
  </div>
  <div class="col-sm-8 col-sm-offset-2 no-padding" id="perfil-list">
    <form method="post" action="{{ route($ctrl['route'].'.update', $perfil->id) }}">
      {{ method_field('put') }}
      {{ csrf_field() }}
      <table class="table table-bordered table-striped table-condensed">
        <thead> 
          <tr> 
            <th class="text-center" style="vertical-align:middle" rowspan="2">MODULOS</th>
            <th class="text-center" style="vertical-align:middle" rowspan="2">ÁREAS</th>
            <th class="text-center" colspan="4">AÇÕES DO USUÁRIO</th>
          </tr>
          <tr> 
            <th class="text-center" style="width: 87px;">Criar</th>
            <th class="text-center" style="width: 87px;">Delete</th>
            <th class="text-center" style="width: 87px;">Visualizar</th>
            <th class="text-center" style="width: 87px;">Editar</th>
          </tr>
        </thead> 
        <tbody>
          @foreach($permissions as $p)
          @can('config_read', $p)
          <tr>
            <td align="center" rowspan="{{ count($p->area) }}" class="text-center uppercase parent" style="vertical-align:middle" >{{ $p->nome }}</td>
            @foreach($p->area as $a)
            <td class="text-right area" style="vertical-align:middle" rel="{{ $a->area }}">
              {{ $a->descricao }}
              @php($c = 0)
              @foreach($a->children as $i)
              @foreach($role->permissions as $r)
              @if($i->id == $r->getOriginal('pivot_sis_permission_id'))
              @php($c++)
              @endif
              @endforeach
              @endforeach
              @if( $c > 0 )
              @if(count($a->children) == $c)
              @php($achec = 'mdi-checkbox-marked-outline')
              @php($chec = 'checked=checked')
              @else
              @php($achec = 'mdi-checkbox-blank')
              @php($chec = '')
              @endif
              @else
              @php($chec = '')
              @php($achec = 'mdi-checkbox-blank-outline')
              @endif
              <input type="checkbox" {{ $chec }}>
              <i class="mdi {{ $achec }} mdi-24px checkbox checkbox-parent" rel="{{ $a->area }}"></i>
            </td>
            @foreach($a->children as $i)
            <td class="text-center acao" >
              @php($ccheck = 'mdi-checkbox-blank-outline')
              @php($check = '')
              @foreach($role->permissions as $r)
              @if($i->id == $r->getOriginal('pivot_sis_permission_id'))
              @php($ccheck = 'mdi-checkbox-marked-outline')
              @php($check = 'checked=checked')
              @endif
              @endforeach
              <input type="checkbox" id="permissions" name="permissions[]" {{ $check }} value="{{ $i->id }}" >
              <i class="mdi {{ $ccheck }} mdi-24px checkbox checkbox-uni child-{{ $i->area }}"></i>
            </td>
            @endforeach
          </tr>
          @endforeach
          @endcan
          @endforeach
        </tbody>
      </table>
      <a href="{{ route($ctrl['route'].'.index') }}" class="btn btn-default btn-lg btn-cancelar" style="position: fixed; bottom: 80px; right: 20px">VOLTAR</a>
      <button type="submit" class="btn btn-success btn-lg btn-salvar" style="position: fixed; bottom: 20px; right: 20px">SALVAR</button>
    </form>
    <div class="col-sm-12 col-xs-12">
      @if(count($errors) > 0)
      <div class="alert alert-danger alert-dismissible fade in active" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        @foreach( $errors->all() as $error )
        <p>{{ $error }}</p>
        @endforeach
      </div>
      @endif
    </div>
  </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript" src="{{ asset('plugins/maskInput/jquery.mask.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/moment/moment-with-locales.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(window).resize(function() {
      resizediv();
    });
    $('.content').scrollbar({ "scrollx": "none", disableBodyScroll: true });
    resizediv();
  });
  $(document).on('click', '.btn-cancelar, .btn-salvar', function(e){
    $(".se-pre-con").fadeIn();
  });
  $(document).on('click', '.checkbox-uni', function(e){
    $(this).parent().children().first().css( "background-color", "red") ;
    if($(this).parent().children().first().is(':checked')){
      $(this).parent().children().first().removeAttr('checked');
      $(this).removeClass("mdi-checkbox-marked-outline").addClass("mdi-checkbox-blank-outline");
    } else {
      $(this).parent().children().first().attr("checked", "checked");
      $(this).removeClass("mdi-checkbox-blank-outline").addClass("mdi-checkbox-marked-outline");
    }
    var area = $(this).parent().parent().children('td.area');
    var acao = $(this).parent().parent().children("td.acao").length
    var impacao = $(this).parent().parent().children("td.acao").children('input:checked').length;
    if( acao == impacao){
      area.children('input').attr("checked", "checked");
      area.children('i').removeClass("mdi-checkbox-blank-outline").removeClass("mdi-checkbox-blank").addClass("mdi-checkbox-marked-outline");
    } else if ( impacao == 0) {
      area.children('input').removeAttr('checked');
      area.children('i').removeClass("mdi-checkbox-marked-outline").removeClass("mdi-checkbox-blank").addClass("mdi-checkbox-blank-outline");
    } else {
      area.children('input').removeAttr('checked');
      area.children('i').removeClass("mdi-checkbox-marked-outline").removeClass("mdi-checkbox-blank-outline").addClass("mdi-checkbox-blank");
    }
  });
  $(document).on('click', '.checkbox-parent', function(e){
    var id = $(this).attr("rel");
    if($(this).parent().children('input').is(':checked')){
      $(this).parent().children('input').removeAttr('checked');
      $(this).removeClass("mdi-checkbox-marked-outline").addClass("mdi-checkbox-blank-outline");
      $(".child-"+id).removeClass("mdi-checkbox-marked-outline").addClass("mdi-checkbox-blank-outline").parent().children('input').removeAttr('checked');
    } else {
      $(this).parent().children('input').attr("checked", "checked");
      $(this).removeClass("mdi-checkbox-blank-outline").removeClass("mdi-checkbox-blank").addClass("mdi-checkbox-marked-outline");
      $(".child-"+id).removeClass("mdi-checkbox-blank-outline").addClass("mdi-checkbox-marked-outline").parent().children('input').attr("checked", "checked");
    }
  });
  var resizediv = function (){
    var h =  $("body").innerHeight();
        h -= $(".content-header").innerHeight();
        h -= $("#perfil-footer").innerHeight();
        h -= 62;
    $('.content').parent().css({ "max-height": h, "width": "100%"});
    $(".se-pre-con").fadeOut();
  }
</script>
@endpush