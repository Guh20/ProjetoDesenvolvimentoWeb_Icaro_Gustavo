<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>CRUD</title>
</head>
<body>
<ul <?php echo $_SESSION['nome']; ?>.
 class="container-right">
        <li><a href="logout.php">Sair</a></li>
</ul>

</p>

    <div class="container">
        <div class="header">
            <span>Cadastro de Pedidos</span>
            <button onclick="openModal()" id="new">Incluir</i></button>
          </div>

          <div class="divTable">
            <table>
              <thead>
                <tr>
                  <th>Cliente</th>
                  <th>Telefone</th>
                  <th>E-mail</th>
                  <th>Data</th>
                  <th>Descrição</th>

                  
                  <th class="acao">Abrir\Edit</th>
                  <th class="acao">Excluir</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
      
          <div class="modal-container">

        
            <div class="modal">
              <form>
 
                                <!-- DDcliente -->
                            
                <div class="modaltext">

                <label for="m-cliente">Cliente</label>
                <input id="m-cliente" type="text" required />
        
                <label for="m-telefone">Telefone</label>
                <input id="m-telefone" type="tel" required />
                
        
                <label for="m-email">E-mail</label>
                <input id="m-email" type="text" required />

                <label for="m-data">Data</label>
                <input id="m-data" type="date" required />

                <label for="m-descricao">Descrição</label>
                <input id="m-descricao" type="text" required />

                <label for="m-marca">Marca</label>
                <input id="m-marca" type="text" required />

                <label for="m-modelo">Modelo</label>
                <input id="m-modelo" type="text" required />

                

                </div>

                                <!-- Checklist -->

                <div class="modalcheck">

                <div class="checklist">
                   <label class="labelnick" >Liga</label>
                    <input type="radio" id="sim" name="liga" value="sim">Sim
                    <label for=""></label>
                    <input type="radio" id="nao" name="liga" value="nao">Não
                    <label for=""></label>   
                </div>

                <div class="checklist">
                    <label class="labelnick" >Aparelho So Vibra</label>
                     <input type="radio" id="sim" name="sovibra" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="sovibra" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Trinco na tela</label>
                    <input type="radio" id="sim" name="trinconatela" value="sim">Sim
                     <label class="btnn"></label>
                     <input type="radio" id="nao" name="trinconatela" value="nao">Não
                     <label class="btnn"></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Mancha no Display</label>
                     <input type="radio" id="sim" name="manchadisplay" value="sim">Sim
                     <label class="btnn"></label>
                     <input type="radio" id="nao" name="manchadisplay" value="nao">Não
                     <label class="btnn"></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Display Tremendo</label>
                     <input type="radio" id="sim" name="displaytreme" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="displaytreme" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Defeito no Touch</label>
                     <input type="radio" id="sim" name="touchruim" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="touchruim" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Conector Ruim</label>
                     <input type="radio" id="sim" name="conectruim" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="conectruim" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Oxidaçao</label>
                     <input type="radio" id="sim" name="oxidacao" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="oxidacao" value="nao">Não
                     <label for=""></label>   
                 </div>

                <div class="checklist">
                    <label class="labelnick" >Botao Power</label>
                     <input type="radio" id="sim" name="power" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="power" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Botao De Volume</label>
                     <input type="radio" id="sim" name="volume" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="volume" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Botao Home</label>
                     <input type="radio" id="sim" name="home" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="home" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Camera Traseira</label>
                     <input type="radio" id="sim" name="camtraseira" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="dcamtraseira" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Camera Frontal</label>
                     <input type="radio" id="sim" name="camfrontal" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="camfrontal" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Bateria </label>
                     <input type="radio" id="sim" name="bateria" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="bateria" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Tampa</label>
                     <input type="radio" id="sim" name="tampa" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="tampa" value="nao">Não
                     <label for=""></label>   
                 </div>

                 <div class="checklist">
                    <label class="labelnick" >Capa</label>
                     <input type="radio" id="sim" name="capa" value="sim">Sim
                     <label for=""></label>
                     <input type="radio" id="nao" name="capa" value="nao">Não
                     <label for=""></label>   
                 </div>
                 
                 <div class="checklist">
                    <label class="labelnick" >Garantia</label>
                     <input type="radio" id="garantia" name="garantia" value="1mes">1M
                     <input type="radio" id="garantia" name="garantia" value="2mes">2M
                     <input type="radio" id="garantia" name="garantia" value="3mes">3M
                 </div>

                </div>

                                <!-- Botao Salva -->
        
                <button id="btnSalvar">Salvar</button>
              </form>
            </div>


          </div>
       
    </div>


    <script src="script.js"></script>
</body>
</html>