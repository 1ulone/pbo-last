<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{ session('role') }}
            <br>{{ session('username') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>

            <!-- Logout Form -->
            <form action="{{ url('/logout') }}" method="POST" style="display:inline;">
                @csrf <!-- This ensures the logout request is secure -->
                <button type="submit" style="background:none; border:none; color:#1d4ed8; text-decoration:underline; cursor:pointer;">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
