<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria correta
 */
define("INSTALANDO_AMBIENTE", 3);
$materia = new Materia();
$materia->carregar(Materia::idXML_PHP, INSTALANDO_AMBIENTE);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>