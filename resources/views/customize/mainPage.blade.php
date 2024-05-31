@include('.includes.header')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Main Page</h1>
            <form action="{{ route('mainpage.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">First Section</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="S1_bg_img">Background Image</label>
                            <input type="file" id="S1_bg_img" name="S1_bg_img" class="form-control">
                            @error('S1_bg_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="S1_heading_1">Heading 1</label>
                            <input type="text" id="S1_heading_1" name="S1_heading_1" class="form-control"
                                value="{{ old('S1_heading_1', $mainPage->S1_heading_1) }}">
                            @error('S1_heading_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="S1_heading_2">Heading 2</label>
                            <input type="text" id="S1_heading_2" name="S1_heading_2" class="form-control"
                                value="{{ old('S1_heading_2', $mainPage->S1_heading_2) }}">
                            @error('S1_heading_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="S1_link_text_1">Link Text</label>
                            <input type="text" id="S1_link_text_1" name="S1_link_text_1" class="form-control"
                                value="{{ old('S1_link_text_1', $mainPage->S1_link_text_1) }}">
                            @error('S1_link_text_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Second Section</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="S2_heading_1">Heading 1</label>
                            <input type="text" id="S2_heading_1" name="S2_heading_1" class="form-control"
                                value="{{ old('S2_heading_1', $mainPage->S2_heading_1) }}">
                            @error('S2_heading_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="S2_heading_2">Heading 2</label>
                            <input type="text" id="S2_heading_2" name="S2_heading_2" class="form-control"
                                value="{{ old('S2_heading_2', $mainPage->S2_heading_2) }}">
                            @error('S2_heading_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="placeholder_image_1">Placeholder Image 1</label>
                            <input type="file" id="placeholder_image_1" name="placeholder_image_1"
                                class="form-control">
                            @error('placeholder_image_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="placeholder_text_1">Placeholder Text 1</label>
                            <input type="text" id="placeholder_text_1" name="placeholder_text_1" class="form-control"
                                value="{{ old('placeholder_text_1', $mainPage->placeholder_text_1) }}">
                            @error('placeholder_text_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="placeholder_image_2">Placeholder Image 2</label>
                            <input type="file" id="placeholder_image_2" name="placeholder_image_2"
                                class="form-control">
                            @error('placeholder_image_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="placeholder_text_2">Placeholder Text 2</label>
                            <input type="text" id="placeholder_text_2" name="placeholder_text_2" class="form-control"
                                value="{{ old('placeholder_text_2', $mainPage->placeholder_text_2) }}">
                            @error('placeholder_text_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="placeholder_image_3">Placeholder Image 3</label>
                            <input type="file" id="placeholder_image_3" name="placeholder_image_3"
                                class="form-control">
                            @error('placeholder_image_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="placeholder_text_3">Placeholder Text 3</label>
                            <input type="text" id="placeholder_text_3" name="placeholder_text_3"
                                class="form-control"
                                value="{{ old('placeholder_text_3', $mainPage->placeholder_text_3) }}">
                            @error('placeholder_text_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="S2_link_text_1">Link Text</label>
                            <input type="text" id="S2_link_text_1" name="S2_link_text_1" class="form-control"
                                value="{{ old('S2_link_text_1', $mainPage->S2_link_text_1) }}">
                            @error('S2_link_text_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('.includes.footer')
