<?php
//  backend
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario - Locadora de veículos</title>
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link dos ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link do css -->
     <link rel="stylesheet" href="style.css">
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuário -->
         <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Sistema de Locadora de Veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size:24px;"></i>
                        </span>
                        <!-- Bem vindo,[usuário] -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Usuario</strong>!
                        </span>
                        <!-- botão de logout -->
                        <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                            <i class="bi bi-box-arrow-right"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
         </div>
         <div class="col-md-10">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Calcular a previsão de aluguel 💰
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="input-label">
                                    Tipo de veículo:
                                </label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">
                                    Quantidade de dias 📅
                                </label>
                                <input type="number" name="dias_calculo" class="form-control"
                                value="1" required>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="calcular">
                                Calcular previsão
                             </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


           <!-- Tabela de veículos cadastrados -->
           <div class="row mt-4">
            <div class="col-16">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Veículos cadastrados 📃
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Placa</th>
                                    <th>Status</th>
                                
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carro</td>
                                        <td>
                                        <div class="container mt-3">
            <button class="btn btn" data-bs-toggle="modal" 
             data-bs-target="#exemploModal">
                Uno
            </button>
        </div>
        <div class="modal fade" id="exemploModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-tittle">Fiat uno</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <h4>
Modelo:
Fiat Attractive 1.0 Evo Fire Flex 8v 5p</h4>
                        <p>Quilometragem :85612</p>
                        <p>ano :2021</p>
                    </div>
                    
                    </div>
                </div>
            </div>
         </div> <!-- O id tem que ser o mesmo do botão-->
    
                                        </td>
                                        <td>ABC1D34</td>
                                        <td>
                                            <span class="badge bg-success">
                                                Disponível ✅
                                            </span>
                                        </td>
                                        
                                            
                                                    
                                                    </div>

                                                    <tr>
                                        <td>moto</td>
                                        <td> 
                                        <button class="btn btn" data-bs-toggle="modal" data-bs-target="#informacoes">Honda</button>
                                        <div class="modal fade" id="informacoes">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">honda</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h4> Modelo: Chrysler</h4>
                        <p>Quilometragem :85612</p>
                        <p>ano :2021</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                        <td>CFC889</td>
                                        <td>
                                           
                                                <button class="btn btn-info" data-bs-toggle="modal" class="nav-link active" data-bs-target="#contatoModal">Alugue</button>
                                        <div class="modal fade" id="contatoModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">disponivel</h5>
                                                        <button type="button" class="btn-close"  data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label for="nome" class="form-label">Nome:</label>
                                                                <input type="text" class="form-control" id="nome" required>
                                                            </div>
                                                            <div class="mb-3">
                                                            <label for="cpfContato" class="form-label">CPF:</label>
                                                            <input type="text" class="form-control" id="cpfContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="emailContato" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="emailContato" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="inputPassword5" class="form-label">Senha:</label>
                                                                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="diasAluguel" class="form-label">Dias de aluguel:</label>
                                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-info">Enviar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                

                                                    <tr>
                                        <td>Carro</td>
                                        <td>Hb20</td>
                                        <td>BNB919</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                indisponível ❌
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                   
                                                    <tr>
                                        <td>moto</td>
                                        <td>yamaha</td>
                                        <td>BDE2882</td>
                                        <td>
                                        <span class="badge bg-warning">
                                                indisponível ❌
                                            </span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                 
                                                    
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>