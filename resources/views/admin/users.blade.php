@extends('admin.layout') {{-- Admin panelinin ana layout'u --}}

@section('content')
    <h1>Kullanıcılar</h1>

    {{-- Filtre formu --}}
    <form method="GET" action="{{ route('admin.users') }}" class="mb-4">
        <input type="text" name="name" placeholder="İsim ile ara" value="{{ request('name') }}">
        <input type="text" name="email" placeholder="Email ile ara" value="{{ request('email') }}">
        <button type="submit">Ara</button>
        <a href="{{ route('admin.users') }}">Temizle</a>
    </form>

    {{-- Kullanıcı tablosu --}}
    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>İsim</th>
                <th>Soyisim</th>
                <th>Email</th>
                <th>Yetki</th>
                <th>Rütbe</th>
                <th>Kayıt Tarihi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin ? 'Admin' : 'Kullanıcı' }}</td>
                 <td>

                {{ $user->created_at ? $user->created_at->format('d.m.Y H:i') : '-' }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="5">Kayıtlı kullanıcı bulunamadı.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Sayfalama linkleri --}}
    <div style="margin-top: 15px;">
        {{ $users->links() }}
    </div>
@endsection
