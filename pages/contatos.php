<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <title>Contatos</title>
</head>
<body>
 <header>
   <div class="container mt-4 mb-4">
     <h1 class="font-weight-bold">Meus contatos</h1>
     <p>Listagem com seus contatos.</p>
   </div>
 </header>

 <div class="container mt-2 mb-2">
   <button class="btn btn-primary rounded">
     <i class="fas fa-plus"></i> Novo Contato
   </button>
 </div>

 <div class="container mt-2">
   <table class="table table-striped">
    <!-- Header -->
     <thead class="thead-dark">
       <tr>
         <th>Nome</th>
         <th>Sobrenome</th>
         <th>Telefone</th>
         <th>Email</th>
         <th>Localidade</th>
         <th>Notas</th>
         <th>Opções</th>
       </tr>
     </thead>

     <!-- Data -->
     <tbody>
       <tr>
         <td class="align-middle">João</td>
         <td class="align-middle">Silva</td>
         <td class="align-middle">11 1234-5678</td>
         <td class="align-middle">joao@example.com</td>
         <td class="align-middle">Cidade/Estado</td>
         <td class="align-middle">Notas X</td>
         <td>
           <div class="d-flex align-items-center">
             <button class="btn btn-primary flex-fill rounded">
               <i class="fas fa-edit"></i>
             </button>
             <button class="btn btn-danger flex-fill mx-1 rounded">
               <i class="fas fa-trash-alt"></i>
             </button>
           </div>
         </td>
       </tr>
     </tbody>
   </table>
 </div>
</body>
</html>
