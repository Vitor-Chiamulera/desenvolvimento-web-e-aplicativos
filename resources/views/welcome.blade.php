<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Web - Página Inicial</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landpage.css') }}">

</head>
<body>

    @extends('layouts.app')

    @section('content')
        <main>
            <div class="main__container">

                <aside class="filter__container">
                    <!-- filtros -->
                     <h1>filtros</h1>
                </aside>

                <section class="content__container">

                    <div class="content__header">
                        <!-- search + botões -->
                         <h1>search</h1>
                    </div>

                    <div class="cards__container">
                        <!-- cards -->
                         <div class="card"><h1>card1</h1></div>
                         <div class="card"><h1>card2</h1></div>
                         <div class="card"><h1>card3</h1></div>
                         <div class="card"><h1>card4</h1></div>
                    </div>

                </section>

            </div>
        </main>
    @endsection

    </div>
</body>
</html>