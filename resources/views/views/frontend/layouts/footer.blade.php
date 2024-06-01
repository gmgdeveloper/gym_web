
<footer>
    <div class="footer-links">
        <a href="#">Help</a>
        <a href="#">Site Guidelines</a>
        <a href="{{route('terms')}}">Terms & Conditions</a>
        <a href="{{route('privacy')}}">Privacy Policy</a>
        <a href="#">Copyright Compliance Policy</a>
        <a href="#">CA Notice at Collection</a>
        <a href="#">CA Do Not Sell or Share My Personal Information</a>
    </div>
    <div class="footer social-icons">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="#"><i class="fab fa-x"></i></a>
    </div>
   
    <div class="footer-copyright">
        &copy; 2024 Rate My Gyms, LLC. All Rights Reserved
    </div>
</footer>

<script>
  document.getElementById('mobile-menu').addEventListener('click', function () {
    const dropdownMenu = document.getElementById('dropdown-menu');
    if (dropdownMenu.style.display === 'flex') {
        dropdownMenu.style.display = 'none';
    } else {
        dropdownMenu.style.display = 'flex';
    }
});

</script>
</body>
</html>



