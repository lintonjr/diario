$(document).ready(function() {
    if (typeof data_id == "undefined"){
        data_id = '';
    }
    oTable = $('#tbl-padrao').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax:{
                            url: url,
                            dataType: "json",
                            type: "POST",
                            data: { _token: token, id: data_id }
                    },
                    language: {
                        "sEmptyTable": "Nenhum registro encontrado",
                        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "_MENU_ resultados por página",
                        "sLoadingRecords": "Carregando...",
                        "sProcessing": "Processando...",
                        "sZeroRecords": "Nenhum registro encontrado",
                        "sSearch": "Pesquisar",
                        "oPaginate": {
                            "sNext": "Próximo",
                            "sPrevious": "Anterior",
                            "sFirst": "Primeiro",
                            "sLast": "Último"
                        },
                        "oAria": {
                            "sSortAscending": ": Ordenar colunas de forma ascendente",
                            "sSortDescending": ": Ordenar colunas de forma descendente"
                        }
                    },
                    dom: 'Bflrtip',
                    aLengthMenu: aLengthMenuCustom,
                    buttons: [
                        buttonsCustom

                    ],
                    columns: columnsCustom
                });

});

