@include('frontend.layouts.headertwo')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<main>
    <h1>6 gyms with "aa" in their name</h1>
    <div class="school-list">
        <a class="text-dark text-decoration-none" href="{{route('filter')}}">
            <div class="school-item">
                <div class="rating" style="background-color: #ffeb3b;">3.9</div>
                <div class="school-info">
                    <h2>AA Gym of Architecture - Bedford Square</h2>
                    <p>1 ratings</p>
                </div>
            </div>
        </a>
        <a class="text-dark text-decoration-none" href="{{route('filter')}}">
            <div class="school-item">
                <div class="rating" style="background-color: #b2ff59;">4.8</div>
                <div class="school-info">
                    <h2>AA Gym of Architecture - Hooke Park</h2>
                    <p>1 ratings</p>
                    <span>Dorset, LONDON</span>
                </div>
            </div>
        </a>

        <div class="lastbtn">
            <a href="#" class="btn btn-primary first_a mb-2">Show More</a>
            <br>
            <span class="first_span mb-2">Don't see the school you're looking <br> for?</span>
            <br>

            <a href="#" class="text-dark mb-2" data-toggle="modal" data-target="#addGymModal">Add a Gym</a>
        </div>
    </div>
</main>

<!-- Add Gym Modal -->
<div class="modal fade" id="addGymModal" tabindex="-1" role="dialog" aria-labelledby="addGymModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGymModalLabel">Add a Gym</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="gymName">Gym Name</label>
                        <input type="text" class="form-control" id="gymName" placeholder="Enter gym name">
                    </div>
                    <div class="form-group">
                        <label for="gymLocation">Location</label>
                        <input type="text" class="form-control" id="gymLocation" placeholder="Enter location">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Gym</button>
            </div>
        </div>
    </div>
</div>

@include('frontend.layouts.footertwo')

<!-- Include Bootstrap JS and dependencies (jQuery and Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
