@extends('admin.layout')

@section('content')
    <div class="text-center mb-4">
        <h2 class="fw-bold">🐾 Expres Mama Forum Dashboard</h2>
        <p class="text-muted">
            Hoş geldiniz, <strong>{{ auth()->user()->name ?? 'Admin' }}</strong>!  
            Burası <b>Expres Mama Forum</b> yönetim paneli.
        </p>
    </div>

    <div class="card shadow-lg border-0">
        <div class="card-body text-center p-5">
            <h4 class="mb-3">📢 Forum Yönetim Alanı</h4>
            <p class="mb-4">
                Buradan forumdaki konuları yönetebilir, üyeleri kontrol edebilir  
                Sol menüyü kullanarak dilediğiniz bölüme geçiş yapabilirsiniz.
            </p>
            
        </div>
    </div>
@endsection
