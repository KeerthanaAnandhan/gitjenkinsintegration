<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingredients</title>
    <link rel="stylesheet" href="ingredients.css">
</head>
<body>
    <h1>Ingredients</h1>
    <ul>
        <?php
        // Define an array of ingredients
        $ingredients = array("Ingredient 1", "Ingredient 2", "Ingredient 3");

        // Loop through the array and generate list items dynamically
        foreach ($ingredients as $ingredient) {
            echo "<li>$ingredient</li>";
        }
        ?>
    </ul>
</body>
</html>
