<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-slate-950">

<div class="min-h-screen grid lg:grid-cols-2">

    <!-- Lado esquerdo -->
    <section
        class="hidden lg:flex flex-col justify-center bg-gradient-to-br from-slate-900 via-slate-950 to-black px-16">

        <div class="max-w-lg">

            <div
                class="inline-flex h-14 w-14 items-center justify-center rounded-xl bg-red-600 text-2xl font-bold text-white">
                S
            </div>

            <h1 class="mt-8 text-5xl font-bold text-white leading-tight">

                {{ tenant()->name ?? 'Meu SaaS' }}

            </h1>

            <p class="mt-6 text-lg leading-8 text-slate-400">

                Plataforma desenvolvida para empresas que desejam gerenciar seus
                clientes, produtos e processos em um ambiente seguro e isolado.

            </p>

            <div class="mt-12 space-y-5">

                <div class="flex items-center gap-3 text-slate-300">
                    <div class="h-2 w-2 rounded-full bg-green-500"></div>
                    Ambiente exclusivo para sua empresa
                </div>

                <div class="flex items-center gap-3 text-slate-300">
                    <div class="h-2 w-2 rounded-full bg-green-500"></div>
                    Dados isolados entre tenants
                </div>

                <div class="flex items-center gap-3 text-slate-300">
                    <div class="h-2 w-2 rounded-full bg-green-500"></div>
                    Segurança e alta disponibilidade
                </div>

            </div>

        </div>

    </section>

    <!-- Lado direito -->
    <section
        class="flex items-center justify-center px-6 py-12">

        <div class="w-full max-w-md">

            @yield('content')

        </div>

    </section>

</div>

</body>

</html>
