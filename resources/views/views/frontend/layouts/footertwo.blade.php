
<style>
    footer {
  background-color: black;
  color: white;
  text-align: center;
  padding: 20px;
}

.footer-links, .footer-social, .footer-logo, .footer-copyright {
  margin: 10px 0;
}

.footer-links a {
  color: white;
  text-decoration: none;
  margin: 0 10px;
  display: inline-block;
}

.footer-links a:hover {
  text-decoration: underline;
}

.footer-social a {
  margin: 0 10px;
  display: inline-block;
}

.footer-social img {
  width: 24px;
  height: 24px;
}

.footer-logo img {
  width: 50px;
  height: auto;
}
.footer.social-icons a {
  margin: 0 10px;
  color: #fff;
  font-size: 24px;
  text-decoration: none;
}

@media (max-width: 600px) {
  .footer-links a, .footer-social a {
      display: block;
      margin: 5px 0;
  }
}


</style>

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
</body>

</html>