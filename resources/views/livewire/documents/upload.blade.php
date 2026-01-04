<div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    <div class="bg-white rounded-xl shadow-sm border p-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">
            Upload Document
        </h2>

        @if (session()->has('success'))
            <div class="mb-4 text-green-700 bg-green-100 rounded-lg px-4 py-2">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="save" class="space-y-6">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Document Title
                </label>
                <input
                    type="text"
                    wire:model.defer="title"
                    class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="Laravel AI Notes"
                >
                @error('title') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Upload File
                </label>
                <input
                    type="file"
                    wire:model="file"
                    class="w-full text-sm text-gray-600
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-lg file:border-0
                           file:bg-indigo-50 file:text-indigo-700
                           hover:file:bg-indigo-100"
                >
                @error('file') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <a href="{{ route('documents.index') }}"
                   class="py-2.5 text-gray-600 hover:underline text-sm">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-6 py-2.5 rounded-lg bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition"
                >
                    Upload
                </button>
            </div>
        </form>
    </div>
</div>
