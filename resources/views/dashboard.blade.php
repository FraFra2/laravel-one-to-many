<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <div class = "flex items-center justify-center">
                        <div>
                            <h2 class = "text-5xl underline text-slate-800 transition-all hover:text-slate-500">
                                <a href="{{ route('projects.index') }}">I tuoi Progetti</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
