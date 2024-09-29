<section id="projects" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center py-3">Projetos</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4"> 
                    <div class="card">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-mdb-ripple-color="light">
                            <img src="images/projeto1/thumb_Proj1.jpg" class="card-img-top" alt="Projeto 1">
                            <a href="#!" data-toggle="modal" data-target="#detalhesProjeto1">
                                <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
                                    <h4><i class="fas fa-search-plus"></i></h4>
                                    <p class="m-0">Detalhes</p>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="title-card-body">
                                <h5 class="card-title"><i class="fa fa-instagram"></i> @dodesdeliciaconfeitariaof</h5>
                            </div>
                            <p class="card-text text-justify">Rede Social de uma confeitaria onde sou responsável por criar design de postagens, cardápios e tirar fotos.</p>
                            <div class="text-center">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#detalhesProjeto1">Detalhes</button>
                            </div>
                        </div>
                    </div> <!-- card -->
                </div> <!-- col-md-6 col-lg-4 -->
                
                <!-- Adicione mais colunas conforme necessário -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- section projects -->

    <!-- Modal Detalhes do Projeto 1 -->
    <div class="modal fade" id="detalhesProjeto1" tabindex="-1" role="dialog" aria-labelledby="detalhesProjeto1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detalhesProjeto1Label">Detalhes do Projeto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carrosselProjeto1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/projeto1/details/img1.jpg" class="d-block carousel-img" alt="Imagem 1 do Projeto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/projeto1/details/img2.jpg" class="d-block carousel-img" alt="Imagem 2 do Projeto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/projeto1/details/img3.jpg" class="d-block carousel-img" alt="Imagem 3 do Projeto 1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/projeto1/details/img4.jpg" class="d-block carousel-img" alt="Imagem 4 do Projeto 1">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carrosselProjeto1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carrosselProjeto1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div> <!-- carrosselProjeto1 -->
                </div> <!-- modal-body -->
            </div> <!-- modal-content -->
        </div> <!-- modal-dialog -->
    </div> <!-- modal detalhesProjeto1 -->