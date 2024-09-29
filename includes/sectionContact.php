<section id="contact" class="py-5">
        <div class="container">
            <h2>Contato</h2>
            <div id="message" class="alert d-none"></div> <!-- Div para exibir a mensagem -->

            <form id="contactForm" method="POST" action="send_email.php"> <!-- Inclui método POST e action -->
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea class="form-control" id="messageText" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div> <!-- container -->
    </section> <!-- section contact -->  

    <!-- Modal de Carregamento -->
    <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loadingModalLabel">Enviando Mensagem...</h5>
                </div>
                <div class="modal-body">
                    <p>Por favor, aguarde enquanto sua mensagem está sendo enviada.</p>
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Agradecimento -->
    <div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="thankYouModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="thankYouModalLabel">Mensagem Enviada!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Obrigado por entrar em contato conosco! Sua mensagem foi enviada com sucesso.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeThankYouModal">Fechar</button>
                </div>
            </div>
        </div>
    </div>