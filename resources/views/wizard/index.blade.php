@extends('layouts.app')
@section('content')
<div class="content-body" id="div-lista">
</div>
<a href="{{ route($ctrl['route'].'.create') }}" class="btn plus btn-float btn-round float-lg btn-lg btn-item-create">
  <i class="ft-plus white"></i>
</a>
<!-- Modal -->
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
