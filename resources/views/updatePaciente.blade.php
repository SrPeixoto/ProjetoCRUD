<?php

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mask.js') }}"></script>
    
    <script>
      $(document).ready(function(){
          $('#celular').mask('(99) 9 9999-9999');
      });
    </script> -->


    <style type="text/css">
      #tamanhoContainer {
        width: 500px;
      }

      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }

    </style>

    


    <?php //echo '<p>Hello World</p>'; ?> 



    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    	<h4>Formulário de Cadastro </h4>

            <?php

            // ====>> MYSQL <<====

            $sql = DB::select("select * from Usuario where id=$id");

            foreach($sql as $array) {

                $id = $array->id;
                $nome = $array->NomeCompleto;
                $CPF = $array->CPF;
                $dNascimento = $array->DataNascimento;
                $WhatsApp = $array->WhatsApp;
                $fotoP = $array->Foto;
            }

            ?>

            <form action="/updateP" method="post" style="margin-top: 20px">
              @csrf
              <input type="text" class="form-control" id="modelo" autocomplete="off" name="id" value="<?php echo $id ?>" style="display: none;">

              <div class="form-group">
                  <label>Nome Completo</label>
                  <input type="text" 
                         class="form-control" 
                         id="NomeCompleto" 
                         autocomplete="off" 
                         name="NomeCompleto" 
                         value="<?php echo $nome ?>">
                </div>

                <div class="form-group">
                  <label>CPF</label>
                  <input type="text" 
                        class="form-control" 
                        id="CPF" 
                        autocomplete="off" 
                        name="CPF" 
                        value="<?php echo $CPF ?>">
                </div>
                
                <div class="form-group">
                  <label>Data de Nascimento</label>
                  <input type="text" 
                         class="form-control" 
                         id="DataNascimento" 
                         autocomplete="off" 
                         name="DataNascimento" 
                         value="<?php echo $dNascimento ?>">
                </div>

                <div class="form-group">
                  <label>WhatsApp</label>
                  <input type="text" 
                         class="form-control" 
                         id="WhatsApp" 
                         name="WhatsApp" 
                         value="<?php echo $WhatsApp ?>" 
                         autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="text" 
                         class="form-control" 
                         id="Foto" 
                         name="Foto" 
                         value="<?php echo $fotoP ?>" 
                         autocomplete="off">
                </div>

                <div style="text-align: right">
                  <button type="submit"  
                          class="btn btn-outline-success">Atualizar</button>

                  <a class="btn btn-outline-info" 
                     id="bVoltarE" 
                     role="button">
                     <i class="fas fa-reply"></i> Voltar</a>
                </div>


            </form>
    </div>
  </body>
</html>
