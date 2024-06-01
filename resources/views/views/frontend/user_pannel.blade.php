@include('frontend.layouts.user_pannel_header')

<main>
    <div class="profile-container">
        <h2>Hey, Siraj</h2>
        <nav>
            <ul>
                <li id="profile-link" class="active" onclick="showSection('profile')">Profile</li>
                <li id="account-settings-link" onclick="showSection('account-settings')">Account Settings</li>
                <li id="ratings-link" onclick="showSection('ratings')">Ratings</li>
               <li id="saved-gyms-link" onclick="showSection('saved-gyms')">Saved Gyms</li>
            </ul>
        </nav>
        <div id="profile" class="content-section active">
            <div class="profile-info">
                <div class="profile-item">
                    <span class="label">First Name</span>
                    <span>Siraj</span>
                </div>
                <div class="profile-item">
                    <span class="label">Last Name</span>
                    <span>Umrani</span>
                </div>
                <div class="profile-item">
                    <span class="label">Gym</span>
                    <span>FitZone Fitness Center</span>
                </div>
               
            </div>
        </div>
        
        <div id="account-settings" class="content-section" style="display: none;">
            <div class="upper-inputs">
                <h3>Account Settings</h3>
                <button class="edit-button"><i class="fas fa-edit"></i> Edit</button>
            </div>
            <div class="account-item">
                <span class="label">Email</span>
                <span class="value">sirajumrani110@gmail.com</span>
            </div>
            <div class="account-item">
                <span class="label">Password</span>
                <span class="value">*********</span>
            </div>
        </div>
        <div id="ratings" class="content-section" style="display: none;">
            <h3>Ratings</h3>
            <div class="no-rating">
                <h4>No Ratings Available</h4>
                <p>You haven't given any ratings yet. Start rating your instructors to see them here!</p>
            </div>
        </div>
        <div id="saved-gyms" class="content-section" style="display: none;">
    <h3>Saved Gyms</h3>
    <div class="no-rating">
        <h4>You don’t have any saved gyms yet</h4>
    </div>
</div>
    </div>
</main>
@include('frontend.layouts.user_pannel_footer')

<script>
function showSection(sectionId) {
    // Hide all sections
    var sections = document.querySelectorAll('.content-section');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });
    
    // Remove active class from all links
    var links = document.querySelectorAll('nav ul li');
    links.forEach(function(link) {
        link.classList.remove('active');
    });

    // Show the selected section
    document.getElementById(sectionId).style.display = 'block';
    
    // Add active class to the selected link
    document.getElementById(sectionId + '-link').classList.add('active');
}
</script>

<style>
/* Add any additional CSS styling if needed */
.content-section {
    display: none;
}
.content-section.active {
    display: block;
}
nav ul li.active {
    font-weight: bold; /* Example style for active link */
}
</style>
