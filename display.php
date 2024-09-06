<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Navigation</title>
    <link rel="stylesheet" href="styles.css">
  
  
 <style>
   
   /* styles.css */
body {
    font-family: Arial, sans-serif;
}

nav {
    background: #333;
    color: #fff;
    padding: 10px;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

nav ul li a.active {
    font-weight: bold;
    text-decoration: underline;
}

.section {
    display: none;
    padding: 20px;
}

.section.active {
    display: block;
}

   
   </style>
  
  
</head>
<body>
    <nav>
        <ul>
            <li><a href="#" data-target="section1">Section 1</a></li>
            <li><a href="#" data-target="section2">Section 2</a></li>
            <li><a href="#" data-target="section3">Section 3</a></li>
        </ul>
    </nav>

    <div id="content">
        <div id="section1" class="section">Content for Section 1</div>
        <div id="section2" class="section">Content for Section 2</div>
        <div id="section3" class="section">Content for Section 3</div>
    </div>

    <script>
  // script.js
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('nav a');
    const sections = document.querySelectorAll('.section');

    // Function to show the selected section and hide others
    function showSection(targetId) {
        sections.forEach(section => {
            if (section.id === targetId) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });

        navLinks.forEach(link => {
            if (link.getAttribute('data-target') === targetId) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Set up click event handlers for the navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = link.getAttribute('data-target');
            showSection(targetId);
        });
    });

    // Optionally, show the first section by default
    if (sections.length > 0) {
        showSection(sections[0].id);
    }
});

  </script>
</body>
</html>





