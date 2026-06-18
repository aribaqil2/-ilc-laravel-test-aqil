<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Pengguna (Khusus Admin)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 text-green-700 px-4 py-3 rounded">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="mb-4 bg-red-100 text-red-700 px-4 py-3 rounded">{{ session('error') }}</div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role Saat Ini</th>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Aksi Kelola</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($users as $index => $user)
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $user->name }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600">{{ $user->email }}</td>
                                        <td class="px-6 py-4 text-sm">
                                            <span class="px-2 inline-flex text-xs font-semibold rounded-full {{ $user->role === 'admin' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-center">
                                            @if($user->id !== Auth::id())
                                                <form action="{{ route('users.updateRole', $user->id) }}" method="POST" class="inline-block mr-4">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="role" onchange="this.form.submit()" class="text-xs rounded border-gray-300 py-1">
                                                        <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Set User</option>
                                                        <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Set Admin</option>
                                                    </select>
                                                </form>

                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus permanen akun user ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Hapus</button>
                                                </form>
                                            @else
                                                <span class="text-xs text-gray-400 italic">Akun Anda Sendiri</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>