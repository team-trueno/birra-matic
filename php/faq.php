<?php

//Incluyo archivo donde se encuentra la clase pregunta.php
require_once("../modelo/pregunta.php");

//Guardo en este array todas las preguntas en forma de objetos
$preguntas = Pregunta::all();

//var_dump($preguntas);exit;

?>

<!DOCTYPE html>
<html lang="es">
<!-- TODO: Cargar archivo head.php -->
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles.css">

    <title>FAQ</title>
</head>

<body>
    <!-- SECTION: FAQ -->
    <section id="faq" class="first">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Preguntas frecuentes</h2>
                    <img src="../img/rueda_icono.png" alt="logo" width="150" height="150" class="mb-5">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <!-- TODO: Hay que hacer un foreach que repita el bloque CARD -->
                    <!-- TODO: Cada bloque CARD tiene que representar a 1 tópico -->
                    <div class="card mb-3">
                        <!-- TODO: El Header debería ser el campo de texto del tópico -->
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <!-- Recorro el array y voy mostrando en el acordeón cada una de las preguntas y respuestas por id a través de los getters -->
                            <!-- TODO: El id del accordion debe responder al id del tópico -->
                            <div class="accordion" id="accordionFAQ">
                                <!-- TODO: No se pueden recorrer mas todas las preguntas, solo las que pertenecen a un topico especifico -->
                                <?php foreach ($preguntas as $pregunta) : ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?= $pregunta->getId() ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link text-reset" type="button" data-toggle="collapse" data-target="#collapse<?= $pregunta->getId() ?>" aria-expanded="true" aria-controls="collapse<?= $pregunta->getId() ?>">
                                                <?= $pregunta->getPregunta() ?>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse<?= $pregunta->getId() ?>" class="collapse" aria-labelledby="heading<?= $pregunta->getId() ?>" data-parent="#accordionFAQ">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <?= $pregunta->getRespuesta() ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>
