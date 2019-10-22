<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }
      
            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
          </style>
          <link href="https://fonts.googleapis.com/css?family=Pattaya|Arvo|Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/custom2.css">
    <link rel="stylesheet" href="css/custom3.css">


</head>
<body class="pageMusico">

  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand ml-auto" href="#">musikey</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
            
          <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav ml-auto mr-3" >
          <li class="nav-item h5">
           <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item h5">
           <a class="nav-link" href="#">busque</a>
           </li>
           <li class="nav-item active h4">
             <a href="musico.php" class="nav-link">cadastre</a>
           </li>
       <li class="nav-item h5">
        <a class="nav-link" href="login.html">faça parte</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-md-0 ml-5">
                  <input class="form-control" type="text" placeholder="Search">
                </form>
              </div>
            </nav>

              <main>
                <div class="jumbotron">
      
                      <div class="container">
                        
                        <h1 class="display-4">Cadastre-se</h1>
                          <p></p>
                      
                          
                      </div>
                      </div>
                    </div>
                  </main>
            <div class="login-box">
              <div class="container">
                <form action="cad_musico.php" class="form-group" method="POST">
                  <div class="col-md-5"><label>Nome:</label>
                    <input type="text" name="nome" id="" class="form-control"></div>
                  <div class="col-md-5"> <label>Sobrenome:</label>
                    <input type="text" name="nome" id="" class="form-control"></div>
                 
                  <label>Data de nascimento:</label>
                  <div class="form-row">
                      <div class="col-md-2">
                        <input type="number" class="form-control" placeholder="Dia">
                      </div>
                      <div class="col-md-2">
                        <select name="mes" class="form-control" placeholder="Mês">
                            <option value="Janeiro">Janeiro</option>
                            <option value="Janeiro">Fevereiro</option>
                            <option value="Janeiro">Março</option>
                            <option value="Janeiro">Abril</option>
                            <option value="Janeiro">Maio</option>
                            <option value="Janeiro">Julho</option>
                            <option value="Janeiro">Julho</option>
                            <option value="Janeiro">Agosto</option>
                            <option value="Janeiro">Setembro</option>
                            <option value="Janeiro">Outubro</option>
                            <option value="Janeiro">Novembro</option>
                            <option value="Janeiro">Dezembro</option>
                          </select>
                      </div>
                      <div class="col-md-2">
                        <select name="ano" class="form-control">
                          <?php
                          $ano = 1950;
                          $anoatual = 2019;
                          while($ano <= $anoatual)
                          {
                            echo"<option value='$ano'>$ano</option>";
                            $ano++;
                          }
                          
                          ?>
                          
                        </select>

                      </div>
                    </div>
                    <label>Sou:</label>
                    <div class="form-row">
                      <div class="col-md-2">
                          <select name="mes" class="form-control" placeholder="Mês">
                              <option value="Janeiro">Guitarrista</option>
                              <option value="Janeiro">Baixista</option>
                              <option value="Janeiro">Baterista</option>
                              <option value="Janeiro">Vocalista</option>
                              <option value="Janeiro">Violonista</option>
                              <option value="Janeiro">Percussionista</option>
                              <option value="Janeiro">Pianista</option>
                              <option value="Janeiro">Tecladista</option>
                              <option value="Janeiro">Saxofonista</option>
                              <option value="Janeiro">DJ</option>
                              <option value="Janeiro">Back-vocal</option>
                              <option value="Janeiro">Violinista</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <select name="mes" class="form-control" placeholder="Mês">
                              <option value="Janeiro">Guitarrista</option>
                              <option value="Janeiro">Baixista</option>
                              <option value="Janeiro">Baterista</option>
                              <option value="Janeiro">Vocalista</option>
                              <option value="Janeiro">Violonista</option>
                              <option value="Janeiro">Percussionista</option>
                              <option value="Janeiro">Pianista</option>
                              <option value="Janeiro">Tecladista</option>
                              <option value="Janeiro">Saxofonista</option>
                              <option value="Janeiro">DJ</option>
                              <option value="Janeiro">Back-vocal</option>
                              <option value="Janeiro">Violinista</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                          <select name="mes" class="form-control" placeholder="Mês">
                              <option value="Janeiro">Guitarrista</option>
                              <option value="Janeiro">Baixista</option>
                              <option value="Janeiro">Baterista</option>
                              <option value="Janeiro">Vocalista</option>
                              <option value="Janeiro">Violonista</option>
                              <option value="Janeiro">Percussionista</option>
                              <option value="Janeiro">Pianista</option>
                              <option value="Janeiro">Tecladista</option>
                              <option value="Janeiro">Saxofonista</option>
                              <option value="Janeiro">DJ</option>
                              <option value="Janeiro">Back-vocal</option>
                              <option value="Janeiro">Violinista</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control">

                      </div>
                      <div class="col-md-2">
                        <label>Telefone para Contato:</label>
                        <input type="tel" name="email" class="form-control">

                      </div>
                      <br>
                      <input type="submit" value="Cadastrar" class="btn">


                    </div>
                    
                </form>
                    </div>
                  </div>

 




</body>
</html>