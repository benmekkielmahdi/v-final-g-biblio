<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes demandes') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center">
    <div class="overflow-x-auto">
        <table class="min-w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Image</th>
                    <th class="border border-gray-300 px-4 py-2">Titre</th>
                    <th class="border border-gray-300 px-4 py-2">Auteur</th>
                    <th class="border border-gray-300 px-4 py-2">État</th>
                </tr>
            </thead>
            <tbody>
                @foreach($demandes as $demande)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">
                        <img style="width:150px"src="{{ asset('storage/'.$demande->oeuvre->image) }}" alt="{{ $demande->oeuvre->titre }}" class="w-24 h-auto">
                    </td>
                    <td class="border border-gray-300 px-4 py-2">{{ $demande->oeuvre->titre }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $demande->oeuvre->auteur }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $demande->etat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

</x-app-layout>