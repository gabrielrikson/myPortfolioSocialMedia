$(document).ready(function() {
    // Gerenciamento do formulário de contato
    $('#contactForm').on('submit', function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        // Mostrar o modal de carregamento
        $('#loadingModal').modal('show');

        // Criar um objeto FormData para enviar os dados do formulário
        const formData = new FormData(this);

        // Fazer a chamada AJAX
        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro na rede'); // Lida com respostas de erro
            }
            return response.json();
        })
        .then(data => {
            // Ocultar o modal de carregamento
            $('#loadingModal').modal('hide');

            // Verificar a resposta
            if (data.status === 'success') {
                // Exibir a janela modal com a mensagem de sucesso
                $('#thankYouModal').modal('show');

                // Fechar o modal automaticamente após 5 segundos
                setTimeout(function() {
                    $('#thankYouModal').modal('hide');
                }, 5000); // 5000 milissegundos = 5 segundos

                // Limpar os campos do formulário
                $('#contactForm')[0].reset();
            } else {
                // Exibir mensagem de erro
                alert(data.message);
            }
        })
        .catch(error => {
            // Ocultar o modal de carregamento
            $('#loadingModal').modal('hide');
            console.error('Erro:', error);
            alert('Ocorreu um erro ao enviar a mensagem. Tente novamente mais tarde.');
        });
    });

    // Função para fechar o modal quando o botão "Fechar" for clicado
    $('#thankYouModal .btn-secondary').on('click', function() {
        $('#thankYouModal').modal('hide'); // Fecha o modal quando o botão "Fechar" for clicado
    });
});
