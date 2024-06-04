@include('.includes.header')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Review</h1>
            <form action="{{ route('review.update', $review->id) }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pull-left mt-3">Review Info</h4>
                        <a href="{{ route('review.index') }}" class="pull-right btn btn-fill btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="feedback">Feedback</label>
                                <div class="form-group">
                                    <textarea id="feedback" class="form-control {{ $errors->has('feedback') ? 'is-invalid' : '' }}" name="feedback"
                                        placeholder="EXAMPLE: The gym is excellent..." cols="30" rows="5">{{ old('feedback', $review->feedback) }}</textarea>
                                    @error('feedback')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="facilities_rating">Facilities Rating</label>
                                <div class="form-group">
                                    <input type="number" id="facilities_rating" name="facilities_rating" min="1"
                                        max="5"
                                        class="form-control {{ $errors->has('facilities_rating') ? 'is-invalid' : '' }}"
                                        value="{{ old('facilities_rating', $review->facilities_rating) }}">
                                    @error('facilities_rating')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="coaching_rating">Coaching Rating</label>
                                <div class="form-group">
                                    <input type="number" id="coaching_rating" name="coaching_rating" min="1"
                                        max="5"
                                        class="form-control {{ $errors->has('coaching_rating') ? 'is-invalid' : '' }}"
                                        value="{{ old('coaching_rating', $review->coaching_rating) }}">
                                    @error('coaching_rating')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="atmosphere_rating">Atmosphere Rating</label>
                                <div class="form-group">
                                    <input type="number" id="atmosphere_rating" name="atmosphere_rating" min="1"
                                        max="5"
                                        class="form-control {{ $errors->has('atmosphere_rating') ? 'is-invalid' : '' }}"
                                        value="{{ old('atmosphere_rating', $review->atmosphere_rating) }}">
                                    @error('atmosphere_rating')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="overall_rating">Overall Rating</label>
                                <div class="form-group">
                                    <input type="number" id="overall_rating" name="overall_rating" min="1"
                                        max="5"
                                        class="form-control {{ $errors->has('overall_rating') ? 'is-invalid' : '' }}"
                                        value="{{ old('overall_rating', $review->overall_rating) }}">
                                    @error('overall_rating')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option class="text-primary" value="0"
                                            {{ $review->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        <option class="text-primary" value="1"
                                            {{ $review->status == 1 ? 'selected' : '' }}>Active</option>
                                    </select>
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
</div>

@include('.includes.footer')
