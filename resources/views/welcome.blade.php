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
        <nav class="bg-gray-200 w-full relative h-[72px] flex items-center">
            <div class="ml-32">
                <img src="{{ asset('assets/imgs/Logo.png') }}" alt="">
            </div>
            <div class="text-green-900 ml-auto mr-32">
                <a class="px-2" href="#inicio">Início</a>
                <a class="px-2" href="#sobre">Sobre</a>
                <a class="px-2" href="#servicos">Serviços</a>
                <a class="px-2" href="#depoimentos">Depoimentos</a>
                <a class="px-2" href="#contato">Contato</a>
            </div>
        </nav>

        <section id="inicio" class="bg-gray-100 flex flex-row mt-[84px]">
            <div class="w-100 mt-20 ml-[73px] pr-4">
                <h2 class="text-green-900 text-3xl font-bold">
                    Saúde natural para os seus cabelos
                </h2>
                <p class="text-gray-500 text-lg pb-6 pt-3">
                    Um salão exclusivo em São Paulo, especializado em tratamentos naturais.
                </p>
                <button class="bg-green-500 rounded h-[50px] w-[218px] text-base font-medium text-gray-100">
                    Agendar um horário
                </button>
            </div>
            <div class="mr-[71px]">
                <img src="{{ asset('assets/imgs/Img.png') }}" alt="">
            </div>
        </section>

        <section id="sobre" class="bg-white flex flex-row">
            <div class="my-40 mr-16">
                <img src="{{ asset('assets/imgs/Img_sobre.png') }}" alt="" style="width: 773px; height: 446px;">
            </div>
            <div class="my-40 w-[610px]">
                <h2 class="text-green-900 text-3xl font-bold">
                    Sobre nós
                </h2>
                <p class="text-gray-500 text-lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sagittis arcu quis nisi luctus, id accumsan felis tristique. Proin quis bibendum diam. Sed consequat nisl laoreet eros ultricies pellentesque. Nullam in est porta, pellentesque massa vitae, vehicula risus.
                </p>

                <p class="text-gray-500 text-lg">
                    In placerat, felis vitae sodales dictum, lacus quam pretium mi, ut pretium urna turpis eu dui. Vestibulum id ullamcorper nibh. Donec luctus, nunc finibus elementum suscipit, tortor augue vulputate sapien, vitae feugiat enim augue sed.
                </p>

                <p class="text-gray-500 text-lg">
                    Quisque id aliquam elit. Suspendisse congue pharetra maximus. Duis rutrum velit a leo euismod dictum. Sed sodales est efficitur arcu tincidunt tincidunt. Curabitur fringilla, risus at feugiat feugiat, nisl nulla tincidunt tellus, elementum elementum lorem nisl eleifend dolor. Nullam eget dui at sem ullamcorper luctus.
                </p>
            </div>
        </section>

        <section id="servicos" class="bg-gray-100">
            <div class="pt-32 flex flex-col items-center justify-center">
                <h2 class="text-green-900 text-3xl font-bold pb-3">
                    Serviços
                </h2>
                <p class="text-gray-500 text-lg w-[523px] text-center">
                    Com mais de 10 anos no mercado, o <span class="text-green-500 font-bold">Beautysalon</span> já conquistou clientes de inúmeros países com seus tratamentos exclusivos e totalmente naturais
                </p>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <div class="flex flex-col border-b border-green-500 w-[352px] h-[352px] drop-shadow items-center justify-center text-center">
                    <img src="{{ asset('assets/imgs/hair.svg') }}" alt="">
                    <h3 class="font-bold text-2xl">Terapia capilar</h3>
                    <p>Terapia completa para couro cabeludo e fios, protegendo todos os tipos de cabelos, inclusive os longos e finos.</p>
                </div>

                <div class="flex flex-col border-b border-green-500 w-[352px] h-[352px] drop-shadow items-center justify-center text-center">
                    <img src="{{ asset('assets/imgs/trim.svg') }}" alt="">
                    <h3 class="font-bold text-2xl">Cortes</h3>
                    <p>A nossa equipe é repleta de profissionais renomados, famosos por lançarem tendências com cortes diferenciados e clássicos.</p>
                </div>

                <div class="flex flex-col border-b border-green-500 w-[352px] h-[352px] drop-shadow items-center justify-center text-center">
                    <img src="{{ asset('assets/imgs/cosmetic.svg') }}" alt="">
                    <h3 class="font-bold text-2xl">Tratamentos</h3>
                    <p>O besautysalon conta com diversos tratamentos naturais e totalmente veganos, para qualquer tipo de cabelo.</p>
                </div>
            </div>
        </section>

        <section id="depoimentos">
        </section>

        <section id="contato">
        </section>

        <footer>
        </footer>

    </body>
</html>
