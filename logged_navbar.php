<style>
    /* Import Google Font */
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap');

    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif; /* Roboto Font */
    }

    /* Navigation Bar */
    nav {
        background-color: #164863; /* Dark blue */
        padding: 10px 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    nav ul {
        list-style-type: none;
        display: flex;
        justify-content: space-between;
        margin-left: auto;
        align-items: center;
        padding-left: 0; /* Remove default padding */
        width: 50%; /* Full width */
    }

    nav ul li {
        display: inline-block;
        /* Add margin to each side of the nav items for spacing  */
        margin: 0 10px;
    }

    /* Links */
    nav ul li a {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 5px;
        font-size: 20px;
        font-weight: 450;
    }

    nav ul li a:hover {
        background-color: #35aadc; /* Lighter blue for hover */
        color: #fff;
    }

    /* Dropdown Menu */
    .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        z-index: 1;
        left: 0;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #35aadc; /* Consistent blue hover color */
        color: #fff;
    }

    /* Login Icon */
    .login-icon {
        display: inline-block;
        width: 32px;
        height: 32px;
        top: 5px;
        background-image: url('assets/images/login-icon.png'); /* Path to your login icon image */
        background-size: cover;
        cursor: pointer;
        vertical-align: middle;
        margin-left: auto;
    }

    /* Text Logo */
    .logo {
        font-size: 32px; /* Increased size */
        color: white;
        font-weight: 950; /* Extra bold */
        letter-spacing: 1px; /* Added letter-spacing for better readability */
        flex-grow: 1;
        padding-left: 10px;
        
    }

    .menu-icon{
        display: none;
    }

    /* Responsive login button that will only show on smaller screens */
    .responsive-logoput-btn {
        display: none; /* Hidden by default */
        /* Styling for the button */
        padding: 10px 20px;
        background-color: #35aadc; /* Light blue for the button background */
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px; /* Spacing from the other menu items */
        font-size: 18px; /* Slightly smaller font size */
        font-weight: bold;
        width: calc(100% - 20px); /* Full width minus padding for better appearance */
        box-sizing: border-box; /* To include padding in width calculation */
        cursor: pointer;
    }

    @media screen and (max-width: 1213px) {
        nav ul {
            /* Adjust styles for medium screens here */
            flex-wrap: wrap;
            justify-content: center; /* Center the items if they take up more than one line */
            display: none;
        }

        nav ul li {
            /* Adjust styles for nav items here */
            padding: 5px; /* Example: add padding to give space around the items */
        }

        /* Style the menu icon */
        .menu-icon {
            display: block;
            font-size: 24px;
            cursor: pointer;
            color: white;
            z-index: 1000;
            right: 35px;
            top: 10px;
            position: absolute;
            
        }

        /* When nav ul is shown (toggled), it takes up the full width */
        /* Show the navigation links when active */
        .active-nav {
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center;
            align-items: center; /* Center the items horizontally */
            width: 100%; /* Take up full width of the nav */
            position: absolute;
            top: 55px; /* Adjust this value so it appears below the menu icon */
            left: 0; /* Align to the left */
            background-color: #164863; /* Match the background color of the nav bar */
            z-index: 1000; /* Make sure it's above other content */
            padding-bottom: 20px; /* Add some space at the bottom of the menu */

        }

        .active-nav li {
            padding: 12px 0px; /* Add some space around each link */
            width: 100%; /* Make each link take full width of the nav */
        }


        /* Adjust hover effect for all anchor tags in active-nav */
        .active-nav a {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .active-nav a:hover {
            background-color: #2a8dbb; /* Slightly darker blue for hover */
            color: white;
        }

        .dropdown {
            position: relative;
        }
        /* Position the dropdown content below the Subjects link */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            z-index: 1;
            left: 50%; /* Center the dropdown */
            transform: translateX(-50%); /* Center align dropdown */
            top: 100%; /* Position the dropdown right below the Subjects link */
            margin-top: .1em; /* Give some space below the Subjects link */
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .logo{
            top: 0;
            padding-left: 10px;
            position: relative;
        }
        /* Style the responsive login button */
        .responsive-logout-btn {
            display: block; /* Show the button */
            padding: 10px 15px; /* Consistent padding */
            background-color: #35aadc; /* Background color */
            color: white; /* Text color */
            text-align: center;
            align-items: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px; /* Space from the last menu item */
            margin-bottom: 15px; /* Space from bottom of the nav */
            font-size: 18px;
            font-weight: bold;
            /* Fixed width or maximum width */
            width: auto; /* Auto width based on content */
            max-width: 200px; /* Maximum width */
            box-sizing: border-box;
            cursor: pointer;
            border: none; /* Remove border if there's any */
            outline: none; /* Remove outline if there's any */
        }

        .login-icon {
            display: none; /* Hide the login icon */
        }
    }

    @media screen and (max-width: 1024px) {
        nav ul {
            /* Adjust styles for medium screens here */
            flex-wrap: wrap;
            justify-content: center; /* Center the items if they take up more than one line */
            display: none;
        }

        nav ul li {
            /* Adjust styles for nav items here */
            padding: 5px; /* Example: add padding to give space around the items */
        }

        /* Style the menu icon */
        .menu-icon {
            display: block;
            font-size: 24px;
            cursor: pointer;
            color: white;
            z-index: 1000;
            right: 35px;
            top: 10px;
            position: absolute;
            
        }

        /* When nav ul is shown (toggled), it takes up the full width */
        /* Show the navigation links when active */
        .active-nav {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            align-items: center; /* Center the items horizontally */
            width: 100%; /* Take up full width of the nav */
            position: absolute;
            top: 55px; /* Adjust this value so it appears below the menu icon */
            left: 0; /* Align to the left */
            background-color: #164863; /* Match the background color of the nav bar */
            z-index: 1000; /* Make sure it's above other content */
            padding-bottom: 20px; /* Add some space at the bottom of the menu */

        }

        .active-nav li {
            padding: 12px 0; /* Add padding to each nav item */
            width: 100%; /* Make each link take full width of the nav */
        }

        /* Adjust hover effect for all anchor tags in active-nav */
        .active-nav a {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .active-nav a:hover {
            background-color: #2a8dbb; /* Slightly darker blue for hover */
            color: white;
        }

        .dropdown {
            position: relative;
        }
        /* Position the dropdown content below the Subjects link */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            z-index: 1;
            left: 50%; /* Center the dropdown */
            transform: translateX(-50%); /* Center align dropdown */
            top: 100%; /* Position the dropdown right below the Subjects link */
            margin-top: .1em; /* Give some space below the Subjects link */
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .logo{
            top: 0;
            padding-left: 10px;
            position: relative;
        }

        /* Style the responsive login button */
        .responsive-logout-btn {
            display: block; /* Show the button */
            padding: 10px 15px; /* Consistent padding */
            background-color: #35aadc; /* Background color */
            color: white; /* Text color */
            text-align: center;
            align-items: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px; /* Space from the last menu item */
            margin-bottom: 15px; /* Space from bottom of the nav */
            font-size: 18px;
            font-weight: bold;
            /* Fixed width or maximum width */
            width: auto; /* Auto width based on content */
            max-width: 200px; /* Maximum width */
            box-sizing: border-box;
            cursor: pointer;
            border: none; /* Remove border if there's any */
            outline: none; /* Remove outline if there's any */
        }

        .login-icon {
            display: none; /* Hide the login icon */
        }
    }

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        /* Adjust nav ul for mobile */
        nav ul {
            flex-direction: column;
            width: 100%;
            display: none; /* Hide the ul initially */
        }

        .logo{
            top: 0;
            padding-left: 15px;
            position: relatve;
          
        }

        /* Style the menu icon */
        .menu-icon {
            display: block;
            font-size: 24px;
            cursor: pointer;
            color: white;
            z-index: 1000;
            right: 35px;
            top: 10px;
            position: absolute;
            
        }

        /* When nav ul is shown (toggled), it takes up the full width */
        /* Show the navigation links when active */
        .active-nav {
            display: flex;
            text-align: center;
            justify-content: center;
            flex-direction: column;
            align-items: center; /* Center the items horizontally */
            width: 100%; /* Take up full width of the nav */
            position: absolute;
            top: 55px; /* Adjust this value so it appears below the menu icon */
            left: 0; /* Align to the left */
            background-color: #164863; /* Match the background color of the nav bar */
            z-index: 1000; /* Make sure it's above other content */
            padding-bottom: 20px;
        }

        .active-nav li {
            padding: 12px 0px; /* Add padding to each nav item */
            width: 100%; /* Make each link take full width of the nav */
        }

        /* Adjust hover effect for all anchor tags in active-nav */
        .active-nav a {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .active-nav a:hover {
            background-color: #2a8dbb; /* Slightly darker blue for hover */
            color: white;
        }

        .dropdown {
            position: relative;
        }
        /* Position the dropdown content below the Subjects link */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            z-index: 1;
            left: 50%; /* Center the dropdown */
            transform: translateX(-50%); /* Center align dropdown */
            top: 100%; /* Position the dropdown right below the Subjects link */
            margin-top: .1em; /* Give some space below the Subjects link */
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Style the responsive login button */
        .responsive-logout-btn {
            display: block; /* Show the button */
            padding: 10px 15px; /* Consistent padding */
            background-color: #35aadc; /* Background color */
            color: white; /* Text color */
            text-align: center;
            align-items: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px; /* Space from the last menu item */
            margin-bottom: 15px; /* Space from bottom of the nav */
            font-size: 18px;
            font-weight: bold;
            /* Fixed width or maximum width */
            width: auto; /* Auto width based on content */
            max-width: 200px; /* Maximum width */
            box-sizing: border-box;
            cursor: pointer;
            border: none; /* Remove border if there's any */
            outline: none; /* Remove outline if there's any */
        }

        .login-icon {
            display: none; /* Hide the login icon */
        }
    }
</style>

</style>

<nav class="navigation">
    <!-- Hamburger Icon -->
    <div class="menu-icon" onclick="toggleMenu()">☰</div>
    <div class="logo">LearningKids</div> 
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Subjects</a>
            <div class="dropdown-content">
                <a href="subjects/math.php">Math</a>
                <a href="subjects/science.php">Science</a>
                <a href="subjects/english.php">English</a>
            </div>
        </li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="support.php">Support</a></li>
        <li><a href="login.php" class="login-icon"></a></li> <!-- Login Icon -->
        <li class="responsive-logout-btn">Logout</li> <!-- New Responsive Login Button -->
    </ul>
</nav>


<script>
    function toggleMenu() {
        var navigationUl = document.querySelector('nav ul');
        navigationUl.classList.toggle('active-nav'); // This class should control the display property
    }
</script>



