<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Chamada</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="chamada.css">
</head>

<body>
<h1> Chamada PPI 2022</h1>
  <main class="container">
    <button data-toggle="modal" data-target="#chamada">Marcar Presença</button>
    <h2>REGISTROS</h2>
    <table>
      <table>

      <thead>
        <tr> 
          <th> Alunos </th>
          <th> 04/07 </th>
          <th> 09/07 </th>
          <th> 11/07 </th>
          <th> 18/07 </th>
          <th> 25/07 </th>
          <th> 01/08 </th>
      </thead>

      <tbody>
        <tr>
          <td> Mateus Palhares de Lima Farias </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
        </tr> 

        <tr>
          <td> Felipe Nickelme Araújo Santos </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
        </tr>

        <tr>
          <td> Flawbert Lorran da Costa </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
          <td> X </td>
          <td></td>
          <td></td>
        </tr>        

    </tbody>
    </table>
  </main>
  
<div class="modal" tabindex="-1" id="chamada">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Marcar Presença</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="" method="post">
         <div class="form-group">
           <label for="txt_nome">Nome</label>
           <input type="text" name="txt_nome" id="txt_nome" class="form-control"></div>
      <div class="form-group">
           <label for="txt_senha">Senha</label>
           <input type="password" name="txt_senha" id="txt_senha" class="form-control"></div>
         <div
           <button type="button"
             class="btn-padrao"
             onclick="presencial()"> 
             Marcar Presença </button>
         </div>
       </form>
      </div>
    </div>
  </div>
</div>
  
</body>

</html>
