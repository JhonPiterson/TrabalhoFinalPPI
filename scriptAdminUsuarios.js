//Função para buscar usuários do banco de dados
function buscarUsuarios() {
    // Realiza uma solicitação AJAX para adminListarUsuarios.php
    fetch('adminListarUsuarios.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        timeout: 10000,
    })
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro de rede: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            usuarios = data;
            exibirUsuarios(data);
        })
        .catch(error => {
            console.error('Erro na solicitação AJAX:', error.message);
            if (error instanceof TypeError && error.message.includes('timeout'))
                console.error('Tempo limite de solicitação atingido. Verifique a conexão com o servidor.');
        });
}

function exibirUsuarios(usuarios) {
    const objetoUsuarios = document.getElementById("listagemUsuarios");
    objetoUsuarios.innerHTML = "";

    usuarios.forEach(usuario => {
        const usuarioElemento = document.createElement("li");
        usuarioElemento.className = "usuario";
        usuarioElemento.innerHTML = `
            <div class="usuario-body">
                <li class="list-group-item col-sm-6">
                ${usuario.nome}
                <button class="btn btn-danger" onclick="excluirUsuario(${usuario.idusuario})">Excluir Usuário</button>
                </li>
            </div>
        `;

        objetoUsuarios.appendChild(usuarioElemento);
    });
}

function excluirUsuario(idusuario) {
    // Pergunta ao administrador se ele realmente deseja excluir o usuário
    const confirmacao = window.confirm('Você realmente deseja excluir o usuário?');

    if (confirmacao) {
        // Se o administrador confirmar, será feita uma solicitação AJAX para excluir o usuário
        fetch(`adminExcluirUsuario.php?idusuario=${idusuario}`, {
            method: 'DELETE'
        })
            .then(response => response.text())
            .then(message => {
                alert(message);
                location.reload()
            })
            .catch(error => {
                console.error('Erro:', error);
            });
    }
}

document.addEventListener("DOMContentLoaded", buscarUsuarios);
