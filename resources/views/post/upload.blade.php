<x-base-layout>
    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <h1 class="text-4xl py-4 text-black dark:text-white">Upload</h1>
            <form method="POST" action="/post/upload" enctype="multipart/form-data">
                @csrf
                <input type="file" name="media">
                <x-text-input type="text" name="source"/>
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </form>
        </div>
    </div>
</x-base-layout>
