@extends('tenants.layout')

@section('content')

    <div class="min-h-screen bg-slate-950 flex items-center justify-center px-6 py-12">

        <div class="w-full max-w-md">

            <!-- Logo -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-white">
                    Meu SaaS
                </h1>

                <p class="mt-2 text-slate-400">
                    Crie sua conta gratuitamente
                </p>
            </div>

            <!-- Card -->
            <div class="bg-slate-900 border border-slate-800 rounded-2xl shadow-2xl p-8">

                <form action="{{ route('tenants.register') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label
                            for="name"
                            class="block mb-2 text-sm font-medium text-slate-300"
                        >
                            Nome
                        </label>

                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            autofocus
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-white placeholder-slate-500 outline-none transition focus:border-red-500 focus:ring-2 focus:ring-red-500/20"
                            placeholder="Digite seu nome"
                        >

                        @error('name')
                        <p class="mt-2 text-sm text-red-400">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label
                            for="email"
                            class="block mb-2 text-sm font-medium text-slate-300"
                        >
                            E-mail
                        </label>

                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-white placeholder-slate-500 outline-none transition focus:border-red-500 focus:ring-2 focus:ring-red-500/20"
                            placeholder="Digite seu e-mail"
                        >

                        @error('email')
                        <p class="mt-2 text-sm text-red-400">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label
                            for="password"
                            class="block mb-2 text-sm font-medium text-slate-300"
                        >
                            Senha
                        </label>

                        <input
                            id="password"
                            name="password"
                            type="password"
                            class="w-full rounded-lg border border-slate-700 bg-slate-800 px-4 py-3 text-white placeholder-slate-500 outline-none transition focus:border-red-500 focus:ring-2 focus:ring-red-500/20"
                            placeholder="Digite sua senha"
                        >

                        @error('password')
                        <p class="mt-2 text-sm text-red-400">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <!-- Botão -->
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-red-600 py-3 font-semibold text-white transition hover:bg-red-700 active:scale-[0.99] cursor-pointer"
                    >
                        Criar Conta
                    </button>

                </form>

                <!-- Login -->
                <div class="mt-8 border-t border-slate-800 pt-6 text-center">

                    <p class="text-sm text-slate-400">
                        Já possui uma conta?
                    </p>

                    <a
                        href=""
                        class="mt-2 inline-block font-medium text-red-500 transition hover:text-red-400"
                    >
                        Fazer login
                    </a>

                </div>

            </div>

        </div>

    </div>

@endsection
