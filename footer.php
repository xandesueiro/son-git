<?php
require_once("src/Constantes.php");

$util= UtilClass::getInstance();

$dataAtual = $util->getDataAtual(DATE_FORMAT_2);
//$dataAtual = DATE_FORMAT;
$horaAtual = $util->getHoraAtual(HORA_FORMAT_1);

?>
		<br>
		<h5>Acessado em <?php echo $dataAtual." ".$horaAtual ?></h5>

    </div> <!--fim div jumbotron -->
</div> <!--fim div container -->

</body>
</html>