<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center 
                bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 px-4">

        <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8">

            <!-- Título -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Iniciar sesión
                </h1>
                <p class="text-sm text-gray-500 mt-1">
                    Sistema de Gestión Empresarial
                </p>
            </div>

            <!-- Estado de sesión -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Formulario -->
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Correo -->
                <div>
                    <x-text-input
                        id="email"
                        class="block w-full rounded-lg border-gray-300 
                            px-4 py-3
                            focus:border-indigo-500 focus:ring-indigo-500"
                        type="email"
                        name="email"
                        placeholder="Correo electrónico"
                        :value="old('email')"
                        required
                        autofocus
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <!-- Contraseña -->
                <div>
                    <x-text-input
                        id="password"
                        class="block w-full rounded-lg border-gray-300 
                            px-4 py-3
                            focus:border-indigo-500 focus:ring-indigo-500"
                        type="password"
                        name="password"
                        placeholder="Contraseña"
                        required
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <!-- Botón -->
                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 
                               text-white font-semibold py-3 rounded-lg transition"
                    >
                        Ingresar
                    </button>
                </div>
            </form>

        </div>

    </div>
</x-guest-layout>
