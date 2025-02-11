<x-base-layout>
    <style>
     .custom-image {
	 max-width: 200px;
	 height:auto;
	 display: block;
     }
    </style>
    <div class="flex flex-wrap justify-items-start items-center content-stretch">
    @foreach ($posts as $post) 
	<span class="w-64 h-64 py-10 flex flex-col justify-center items-center">
		<img src="storage/{{ $post->id . $post->name }}" class="max-w-full max-h-full object-contain mx-auto custom-image" /> 
	</span>
    @endforeach
    </div>
</x-base-layout>
