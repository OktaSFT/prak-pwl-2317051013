@extends('layouts.app')

@section('content')
<div class="relative flex justify-center items-center min-h-[80vh] bg-gradient-to-br from-pink-200 via-white to-blue-200 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
        <img src="https://source.unsplash.com/1600x900/?abstract,gradient" 
             alt="Background" 
             class="w-full h-full object-cover opacity-50 blur-lg">
    </div>

    <!-- Background form -->
    <div class="relative w-full max-w-md bg-white/80 backdrop-blur-md rounded-2xl shadow-2xl p-8 border border-pink-200/50">
        <h1 class="text-2xl font-bold text-center text-pink-600 mb-6">User Enrollment</h1>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama"
                       class="mt-1 w-full px-4 py-2 border border-pink-300 rounded-xl focus:ring-2 focus:ring-pink-400 focus:border-pink-400 outline-none transition bg-white/70">
            </div>

            <!-- NPM -->
            <div>
                <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
                <input type="text" id="npm" name="npm"
                       class="mt-1 w-full px-4 py-2 border border-blue-300 rounded-xl focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none transition bg-white/70">
            </div>

            <!-- Kelas -->
            <div>
                <label for="kelas_id" class="block text-sm font-medium text-gray-700">Kelas</label>
                <select name="kelas_id" id="kelas_id"
                        class="mt-1 w-full px-4 py-2 border border-pink-300 rounded-xl focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none transition bg-white/70">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit -->
            <div class="pt-4">
                <button type="submit"
                        class="w-full py-2.5 bg-gradient-to-r from-pink-400 to-blue-400 hover:from-pink-500 hover:to-blue-500 text-white font-semibold rounded-xl shadow-md transition">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection