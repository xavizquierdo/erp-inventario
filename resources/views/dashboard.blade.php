<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-700">
                    Bienvenido, {{ auth()->user()->name }} 👋
                </p>
                <p class="text-sm text-gray-500 mt-2">
                    Empresa: {{ auth()->user()->empresa->nombre_comercial ?? auth()->user()->empresa->razon_social }}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
