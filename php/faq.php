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
<?php include("../config/head.php") ?>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

        <main role="main" class="inner cover mt-3">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Preguntas frecuentes
            </h2>
            <img src="" alt="logo" width="150" height="150" class="mb-5">
            <!-- TODO: crear funcion para obtener datos de las tablas *preguntas* y *respuestas* -->
            <!-- Hago un foreach que recorre el array $faq -->
            <?php foreach ($faq as $faqs) : ?>
                <!-- Recorro el array y voy mostrando en el acordeón cada una de las preguntas y respuestas por id -->
                <div class="accordion" id="accordionFAQ" style="border: 1px dashed gray;">
                    <div class="card bg-gris">
                        <div class="card-header" id="heading<?= $faqs["id"] ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-lg btn-outline-info" type="button" data-toggle="collapse" data-target="#collapse<?= $faqs["id"] ?>" aria-expanded="true" aria-controls="collapse<?= $faqs["id"] ?>">
                                    <?= $faqs["pregunta"] ?>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse<?= $faqs["id"] ?>" class="collapse show" aria-labelledby="heading<?= $faqs["id"] ?>" data-parent="#accordionFAQ" style="border-top: 1px dashed gray;">
                            <div class="card-body">
                                <?= $faqs["respuesta"] ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </main>

        <!-- TODO: Cargar archivo footer.php y librerias de jquery y jscript-->
        <?php include("../config/footer.php") ?>
    </div>

</body>

</html>