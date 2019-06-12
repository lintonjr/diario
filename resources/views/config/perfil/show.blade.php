<div class="modal-dialog rounded-0" role="document">
  <div class="modal-content rounded-0">
      <div class="modal-header bg-white border-0 p-0">
        <div class="col-md-12">
          <h1 class="font-medium-2 text-bold-600 mb-1 mt-2">Dados Principais</h1>
          <hr class="mb-0">
        </div>
      </div>
      <div class="modal-body scrollbar-inner p-0">

          <table class="table">
            <thead class="text-center"> 
              <tr> 
                <th style="vertical-align:middle" rowspan="2">SISTEMA</th>
                <th style="vertical-align:middle" rowspan="2">MODULOS</th>
                <th colspan="4">AÇÕES DO USUÁRIO</th>
              </tr>
              <tr> 
                <th><i class="mdi mdi-plus mdi-18px"></i></th>
                <th><i class="mdi mdi-delete mdi-18px"></i></th>
                <th><i class="mdi mdi-eye mdi-18px"></i></th>
                <th><i class="mdi mdi-pencil mdi-18px"></i></th>
              </tr>
            </thead> 
            <tbody>
              <tr>
                <td rowspan="2" class="text-center uppercase" style="vertical-align:middle" >SICARP</td>
                <td class="text-right" rel="">
                  ATAS
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-parent" rel=""></i>
                </td>
                <td class="text-center acao" >
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-uni child-1"></i>
                </td>
                <td class="text-center acao" >
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-uni child-1"></i>
                </td>
                <td class="text-center acao" >
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-uni child-1"></i>
                </td>
                <td class="text-center acao" >
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-uni child-1"></i>
                </td>
              </tr>


              <tr>
          
                <td class="text-right" rel="">
                  SOLICITAÇÕES
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-parent" rel=""></i>
                </td>
                <td class="text-center acao" >
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-uni child-1"></i>
                </td>
                <td class="text-center acao" >
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-uni child-1"></i>
                </td>
                <td class="text-center acao" >
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-uni child-1"></i>
                </td>
                <td class="text-center acao" >
                  <i class="mdi mdi-checkbox-blank-outline mdi-24px checkbox checkbox-uni child-1"></i>
                </td>
              </tr>


            </tbody>
          </table>


 
      </div>
      <div class="modal-footer">
        {{ csrf_field() }}
        <a href="#" class="swal-button swal-button--cancel btn-warning swal-button--loading" data-dismiss="modal"><i class="mdi mdi-close"></i> CANCELAR</a>
        <button type="submit" class="swal-button swal-button--success btn-success"><i class="mdi mdi-content-save"></i> SALVAR</button>
      </div>
  </div>
</div>
