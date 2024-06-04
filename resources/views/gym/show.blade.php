@include('includes.header')
<!-- Include Flatpickr CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
                    <h5 class="title">Edit Gym Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('gym.updateGymProfile', $gym->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Gym Added At (disabled)</label>
                                    <input type="text" class="form-control" disabled value="{{ $gym->created_at }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $gym->name) }}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" name="contact" class="form-control"
                                        value="{{ old('contact', $gym->contact) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{ old('description', $gym->description) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control"
                                        value="{{ old('location', $gym->location) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Featured</label>
                                    <select name="is_featured" class="form-control">
                                        <option class="text-primary" value="0"
                                            {{ $gym->is_featured == 0 ? 'selected' : '' }}>No</option>
                                        <option class="text-primary" value="1"
                                            {{ $gym->is_featured == 1 ? 'selected' : '' }}>Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label>Fees</label>
                                    <input type="text" name="fees" class="form-control"
                                        value="{{ old('fees', $gym->fees) }}">
                                </div>
                            </div>
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Timing From</label>
                                    <input type="text" id="timing_from" name="timing_from"
                                        class="form-control timepicker"
                                        value="{{ old('timing_from', $gym->timing_from) }}">
                                </div>
                            </div>
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Timing To</label>
                                    <input type="text" id="timing_to" name="timing_to"
                                        class="form-control timepicker"
                                        value="{{ old('timing_to', $gym->timing_to) }}">
                                </div>
                            </div>

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

                            <div class="col-md-12 col-sm-12 pull-right">
                                <h4 class="card-title">Thumbnail</h4>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="{{ $gym->thumbnail ? asset($gym->thumbnail) : asset('assets/img/image_placeholder.jpg') }}"
                                            alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="thumbnail" />
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
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="javascript:void(0)" class="mb-3">
                            <img width="100" class="img-circle"
                                src="{{ $gym->thumbnail ? asset($gym->thumbnail) : asset('assets/img/image_placeholder.jpg') }}"
                                alt="...">
                        </a>
                    </div>
                </div>
                <div class="card-footer text-center"> <!-- Added text-center class -->
                    <a href="{{ route('gym.index') }}" class="mx-auto btn btn-fill btn-primary">Back</a>
                    <!-- Removed text-center class -->
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="title">Gym Details</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static">{{ $gym->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <p class="form-control-static">{{ $gym->contact }}</p>
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <p class="form-control-static">{{ $gym->location }}</p>
                    </div>
                    <div class="form-group">
                        <label>Fees</label>
                        <p class="form-control-static">{{ $gym->fees }}</p>
                    </div>
                    <div class="form-group">
                        <label>Timing</label>
                        <p class="form-control-static">{{ $gym->timing_from }}-{{ $gym->timing_to }}</p>
                    </div>
                    <div class="form-group">
                        <label>Featured</label>
                        <p class="form-control-static">{{ $gym->is_featured == 1 ? 'Yes' : 'No' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
