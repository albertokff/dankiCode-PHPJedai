<?php
    include('templates/header.php');
?>
    <section class="bread">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Home</a></li>
            </ol>        
        </div>        
    </section>

    <section class="principal">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active cor-padrao">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                            </svg>
                            Home
                        </a>
                        <a href="#" class="list-group-item" id="about">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                            </svg>
                            Sobre
                        </a>
                        <a href="#" class="list-group-item" id="team">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
                            </svg>
                            Equipe
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default" id="sobre" style="display: none;">
                        <div class="panel-heading" style="background:#337ab7; color:#fff">
                            <h3 class="panel-title">Sobre</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label for="email">Código HTML:</label>
                                    <textarea style="height: 140px; resize: vertical;" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default equipe" style="display: none;">
                        <div class="panel-heading" style="background:#337ab7; color:#fff">
                            <h3 class="panel-title">Cadastrar Equipe</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label for="email">Nome do membro:</label>
                                    <textarea style="height: 140px; resize: vertical;" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Descrição:</label>
                                    <textarea style="height: 140px; resize: vertical;" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-default equipe" style="display: none;">
                        <div class="panel-heading" style="background:#337ab7; color:#fff">
                            <h3 class="panel-title">Membros da Equipe</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome do membro:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        for($i = 0; $i < 5; $i++){
                                    ?>
                                    <tr>
                                        <td>1</td>
                                        <td>Diogo Alberto</td>
                                        <td><button type="button" class="btn btn-sm btn-danger">Excluir</button></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>
<?php
    include('templates/footer.php');
?>