@extends('admin.layout') {{-- Admin panelinin ana layout'u --}}

@section('content')
    <h2>Kullanıcılar</h2>

    {{-- Filtre formu --}}
    <form method="GET" action="{{ route('admin.users') }}" class="mb-4 d-flex gap-2">
    <input type="text" class="form-control w-auto" name="name" placeholder="İsim ile ara" value="{{ request('name') }}">
    <input type="text" class="form-control w-auto" name="email" placeholder="Email ile ara" value="{{ request('email') }}">
    <button type="submit" class="btn btn-primary">Ara</button>
    <a href="{{ route('admin.users') }}" class="btn btn-secondary">Temizle</a>
</form>


    {{-- Kullanıcı tablosu --}}
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>İsim</th>
            <th>Email</th>
            <th>Yetki</th>
            <th>Rütbe</th>
            <th>Kayıt Tarihi</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_admin ? 'Admin' : 'Kullanıcı' }}</td>
                <td>{{ $user->rank?->name ?? '-' }}</td>
                <td>{{ $user->created_at ? $user->created_at->format('d.m.Y H:i') : '-' }}</td>
                <td>
                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-success btn-sm">Detay</a>

                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu kullanıcıyı silmek istediğinize emin misiniz?')">
                            Sil
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">Kayıtlı kullanıcı bulunamadı.</td>
            </tr>
        @endforelse
    </tbody>
</table>


<div style="margin-top: 15px;">
    @if ($users->onFirstPage() === false)
        <a href="{{ $users->previousPageUrl() }}" class="btn btn-sm btn-primary">Geri</a>
    @endif

    @if ($users->hasMorePages())
        <a href="{{ $users->nextPageUrl() }}" class="btn btn-sm btn-primary">İleri</a>
    @endif
</div>


@endsection
