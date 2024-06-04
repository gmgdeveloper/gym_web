@include('.includes.header')

<div class="content">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card ">
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
                <div class="card-header">
                    <h4 class="card-title pull-left mt-3"> Users</h4>
                    <a href="{{ route('user.create') }}" class="pull-right btn btn-fill btn-primary">Add New user</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="simple-table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Profile</th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Location
                                    </th>
                                    <th>
                                        Contact
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users)

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <div class="image-container">
                                                    <img width="100" class="img-circle"
                                                        src="{{ $user->profile ? asset($user->profile) : asset('../../assets/img/image_placeholder.jpg') }}"
                                                        alt="...">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                {{ $user->location }}
                                            </td>
                                            <td>
                                                {{ $user->contact }}
                                            </td>
                                            <td>
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete('{{ route('user.destroy', $user->id) }}')">Delete</button>
                                                <script>
                                                    function confirmDelete(url) {
                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You won't be able to revert this!",
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then((result) => {
                                                            if (result.value === true) {
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
                                            </td>

                                        </tr>
                                    @endforeach

                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('.includes.footer')
