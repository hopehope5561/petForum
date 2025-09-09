<li>
    @if ($topic->user && $topic->user->image_path)
       <img src="{{ asset('storage/' . $topic->user->image_path) }}" 
     alt="avatar" 
     width="55" 
     object-fit: cover;
     height="55">
    @else
        <img src="{{ asset('path/to/default-avatar.png') }}" class="avatar" />
    @endif
    
    <div class="soru-cevap-content">
        <span class="user">
            {{ $topic->user->name ?? 'Anonim' }} {{ $topic->user->lastname ?? '' }}
        </span>
        <span class="time">{{ $topic->created_at }}</span>
        <div class="question">
            <a href="">{{ Str::limit($topic->title, 70) }}</a>
        </div>
        <div class="homepage-section-question-answer-icon-alert">
            <div class="homepage-section-question-answer-icon-questionnaire">
                <i class="fa-solid fa-chart-pie"></i>
            </div>
            <div class="homepage-section-question-answer-icon-camera">
                <i class="fa-solid fa-camera"></i>
            </div>
        </div>
    </div>
</li>