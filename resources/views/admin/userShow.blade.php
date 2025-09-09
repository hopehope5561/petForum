@extends('admin.layout')

@section('content')
    <h1>Kullanıcı Düzenle</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">İsim</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Soyisim</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('lastName', $user->lastName) }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
        </div>

        <div class="mb-3">
            <label for="is_admin" class="form-label">Yetki</label>
            <select class="form-select" id="is_admin" name="is_admin">
                <option value="0" {{ $user->is_admin ? '' : 'selected' }}>Kullanıcı</option>
                <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="rank_id" class="form-label">Rütbe</label>
            <select class="form-select" id="rank_id" name="rank_id">
                <option value="">- Seçiniz -</option>
                @foreach(\App\Models\Rank::all() as $rank)
                    <option value="{{ $rank->id }}" {{ $user->rank_id == $rank->id ? 'selected' : '' }}>
                        {{ $rank->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="points" class="form-label">Puan</label>
            <input type="number" class="form-control" id="points" name="points" value="{{ old('points', $user->points) }}">
        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
        <a href="{{ route('admin.users') }}" class="btn btn-secondary">Geri Dön</a>
    </form>
@endsection
