@extends('layout')

@section('Corpo')

    <div class="card">
        <div class="card-body" style="background: #a0aec0">
            <img src="https://static.vecteezy.com/system/resources/previews/001/191/847/non_2x/circle-png.png" style="max-width: 150px; float: left;margin-right: 20px">
            <img id="foto_aluno" src="{{$imagem_perfil}}"
            style="border-radius: 50%; max-width: 130px;position: absolute;left: 29px; top: 30px">
            <div id="informações_Aluno">
            <h2>{{$nome}}</h2>
            <p>RA: {{$ra}}</p>
            <p>Ciclo: {{$semestre}}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Notas</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Horários</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Documentos</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h2>Avisos</h2><br><br>

                    Atenção alunos<br><br>



                    Relembramos que as solicitações de documentos (Atestados diversos e Históricos) devem ser solicitados com antecedência, pois há um prazo para emissão pela secretaria acadêmica.<br>

                    Seguem abaixo:<br><br>


                    Atestados diversos de 5 a 7 dias uteis.<br>

                    Conteúdo Programático de 10 a 12 dias úteis.<br>

                    Durante a pandemia todos os documentos solicitados serão enviados por e-mail.<br><br>


                    As solicitações devem  ser feitas via SIGA ou pelo secretaria.jundiai@fatec.sp.gov.br<br><br>


                    Atenciosamente<br>

                    Diretoria Acadêmica
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <ul>
                    @foreach($notas as $nota)
                        <li><h5>{{$nota->materia}}</h5></li>
                        <li>Média final: {{($nota->nota_1bim + $nota->nota_2bim) /2}}</li>
                        <li>Nota 1º Bim: {{$nota->nota_1bim}}</li>
                        <li>Nota 2º Bim: {{$nota->nota_2bim}}</li><br>

                        @endforeach
                    </ul>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
        </div>
    </div>
@endsection
