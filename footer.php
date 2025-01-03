    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 United Gospel Believers Church. All Rights Reserved.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-telegram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
        const mobileNavMenu = document.querySelector('.mobile-nav-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenuIcon.addEventListener('click', () => {
            mobileNavMenu.classList.toggle('hidden');
            navMenu.style.display = 'none'; // Hide desktop menu on mobile
        });
    </script>
</body>

</html>
