<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Teste</title>
</head>
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    </style>
<body>
<?php
include 'variaveis.php';
?>
  
<table>
    <thead>
        <tr>
            <th>Mês</th>
            <th>Pedro</th>
            <th>Julio</th>
            <th>João</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $totPedro   = 0; 
            $totJoao    = 0; 
            $totJulio   = 0; 
            $meses      = array(
                1 => array(
                    'Mes' => 'Janeiro', 
                    'Qtd' => 0),
                2 => array(
                    'Mes' => 'Fevereiro',
                    'Qtd' => 0),
                3 => array(
                    'Mes' => 'Março',
                    'Qtd' => 0),    
                4 => array(
                    'Mes' => 'Abril',
                    'Qtd' => 0),
                5 => array(
                    'Mes' => 'Maio',
                    'Qtd' => 0),
                6 => array(
                    'Mes' => 'Junho',
                    'Qtd' => 0),
                7 => array(
                    'Mes' => 'Julho',
                    'Qtd' => 0),
                8 => array(
                    'Mes' => 'Agosto',
                    'Qtd' => 0),
                9 => array(
                    'Mes' => 'Setembro',
                    'Qtd' => 0),
                10 => array(
                    'Mes' => 'Outubro',
                    'Qtd' => 0),
                11 => array(
                    'Mes' => 'Novembro',
                    'Qtd' => 0),
                12 => array(
                    'Mes' => 'Dezembro',
                    'Qtd' => 0));
  
            //var_dump($meses);
  
            for($i = 1; $i <= 12; $i++){
                echo "
                <tr>
                    <td>".$meses[$i]['Mes']."</td>
                    <td>$v1[$i]</td>
                    <td>$v2[$i]</td>
                    <td>$v3[$i]</td>
                </tr>";
  
                $totPedro   += $v1[$i];
                $totJulio   += $v2[$i];
                $totJoao    += $v3[$i];
  
                $meses[$i]['Qtd'] = $v1[$i] + $v2[$i] + $v3[$i];
            }
  
            //var_dump($meses);
  
        ?>
  
    </tbody>    
  
</table>
</br>
  
<form method="POST" action="P2.php" target="_blank">
<!-- Exemplo de como mandar o valor para a outra página -->
<input type="text" name="valor_3" value="<?php echo $v3[12] ?>">
  
  
<input type="submit" value="Vendas">
</form>
</body>
</html>