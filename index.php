<html lang="en-GB">
	<head>
		<title>Cocktails</title>
		<link rel="stylesheet" type="text/css" href="normalize.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards|Sen&display=swap" rel="stylesheet">
	</head>

	<body>
		<!-- top banner -->
		<header>
			<div class="container_top">
				<h1>Cocktails</h1>
			</div>
		</header>

		<div class="container_main">
			<div class="container_link">
                <!-- Link goes to the "add cocktail" page -->
			<a href="./add_item.php">Add new cocktail</a>
			</div>

			<div class="cocktails_box">

                <?php

                // Accessing DB from PHP
                $db = new PDO('mysql:host=db; dbname=Cocktails', 'root', 'password');
                $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $query=$db->prepare("SELECT* FROM `cocktails`;");
                $query->execute();
                $result = $query->fetchAll();

                //echoing results of db to website
                foreach ($result as $cocktail) {
                    echo '<div class="box1">';
                    echo '<h2>' . $cocktail['name'] . '</h2>';
                    echo '<ul><li>' . $cocktail['alcohol_base'] . '</li>';
                    echo '<li>' . $cocktail['taste_profile'] . '</li>';
                    echo '<li>' . $cocktail['ingredients'] . '</li>';
                    echo '<li>' . $cocktail['method'] . '</li>';
                    echo '<li>' . $cocktail['strength'] . '</li>';
                    echo '<li>' . $cocktail['served'] . '</li></ul>';
                    echo '</div>';
                }

                ?>

            </div>

        </div>
    </body>
</html>
