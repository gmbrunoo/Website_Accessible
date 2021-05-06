<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Acessibilidade</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="css/business-frontpage.css" rel="stylesheet"> -->
  <link href="./css/style.css" rel="stylesheet">

</head>

<body id="body">

  <section class="acessibilidade">
    <nav class="navbar navbar-expand-lg navbar-light  top-nav-custom">

      <button class="navbar-toggler  top-nav-button-custom " type="button" data-toggle="collapse" data-target="#topNav" aria-controls="topNav"
        aria-expanded="false" aria-label="Top Navigation">
        <span class="nav-link">ACESSIBILIDADE</span>
      </button>
      <div class="collapse navbar-collapse" id="topNav">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item"><a class="nav-link" href="#menu" accesskey="1">Ir para o menu [Alt + 1]</a></li>
          <li class="nav-item"><a class="nav-link" href="#conteudo" accesskey="2">Ir para conteúdo [Alt + 2]</a></li>
          <li class="nav-item"><a class="nav-link" href="#footer" accesskey="3">Ir para o rodapé [Alt + 3]</a></li>
          <li class="nav-item ">
            <div class="nav-link"> Mudar palheta
              <input type="checkbox" id="input-dark-mode" class="custom-chekbox">
            </div>
          </li>
          <li class="nav-item"><button onClick="fonte('a')" type="submit" id="increase-font" class="btn btn-dark top-nav-button-li-custom mb-1">A+</button></li>
          <li class="nav-item"><button onClick="fonte('d')" type="submit" id="decrease-font" class="btn btn-dark top-nav-button-li-custom mb-1">A-</button></li>
        </ul>
      </div>
    </nav>
  </section>

  <header>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark nav-custom">
      <div class="container" id="menu">
        <a class="navbar-brand" href="#"><img src="index.php" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link text-center" href="index.php">Home<span class="sr-only">(Pagina atual)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link text-center" href="deficienciasNoBrasil.php">Deficientes No Brasil</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="acessibilidadeNaWeb.php">Acessibilidade na Web</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="aplicandoAcessibilidade.php">Aplicando Acessibilidade</a></li>
            <li class="nav-item"><a class="nav-link text-center" href="quemSomos.php">Quem Somos</a></li/li>
            <li class="nav-itiem"><a class="nav-link text-center" href="contato.php">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>