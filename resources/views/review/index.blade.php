@include('includes.header')

<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    </div>
                @endif

                <!-- Auto-hide alerts after 3 seconds -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        setTimeout(function() {
                            const alerts = document.querySelectorAll('.alert');
                            alerts.forEach(alert => {
                                alert.style.transition = 'opacity 0.5s ease';
                                alert.style.opacity = '0';
                                setTimeout(() => alert.remove(), 500); // Remove after fade out
                            });
                        }, 3000); // 3000 milliseconds = 3 seconds
                    });
                </script>

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Reviews</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table align-items-center table-flush">
                            <thead class="">
                                <tr>
                                    <th>Reviewer Profile</th>
                                    <th>Reviewer Name</th>
                                    <th>Feedback</th>
                                    <th>Facilities</th>
                                    <th>Coaching</th>
                                    <th>Atmosphere</th>
                                    <th>Overall</th>
                                    <th>Status</th>
                                    <th>Rated Gym's Name</th>
                                    <th>Date</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reviews as $review)
                                    <tr>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript:;" class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip"
                                                    data-original-title="{{ $review->user->name }}">
                                                    <img alt="Image placeholder"
                                                        src="{{ $review->user->profile ? asset($review->user->profile) : asset('assets/img/image_placeholder.jpg') }}">
                                                </a>
                                            </div>
                                        </td>
                                        <td><a
                                                href="{{ route('user.show', $review->user->id) }}">{{ $review->user->name }}</a>
                                        </td>

                                        <td>{{ $review->feedback }}</td>
                                        <td>{{ $review->facilities_rating }}</td>
                                        <td>{{ $review->coaching_rating }}</td>
                                        <td>{{ $review->atmosphere_rating }}</td>
                                        <td>{{ $review->overall_rating }}</td>
                                        <td>
                                            <form id="statusForm-{{ $review->id }}"
                                                action="{{ route('review.status', $review->id) }}" method="POST">
                                                @csrf
                                                <label class="switch">
                                                    <input type="checkbox" {{ $review->status == 1 ? 'checked' : '' }}
                                                        class="status-toggle" data-review-id="{{ $review->id }}"
                                                        data-on-label="<i class='tim-icons icon-check-2'></i>"
                                                        data-off-label="<i class='tim-icons icon-simple-remove'></i>"
                                                        onchange="document.getElementById('statusForm-{{ $review->id }}').submit()">
                                                    <span class="slider"></span>
                                                </label>
                                                <input type="hidden" name="status"
                                                    value="{{ $review->status == 1 ? 0 : 1 }}">
                                            </form>
                                        </td>
                                        <td>
                                            <a
                                                href="{{ route('gym.show', $review->gym->id) }}">{{ $review->gym->name }}</a>
                                        </td>
                                        <td>{{ $review->created_at }}</td>
                                        <td class="text-right">
                                            <a href="{{ route('review.edit', $review->id) }}"
                                                class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                                    class="tim-icons icon-pencil"></i></a>
                                            <button class="btn btn-link btn-danger btn-icon btn-sm remove"
                                                onclick="confirmDelete('{{ route('review.destroy', $review->id) }}')"><i
                                                    class="tim-icons icon-simple-remove"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center">No reviews found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Reviewer Profile</th>
                                    <th>Reviewer Name</th>
                                    <th>Feedback</th>
                                    <th>Facilities</th>
                                    <th>Coaching</th>
                                    <th>Atmosphere</th>
                                    <th>Overall</th>
                                    <th>Status</th>
                                    <th>Rated Gym's Name</th>
                                    <th>Date</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }
        });

        var statusToggles = document.querySelectorAll('.status-toggle');

        statusToggles.forEach(function(toggle) {
            $(toggle).bootstrapSwitch({
                onSwitchChange: function(event, state) {
                    var reviewId = $(this).data('review-id');
                    var status = state ? 1 : 0;
                }
            });
        });
    });

    function confirmDelete(url) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                // Create a form element
                let form = document.createElement('form');
                form.action = url;
                form.method = 'POST';

                // Add CSRF token input
                let csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}'; // Get the CSRF token from Blade

                // Add method input for DELETE
                let method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'DELETE';

                // Append inputs to the form
                form.appendChild(csrfToken);
                form.appendChild(method);

                // Append form to the body and submit it
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>
