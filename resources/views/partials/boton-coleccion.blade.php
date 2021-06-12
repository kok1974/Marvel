<div class="text-center">
    @auth
    @php
        $user = Auth::user();
        $hasComic = $user->comics()->where('comics.comic_id', $comic->comic_id)->exists();
    @endphp
        @if (!$hasComic)
        <form action="{{ route('comics-users.mete',['id' => $comic->comic_id, 'userid' => $user->user_id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <button type="submit" class="btn btn-primary btn-sm">Añadir</button>
        </form>
        @else
        <form action="{{ route('comics-users.saca',['id' => $comic->comic_id, 'userid' => $user->user_id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Quitar</button>
        </form>
        @endif
    @endauth
{{-- @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif --}}
</div>
