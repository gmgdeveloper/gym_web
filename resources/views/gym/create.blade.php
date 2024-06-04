@include('.includes.header')
<!-- Include Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Add Gym</h1>
            <form action="{{ route('gym.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pull-left mt-3">Basic Info</h4>
                        <a href="{{ route('gym.index') }}" class="pull-right btn btn-fill btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Name and Description Fields -->
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <div class="form-group">
                                    <input type="text" id="name" name="name"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        placeholder="EXAMPLE: Fitness" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="contact">Contact</label>
                                <div class="form-group">
                                    <input type="tel" id="contact" name="contact"
                                        class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}"
                                        placeholder="EXAMPLE: 09123456789" value="{{ old('contact') }}">
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="description">Description</label>
                                <div class="form-group">
                                    <textarea id="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description"
                                        placeholder="EXAMPLE: This is one of the best gyms if you want to lose weight" cols="30" rows="5">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Thumbnail -->
                                <div class="col-md-12 col-sm-12">
                                    <h4 class="card-title">
                                        Thumbnail</h4>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="{{ asset('../../assets/img/image_placeholder.jpg') }}"
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
                            <!-- Fees, Timing, and Location Fields -->
                            <div class="col-md-6">
                                <label for="fees">Fees</label>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-money-coins"></i>
                                        </div>
                                    </div>
                                    <input type="number" id="fees"
                                        class="form-control {{ $errors->has('fees') ? 'is-invalid' : '' }}"
                                        placeholder="Fees" name="fees" value="{{ old('fees') }}">
                                    @error('fees')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Timing Fields -->
                                <label for="timing_from">Timing From</label>
                                <div
                                    class="form-group input-group mt-3 {{ $errors->has('timing_from') ? 'has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-compass-05"></i>
                                        </div>
                                    </div>
                                    <input type="text" id="timing_from"
                                        class="form-control timepicker {{ $errors->has('timing_from') ? 'is-invalid' : (old('timing_from') ? 'is-valid' : '') }}"
                                        name="timing_from" placeholder="Timing From" value="{{ old('timing_from') }}">
                                    @if ($errors->has('timing_from'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('timing_from') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="timing_to">Timing To</label>
                                <div
                                    class="form-group input-group mt-3 {{ $errors->has('timing_to') ? 'has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-compass-05"></i>
                                        </div>
                                    </div>
                                    <input type="text" id="timing_to"
                                        class="form-control timepicker {{ $errors->has('timing_to') ? 'is-invalid' : (old('timing_to') ? 'is-valid' : '') }}"
                                        name="timing_to" placeholder="Timing To" value="{{ old('timing_to') }}">
                                    @if ($errors->has('timing_to'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('timing_to') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <!-- Location Field -->
                                <label for="location">Address</label>
                                <div
                                    class="form-group input-group mt-3 {{ $errors->has('location') ? 'has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tim-icons icon-square-pin"></i>
                                        </div>
                                    </div>
                                    <input type="text" id="location"
                                        class="form-control {{ $errors->has('location') ? 'is-invalid' : (old('location') ? 'is-valid' : '') }}"
                                        name="location" placeholder="Address" value="{{ old('location') }}">
                                    @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <!-- Featured Checkbox -->
                                <div class="form-check mt-4 ml-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" name="is_featured" value="1"
                                            type="checkbox" {{ old('is_featured') ? 'checked' : '' }}>
                                        <span class="form-check-sign"></span>
                                        Featured
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="offset-md-2"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-fill btn-primary btn-block">Add</button>
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
