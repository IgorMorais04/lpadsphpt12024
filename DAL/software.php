<?php 
   namespace DAL; //Data Access Layer
   include_once 'C:\xampp\htdocs\lpadsphpt12024\DAL\conexao.php';
   include_once 'C:\xampp\htdocs\lpadsphpt12024\MODEL\Software.php';

   class Software{
      public function Select(){       
           
         $sql = "Select * from software;"; 
         $con = \DAL\Conexao::conectar(); 
         $registros = $con->query($sql);
         $con = \DAL\Conexao::desconectar(); 


         foreach ($registros as $linha){
             $sftw = new \MODEL\Software(); 
             $sftw->setId($linha['id']); 
             $sftw->setDescricao($linha['descricao']);
             $sftw->setFabricante($linha['fabricante']);
             $sftw->setTipo($linha['tipo']);
             $sftw->setValor($linha['valor']);
             $sftw->setQtdeCopias($linha['qtdecopias']);
             $lstsftw[] = $sftw; 
         }
         return $lstsftw;
          
      }

      public function SelectId(int $id){}
      public function SelectDesc(string $name){}



   }

?>