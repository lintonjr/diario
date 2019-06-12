$(document).ready(function() {
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 2000);

    // $("#btn-save").on('click', function(){
    //     $(this).prop("disabled", true);
    //     window.setTimeout(function() {
    //         $("#btn-save").prop("disabled", false);
    //     }, 1000);
    // });

    $("#tbl-padrao").on('click', '.cancel-button', function (e) {
        e.preventDefault();
        var url = $(this).attr("href");
        swal({
            title: "Você tem certeza?",
            text: "Não será possível recuperar o registro!",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "Não, cancelar!",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Sim, Deletar!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        }).then(isConfirm => {
            if (isConfirm) {
                $.ajax({
                    url: url, type: 'POST', data: { _method: "DELETE", _token: token },
                    success: function (data) {
                        swal("Deletado!", "O registro foi deletado.", "success");
                        oTable.draw();
                    }
                });
            } else {
                swal("Cancelado", "Seu registro não foi apagado", "error");
            }
        });
    });

});
