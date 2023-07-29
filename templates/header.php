<!DOCTYPE html>
<html>

<head>
    <title>Simple PHP Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        header h1 {
            margin: 0;

        }

        nav {
            display: flex;
            justify-content: space-between;
        }

        .left-links {
            display: flex;
        }

        .right-links {
            display: flex;
            margin-right: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;

        }

        nav ul li a:hover {
            border-bottom: 2px solid #fff;

        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>

    <nav>
            <div class="left-links">
            
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="right-links">
                <?php
                
                session_start();
                if (isset($_SESSION['user_id'])) {
                    echo '<a href="dashboard.php">Dashboard</a>';
                    echo '<a href="logout.php">Logout</a>';
                } else {
                    echo '<a href="login.php">Login</a>';
                }
                ?>
            </div>
        </nav>


    </header>

    


        

    </div>
    <main>












