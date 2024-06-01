@include('includes.header')
<div class="content">
    <div class="row">
        <div class="col-md-12">
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
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Create Main Page</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('mainpage.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Section 1 - Heading 1</label>
                                    <input type="text" name="s1_heading_1" class="form-control"
                                        value="{{ old('s1_heading_1') }}">
                                    @error('s1_heading_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Section 1 Heading 2</label>
                                    <input type="text" name="s1_heading_2" class="form-control"
                                        value="{{ old('s1_heading_2') }}">
                                    @error('s1_heading_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Section 1 Link Text</label>
                                    <input type="text" name="s1_link_text_1" class="form-control"
                                        value="{{ old('s1_link_text_1') }}">
                                    @error('s1_link_text_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Section 2 Heading 1</label>
                                    <input type="text" name="s2_heading_1" class="form-control"
                                        value="{{ old('s2_heading_1') }}">
                                    @error('s2_heading_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Section 2 Heading 2</label>
                                    <input type="text" name="s2_heading_2" class="form-control"
                                        value="{{ old('s2_heading_2') }}">
                                    @error('s2_heading_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 pr-md-1">
                                <div class="form-group">
                                    <label>Section 2 Placeholder text 1</label>
                                    <input type="text" name="placeholder_text_1" class="form-control"
                                        value="{{ old('placeholder_text_1') }}">
                                    @error('placeholder_text_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Section 2 Placeholder text 2</label>
                                    <input type="text" name="placeholder_text_2" class="form-control"
                                        value="{{ old('placeholder_text_2') }}">
                                    @error('placeholder_text_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Section 2 Placeholder text 3</label>
                                    <input type="text" name="placeholder_text_3" class="form-control"
                                        value="{{ old('placeholder_text_3') }}">
                                    @error('placeholder_text_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Section 2 Link Text</label>
                                    <input type="text" name="s2_link_text_1" class="form-control"
                                        value="{{ old('s2_link_text_1') }}">
                                    @error('s2_link_text_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h4 class="card-title">Section 1 - Background Image</h4>
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
                                            <input type="file" name="s1_bg_img" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 text-center">
                                <h4 class="card-title">Placeholder Image 1</h4>
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
                                            <input type="file" name="placeholder_img_1" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 text-center">
                                <h4 class="card-title">Placeholder Image 2</h4>
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
                                            <input type="file" name="placeholder_img_2" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 text-center">
                                <h4 class="card-title">Placeholder Image 3</h4>
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
                                            <input type="file" name="placeholder_img_3" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">Save</button>
                            <a href="{{ route('dashboard') }}" class="btn btn-fill btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
