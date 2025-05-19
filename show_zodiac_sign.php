<?php
  // Inclusão do cabeçalho
  include 'layouts/header.php';
  
  // Carrega o arquivo XML
  $signos = simplexml_load_file(filename: "signos.xml");
   
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];

  // Ano com valor fixo, Não usa o ano do usuário
  $anoFixo = 2000;
  
  $dataUser = DateTime::createFromFormat('d/m/Y', sprintf('%02d/%02d/%04d', $dia, $mes, $anoFixo));
  
  $signoEncontrado = null;
  
  foreach ($signos->signo as $signo) {
      $dataInicial = "{$signo->dataInicio}/{$anoFixo}";
      $dataFinal = "{$signo->dataFim}/{$anoFixo}";
  
      $inicio = DateTime::createFromFormat('d/m/Y', $dataInicial);
      $fim = DateTime::createFromFormat('d/m/Y', $dataFinal);
  
      if (!$inicio || !$fim) {
          continue;
      }
  
      // Ajuste Capricórnio
      if ($inicio > $fim) {
          $fim->modify('+1 year');
  
          if ((int)$mes === 1) {
              $dataUser->modify('+1 year');
          }
      }
  
      if ($dataUser >= $inicio && $dataUser <= $fim) {
          $signoEncontrado = $signo;
          break;
      }
  }
?>
<body class="container mt-5">

  <?php if ($signoEncontrado): ?>
    <div class="card mx-auto mt-5" style="max-width: 600px;">
      <div class="card-body text-center">
        <h2 class="card-title">O seu signo é: <?= $signoEncontrado->signoNome ?></h2>
        <hr>
        <p class="card-text mt-3"><?= $signoEncontrado->descricao ?></p>
        <a href="index.php" class="btn btn-primary mt-4">Voltar</a>
      </div>
    </div>
  <?php else: ?>
    <div class="alert alert-danger mt-5 text-center" role="alert">
      Não foi possível determinar o seu signo.
      <br>
      <a href="index.php" class="btn btn-primary mt-3">Voltar</a>
    </div>
  <?php endif; ?>

</body>
</html>