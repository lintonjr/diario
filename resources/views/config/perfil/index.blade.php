@extends('layouts.app')
@section('content')
<div class="content-body" id="div-lista">
</div>
<a class="btn plus btn-float btn-round float-lg btn-lg btn-item-create" data-backdrop="static" data-toggle="modal" data-target="#modal-crud" data-route="{{ route($ctrl['route'].'.create') }}">
  <i class="ft-plus white"></i>
</a>  
<!-- Modal -->
<div class="modal modal-crud animated fadeInRight" id="modal-crud" tabindex="-1" role="dialog" aria-labelledby="modalCrud" aria-hidden="true">
</div>
<div class="modal modal-crud animated fadeInRight" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="modalShow" aria-hidden="true">
</div>
<form id="form-item-lista" method="GET" action="{{ route($ctrl['route'].'.lista') }}" class="hidden">
    {{ csrf_field() }}
</form>
<form id="form-item-show" method="GET" action="" class="hidden">
    {{ csrf_field() }}
</form>
<form id="form-item-create" method="GET" action="" class="hidden">
{{ csrf_field() }}
</form>
<form id="form-item-delete" method="POST" class="hidden">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
</form>
@endsection
@push('link')
@endpush
@push('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $("#form-item-lista").submit();
  });
</script>
@endpush




@push('scripts')
<!-- <script type="text/javascript" src="{{ asset('plugins/maskInput/jquery.mask.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/moment/moment-with-locales.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
<script type="text/javascript">
  moment.locale('pt-br');
  $(document).on('click', '.btn-perfil-create, .btn-perfil-edit, .btn-perfil-delete', function(e){
    e.preventDefault();
    $(".se-pre-con").fadeIn();
    $(".has-error").removeClass("has-error").children(".help-block").last().html('');
    $("#input-search").parent().parent().addClass("hidden");
    $("#input-search").val("");
    if( $(this).hasClass('ativo')){
      $(".tools-user").removeClass("hidden");
      $("#div-list").removeClass("col-sm-8").addClass("col-sm-12");
      $(".pagination-bottom").removeClass("pag-right");
      $("#div-crud").addClass("hidden");
      $(".ativo").removeClass("ativo");
      $(".se-pre-con").fadeOut();
      $("#div-crud").html("");
      return false;
    }
    var ati = 0;
    $(".ativo").each(function(i, item){
      ati = 1;
    });
    if(ati == 1){
      $(".ativo").removeClass("ativo");
    } else {
      $(".tools-user").toggleClass("hidden");
      $("#div-list").toggleClass("col-sm-8").toggleClass("col-sm-12");
      $("#div-crud").toggleClass("hidden");
      $(".pagination-bottom").addClass("pag-right");
    }
    $(this).addClass('ativo');
    if($('.btn-perfil-delete').hasClass('ativo')){
      return false;
    }
    $("#form-perfil-create").attr("action", $(this).attr("route"));
    $("#form-perfil-create").submit();
  });
  $(document).on("click", "#btn-perfil-salvar", function(e) {
    e.preventDefault();
    // $(".se-pre-con").fadeIn();
    $("#btn-perfil-form").trigger('click');
  });
  $(document).on("submit", "#form-perfil-create", function(e) {
    e.preventDefault();
    $(".se-pre-con").fadeIn();
    var url = $(this).attr("action");
    var get = $(this).attr("method");
    $.ajax({
      url: url,
      type: get,
      success: function(data){
        $("#div-crud").html(data);
        $('[data-toggle="popover"]').popover();
        $("#nome").focus();
        $(".se-pre-con").fadeOut();
        var h =  $("body").innerHeight();
            h -= $(".content-header").innerHeight();
        $("#perfil-novo").css("height", 165);
        $("#perfil-novo").css("margin-top", (h/2) - 155);
        $("#div-crud").css("height", h);
      },
      error: function(data){
        console.log(data);
        $("#div-list").toggleClass("col-sm-8").toggleClass("col-xs-8").toggleClass("col-sm-12").toggleClass("col-xs-12");
        $("#div-crud").toggleClass("hidden");
        $(".se-pre-con").fadeOut();
      }
    });
  });
  $(document).on("submit", "#delete-form", function(e) {
    e.preventDefault();
    $(".se-pre-con").fadeIn();
    var url = $(this).attr("action");
    var get = $(this).attr("method");
    var data = $(this).serializeArray();
    $.ajax({
      url: url,
      type: get,
      data: data,
      success: function(data){
        $('.div-del').remove();
        var h =  $("body").innerHeight();
            h -= $(".content-header").innerHeight();
            h -= 62;

        $("#div-crud").html(data);
        $("#delete-novo").css("height", h);

        var route = $("#delete-form").attr("action");
        $('.btn-perfil-delete').attr("action", route).trigger("click");
        $(".se-pre-con").fadeOut();
      },
      error: function(data){
        console.log(data);
        $(".se-pre-con").fadeOut();
      }
    });
  });
  $(document).on("submit", "#deleteForm", function(e) {
    e.preventDefault();
    $(".se-pre-con").fadeIn();
    var url = $(this).attr("action");
    var get = $(this).attr("method");
    var data = $(this).serializeArray();
    $.ajax({
      url: url,
      type: get,
      data: data,
      success: function(data){
        console.log(data);
        $(".has-error").removeClass("has-error").children(".help-block").last().html('');
        if(data.error){
          $.each(data.error , function( key, value ) {
            $("#"+key).parent().addClass("has-error").children(".help-block").html('<strong>'+value+'</strong>');
          });
        } else {
          if($(".form-crud #delete_confirmar").val() == 1){
            $("#form-search").submit();
            $("#div-crud").html("");
            $(".ativo").each(function(i, item){
              $(this).trigger("click");
            });
          }
        }
        $(".se-pre-con").fadeOut();
      },
      error: function(data){
        $(".has-error").removeClass("has-error").children(".help-block").last().html('');
        console.log(data);
        $.each( data.responseJSON , function( key, value ) {
          $("#"+key).parent().addClass("has-error").children(".help-block").html('<strong>'+value[0]+'</strong>');
        });
        $(".se-pre-con").fadeOut();
      }
    });
  });
  $(document).on('click', '.btn-perfil-cancelar, .btn-delete-cancelar', function(e) {
    e.preventDefault();
    $(".tools-user").removeClass("hidden");
    $("#div-list").removeClass("col-sm-8").addClass("col-sm-12");
    $(".pagination-bottom").removeClass("pag-right");
    $("#div-crud").addClass("hidden").html("");
    $(".ativo").removeClass("ativo");
  });
  $(document).on('click', '#btn-perfil-deletar', function(e){
    e.preventDefault();
    $("#deleteForm").submit();
  });
</script> -->
@endpush