<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

    </style>
    <title>Locadora de veiculos</title>
</head>
<body class="bg light">
    <div class="login-container">
        <div class="card">
            <div class="cars-header">
                <h4 class="mb-1">Login</h4>
            </div>

            <div class="card-body">

            <form action="post" class="needs-validation" novalidate>
                <input type="hidden">

                <div class="mb-3">
                    <label for="user" class="form-label">Usuário</label>
                    <input type="text" name="username" class="form-control" required autocomplete="off"
                    placeholder="Digite os usuario">
                </div>

                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">
                        Senha
                    </label>
                    <input type="password" name="password" class="form-control"
                     id="password" required>
                     <span class="password-toggle mt-3" on click = "togglePassword()">
                        <i class="bi bi-eye-fill"></i></span>
                </div>

                <button type="submit" class="btn btn-warning w-100">Entar</button>
            </form>

            </div>
        </div>
    </div>
    <script>
            function togglePassword(){
                let passwordInput = document.getElementById ('password');
                passwordInput.type = (passwordInput.type === 'password') ?
                'text' : 'password';
            }
    </script>
</body>
</html>