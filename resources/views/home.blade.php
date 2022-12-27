<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro de Animais</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>    
    
  </head>
  <body>

    <?php      


      


      $situação_modalCons = null;
      if($situação_modalCons == "fechado"){ ?>
        
        <script>
          $(document).ready(function(){
            $('#modalCons').modal('hide'); 
          });
        </script>

      <?php } elseif ($situação_modalCons == "aberto") { ?>
        
        <script>
          $(document).ready(function(){
            $('#modalCons').modal('show'); 
          });
        </script>
       
    <?php } ?>




    <script type="text/javascript">

      $(document).ready(function(){
        
          $('#bVoltarC').on('click', function(){
            $('#modalCons').modal('hide'); 
          });
          $('#bAbrirC').on('click', function(){
            $('#modalCons').modal('show'); 
          });

          // =====>>> MODAL EDITAR <<<=====
          $('#bEditar').on('click', function(event, $id){
            $('#modalCons').modal('hide');
            $('#modalEdit<?php echo $id ?>').modal('show');
          });

          $('#bEditarV').on('click', function(){
            $('#modalEdit').modal('hide');
            $('#modalCons').modal('show'); 
          });

      });

      // $('#bEditar').on('show.bs.modal', function(event){ // evento que detecta a abertura da modal
      //   var bt = $(event.relatedTarget);            // botão que abriu a modal
      //   var id = bt.data('whatevernome');           // valor do data
      //   $(this).find('#id').val(id);         // insere valor no input
      // });




      
      $(document).ready(function($){
        $("#CPF").mask("000.000.000-00")
        $("#cnpj").mask("00.000.000/0000-00")
        $("#WhatsApp").mask("(00) 00000-0000")
        $("#salario").mask("999.999.990,00", {reverse: true})
        $("#cep").mask("00.000-000")
        $("#DataNascimento").mask("00/00/0000")
        
        $("#rg").mask("999.999.999-W", {
          translation: {
            'W': {
              pattern: /[X0-9]/
            }
          },
          reverse: true
        })
        
        var options = {
          translation: {
            'A': {pattern: /[A-Z]/},
            'a': {pattern: /[a-zA-Z]/},
            'S': {pattern: /[a-zA-Z0-9]/},
            'L': {pattern: /[a-z]/},
          }
        }
        
        $("#placa").mask("AAA-0000", options)
        
        $("#codigo").mask("AA.LLL.0000", options)
        
        $("#celular").mask("(00) 0000-00009")
        
        $("#celular").blur(function(event){
          if ($(this).val().length == 15){
            $("#celular").mask("(00) 00000-0009")
          }else{
            $("#celular").mask("(00) 0000-00009")
          }
        })
      })
      
    </script>

    <style type="text/css">
      #tamanhoContainer {
        width: 500px;
      }

      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }

    </style> 



  <div class="container" id="tamanhoContainer" style="margin-top: 40px">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Paciente</h5>
            <p class="card-text">Cadastrar um novo paciente no sistema.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro">Adicionar</button>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Listar Pacientes</h5>
            <p class="card-text">Listar pacientes cadastrados no sistema.</p>
            <!-- <a href="listPacientes.php" class="btn btn-primary">Listagem</a> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCons">Listagem</button>

          </div>
        </div>
      </div>
  </div>


  <!-- MODAL DE CADASTRO DO PACIENTE -->
  <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="modalCadastroLabel">Formulário de Cadastro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <form action="/insertPaciente" method="post" style="margin-top: 20px">
            @csrf

            <div class="form-group">
              <label>Nome Completo</label>
              <input type="text" 
                     class="form-control" 
                     id="NomeCompleto" 
                     autocomplete="off" 
                     name="NomeCompleto" 
                     placeholder="Digite o Nome" 
                     required>
            </div>

            <div class="form-group">
              <label>CPF</label>
              <input type="text" 
                     class="form-control" 
                     id="CPF" 
                     autocomplete="off" 
                     name="CPF" 
                     placeholder="Digite o CPF" 
                     required>
            </div>
            
            <div class="form-group">
              <label>Data de Nascimento</label>
              <input type="text" 
                     class="form-control"
                     id="DataNascimento" 
                     autocomplete="off" 
                     name="DataNascimento" 
                     placeholder="Digite a Data de Nascimento" 
                     required>

            <!-- <input type="date" 
                   class="form-control" 
                   id="DataNascimento" 
                   name="DataNascimento" 
                   max="2021-12-27" 
                   required>     -->
            </div>
            <div class="form-group">
              <label>WhatsApp</label>
              <input type="text" 
                     class="form-control" 
                     id="WhatsApp" 
                     name="WhatsApp" 
                     placeholder="Digite o Whatsapp" 
                     autocomplete="off" 
                     required>
            </div>
            
            <div class="form-group" action="upload.php" method="post" enctype="multipart/form-data">
              @csrf  
              <label>Foto</label><br>
              <input type="file" 
                     id="Foto" 
                     name="Foto" 
                     required>
            </div>
            

            <div style="text-align: right">
              <button class="btn btn-outline-success" 
                      type="submit"><i 
                      class="fas fa-paper-plane">
                      </i> Cadastrar</button>
              
              <!-- <a class="btn btn-outline-info" href="index.php" role="button"><i class="fas fa-reply"></i> Voltar</a> -->
              <button class="btn btn-outline-info" 
                      data-dismiss="modal" 
                      type="button"><i 
                      class="fas fa-reply">
                      </i>Voltar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- MODAL DE CONSULTA DO PACIENTE -->
  <div class="modal fade bd-example-modal-lg" id="modalCons" name="modalCons" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content" style="margin-top: 40px; margin-right: 50px">
        <div class="container" style="margin-top: 50px; margin-bottom: 40px ">
          <h3 style="padding-bottom: 40px">Sistema de Atendimento</h3>

          <table class="table">
            <thead>
              <tr>
              
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Idade</th>
                <th scope="col">WhatsApp</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <!-- CONSULTA DA LISTA NO MYSQL -->
                <?php

                  // ====>> MYSQL <<====

                  $sql = DB::select("select * from Usuario");

                  foreach($sql as $array) {
                      $id = $array->id;
                      $nome = $array->NomeCompleto;
                      $CPF = $array->CPF;
                      $dNascimento = $array->DataNascimento;
                      $WhatsApp = $array->WhatsApp;
                  

                  // CALCULAR DATA DE ANIVERSÁRIO
                  list($dia, $mes, $ano) = explode('/', $dNascimento);
                  $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
                  $diadonascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
                  $idade = floor((((($hoje - $diadonascimento) / 60) / 60) / 24) / 365.25);

                  // ====>> LISTA <<====

                    echo '<td>' . $id . '</td>';
                    echo '<td>' . $nome . '</td>';
                    echo '<td>' . $CPF . '</td>';
                    echo '<td>' . $dNascimento . '</td>';
                    echo '<td>' . $idade . '</td>';
                    echo '<td>' . $WhatsApp . '</td>';


                    echo '<td> <a class="btn btn-success btn-sm" role="button"><i class="fas fa-share"></i> Atender</a>';
                    //echo '<a class="btn btn-warning btn-sm" id="bEditar" name="' . $id .'" value="' . $id .'" role="button"><i class="far fa-edit"></i> Editar</a>';
  

                    

                    
                    //echo '<td> <a class="btn btn-success btn-sm" href="editPaciente.php?id=' . $id .'" role="button"><i class="fas fa-share"></i> Atender</a>';
                    echo ' <a class="btn btn-warning btn-sm" href="updatePaciente?id=' . $id .'" role="button"><i class="far fa-edit"></i> Editar</a>';
                    //echo ' <a class="btn btn-warning btn-sm" data-target="#modalEdit" role="button"><i class="far fa-edit"></i> Editar</a>';
                    echo ' <a class="btn btn-danger btn-sm" href="deletePaciente?id=' . $id .'" role="button"><i class="far fa-trash-alt"></i> Excluir</a></td>';	

                    echo '</tr>';

                    print($id);
                  
                  } 

                ?>
              </tr>
              
            </tbody>
          </table>

          <div style="text-align: right">
            <a class="btn btn-outline-info" id="bVoltarC" role="button"><i class="fas fa-reply"></i> Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- MODAL DE EDIT DO PACIENTE -->
  <div class="modal fade bd-example-modal-lg" id="modalEdit<?php echo $id ?>" name="modalEdit<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="margin-top: 40px">
        <div class="container" style="margin-top: 50px; margin-bottom: 40px ">
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

            <form action="updatePaciente.php" method="post" style="margin-top: 20px">
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
                     id="bEditarV" 
                     role="button">
                     <i class="fas fa-reply"></i> Voltar</a>
                </div>

                <script type="text/javascript">
                  $( ".btn-detalhes" ).click(function() {

                      var id = $(this).data('codigo');
                      $.get('http://localhost/getClientes.php?cliente='+id, function(html){
                          $('#myModal .modal-body').html(html);
                          $('#myModal').modal('show', {backdrop: 'static'});
                      });

                  }); 
                </script>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>