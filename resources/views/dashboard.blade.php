@include('/includes/header')


<div class="content">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-warning">
                                <i class="tim-icons icon-user-run"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Total Gyms</p>
                                <h3 class="card-title">{{ $totalGyms }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <a href="{{ route('gym.index') }}">
                            <i class="tim-icons icon-double-right"></i> See All Gyms
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-primary">
                                <i class="tim-icons icon-shape-star"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Total Reviews</p>
                                <h3 class="card-title">{{ $totalReviews }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <a href="{{ route('review.index') }}">
                            <i class="tim-icons icon-double-right"></i> See All Reviews
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-success">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Total Users</p>
                                <h3 class="card-title">{{ $totalUsers }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="stats">
                        <a href="{{ route('user.index') }}">
                            <i class="tim-icons icon-double-right"></i> See All Users
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="tools float-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                                <i class="tim-icons icon-settings-gear-63"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item text-primary" href="#pablo">Action</a>
                                <a class="dropdown-item text-info" href="{{ route('user.index') }}">See All</a>
                                <a class="dropdown-item text-success" href="{{ route('user.create') }}">Add New</a>
                                {{-- <a class="dropdown-item text-danger" href="#pablo">Remove Data</a> --}}
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">Recent Users</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined on</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recentUsers as $user)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="photo">
                                                <img width="100"
                                                    src="{{ $user->profile ? asset($user->profile) : asset('assets/img/placeholder.jpg') }}"
                                                    alt="photo">

                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="tools float-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                                <i class="tim-icons icon-settings-gear-63"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item text-primary" href="#pablo">Action</a>
                                <a class="dropdown-item text-info" href="{{ route('review.index') }}">See All</a>
                                {{-- <a class="dropdown-item text-success" href="{{ route('review.create') }}">Add New</a> --}}
                                {{-- <a class="dropdown-item text-danger" href="#pablo">Remove Data</a> --}}
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title">Recent Reviews</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Feedback</th>
                                    <th>Rated Gym Name</th>
                                    <th>Reviewer Name</th>
                                    <th>Facilities</th>
                                    <th>Coaching</th>
                                    <th>Overall</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recentReviews as $review)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $review->feedback }}</td>
                                        <td>
                                            <a
                                                href="{{ route('gym.show', $review->gym->id) }}">{{ $review->gym->name }}</a>
                                        </td>
                                        <td>
                                            <a
                                                href="{{ route('user.show', $review->user->id) }}">{{ $review->user->name }}</a>
                                        </td>
                                        <td>{{ $review->facilities_rating }}</td>
                                        <td>{{ $review->coaching_rating }}</td>
                                        <td>{{ $review->overall_rating }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">


                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">Recent Gyms</h4>
                        <p class="card-category">Check out the latest gym listings</p>
                    </div>
                    <div>
                        <a href="{{ route('gym.create') }}" class="btn btn-fill btn-primary">Add new Gym</a>
                        <a href="{{ route('gym.index') }}" class="btn btn-fill btn-primary">See All Gyms</a>

                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Thumbnail</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Contact</th>
                                            <th>Location</th>
                                            <th>Fees</th>
                                            <th>Timing</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recentGyms as $gym)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>
                                                    <img width="100"
                                                        src="{{ $gym->thumbnail ? asset($gym->thumbnail) : asset('assets/img/image_placeholder.jpg') }}"
                                                        alt="Thumbnail">
                                                </td>

                                                <td>{{ $gym->name }}</td>
                                                <td>{{ $gym->description }}</td>
                                                <td>{{ $gym->contact }}</td>
                                                <td>{{ $gym->location }}</td>
                                                <td>{{ $gym->fees }}</td>
                                                <td>{{ $gym->timing_from }}-{{ $gym->timing_to }}</td>
                                                <td>{{ $gym->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @include('/includes/footer')
