@extends('layout')

@section('Corpo')

    <div class="card">
        <div class="card-body" style="background: greenyellow">
            <img src="https://static.vecteezy.com/system/resources/previews/001/191/847/non_2x/circle-png.png" style="max-width: 150px; float: left;margin-right: 20px">
            <img id="foto_aluno" src="{{$imagem_perfil}}"
                 style="border-radius: 50%; max-width: 130px;position: absolute;left: 29px; top: 30px">
            <div id="informações_Aluno">
                <h2>{{$nomeProfessor}}</h2> <!-- Passar a var nome do banco-->
                <p>teste</p>
                <p>info</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#alunos" role="tab" aria-controls="v-pills-profile" aria-selected="false">Alunos</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Horários</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Documentos</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                </div>


                <!-- nav da aba alunos -->
                <div class="tab-pane fade" id="alunos" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">GTI</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">ADS</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">LOG</a>
                        </div>
                    </nav>


                    <div class="tab-content" id="nav-tabContent">

                        <!--Alunos -->


                        <!--GTI-->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <!--Semestres -->
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">3</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <!--1 Semestre -->
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <table>
                                        @if(isset($alunosGTISemestre[1]))
                                            @foreach($alunosGTISemestre[1] as $alunoGTI)

                                                <tr><td><li class="list-group-item">{{$alunoGTI->nome}}</li></td><td><li class="list-group-item" style="padding: 6px"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#aluno{{$alunoGTI->id}}" data-whatever="@teste" style="border: 0px;">Gestão de notas</button></li></td></tr>


                                                <!--Lista da tela de gestão de notas -->
                                                <div class="modal fade" id="aluno{{$alunoGTI->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Gestão de notas</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="/notaAluno">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="recipient-name" class="col-form-label">Nome Aluno: {{$alunoGTI->nome}}</label>
                                                                    </div>
                                                                    <input type="text" name="id_aluno" value="{{$alunoGTI->id}}">
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">Nota 1º Bimestre: </label>
                                                                        <input type="number" class="form-control" id="message-text" name="nota_1bim" value="{{$notasGTI[$alunoGTI->id]['nota_1bim']}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text" class="col-form-label">Nota 2º Bimestre: </label>
                                                                        <input type="number" class="form-control" id="message-text" name="nota_2bim" value="{{$notasGTI[$alunoGTI->id]['nota_2bim']}}">
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


                                            @endforeach
                                        @endif
                                    </table>







                                </div>
                                <!--2 Semestre -->
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                    <table>
                                        @if(isset($alunosGTISemestre[2]))
                                        @foreach($alunosGTISemestre[2] as $alunoGTI)

                                            <tr><td><li class="list-group-item">{{$alunoGTI->nome}}</li></td><td><li class="list-group-item" style="padding: 6px"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#aluno{{$alunoGTI->id}}" data-whatever="@teste" style="border: 0px;">Gestão de notas</button></li></td></tr>

                                        @endforeach
                                        @endif
                                    </table>
                                </div>
                                <!--3 Semestre -->
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">



                                        <table>
                                            @if(isset($alunosGTISemestre[3]))
                                                @foreach($alunosGTISemestre[3] as $alunoGTI)

                                                    <tr><td><li class="list-group-item">{{$alunoGTI->nome}}</li></td><td><li class="list-group-item" style="padding: 6px"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#aluno{{$alunoGTI->id}}" data-whatever="@teste" style="border: 0px;">Gestão de notas</button></li></td></tr>

                                                @endforeach
                                            @endif
                                        </table>



                                </div>
                            </div>





                        </div>






                        <!--ADS -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table>
                                @foreach($alunosADS as $alunoADS)
                                    <tr><td><li class="list-group-item">{{$alunoADS->nome}}</li></td></td><td><li class="list-group-item"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="padding: 0px">Gestão de notas</button></li></td></tr>


                                @endforeach
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">LOG</div>
                    </div>

                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
        </div>
    </div>


@endsection
