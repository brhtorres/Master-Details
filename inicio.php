<?php 

  $departaments = array(
    array(
      'name' => 'rh1'
    ),
    array(
      'name' => 'rh2'
    ),
    array(
      'name' => 'rh3'
    ),
    array(
      'name' => 'rh4'
    ),
    array(
      'name' => 'rh5'
    ),
    array(
      'name' => 'rh6'
    )
  );

  function createCards() {

    for ($i = 0; $i < sizeof($GLOBALS['departaments']); $i++){
      echo '<div class="space col-lg-4 col-md-10">';
      echo  '<div class="card" style="width: 20rem;">' ; 
      echo    '<div class="card-body">' ;
      echo      '<h5 class="card-title">'. $GLOBALS['departaments'][$i]['name'] .'</h5>' ;
      // echo      '<a href="#" class="card-link">Card link</a>'; 
      echo      '<a href="#" class="card-link">Abrir</a>' ;
      echo    '</div>';
      echo  '</div>';
      echo '</div>';
      echo '<br>';

    }
    
    
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Departamentos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css">
      .container-fluid {
        padding: 0;
      }
      .space {
        margin: 10px 0;
      }

      .card {
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <div class="container-fluid">

      <nav class="navbar navbar-light bg-light"> 
        <a class="navbar-brand" href="#">Sistema de Departamentos</a>

        <div class= "add-button-box">
          <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#add-dep" type="button">Add</button>
        </div>
      </nav>
 
      <div class="row align-items-center justify-content-around">
          <?php createCards(); ?>
       
      </div>
    </div>

    <div class="modal fade" id="add-dep" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="title">Adicionar Departamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="dep-name" class="col-form-label">Nome:</label>
                <input type="text" name="name" class="form-control" id="dep-name">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-success">Salvar</button>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>

</html>