function confirmacaoExclusao(id) {  // alert do botão de excluir
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success mr-2",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons.fire({
        title: "Tem certeza que deseja excluir?",
        text: "A ação não poderá ser revertida!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sim, excluir!",
        cancelButtonText: "Cancelar!",
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire({
                title: "Excluido com sucesso",
                icon: "success",
                showConfirmButton: true,
                allowOutsideClick: false
            });
            setTimeout(() => {
                document.getElementById('formExclusao' + id).submit();
            }, 1000);
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Ação revertida!:)",
                icon: "error"
            });
        }
    });
};


