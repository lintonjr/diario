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
  $(document).on("change", "#end", function(e) {
      if (!$('#end').is(":checked")) {
          $('.end-div').addClass("hidden");
          $(this).val(0);
      } else {
          $('.end-div').removeClass("hidden");
          $(this).val(1);
          $('#cep').focus();
          $('#form-item-store .modal-body').scrollTop(447);
      }
  });
  $(document).on("change", "#con", function(e) {
      if (!$("#con").is(":checked")) {
          $(".con-div").addClass("hidden");
          $(this).val(0);
      } else {
          $(".con-div").removeClass("hidden");
          $("#tipo_conta").focus();
          $(this).val(1);
          $(this).scrollTop(0);
      }
  });
</script>
@endpush