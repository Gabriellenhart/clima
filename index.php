<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
$sql = 'SELECT id_measure, temperatura, umidade, recorded FROM dados order by id_measure desc limit 1';
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
while ($registro = mysqli_fetch_array($resultado))
{
$temperatura = $registro['temperatura'];
$umidade = $registro ['umidade'];
$recorded = $registro['recorded'];
echo'<h2>Clima - Marechal Cândido Rondon - PR</h2>';
echo'<div class="container">';
echo'<div class="card">';
echo'<tr>';
echo'<td>';
echo'<h1>'.$temperatura.' °C</h1>';
echo'<h5>Temperatura</h5>';
echo'</td>';
echo'<td>';
echo'</div>';
echo'<div class="card">';
echo'<h1>'.$umidade.'%</h1>';
echo'<h5>Umidade do Ar</h5>';
echo'</td>';
echo'</tr>';
echo'</div>';
echo'<div class="card">';
echo'<h1> 0 %</h1>';
echo'<h5>Pressão Atmosférica</h5>';
echo'</td>';
echo'</tr>';
echo'</div>';
echo'<div class="card">';
echo'<h1>0 Km/h</h1>';
echo'<h5>Velocidade do Vento</h5>';
echo'</td>';
echo'</tr>';
echo'</div>';
echo'<div class="card">';
echo'<h1>180° S</h1>';
echo'<h5>Direção do Vento</h5>';
echo'</td>';
echo'</tr>';
echo'</div>';
echo'<div class="card">';
echo'<h1>0.0 mm</h1>';
echo'<h5>Chuva</h5>';
echo'</td>';
echo'</tr>';
echo'</div>';
echo'<h5>Data de atualização:  '.$recorded.'</h5>';
echo'</div>';
echo'</div>';
?>

<?php
}
mysqli_close($conn);
?>

</table>
</body>
<footer>

</footer>
</html>
