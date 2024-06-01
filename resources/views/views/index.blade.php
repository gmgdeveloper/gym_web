@include('frontend.layouts.header')
<style>
    @media (min-width: 576px) and (max-width: 767.98px) {
        img.feature-image {
    height: 390px;
}
    }
</style>
<main>
  <section>
    <div class="container secone" style="background: url('front_assets/images/banner/img_03.png') no-repeat center center/cover;">
        <div class="overlay">
            <h1 class="title">RATE MY GYMS</h1>
            <p class="subtitle">Enter your <span>Gym</span> to get started</p>
            <div class="input-container">
           <img src="front_assets/images/banner/jumping-man_58177.png" alt="Jumping Icon" class="input-icon" style="width:5%;">

                <input type="text" class="school-input" placeholder="Your Gym" id="gym-input">
            </div>
            <a href="#" class="professor-link">I'd like to look up a gym by name</a>
        </div>
        <button class="help-button">Help</button>
    </div>
</section>

<script>
    document.getElementById('gym-input').addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            window.location.href = '{{ route('about') }}';
        }
    });
</script>
    <section>
        <div class="welcome-container">
            <h1 class="welcome-title">Welcome back!</h1>
            <div class="features">
                <div class="feature">
                    <img src="front_assets/images/banner/document.jpg" alt="Manage and edit your ratings" style="height: 360px;" class="feature-image">
                    <p class="feature-text" style="margin-top: 45px;">Manage and edit your ratings</p>
                </div>
                <div class="feature">
                    <img src="front_assets/images/banner/Designer (3).jpeg.jpg"  alt="Your ratings are always anonymous" class="feature-image">
                    <p class="feature-text">Your ratings are always anonymous</p>
                </div>
                <div class="feature">
                    <img src="front_assets/images/banner/Designer (4).jpeg.jpg"  style="height: 380px;" alt="Like or dislike ratings" class="feature-image">
                    <p class="feature-text" style="margin-top: 27px;">Like or dislike ratings</p>
                </div>
            </div>
            <button class="ratings-button">My Ratings</button>
        </div>
        <button class="help-button">Help</button>
    </section>
</main>

<script src="front_assets/js/script.js"></script>



@include('frontend.layouts.footer')