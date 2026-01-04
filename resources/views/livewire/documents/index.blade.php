<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">
            📄 My Documents
        </h1>
        


        <a href="{{ route('documents.create') }}"
           class="px-5 py-2.5 rounded-lg bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition">
            Upload Document
        </a>
    </div>

    @if($documents->isEmpty())
        <div class="bg-white border border-dashed border-gray-300 rounded-xl p-12 text-center">
            <p class="text-gray-500 mb-4">No documents uploaded yet.</p>
            <a href="{{ route('documents.create') }}"
               class="text-indigo-600 font-medium hover:underline">
                Upload your first document
            </a>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($documents as $document)
                <div class="bg-white rounded-xl shadow-sm border p-6 flex flex-col justify-between">

                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">
                            {{ $document->title }}
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            {{ $document->created_at->format('d M Y') }}
                        </p>
                    </div>

                    <div class="flex justify-between items-center mt-6">
                        <span class="px-3 py-1 text-xs rounded-full font-medium
                            {{ $document->status === 'processed'
                                ? 'bg-green-100 text-green-700'
                                : 'bg-yellow-100 text-yellow-700' }}">
                            {{ ucfirst($document->status) }}
                        </span>

                        <button class="text-indigo-600 text-sm font-medium hover:underline">
                            Chat →
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
