<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.head')

    <title>Payroll - Suas Contas Descomplicadas</title>

    <style>
        /* background - #ffc107 */
        #home {
            background-image: url('/images/bg-01.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            color: #fff;
        }

        .primary:hover {
            color: #007bff;
        }

        .warning {
            color: #fff;
        }

        .box {
            padding: 60px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .bg-02 {
            background-image: url('/images/bg-01.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .a-hvr {transition: 0.6s;}
        
        .a-hvr:hover {
            background-color: white;
            color: black;
        }

        .l-hvr {
            transition: 0.3s;
            text-decoration-color: white;
        }
        
        .l-hvr:hover {
            text-decoration: underline;
            text-decoration-color: white;
            color: white;
        }

        @media only screen and (max-width: 768px) {
            .l-hvr:hover {
                border: none;
                color: rgb(255, 255, 255);
            }
        }

    </style>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-md navbar-light bg-warning">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="/images/logo.png" width="141" alt="">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link l-hvr">Benefícios</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link l-hvr">Preços</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link l-hvr">Contratos</a>
                        </li>

                        @if (Route::has('login'))
                        @auth
                        <a class="nav-link l-hvr" href="{{ url('/home') }}">Dashboard</a>

                        @else
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-light ml-4 " href="{{ route('login') }}">Entrar <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link btn btn-outline-light ml-4 " href="{{ route('register') }}">Registrar <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="home">
        <div class="container">
            <div class="row c1">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h1 class="display-4">Suas contas, descomplicadas</h1>
                        <p class="font-weight-bold">Usado por mais de 1 milhão de pessoas, o Payroll Studio é uma ferramenta online que vai facilitar sua vída financeira</p>

                        <form class="mt-4 mb-4">
                            <div class="input-group input-group-lg">
                                <input type="text" placeholder="Seu E-mail:  ex: eliana@gmail.com" class="form-control">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary">Cadastre-se</button>
                                </div>
                            </div>
                        </form>

                        <p><span class="font-weight-bold">Disponível para</span>
                            <a href="#" class="btn btn-outline-light">
                                <i class="fab fa-android fa-4x primary"></i>
                            </a>
                            <a href="#" class="btn btn-outline-light">
                                <i class="fab fa-apple fa-4x primary"></i>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-flex">
                    <img src="/images/capa-mulher.png" alt="Mulher propaganda">
                </div>
            </div>
        </div>
    </section>        

    <section class="box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="aling-self-center">
                        <h2>Saiba para onde vai o seu dinheiro</h2>
                        <p>Com o payroll, você categoriza todos os seus trabalhadores, departamentos e projetos. Com tabelas simples, você sabe administrar sua folha de pagamentos de modo rápido.</p>
                        <a href="#" class="btn btn-outline-info">Veja Mais...</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="/images/saiba.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/juros.png" class="img-fluid">
                </div>

                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h2>Pare de preocupar-se e economize.</h2>
                        <p>O controle financeiro de sua empresa é difícil? O payroll avisa você: receba alertas de contas, e muito mais</p>
                        <a href="#" class="btn btn-outline-info">Veja mais...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="/images/facil.png" class="img-fluid">
                    <h4>Fácil de usar</h4>
                    <p>O payroll vai além do básico e permite que você faça controles incríveis, essenciais para suas finanças. Simples como tem que ser!</p>
                </div>

                <div class="col-md-4 text-center">
                    <img src="/images/economize.png" class="img-fluid">
                    <h4>Economize seu tempo</h4>
                    <p>O tempo é dinheiro! Em segundos, você tem tudo sob controle e aproveite seu tempo com o que realmente importa pra você!</p>
                </div>

                <div class="col-md-4 text-center">
                    <img src="/images/suporte.png" class="img-fluid">
                    <h4>Suporte amigo</h4>
                    <p>Dúvidas? Perguntas? Nosso suporte legal ajuda você! A gente tá aqui para resolver seus problemas e deixar sua vida bem mais fácil!</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>