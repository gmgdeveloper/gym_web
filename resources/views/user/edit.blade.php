@include('.includes.header')
<!-- Include Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit User</h1>
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pull-left mt-3">Basic Info</h4>
                        <a href="{{ route('user.index') }}" class="pull-right btn btn-fill btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Name and Description Fields -->
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <div class="form-group">
                                    <input type="text" id="name" name="name"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        placeholder="EXAMPLE: Fitness" value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="contact">Contact</label>
                                <div class="form-group">
                                    <input type="text" id="contact" name="contact"
                                        class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}"
                                        placeholder="EXAMPLE: 09123456789" value="{{ old('contact', $user->contact) }}">
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <input type="password" id="password" name="password"
                                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        placeholder="Password" value="{{ old('password') }}">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Profile -->
                                <div class="col-md-12 col-sm-12">
                                    <h4 class="card-title">Profile</h4>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-circle">
                                            <img src="{{ $user->profile ? asset($user->profile) : asset('../../assets/img/placeholder.jpg') }}"
                                                alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="profile" />
                                            </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-email-85"></i>
                                        </div>
                                    </div>
                                    <input type="email" id="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        placeholder="email" name="email" value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="location">Address</label>
                                <div class="form-group input-group {{ $errors->has('location') ? 'has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-square-pin"></i>
                                        </div>
                                    </div>
                                    <input type="text" id="location"
                                        class="form-control {{ $errors->has('location') ? 'is-invalid' : (old('location') ? 'is-valid' : '') }}"
                                        name="location" placeholder="Address"
                                        value="{{ old('location', $user->location) }}">
                                    @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="password_confirmation">Confirm password</label>
                                <div
                                    class="form-group input-group {{ $errors->has('password_confirmation') ? 'has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-square-pin"></i>
                                        </div>
                                    </div>
                                    <input type="password" id="password_confirmation"
                                        class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : (old('password_confirmation') ? 'is-valid' : '') }}"
                                        name="password_confirmation" placeholder="password_confirmation"
                                        value="{{ old('password_confirmation') }}">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="offset-md-2"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-fill btn-primary btn-block">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Include Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Initialize Flatpickr -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr(".timepicker", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "h:i K",
            time_24hr: false,
            onValueUpdate: function(selectedDates, dateStr, instance) {
                // Custom logic when a time is selected
                console.log("Selected time: ", dateStr);
            }
        });
    });
</script>

@include('.includes.footer')
