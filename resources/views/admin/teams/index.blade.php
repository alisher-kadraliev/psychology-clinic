<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Takım Üyeleri</h2>
                <a href="{{ route('teams.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                   Yeni Takım Üye Ekle
                </a>
            </div>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-6 py-3 text-left">Adı</th>
                                    <th class="px-6 py-3 text-left">Pozisyonu</th>
                                    <th class="px-6 py-3 text-left">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                    <tr class="border-b">
                                            <td class="px-6 py-4">{{ $team->title }}</td>
                                        <td class="px-6 py-4">{{ $team->position }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('teams.edit', $team) }}"
                                                class="text-blue-600 hover:text-blue-900 mr-3">Düzenle</a>
                                            <form action="{{ route('teams.destroy', $team) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900"
                                                        onclick="return confirm('Bu üyeyi silmek istediğinize emin misiniz?')">Sil</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
