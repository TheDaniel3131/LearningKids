/* Hide the navigation links by default on smaller screens */
@media (max-width: 768px) {
    nav ul {
        display: none; /* This hides the menu */
        flex-direction: column;
        align-items: center;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #164863;
    }

    /* Show the menu icon by default */
    .menu-icon {
        display: block;
    }

    /* Adjust the main-header padding and content for smaller screens */
    .main-header {
        padding: 20px; /* Adjusted padding */
    }

    .header-content h1 {
        font-size: 2em; /* Adjusted font size */
    }

    .header-content p {
        font-size: 1em; /* Adjusted font size */
    }

    /* Adjust the subjects-section layout for smaller screens */
    .subjects-section {
        padding: 20px; /* Adjusted padding */
    }

    .subjects-grid {
        grid-template-columns: 1fr; /* Stack the items in one column */
        padding: 0; /* Adjusted padding */
    }
}

/* Further adjustments for very small screens */
@media (max-width: 480px) {
    .header-content h1 {
        font-size: 1.5em; /* Smaller font size */
    }
}