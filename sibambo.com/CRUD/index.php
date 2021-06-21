<?php 
// Header
include_once 'includes/header.php';
?>

<div class="row"> 
  <div class="col s12 m6 push-m3 ">
  <h3 class="ligth">Clientes</h3> 
    <table class="stripped">
        <thead>
            <tr>
              <th> Nome: </th>
              <th> Sobrenome: </th>
              <th> Email: </th>
              <th> Idade:</th>
            </tr>
        </thead>

        <tbody>
          <tr>
            <td>Rodrigo</td>
            <td>Oliveira</td>
            <td>rodrigosantosweb@gmail.com</td>
            <td>25</td> 
            <td><i class="material-icons">edit</i>  <a href="" class="btn-floating orange"></a>   </td> 
            <td><a href="" class="btn-floating red"></a>        <i class="material-icons">delete</i></td>
          </tr>
        </tbody>


    </table>
    <br>
    <a href="" class="btn"> Adicionar cliente </a>
  </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>