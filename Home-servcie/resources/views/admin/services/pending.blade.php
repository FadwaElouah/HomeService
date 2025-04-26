@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Services en attente d'approbation</h1>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Titre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Prix
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Prestataire
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Date de soumission
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($services as $service)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset('storage/' . $service->image_path) }}" alt="{{ $service->title }}" class="h-16 w-16 object-cover rounded">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">{{ $service->title }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $service->price }} DH</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $service->user->name }}</div>
                        <div class="text-sm text-gray-500">{{ $service->phone }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-500">{{ $service->created_at->format('d/m/Y H:i') }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                        <button onclick="openServiceModal({{ $service->id }})" class="text-indigo-600 hover:text-indigo-900">Voir détails</button>

                        <form action="{{ route('admin.services.approve', $service->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-green-600 hover:text-green-900">Approuver</button>
                        </form>

                        <button onclick="openRejectModal({{ $service->id }})" class="text-red-600 hover:text-red-900">Rejeter</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-500">
                        Aucun service en attente d'approbation
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="px-6 py-4">
            {{ $services->links() }}
        </div>
    </div>
</div>

<!-- Détails du service Modal -->
<div id="service-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg p-6 max-w-2xl mx-4 w-full">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-medium" id="modal-title"></h3>
            <button onclick="closeServiceModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div id="modal-content" class="space-y-4">
            <!-- Contenu dynamique ici -->
        </div>
    </div>
</div>

<!-- Reject Modal -->
<div id="reject-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg p-6 max-w-md mx-4 w-full">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-medium">Rejeter le service</h3>
            <button onclick="closeRejectModal()" class="text-gray-500 hover:text-gray-700">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <form id="reject-form" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="admin_comment" class="block text-sm font-medium text-gray-700 mb-1">
                    Raison du rejet (sera envoyée au prestataire)
                </label>
                <textarea id="admin_comment" name="admin_comment" rows="4" class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-2 border" required></textarea>
            </div>
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="closeRejectModal()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-medium transition-colors">
                    Annuler
                </button>
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                    Confirmer le rejet
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    function openServiceModal(serviceId) {
        // Faire une requête AJAX pour obtenir les détails du service
        fetch(`/admin/services/${serviceId}/details`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('modal-title').textContent = data.title;

                const content = document.getElementById('modal-content');
                content.innerHTML = `
                    <div class="flex justify-center mb-4">
                        <img src="${data.image_url}" alt="${data.title}" class="h-48 object-cover rounded">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Prix</p>
                            <p class="text-sm">${data.price} DH</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Téléphone</p>
                            <p class="text-sm">${data.phone}</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Description</p>
                        <p class="text-sm">${data.description || 'Aucune description fournie'}</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Prestataire</p>
                        <p class="text-sm">${data.user_name} (${data.user_email})</p>
                    </div>
                `;

                document.getElementById('service-modal').classList.remove('hidden');
            });
    }

    function closeServiceModal() {
        document.getElementById('service-modal').classList.add('hidden');
    }

    function openRejectModal(serviceId) {
        document.getElementById('reject-form').action = `/admin/services/${serviceId}/reject`;
        document.getElementById('reject-modal').classList.remove('hidden');
    }

    function closeRejectModal() {
        document.getElementById('reject-modal').classList.add('hidden');
    }
</script>
@endpush
@endsection
