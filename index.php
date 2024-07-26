<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./img/logo_empresa.JPG" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <title>Login</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="w-100 m-auto form-conteiner z-2">
        <form method="POST" action="login.php">
            <img src="img/logo_empresa.JPG" alt="" class="mb-4" height="60" width="100" style="border-radius: 5px;">
            <h1 class="h3 mb-3 fw-normal">Faça Login</h1>
                <div class="form-floating">
                    <input type="text" name="nome" id="username" class="form-control form-group mb-2" id="floatinInput"  required>
                    <label for="floatinInput">Usuário:</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="senha" id="" class="form-control form-group mb-2" id="floatinInput" required style="color: red;">
                    <label for="floatinInput">Senha:</label>
                </div><br>
                <button type="submit"class="btn btn-color w-100 py-2 form-group mb-2 " style="font-weight: bold; text-transform: uppercase;">Entrar</button>     
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>