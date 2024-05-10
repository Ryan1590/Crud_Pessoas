function excluir(id) {
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
            // Verifica se há associação com desenvolvedores
            fetch(`./models/nivel.php?id=${id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Erro ao acessar o servidor.");
                    }
                    return response.json();
                })
                .then(data => {
                    if (data && data.associado) {
                        swalWithBootstrapButtons.fire({
                            title: "Erro ao excluir",
                            text: "Não é possível excluir o nível pois existem desenvolvedores associados a ele.",
                            icon: "error"
                        });
                    } else {
                        swalWithBootstrapButtons.fire({
                            title: "Excluído com sucesso",
                            icon: "success",
                            showConfirmButton: true,
                            allowOutsideClick: false
                        });
                        setTimeout(() => {
                            document.getElementById('formExcluir' + id).submit();
                        }, 1000);
                    }
                })
                .catch(error => {
                    swalWithBootstrapButtons.fire({
                        title: "Erro ao verificar associação",
                        text: error.message || "Ocorreu um erro ao verificar a associação com desenvolvedores.",
                        icon: "error"
                    });
                });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Ação revertida!",
                icon: "error"
            });
        }
    });
}
