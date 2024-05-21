@include('.includes.header')

<div class="content">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title"> Gyms</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="simple-table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Location
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
                                                {{ $gym->name }}
                                            </td>
                                            <td>
                                                {{ $gym->description }}
                                            </td>
                                            <td>
                                                {{ $gym->location }}
                                            </td>
                                            <td class="text-center">
                                                {{ $gym->fees }}
                                            </td>
                                            <td class="text-center">
                                                {{ $gym->timing_from }}-{{ $gym->timing_to }}
                                            </td>
                                            <td>
                                                <a href="{{ route('gym.edit', $gym->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete('{{ route('gym.destroy', $gym->id) }}')">Delete</button>
                                                <form id="delete-form-{{ $gym->id }}"
                                                    action="{{ route('gym.destroy', $gym->id) }}" method="POST"
                                                    style="display:none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <script>
                                                    function confirmDelete(url) {
                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You won't be able to revert this!",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                // Find the form and submit it
                                                                let form = document.createElement('form');
                                                                form.action = url;
                                                                form.method = 'POST';
                                                                form.innerHTML = `
                                                                    @csrf
                                                                    @method('DELETE')
                                                                `;
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
