<?php
include_once "templates/header.php";

?>
<!--Faremos -->
<div id="main-banner">
    <h1>Faça seu pedido</h1>

    <!--Aqui ira foto-->

    </div>
    <!--Container -->
    <div id="main-container">
        <!--ESTE container-->
    <div class="container">
    <div class="row"> 
    

    <div class="col-md-12">
        <h2>Monte a pizza</h2>

        <form action="process/pizza.php" method="POST" id="pizza-form">
      <!--post-->

      <div class="form-group">
        <label for="borda">Borda:</label>
        <select name="borda" id="borda" class="form-control">
            <option value="">select a borda</option>
            </select>
      </div>

      <div class="form-group">
        <label for="massa">Massa:</label>
        <select name="massa" id="massa" class="form-control">
            <option value="">selecione a massa</option>
            </select>
            </div>
            <div class="form-group">
                <label for="sabores">sabores: (Maximo)</label>
                <select multiple name="sabores[]" id="sabores" class="from-control"></select>
            <!--coomo-->
            </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Fazer pedido">
          

            </div>
           </form>
           </div>
           </div>
           </div>
           </div>
           <?php 
           include_once"templates/footer.php";
           ?>

           <?php 
           include_once("templates/header.php");
           include_once("process/pizza.php");
           ?>

