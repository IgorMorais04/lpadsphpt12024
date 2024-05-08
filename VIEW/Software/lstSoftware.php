<?php
   include_once 'C:\xampp\htdocs\lpadsphpt12024\DAL\software.php';
   use \DAL\Software;
   
   $dalSftw = new \DAL\Software();
   $lstsftw = $dalSftw->Select(); 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Software usando Dal</title>
</head>
<body>
    <h1>Listar Software</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Fabricante</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Qtde de Cópias</th>
        </tr>
        
        <?php foreach($lstsftw as $sftw) { ?>
           <tr>
              <td><?php echo $sftw->getId(); ?></td>
              <td><?php echo $sftw->getDescricao();?></td>
              <td><?php echo $sftw->getFabricante();?></td>
              <td><?php echo $sftw->getTipo();?></td>
              <td><?php echo $sftw->getValor();?></td>
              <td><?php echo $sftw->getQtdeCopias();?></td>
           </tr>
        <?php } ?>

    </table>
</body>
</html>