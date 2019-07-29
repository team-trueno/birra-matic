<?php

//Incluyo archivo donde se encuentra la conexión a la BD
require_once("../config/db.php");

//Creo la clase Pregunta con sus atributos y métodos correspondientes
class Pregunta
{
    private $id;
    private $pregunta;
    private $respuesta;
    private $id_topico;

    //Creo constructor
    public function __construct($pregunta, $respuesta, $id_topico)
    {
        $this->pregunta = $pregunta;
        $this->respuesta = $respuesta;
        $this->id_topico = $id_topico;
    }

    //Función para obtener todos los datos de las tabla *pregunta*
    public static function all()
    {
        global $db;

        $query = $db->prepare("Select * from pregunta");

        $query->execute();

        $preguntas = [];
        $preguntasArray = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($preguntasArray as $pregunta) {
            $preguntaObj = new Pregunta($pregunta["pregunta"], $pregunta["respuesta"], $pregunta["id_topico"]);
            $preguntaObj->setId($pregunta["id"]);

            $preguntas[] = $preguntaObj;
        }

        return $preguntas;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPregunta()
    {
        return $this->pregunta;
    }

    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;
    }

    public function getRespuesta()
    {
        return $this->respuesta;
    }

    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;
    }

    public function setIdTopico($id_topico)
    {
        $this->id_topico = $id_topico;
    }

    public function getIdTopico()
    {
        return $this->id_topico;
    }

    // En caso de hacer un formulario en panel administrativo se utilizaría esta función guardar() para dar de alta las preguntas y respuestas

    //   public function guardar() {
    //     //Conexión a la base de datos Embirrados.
    //     global $db;

    //     $query = $db->prepare("INSERT into pregunta(pregunta, respuesta, id_topico) values (:pregunta, :respuesta, :id_topico)");

    //     $query->bindValue(":pregunta", $this->pregunta);
    //     $query->bindValue(":respuesta", $this->respuesta);
    //     $query->bindValue(":id_topico", $this->id_topico);

    //     $query->execute();

    //     $this->id = $db->lastInsertId();
    //   }


}
