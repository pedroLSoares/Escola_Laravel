@extends('layout')

@section('Corpo')



    <div class="row">

                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Config. Usuários</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mensagens</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Configurações</a>
                    </div>
                </div>

        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>

                            <!--Config Usuarios -->
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Alunos</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Professores</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contato</a>
                                    </div>
                                </nav>
                                        <!--nav da tela de config usuario -->
                                        <div class="tab-content" id="nav-tabContent">

                                            <!--Alunos --><div class="tab-pane fade show active mt-5" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Cadastrar novo Aluno</button>
                                                                            <!--Lista da tela de cadastro -->
                                                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <!--Form aluno -->
                                                                                            <form method="post" action="/painel-controle-cad-aluno">
                                                                                                @csrf
                                                                                                <div class="form-group">
                                                                                                    <label for="recipient-name" class="col-form-label">Nome Aluno:</label>
                                                                                                    <input type="text" class="form-control" id="recipient-name" name="name" required>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="message-text" class="col-form-label">Email:</label>
                                                                                                    <input type="email" class="form-control" id="message-text" name="email" required>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="message-text" class="col-form-label">Curso:</label>
                                                                                                    <input type="text" class="form-control" id="message-text" name="curso" required>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="message-text" class="col-form-label">RA:</label>
                                                                                                    <input type="number" class="form-control" id="message-text" name="RA" required>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="message-text" class="col-form-label">URL Foto:</label>
                                                                                                    <input type="url" class="form-control" id="message-text" name="url_foto">
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="message-text" class="col-form-label">Senha:</label>
                                                                                                    <input type="password" class="form-control" id="message-text" name="password" required>
                                                                                                </div>


                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                                                                        </div>
                                                                                            </form>

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                <!-- Exibição de todos os alunos -->
                                                <ul class="list-group list-group-flush" style="width: 38rem;">
                                                    <table>


                                                        <tr><td><li class="list-group-item" style="background-color: #a0aec0">Nome</li></td><td><li class="list-group-item" style="background-color: #a0aec0">Curso</li></td></tr>




                                                @foreach($alunos as $aluno)
                                                        <tr><td><li class="list-group-item">{{$aluno->nome}}</li></td><td><li class="list-group-item">{{$aluno->curso}}</li></td></tr>
                                                @endforeach
                                                    </table>
                                                </ul>
                                            </div>

                                            <!--Professor --><div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                                <button type="button" class="btn btn-primary mb-4 mt-5" data-toggle="modal" data-target="#cadastroProfessor" data-whatever="@mdo">Cadastrar novo Professor</button>
                                                <!--Lista da tela de cadastro -->
                                                <div class="modal fade" id="cadastroProfessor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Novo Cadastro</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="/painel-controle-cad-professor">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">Nome Professor:</label>
                                                                        <input type="text" class="form-control" id="recipient-name" name="name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">Email:</label>
                                                                        <input type="email" class="form-control" id="message-text" name="email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">Matéria responsável:</label>
                                                                        <input type="text" class="form-control" id="message-text" name="materia">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">URL Foto:</label>
                                                                        <input type="url" class="form-control" id="message-text" name="url_foto">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">Senha:</label>
                                                                        <input type="password" class="form-control" id="message-text" name="password">
                                                                    </div>


                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                                                    </div>
                                                                </form>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <ul class="list-group list-group-flush">
                                                    @foreach($professores as $professor)
                                                        <li class="list-group-item">{{$professor->nome}}</li>
                                                    @endforeach
                                                </ul>


                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                                        </div>

                            </div>


                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
        </div>
    </div>









@endsection
