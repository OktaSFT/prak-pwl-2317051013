@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-pink-100 via-white to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-2xl p-8">
        <h1 class="text-3xl font-bold text-center text-pink-600 mb-8">User Directory</h1>

        {{-- ✅ Notifikasi sukses --}}
        @if(session('success'))
            <div class="text-center mb-6">
                <div class="inline-block px-6 py-3 bg-green-100 border border-green-300 text-green-700 rounded-xl shadow-sm">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        {{-- ✅ Tombol Tambah User --}}
        <div class="flex justify-end mb-6">
            <a href="{{ route('user.create') }}" 
                class="px-5 py-2.5 bg-gradient-to-r from-blue-400 to-pink-400 text-white font-semibold rounded-xl shadow-md hover:from-blue-500 hover:to-pink-500 transition">
                + Tambah User
            </a>
        </div>

        {{-- ✅ Tabel tanpa garis hitam --}}
        <div class="overflow-hidden rounded-xl shadow-md">
            <table class="min-w-full text-center">
                <thead class="bg-gradient-to-r from-pink-200 to-blue-200 text-gray-700 uppercase text-sm tracking-wider">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">NPM</th>
                        <th class="px-6 py-3">Kelas</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-pink-100">
                    @forelse ($users as $index => $user)
                        <tr class="hover:bg-pink-50 transition">
                            <td class="px-6 py-3">{{ $index + 1 }}</td>
                            <td class="px-6 py-3">{{ $user->nama }}</td>
                            <td class="px-6 py-3">{{ $user->npm }}</td>
                            <td class="px-6 py-3">{{ $user->nama_kelas }}</td>
                            <td class="px-6 py-3">
                                <div class="flex justify-center gap-2">
                                    {{-- Tombol Edit (Biru) --}}
                                    <a href="{{ route('user.edit', $user->id) }}" 
                                       class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg text-sm font-semibold transition">
                                        Edit
                                    </a>

                                    {{-- Tombol Hapus (Merah) --}}
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" 
                                          onsubmit="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg text-sm font-semibold transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-6 text-gray-500 italic">Belum ada data user.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
