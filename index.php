<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #444;
            padding: 0.5em;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            margin: 0 0.5em;
        }

        main {
            padding: 1em;
        }

        #admin-button {
            position: fixed;
            top: 15px;
            right: 15px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 10px;
            cursor: pointer;
        }

        #admin-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Gym Admin Dashboard</h1>
    </header>
    <a href="./login.php"> <button id="admin-button">Admin</button></a>
   
    <nav>
        <a href="#">Home</a>
        <a href="#">Members</a>
        <a href="#">Classes</a>
        <a href="#">Reports</a>
        <a href="#">Logout</a>
    </nav>
    <main>
        <h2>gym management system 

        </h2>
        <!-- Your dashboard content goes here -->
    </main>
</body>

</html>
