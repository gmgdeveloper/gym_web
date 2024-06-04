@include('includes.header')

<div class="content">
    <div class="row">
        <div class="col-md-12 mb-5">
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
                    <h4 class="card-title">Gyms</h4>
                    <div>
                        <a href="{{ route('gym.create') }}" class="btn btn-fill btn-primary">Add new Gym</a>
                        <button type="button" class="btn btn-fill btn-primary btn-round" data-toggle="modal"
                            data-target="#exampleModal">
                            Import Gyms from File
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('gyms.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Select a CSV (suggested) or TXT file
                                        to import</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select File</span>
                                            <input type="file" name="file" />
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped align-items-center">
                            <thead class="">
                                <tr>
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Contact</th>
                                    <th>Location</th>
                                    <th>Featured</th>
                                    <th class="text-center">Fees</th>
                                    <th class="text-center">Timing</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($gyms)
                                    @foreach ($gyms as $gym)
                                        <tr>
                                            <td>
                                                <div class="image-container">
                                                    <img width="100"
                                                        src="{{ $gym->thumbnail ? asset($gym->thumbnail) : asset('assets/img/image_placeholder.jpg') }}"
                                                        alt="...">
                                                </div>
                                            </td>
                                            <td><a href="{{ route('gym.show', $gym->id) }}">{{ $gym->name }}</a></td>
                                            <td>{{ $gym->description }}</td>
                                            <td>{{ $gym->contact }}</td>
                                            <td>{{ $gym->location }}</td>
                                            <td>
                                                <form id="featuredForm-{{ $gym->id }}"
                                                    action="{{ route('gym.featured', $gym->id) }}" method="POST">
                                                    @csrf
                                                    <label class="switch">
                                                        <input type="checkbox"
                                                            {{ $gym->is_featured == 1 ? 'checked' : '' }}
                                                            class="featured-toggle" data-gym-id="{{ $gym->id }}"
                                                            data-on-label="<i class='tim-icons icon-check-2'></i>"
                                                            data-off-label="<i class='tim-icons icon-simple-remove'></i>"
                                                            onchange="document.getElementById('featuredForm-{{ $gym->id }}').submit()">
                                                        <span class="slider"></span>
                                                    </label>
                                                    <input type="hidden" name="is_featured"
                                                        value="{{ $gym->is_featured == 1 ? 0 : 1 }}">
                                                </form>
                                            </td>

                                            <td class="text-center">{{ $gym->fees }}</td>
                                            <td class="text-center">{{ $gym->timing_from }} - {{ $gym->timing_to }}
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('gym.edit', $gym->id) }}"
                                                    class="btn btn-link btn-warning btn-icon btn-sm edit"><i
                                                        class="tim-icons icon-pencil"></i></a>
                                                <button class="btn btn-link btn-danger btn-icon btn-sm remove"
                                                    onclick="confirmDelete('{{ route('gym.destroy', $gym->id) }}')"><i
                                                        class="tim-icons icon-simple-remove"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Thumbnail</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Contact</th>
                                    <th>Location</th>
                                    <th>Featured</th>
                                    <th class="text-center">Fees</th>
                                    <th class="text-center">Timing</th>
                                    <th class="disabled-sorting text-right">Actions</th>
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

        var featuredToggles = document.querySelectorAll('.featured-toggle');

        featuredToggles.forEach(function(toggle) {
            $(toggle).bootstrapSwitch({
                onSwitchChange: function(event, state) {
                    var reviewId = $(this).data('gym-id');
                    var is_featured = state ? 1 : 0;
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
                let form = document.createElement('form');
                form.action = url;
                form.method = 'POST';

                let csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';

                let method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'DELETE';

                form.appendChild(csrfToken);
                form.appendChild(method);

                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>
