<div class="modal-dialog rounded-0 modal-lg" role="document">
  <div class="modal-content rounded-0">
    <form id="form-item-store" method="POST" @if( isset($item->id)) action="{{ route($ctrl['route'].'.update', $item->id) }}">
      {{ method_field('put') }}
      @else
      action="{{ route($ctrl['route'].'.store') }}">
      @endif
      {{ csrf_field() }}

      <div class="modal-header bg-white border-0 p-0">
        <div class="col-md-12">
          <h1 class="font-medium-2 text-bold-600 mb-1 mt-2">Dados Principais</h1>
          <hr class="mb-0">
        </div>
      </div>
      <div class="modal-body scrollbar-inner">
        <div class="col-md-12">
          <div id="error_all"  role="alert">
          </div>
          <div class="Re0Yod" alt="Foto do contato" data-tooltip="Definir a foto do contato">
            <img width="50" height="50" class="KoG9Dc" src="{{ asset('img/avatars/avatar-blank.png') }}">
          </div>

          @php
          $formItens = [
            count($tipo)>1 ? [ 'tag' => 'select',  'type' => 'text', 'id' => 'user_tipo_id', 'name' => 'user_tipo_id', 'class' => '', 'icone' => null, 'value' => $item['user_tipo_id'], 'label' => 'user_tipo_id', 'options' => $tipo, 'default' => $item->user_tipo_id ]: [],
            [ 'tag' => 'select', 'type' => 'text', 'id' => 'sis_role_id', 'name' => 'sis_role_id', 'value' => $item['sis_role_id'], 'label' => 'sis_role_id', 'options' => $roles, 'default' => isset($item->roles[0]->id) ? $item->roles[0]->id:null ],
            isset($empresas) ? [ 'tag' => 'select', 'type' => 'text', 'id' => 'empresa_id', 'name' => 'empresa_id', 'class' => '', 'icone' => null, 'value' => $item['empresa_id'], 'label' => 'empresa_id', 'options' => $empresas, 'default' => $item->empresa_id ] : [],

            count($tipo)==0 ? [ 'tag' => 'input', 'type' => 'hidden', 'id' => 'user_tipo_id', 'name' => 'user_tipo_id' ]:[],
            [ 'tag' => 'input', 'type' => 'text', 'id' => 'cnpj_cpf', 'name' => 'cnpj_cpf', 'class' => 'text-right', 'icone' => null, 'value' => $item['cnpj_cpf'], 'label' => 'cpf' ],
            [ 'tag' => 'input', 'type' => 'text', 'id' => 'nome', 'name' => 'nome', 'icone' => null, 'value' => $item['nome'], 'label' => 'nome', 'attribute' => 'required' ],
            [ 'tag' => 'input', 'type' => 'text', 'id' => 'telefone', 'name' => 'telefone', 'class' => 'text-right', 'icone' => 'mdi-phone', 'value' => $item['telefone'], 'label' => 'telefone' ],
            [ 'tag' => 'input', 'type' => 'email', 'id' => 'email', 'name' => 'email', 'icone' => 'mdi-email', 'value' => $item['email'], 'label' => 'email' ]
          ];
          @endphp
          @foreach($formItens as $fi)
            @component('layouts.form', $fi)
            @endcomponent
          @endforeach

          <div class="input-group pl-6" style="width:calc(100% - 6rem);margin-top: -1.7rem;">
            <div class="md-form">
              <select class="form-control active mt-0" name="tipo_identificacao" id="tipo_identificacao">
                <option value="">Tipo</option>
                <option value="rg">RG</option>
                <option value="cnh">CNH</option>
                <option value="crea">CREA</option>
                <option value="crm">CRM</option>
                <option value="cro">CRO</option>
                <option value="oab">OAB</option>
              </select>
              <label for="tipo_identificacao" data-error="wrong" data-success="right" class="hidden">Tipo</label>
            </div>
            <div class="md-form" style="flex: 2 1 auto;">
              <input type="text" id="rg" name="rg" class="form-control text-right idop oprg pr-1" style="width: calc(100% - 1rem)" size="20" maxlength="20" autocomplete="off">
              <label for="rg" data-error="wrong" data-success="right">N° de Identificação</label>
            </div>
            <div class="md-form">
              <input type="text" id="oerg" name="oerg" class="form-control idop oprg" size="20" maxlength="20" autocomplete="off">
              <label for="oerg" data-error="wrong" data-success="right" class="idop oprg">Orgão Exp.</label>
            </div>
          </div>
          <hr>
          <div class="modal-crud-padding">
            <div class="float-right">
              <input type="checkbox" id="end" name="end" class="switchery" data-size="xs" value="0"/>
            </div>
            <label for="end" class="font-medium-2 text-bold-600 mb-0">Endereço</label>
          </div>
          <div class="col-md-12 p-0 end-div hidden">
            @php
            $formItens = [
              [ 'tag' => 'input', 'type' => 'text', 'id' => 'cep', 'name' => 'cep', 'class' => 'text-right', 'value' => $item['cep'], 'label' => 'cep' ],
              [ 'tag' => 'input', 'type' => 'text', 'id' => 'logradouro', 'name' => 'logradouro', 'value' => $item['logradouro'], 'label' => 'logradouro' ],
              [ 'tag' => 'input', 'type' => 'text', 'id' => 'numero', 'name' => 'numero', 'value' => $item['numero'], 'label' => 'numero' ],
              [ 'tag' => 'input', 'type' => 'text', 'id' => 'complemento', 'name' => 'complemento', 'value' => $item['complemento'], 'label' => 'complemento' ],
              [ 'tag' => 'input', 'type' => 'text', 'id' => 'bairro', 'name' => 'bairro', 'value' => $item['bairro'], 'label' => 'bairro' ]
            ];
            @endphp
            @foreach($formItens as $fi)
              @component('layouts.form', $fi)
              @endcomponent
            @endforeach
          </div>
          <hr>
          
          <div class="modal-crud-padding">
            <div class="float-right">
              <input type="checkbox" id="con" name="con" class="switchery" data-size="xs" value="0"/>
            </div>
            <label for="con" class="font-medium-2 text-bold-600 mb-0">Dados Bancários</label>
          </div>
          <div class="col-md-12 p-0 con-div hidden">

            @php
              $oTipo = [
                ['id'=> '1', 'nome' => 'Corrente'],
                ['id'=> '2', 'nome' => 'Poupança']
              ];
              $formItens = [
                [ 'tag' => 'select', 'type' => 'text', 'id' => 'tipo_conta', 'name' => 'tipo_conta', 'class' => '', 'icone' => null, 'value' => $item['tipo_conta'], 'label' => 'tipo_conta', 'options' => $oTipo ],
                [ 'tag' => 'select', 'id' => 'uni_banco_id', 'name' => 'uni_banco_id', 'class' => 'select', 'icone' => null, 'value' => $item['uni_banco_id'], 'label' => 'uni_banco_id', 'options' => $bancos ],
                [ 'tag' => 'input', 'type' => 'text', 'id' => 'agencia', 'name' => 'agencia', 'class' => 'text-right', 'icone' => null, 'value' => $item['agencia'], 'label' => 'agencia' ],
                [ 'tag' => 'input', 'type' => 'text', 'id' => 'conta', 'name' => 'conta', 'class' => 'text-right', 'icone' => 'mdi-phone', 'value' => $item['conta'], 'label' => 'conta' ]
              ];
            @endphp
            @foreach($formItens as $fi)
              @component('layouts.form', $fi)
              @endcomponent
            @endforeach

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="swal-button swal-button--cancel btn-warning swal-button--loading" data-dismiss="modal"><i class="mdi mdi-close"></i> CANCELAR</a>
        <button type="submit" class="swal-button swal-button--success btn-success"><i class="mdi mdi-content-save"></i> SALVAR</button>
      </div>
    </form>
  </div>
</div>
