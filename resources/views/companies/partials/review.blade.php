<!-- resources/views/partials/review.blade.php -->

<li class="review-box">
    <div class="review-details">
        <h5>{{ $review['user']->name }}</h5>
        <div class="star-rating">
            @for ($i = 1; $i <= 5; $i++)
                <span class="fa fa-star{{ $i <= $review['rating'] ? '' : '-o' }}"></span>
            @endfor
        </div>
        <p>{{ $review['content'] }}</p>
        <span class="review-date">{{ \Carbon\Carbon::parse($review['date'])->format('F d, Y') }}</span>
    </div>
</li>
