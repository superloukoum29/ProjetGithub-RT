<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Authentification</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="w-40 m-auto">
        <form>
            <h1 class="h3 mb-3 fw-normal">Authentification</h1>
            <div class="form-floating my-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Login">
                <label for="floatingInput">Login</label>
            </div>
            <div class="form-floating my-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe">
                <label for="floatingPassword">Mot de passe</label>
            </div>
            <button class="btn btn-primary w-100 my-2" type="submit">Valider</button>
        </form>
    </main>
</body>

</html>