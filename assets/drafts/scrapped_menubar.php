<script>
    // This function toggles the mobile menu
    function toggleMenu() {
        var navigation = document.querySelector('nav ul');
        var menuIcon = document.querySelector('.menu-icon');
        // Use matchMedia to check if the screen width is 768px or less
        if (window.matchMedia('(max-width: 768px)').matches) {
            if (navigation.style.display === "block") {
                navigation.style.display = "none";
                menuIcon.innerText = "☰"; // Change to hamburger icon
            } else {
                navigation.style.display = "block";
                menuIcon.innerText = "✖"; // Change to 'X' icon
            }
        }
    }

    // This function checks the screen width and adjusts the menu display
    function checkMenu() {
        var navigation = document.querySelector('nav ul');
        var menuIcon = document.querySelector('.menu-icon');
        // Use matchMedia to check if the screen width is greater than 768px
        if (window.matchMedia('(min-width: 769px)').matches) {
            navigation.style.display = "flex"; // Show the navigation links on larger screens
            menuIcon.innerText = "☰"; // Reset the menu icon
        }
    }

    // Add event listener for window resize
    window.addEventListener('resize', checkMenu);

    // Initial check on load
    checkMenu();
</script>