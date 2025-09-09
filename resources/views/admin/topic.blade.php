@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Konular</h2>

    {{-- Filtreleme Formu --}}
    <form method="GET" action="" class="row g-2 mb-4">
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Ara..." value="{{ request('search') }}">
        </div>
        <div class="col-md-3">
            <select name="category" class="form-select">
                <option value="">Kategori Seç</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" 
                        {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <select name="sort" class="form-select">
                <option value="desc" {{ request('sort')=='desc' ? 'selected' : '' }}>En Yeni</option>
                <option value="asc" {{ request('sort')=='asc' ? 'selected' : '' }}>En Eski</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Filtrele</button>
        </div>
    </form>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    {{-- Tablo --}}
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Başlık</th>
                        <th>Kategori</th>
                        <th>Oluşturulma</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($topics as $topic)
                        <tr>
                            <td>{{ $topic->id }}</td>
                            <td>{{ $topic->title }}</td>
                            <td>{{ $topic->category->name ?? '-' }}</td>
                        
                            <td>{{ $topic->created_at->format('d.m.Y H:i') }}</td>
                            <td>
                                
        <form action="{{ route('admin.topics.destroy', $topic->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <a href="{{ route('admin.topics.show', $topic->id) }}" class="btn btn-sm btn-success">
                                        Detay
                                    </a>
                                    @method('DELETE')
                                    <button onclick="return confirm('Silmek istediğinize emin misiniz?')" 
                                            class="btn btn-sm btn-danger">
                                        Sil
                                    </button>
                                    
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Kayıt bulunamadı.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Sayfalama --}}
    <div class="mt-3">
        {{ $topics->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
