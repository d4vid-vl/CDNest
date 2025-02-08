<x-layout>
    <div>
        <h1>{{ $user->name }}</h1>
        <p>{{ $user->email }}</p>
        <p>{{ $user->id }}</p>
        <p>{{ $user->created_at }}</p>
    @if (Auth::user()->id == $id)
        <a href="{{ route('profile.edit') }}">Edit</a>
    @endif
    </div>
</x-layout>