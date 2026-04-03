<?php $root = isset($path) ? $path : ''; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Altokihamba | Portfolio</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style1.css"> -->
     <link rel="stylesheet" type="text/css" href="<?php echo $root; ?>css/style1.css">
    <style>
        /* Ensuring the header fills the viewport width */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }

        .nav-container {
            /* background-color: green; */
              background-color: #045041;
            width: 100%;
            position: fixed; /* Keeps header at top */
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .nav-container ul {
            display: flex; /* Aligns items horizontally */
            list-style: none;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .nav-container > ul > li {
            flex: 1; /* Makes each menu item take equal width */
            text-align: center;
            position: relative;
            border-right: 1px solid white;
        }

        .nav-container li a, .nav-container li span {
            display: block;
            padding: 15px 1px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .nav-container li:hover {
            /* background-color: darkgreen; */
            background-color: #045041;
           
        }

        /* Dropdown styling */
        .nav-container ul li ul {
            display: none;
            position: absolute;
             background-color: #009879;
            min-width: 100%;
            flex-direction: column;
        }

        .nav-container ul li:hover > ul {
            display: flex;
        }
        
        /* Spacing for content below fixed header */
        .content-spacer {
            margin-top: 80px; 
        }
    </style>
</head>
<body>
    <nav class="nav-container">
        <ul>
            <li>
                <span>Home Page</span>
                <ul>
                    <!-- <li><a href="index.php">Home</a></li> -->
                     <li><a href="<?php echo $root; ?>index.php">Home</a></li>
                </ul>
            </li>
            <li>
                <span>About Me</span>
                <ul>
                    <!-- <li><a href="pages/aboutme.php">Developer</a></li> -->
                     <li><a href="<?php echo $root; ?>pages/aboutme.php">Developer</a></li>

                </ul>
            </li>
            <li>
                <span>Tasks</span>
                <ul>
                    <!-- <li><a href="pages/Project.php">Add Upload</a></li> -->
                     <li><a href="<?php echo $root; ?>pages/Project.php">Add Upload</a></li>
                    <li><a href="<?php echo $root; ?>pages/users.php">Registered Members</a></li>
                    <li><a href="<?php echo $root; ?>pages/logout.php">Logout</a></li>
                </ul>
            </li>
            <li>
                <span>Contact</span>
                <ul>
                    <li><a href="<?php echo $root; ?>pages/message.php">Contact Form</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- <div class="content-spacer"></div> -->