@include('includes.header')
<div class="content">
    <div class="row">
        <div class="col-md-8">
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
                    <h5 class="title">Edit User Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.updateProfile', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Account Created At (disabled)</label>
                                    <input type="text" class="form-control" disabled value="{{ $user->created_at }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $user->name) }}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', $user->email) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control"
                                        value="{{ old('location', $user->location) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" name="contact" class="form-control"
                                        value="{{ old('contact', $user->contact) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 pull-right">
                                <h4 class="card-title">Profile</h4>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-circle">
                                        <img src="{{ $user->profile ? asset($user->profile) : asset('assets/img/placeholder.jpg') }}"
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
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="javascript:void(0)" class="mb-3">
                            <img width="100" class="img-circle"
                                src="{{ $user->profile ? asset($user->profile) : asset('assets/img/image_placeholder.jpg') }}"
                                alt="...">
                        </a>
                    </div>
                    </p>
                </div>
                <div class="card-footer text-center"> <!-- Added text-center class -->
                    <a href="{{ route('user.index') }}" class="mx-auto btn btn-fill btn-primary">Back</a>
                    <!-- Removed text-center class -->
                </div>

            </div>
            <!-- New Section Below -->
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="title">User Details</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static">{{ $user->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static">{{ $user->email }}</p>
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <p class="form-control-static">{{ $user->location }}</p>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <p class="form-control-static">{{ $user->contact }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@include('includes.footer')
