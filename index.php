<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Roboto+Mono:wght@700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./style.css" />

    <title>Document</title>
</head>

<body>
    <header>
        <img src="./assets/logo.svg" alt="Logomarca do aplicativo Habits" />

        <button><img src="./assets/plus.svg" alt="Ícone sinal de mais roxo" />Registrar o meu dia</button>
    </header>

    <form id="form-habits">
        <div class="habits">
            <div class="habit" data-name="run">🏃🏽‍♂️</div>
            <div class="habit" data-name="water">💧</div>
            <div class="habit" data-name="food">🍎</div>
            <div class="habit" data-name="journal">📕</div>
            <div class="habit" data-name="takePills">💊</div>
        </div>

        <div class="days"></div>
    </form>

    <script src="https://cdn.jsdelivr.net/gh/maykbrito/libs/NLWSetup/source/NLWSetup.js"></script>
    <script src="./script.js"></script>
</body>

</html>