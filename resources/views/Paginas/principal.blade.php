@extends('layout')

@section('Corpo')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://rockcontent.com/wp-content/uploads/2020/02/teste-de-liderança.png"  alt="Primeiro Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Provas</h5>
                    <p>As provas começam agora</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i0.wp.com/educacaoinfantil.aix.com.br/wp-content/uploads/2017/12/144182-por-que-a-relacao-entre-escola-e-comunidade-e-importante-entenda.jpg?resize=1280%2C720&ssl=1"  alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.caudf.gov.br/wp-content/uploads/2018/10/20181001_192418.jpg"  alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

@endsection
