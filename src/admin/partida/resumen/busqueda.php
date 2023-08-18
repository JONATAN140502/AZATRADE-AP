<?php
include("../../incBD/inibd.php");
require('include/funciones.php');
require('include/pagination.class.php');

if($nombres2==""){
	$nombres2 = $_GET['condiciona'];
}else{
	$nombres2 = $_POST['condiciona'];
}

$items = 10;
$page = 1;

if(isset($_GET['page']) and is_numeric($_GET['page']) and $page = $_GET['page'])
		$limit = " LIMIT ".(($page-1)*$items).",$items";
	else
		$limit = " LIMIT $items";

if(isset($_GET['q']) and !eregi('^ *$',$_GET['q'])){
		$q = sql_quote($_GET['q']); //para ejecutar consulta
	    $c = sql_quote($_GET[$nombres2]); //para ejecutar consulta
		//$busqueda = htmlentities($q); //para mostrar en pantalla
	    $busqueda = $q; //para mostrar en pantalla

		$sqlStr = "SELECT * FROM resumen_partidas WHERE concat(codigo,descripcion) LIKE '%$q%' AND varia_filtro = '$nombres2' AND codigo <> 'Total'";
		$sqlStrAux = "SELECT count(*) as total FROM resumen_partidas WHERE concat(codigo,descripcion) LIKE '%$q%' AND varia_filtro = '$nombres2' AND codigo <> 'Total'";
	}else{
		$sqlStr = "SELECT * FROM resumen_partidas WHERE varia_filtro = '$nombres2' AND codigo <> 'Total' ";
		$sqlStrAux = "SELECT count(*) as total FROM resumen_partidas WHERE varia_filtro = '$nombres2' AND codigo <> 'Total' ";
	}

$aux = Mysqli_Fetch_Assoc(mysqli_query($conexpg,$sqlStrAux));
$query = mysqli_query($conexpg,$sqlStr.$limit);
?>	<p><?php
		if($aux['total'] and isset($busqueda)){
				echo "<b>{$aux['total']} </b> Resultado".($aux['total']>1?'s':'')." que coinciden con tu b&uacute;squeda \"<strong>$busqueda</strong>\".";
			}elseif($aux['total'] and !isset($q)){
				echo "Total de registros: <b> {$aux['total']} </b>";
			}elseif(!$aux['total'] and isset($q)){
				echo"No hay registros que coincidan con tu b&uacute;squeda \"<strong>$busqueda</strong>\"";
			}
	?></p>

	<?php 
		if($aux['total']>0){
			$p = new pagination;
			$p->Items($aux['total']);
			$p->limit($items);
			if(isset($q))
					//$p->target("index.php?q=".urlencode($q));
			        $p->target("index.php?condiciona=$nombres2&q=".urlencode($q));
				else
					//$p->target("index.php");
					$p->target("index.php?condiciona=$nombres2");
			$p->currentPage($page);
			$p->show();
			//echo "\t<table class=\"registros\">\n";
			//echo "<tr class=\"titulos\"><td>Titulo</td></tr>\n";
			echo "<table id='datatablese' class='table table-striped table-no-bordered table-hover registros'>";
			echo"<thead>";
			echo "<tr class='titulos'>
			                  <th><b> N#. Partida </b></th>
							  <th><b>Descripcion</b></th>
                              <th><b>2012</b></th>
                              <th><b>2013</b></th>
                              <th><b>2014</b></th>
                              <th><b>2015</b></th>
							  <th><b>2016</b></th>
							  <th><b>2017</b></th>
							  <th><b>2018</b></th>
							  <th><b>2019</b></th>
							  <th><b>2020</b></th>
							  <th><b>2021</b></th>
							  <th><b>Var.%20/19</b></th>
							  <th><b>Part.%20</b></th>
			</tr>";
			echo"</thead>";
			echo"<tbody>";
			$r=0;
			while($row = mysqli_fetch_assoc($query)){
          //echo "\t\t<tr class=\"row$r\"><td><a href=\"http://www.mis-algoritmos.com/?p={$row['id']}\" target=\"_blank\">".htmlentities($row['pregunta'])."</a></td></tr>\n";
				$pasa = $pasa + 1;
				$cod_emp= $row['codigo'];
				
				$sumgen1 = $sumgen1 + $row['anio1'];
				$sumgen2 = $sumgen2 + $row['anio2'];
				$sumgen3 = $sumgen3 + $row['anio3'];
				$sumgen4 = $sumgen4 + $row['anio4'];
				$sumgen5 = $sumgen5 + $row['anio5'];
				$sumgen6 = $sumgen6 + $row['anio6'];
				$sumgen7 = $sumgen7 + $row['anio7'];
				$sumgen8 = $sumgen8 + $row['anio8'];
				$sumgen9 = $sumgen9 + $row['anio9'];
				$sumgen10 = $sumgen10 + $row['anio10'];
				
				echo "<tr class='row$r'>
				
				<td><a href='#' onclick='document.forma$pasa.submit()'>$cod_emp</a>
	<form method='post' name='forma$pasa' action='../../partida.php' target='_blank'>
<input type='hidden' name='depavalue' value=''>
<input type='hidden' name='datopartida' value='$cod_emp'>
<input type='hidden' name='btnsearchpartida' >
</form></td>
				<td>".$row['descripcion']."</td>
				<td>".number_format($row['anio1'],2)."</td>
				<td>".number_format($row['anio2'],2)."</td>
				<td>".number_format($row['anio3'],2)."</td>
				<td>".number_format($row['anio4'],2)."</td>
				<td>".number_format($row['anio5'],2)."</td>
				<td>".number_format($row['anio6'],2)."</td>
				<td>".number_format($row['anio7'],2)."</td>
				<td>".number_format($row['anio8'],2)."</td>
				<td>".number_format($row['anio9'],2)."</td>
				<td>".number_format($row['anio10'],2)."</td>
				<td>".number_format($row['variauno'],2)."%</td>
				<td>".number_format($row['variados'],2)."%</td>
				</tr>";
          if($r%2==0)++$r;else--$r;
        }
			/*echo "<tr>";
			echo "<td></td>";
			echo "<td>Totales</td>";
			echo "<td>".number_format($sumgen1,2)."</td>";
			echo "<td>".number_format($sumgen2,2)."</td>";
			echo "<td>".number_format($sumgen3,2)."</td>";
			echo "<td>".number_format($sumgen4,2)."</td>";
			echo "<td>".number_format($sumgen5,2)."</td>";
			echo "<td>".number_format($sumgen6,2)."</td>";
			echo "<td>".number_format($sumgen7,2)."</td>";
			echo "<td>".number_format($sumgen8,2)."</td>";
			echo "<td>".number_format($sumgen9,2)."</td>";
			echo "<td>".number_format($sumgen10,2)."</td>";
			echo "<td>1</td>";
			echo "<td>1</td>";
			echo "</tr>";*/
			echo"</tbody>";
			echo "</table>";
			$p->show();
		}
	?>