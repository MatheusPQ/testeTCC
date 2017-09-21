@extends('principal')

@section('conteudo')


<section id="header">
    <div class="row">
   
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <section class="item active">
                    <img src="img/pets1.jpg" alt="...">
                    <div class="carousel-caption">
                        <h1>Compra de animais</h1>
                    </div>
                </section>

                <section class="item">
                    <img src="img/pets1.jpg" alt="...">
                    <div class="carousel-caption">
                       <h1>E-Pet</h1>
                    </div>
                </section>
               
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
</section>


    <div class="row">
        <div class="container">
            <!--Coluna de categorias-->
            <section class="categorias">
                <div class="col-md-3 col-categoria">

                    <h3>Categorias</h3>
                     <ul>
                        <li>Cachorros</li>
                        <li>Gatos</li>
                        <li>Papagaio</li>
                    </ul>

                </div>
            </section>
            <!--Coluna de produtos-->
            <section class="produtos">
            
                <div class="col-md-9 col-produto">
                <h3>Produtos</h3>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="img/pets1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Cachorro</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="img/pets1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Cachorro</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="img/pets1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Cachorro</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="img/pets1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Cachorro</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="img/pets1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Cachorro</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="img/pets1.jpg" alt="...">
                                <div class="caption">
                                    <h3>Cachorro</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
             </section>
            
        </div>
    </div>
@stop