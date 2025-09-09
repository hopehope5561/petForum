@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Konu Detayı</h2>

    <div class="card mb-4">
        <div class="card-body">
            <h4>{{ $topic->title }}</h4>
            <p class="text-muted">
                <strong>Kullanıcı:</strong> {{ $topic->user->name ?? 'Bilinmiyor' }} <br>
                <strong>Kategori:</strong> {{ $topic->category->name ?? '-' }} <br>
                <strong>Tarih:</strong> {{ $topic->created_at->format('d.m.Y H:i') }}
            </p>
            <p>{{ $topic->content ?? '' }}</p>
        </div>
    </div>

    <h5>Yorumlar</h5>
<div class="card">
    <div class="card-body">
        @forelse($topic->comments as $comment)
            <div class="mb-3 border-bottom pb-2 d-flex justify-content-between align-items-start">
                <div>
                    <strong>{{ $comment->user->name ?? 'Anonim' }}</strong> 
                    <span class="text-muted small">
                        ({{ $comment->created_at->format('d.m.Y H:i') }})
                    </span>
                    <p>{{ $comment->content }}</p>
                </div>
                <form action="{{ route('admin.comments.destroy', $comment->id) }}" 
                      method="POST" 
                      onsubmit="return confirm('Bu yorumu silmek istediğinize emin misiniz?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Sil</button>
                </form>
            </div>
        @empty
            <p>Henüz yorum yapılmamış.</p>
        @endforelse
    </div>
</div>


    <a href="{{ route('admin.topics') }}" class="btn btn-secondary mt-3">← Geri Dön</a>
</div>
@endsection
