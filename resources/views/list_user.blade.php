@extends('layouts.app')

@section('content')
<div class="relative flex justify-center items-center min-h-[80vh] bg-gradient-to-br from-pink-200 via-white to-blue-200 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
        <img src="https://source.unsplash.com/1600x900/?abstract,pattern"
             alt="Background"
             class="w-full h-full object-cover opacity-50 blur-lg">
    </div>

    <!-- Background Table -->
    <div class="relative w-full max-w-4xl bg-white/80 backdrop-blur-md rounded-2xl shadow-2xl p-8 border border-pink-200/50">
        <h1 class="text-2xl font-bold text-center text-pink-600 mb-6">User Directory</h1>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-xl overflow-hidden">
                <thead class="bg-gradient-to-r from-pink-300 to-blue-300 text-white">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">NPM</th>
                        <th class="px-4 py-2 text-left">Kelas</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white/70">
                    @foreach ($users as $user)
                        <tr class="hover:bg-pink-50 transition">
                            <td class="px-4 py-2">{{ $user->id }}</td>
                            <td class="px-4 py-2">{{ $user->nama }}</td>
                            <td class="px-4 py-2">{{ $user->npm }}</td>
                            <td class="px-4 py-2">{{ $user->nama_kelas }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
