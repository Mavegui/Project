<?php
  // Inclusão do cabeçalho
  include 'layouts/header.php';

  $meses = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
  ];

?>

<body class="container d-flex justify-content-center align-items-center min-vh-100 bg-light">

  <div class="card shadow mx-auto" style="max-width: 500px; width: 100%;">
    <div class="card-header">
      <h2 class="card-title text-center">Descubra seu signo</h2>
    </div>

    <form method="POST" action="show_zodiac_sign.php">
      <div class="card-body">
        <p class="card-text mb-3">Selecione o dia e o mês do seu nascimento para descobrir seu signo.</p>  
        
        <div class="mb-3">
          <label for="dia" class="form-slect mt-1">Dia:</label>
          <select class="form-select" name="dia" id="dia" required>
            <option disabled selected value="">Escolha o dia</option>
            <?php
              // For do dia no select 
              for ($i = 1; $i <= 31; $i++) {
                  echo "<option value='$i'>$i</option>";
              }
            ?>
          </select> 
        </div>
        
        <div class="mb-3">
          <label for="mes" class="form-label mt-1">Mês:</label>
          <select class="form-select" name="mes" id="mes" required>
            <option disabled selected value="">Escolha o mês</option>
            <?php 
              // Foreach do mês no select
              foreach ($meses as $index => $mes) {
                  echo "<option value='" . ($index + 1) . "'>$mes</option>";
              }
            ?>
          </select>
        </div>
      </div>
      
      <div class="card-footer text-center">
        <button type="submit" class="btn btn-success">Descobrir</button>
      </div>
    </form>
  </div>

</body>
</html>