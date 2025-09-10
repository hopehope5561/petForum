@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">📋 Gelen Şikayetler</h2>

    @if($reports->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Konu</th>
                        <th>Kullanıcı</th>
                        <th>Sebep</th>
                        <th>Açıklama</th>
                     
                        <th>Tarih</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->id }}</td>
                            <td>
                                <a href="{{ route('topic.detail', $report->topic->id) }}" target="_blank">
                                    {{ Str::limit($report->topic->title, 50) }}
                                </a>
                            </td>
                            <td>{{ $report->user->name ?? 'Anonim' }}</td>
                            <td>{{ $report->reason ?? '-' }}</td>
                            <td>{{ $report->description ?? '-' }}</td>
                            <td>{{ $report->created_at->format('d.m.Y H:i') }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- sayfalama --}}
        <div class="mt-3">
            {{ $reports->links() }}
        </div>
    @else
        <div class="alert alert-info">Hiç şikayet bulunamadı.</div>
    @endif
</div>
@endsection
