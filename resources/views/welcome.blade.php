<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Salão de Beleza</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <nav class="container bg-gray-200 flex justify-center mx-auto">
            <div>
                <img src="" alt="">
            </div>
            <div class="text-green-900">
                <a href="#inicio">Início</a>
                <a href="#sobre">Sobre</a>
                <a href="#servicos">Serviços</a>
                <a href="#depoimentos">Depoimentos</a>
                <a href="#contato">Contato</a>
            </div>
        </nav>

        <section id="inicio" class="bg-gray-100">
            <h2 class="text-green-900 text-3xl font-bold">
                Saúde natural para os seus cabelos
            </h2>
            <p class="text-gray-500 text-lg">
                Um salão exclusivo em São Paulo, especializado em tratamentos naturais.
            </p>
            <button class="bg-green-500 rounded h-[50px] w-[218px] text-base font-medium text-gray-100">
                Agendar um horário
            </button>
        </section>

    </body>
</html>
