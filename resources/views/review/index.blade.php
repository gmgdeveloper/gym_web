@include('includes.header')

<div class="content">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title pull-left mt-3">Reviews</h4>
                    {{-- <a href="{{ route('review.create') }}" class="pull-right btn btn-fill btn-primary">Add New Review</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="simple-table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Reviewer Profile</th>
                                    <th>Reviewer Name</th>
                                    <th>Feedback</th>
                                    <th>Rating</th>
                                    <th>Status</th>
                                    <th>Rated Gym's name</th>
                                    <th>Gym Thumbnail</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reviews as $review)
                                    <tr>
                                        <td>
                                            <div class="image-container">
                                                <img width="100"
                                                    src="{{ $review->user->profile ? asset($review->user->profile) : asset('assets/img/image_placeholder.jpg') }}"
                                                    alt="...">
                                            </div>
                                        </td>
                                        <td>{{ $review->user->name }}</td>
                                        <td>{{ $review->feedback }}</td>
                                        <td>{{ $review->rating }}</td>
                                        <td class="text-center">
                                            <input type="checkbox" {{ $review->status == 1 ? 'checked' : '' }}
                                                name="checkbox"
                                                class="status-toggle-{{ $review->id }} bootstrap-switch"
                                                data-review-id="{{ $review->id }}"
                                                data-on-label="<i class='tim-icons icon-check-2'></i>"
                                                data-off-label="<i class='tim-icons icon-simple-remove'></i>" />
                                        </td>

                                        <td>{{ $review->gym->name }}</td>
                                        <td class="text-center">
                                            <img src="{{ $review->gym->thumbnail ? asset($review->gym->thumbnail) : asset('assets/img/image_placeholder.jpg') }}"
                                                alt="Gym Thumbnail" style="max-width: 100px;">
                                        </td>
                                        <td>{{ $review->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No reviews found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var statusToggles = document.querySelectorAll('.status-toggle-{{ $review->id }}');

        statusToggles.forEach(function(toggle) {
            toggle.addEventListener('change', function() {
                var status = this.checked ? 1 : 0;
                var reviewId = this.dataset.reviewId;

                // Simulate form submission with FormData
                var formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('status', status);

                // Create a new XMLHttpRequest
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/updateReview/' + reviewId);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);
                    } else {
                        console.error('Request failed. Status: ' + xhr.status);
                    }
                };
                xhr.onerror = function() {
                    console.error('Request failed');
                };
                xhr.send(formData);
            });
        });
    });
</script>
