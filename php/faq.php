<?php

// TODO: Crear tablas *preguntas* y *respuestas* que reemplacen el array temporario $faq
// TODO: Conectar con la base de datos a través de archivo pdo.php

// Creo array $faq que contiene preguntas y respuestas con un id para identificarlas
$faq = [
    0 => [
        "id" => 1,
        "pregunta" => "¿Cuáles son los diferentes tipos de descuentos que puedo obtener?",
        "respuesta" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores labore veritatis amet praesentium natus omnis ullam quis sapiente assumenda est porro illum reiciendis nihil nemo, perferendis aperiam, magni voluptatibus inventore.",
    ],
    1 => [
        "id" => 2,
        "pregunta" => "¿Tengo algún beneficio consumiendo productos del local?",
        "respuesta" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores labore veritatis amet praesentium natus omnis ullam quis sapiente assumenda est porro illum reiciendis nihil nemo, perferendis aperiam, magni voluptatibus inventore.",
    ],
    2 => [
        "id" => 3,
        "pregunta" => "¿Cuántas posibilidades de juego tengo?",
        "respuesta" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores labore veritatis amet praesentium natus omnis ullam quis sapiente assumenda est porro illum reiciendis nihil nemo, perferendis aperiam, magni voluptatibus inventore.",
    ],
    3 => [
        "id" => 4,
        "pregunta" => "¿Cuál es el descuento máximo que puedo obtener?",
        "respuesta" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores labore veritatis amet praesentium natus omnis ullam quis sapiente assumenda est porro illum reiciendis nihil nemo, perferendis aperiam, magni voluptatibus inventore.",
    ],
    4 => [
        "id" => 5,
        "pregunta" => "¿Los descuentos y productos obtenidos son al azar?",
        "respuesta" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores labore veritatis amet praesentium natus omnis ullam quis sapiente assumenda est porro illum reiciendis nihil nemo, perferendis aperiam, magni voluptatibus inventore.",
    ]
];
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
    <link rel="stylesheet" href="css/styles.css">

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
                    <div class="card">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <!-- TODO: crear funcion para obtener datos de las tablas *preguntas* y *respuestas* -->
                            <!-- Hago un foreach que recorre el array $faq -->
                            <!-- Recorro el array y voy mostrando en el acordeón cada una de las preguntas y respuestas por id -->
                            <div class="accordion" id="accordionFAQ">
                                <?php foreach ($faq as $faqs) : ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?= $faqs["id"] ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link text-reset" type="button" data-toggle="collapse" data-target="#collapse<?= $faqs["id"] ?>" aria-expanded="true" aria-controls="collapse<?= $faqs["id"] ?>">
                                                <?= $faqs["pregunta"] ?>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse<?= $faqs["id"] ?>" class="collapse" aria-labelledby="heading<?= $faqs["id"] ?>" data-parent="#accordionFAQ">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <?= $faqs["respuesta"] ?>
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
