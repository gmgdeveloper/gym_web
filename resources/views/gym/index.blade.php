@include('.includes.header')

<div class="content">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title pull-left mt-3"> Gyms</h4>
                    <a href="{{ route('gym.create') }}" class="pull-right btn btn-fill btn-primary">Add New Gym</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="simple-table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Thumbnail</th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>Contact</th>
                                    <th>
                                        Location
                                    </th>
                                    <th>
                                        Featured
                                    </th>
                                    <th class="text-center">
                                        Fees
                                    </th>
                                    <th class="text-center">
                                        Timing
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($gyms)

                                    @foreach ($gyms as $gym)
                                        <tr>
                                            <td>
                                                <div class="image-container">
                                                    <img width="100"
                                                        src="{{ $gym->thumbnail ? asset($gym->thumbnail) : asset('../../assets/img/image_placeholder.jpg') }}"
                                                        alt="...">
                                                </div>
                                            </td>
                                            <td>
                                                {{ $gym->name }}
                                            </td>
                                            <td>
                                                {{ $gym->description }}
                                            </td>
                                            <td>
                                                {{ $gym->contact }}
                                            </td>
                                            <td>
                                                {{ $gym->location }}
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox" {{ $gym->is_featured == 1 ? 'checked' : '' }}
                                                    name="checkbox" class="bootstrap-switch"
                                                    data-on-label="<i class='tim-icons icon-check-2'></i>"
                                                    data-off-label="<i class='tim-icons icon-simple-remove'></i>" />
                                            </td>
                                            <td class="text-center">
                                                {{ $gym->fees }}
                                            </td>
                                            <td class="text-center">
                                                {{ $gym->timing_from }} - {{ $gym->timing_to }}
                                            </td>
                                            <td class="mx-auto text-center">
                                                <a href="{{ route('gym.edit', $gym->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete('{{ route('gym.destroy', $gym->id) }}')">Delete</button>
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
