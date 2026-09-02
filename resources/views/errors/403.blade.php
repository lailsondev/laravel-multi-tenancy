<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Acesso Negado</title>

    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-slate-950 text-white">

<div class="flex min-h-screen items-center justify-center px-6">

    <div class="w-full max-w-2xl">

        <div class="rounded-3xl border border-slate-800 bg-slate-900/70 backdrop-blur-xl shadow-2xl overflow-hidden">

            <div class="h-2 bg-gradient-to-r from-red-500 via-orange-500 to-yellow-400"></div>

            <div class="p-12">

                <div class="flex justify-center mb-8">

                    <div class="flex h-24 w-24 items-center justify-center rounded-full bg-red-500/10 ring-8 ring-red-500/10">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-12 w-12 text-red-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 9v4m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z"/>
                        </svg>

                    </div>

                </div>

                <h1 class="text-center text-7xl font-black tracking-tight text-red-500">
                    403
                </h1>

                <h2 class="mt-6 text-center text-3xl font-bold">
                    Acesso Negado
                </h2>

                <p class="mx-auto mt-5 max-w-lg text-center text-slate-400 leading-relaxed">
                    Você não possui permissão para acessar esta página.
                    Caso acredite que isso seja um erro, entre em contato com um administrador.
                </p>

                <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4">

                    <a
                        href="{{ route('tenants.home') }}"
                        class="rounded-xl bg-indigo-600 px-6 py-3 text-center font-semibold transition hover:bg-indigo-500">

                        Voltar para o início

                    </a>

                    <button
                        onclick="history.back()"
                        class="rounded-xl border border-slate-700 px-6 py-3 font-semibold transition hover:bg-slate-800 cursor-pointer">

                        Página Pagamento

                    </button>

                </div>

            </div>

        </div>

        <p class="mt-8 text-center text-sm text-slate-500">
            HTTP Error 403 • Forbidden
        </p>

    </div>

</div>

</body>
</html>
