@if(isset($tag) )
@if($tag == "input")
<div class="md-form">
  <i class="mdi {{ isset($icone) ? $icone : null }} prefix"></i>
  <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" class="form-control {{ isset($class) ? $class : null }} {{ isset($value) ? 'active' :null }}" {{ isset($attribute) ? $attribute : null }}" autocomplete="off" value="{{ isset($value) ? $value : null }}">
  @if( isset($label) )
  <label for="{{ $id }}" data-error="wrong" data-success="right" class="{{ isset($value) ? 'active' :null }}">{{ __('form/label.'.$label) }}</label>
  @endif
</div>
@elseif($tag == "select")
<div class="md-form">
  <i class="mdi {{ isset($icone) ? $icone : null }} prefix"></i>
  <select id="{{ $id }}" name="{{ $name }}" class="form-control active {{ isset($class) ? $class : null }}">
    <option value="">{{ __('form/label.'.$label) }}</option>
    @foreach($options as $o)
    <option value="{{ $o['id'] }}" {{ isset($default) && $default==$o['id'] ? 'selected' : null }}><span>{{ $o['nome'] }}</option>
    @endforeach
  </select>
  <label for="{{ $id }}" data-error="wrong" data-success="right" class="{{ !isset($default) ? 'hidden ' : 'active' }}">{{ __('form/label.'.$label) }}</label>
</div>
@endif
@endif