<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR CAMPAIGN</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #26c7db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .image-container {
            text-align: center;
            margin: 20px;
            background-color: #FFF0F5;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .image-container:hover {
            transform: scale(1.05);
        }

        .image-container img {
            width: 500px;

            height: auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .image-description {
            text-align: right;
            font-size: 20px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            color: #555;


        }

        nav {
            background-color: #228B22;
            padding: 10px;
            text-align: center;
            font-size: 25px;
        }

        nav a {
            color: #98FB98;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            font-weight: bold;

        }
    </style>

</head>

<body>
    <header>
        <h1>OUR CAMPAIGN</h1>
    </header>

    <nav>
        <a href="#">SAVE</a>
        <a href="#">FOOD</a>
        <a href="#">SHARE</a>
        <a href="#">FOOD</a>
    </nav>

    <?php
    $images = array(
        array('src' => 'images/IMG-20231120-WA0034.jpg', 'alt' => 'OUR BATTLE AGAINST HUNGER IS HUMANITY FOR EQUALITY -
        A country cannot progress if most of its people are hungry. Today, 14% of our population is undernourished and needs our undivided attention. The only way to ensure a healthy and happy country is by nourishing the ones who need it the most. Sai and Pushkar Food Donation Website is an NGO working with an aim to provide food-relief and nourishment to the underprivileged communities of India.
        At our site, we exchange ‘Hunger for Hope’.
        
        Our donation site in the form of generous donations can help needy to provide nutritious mid-day meals and food-relief to the children,seniors and underprivileged sections of our society'),

        array('src' => 'images/IMG-20231120-WA0023.jpg', 'alt' => 'NO ONE CAN THRIVE ON AN EMPTY STOMACH-
        44 million people face hunger in the India — including more than 13 million children. Hunger knows no boundaries — it touches every community in the India,'),
        array('src' => 'images/IMG-20231120-WA0022.jpg', 'alt' => 'OUR VISION: AN INDIA WITHHOUT HUNGER - 
        Feeding India is the largest charity working to end hunger in the India. We partner with food banks, food pantries, and local food programs to bring food to people facing hunger. We advocate for policies that create long-term solutions to hunge'),


        array('src' => 'images/IMG-20231120-WA0034.jpg', 'alt' => 'OUR BATTLE AGAINST HUNGER IS HUMANITY FOR EQUALITY -
        A country cannot progress if most of its people are hungry. Today, 14% of our population is undernourished and needs our undivided attention. The only way to ensure a healthy and happy country is by nourishing the ones who need it the most. Sai and Pushkar Food Donation Website is an NGO working with an aim to provide food-relief and nourishment to the underprivileged communities of India.
        At our site, we exchange ‘Hunger for Hope’.
        
        Our donation site in the form of generous donations can help needy to provide nutritious mid-day meals and food-relief to the children,seniors and underprivileged sections of our society'),
        array('src' => 'images/IMG-20231120-WA0034.jpg', 'alt' => 'OUR BATTLE AGAINST HUNGER IS HUMANITY FOR EQUALITY -
        A country cannot progress if most of its people are hungry. Today, 14% of our population is undernourished and needs our undivided attention. The only way to ensure a healthy and happy country is by nourishing the ones who need it the most. Sai and Pushkar Food Donation Website is an NGO working with an aim to provide food-relief and nourishment to the underprivileged communities of India.
        At our site, we exchange ‘Hunger for Hope’.
        
        Our donation site in the form of generous donations can help needy to provide nutritious mid-day meals and food-relief to the children,seniors and underprivileged sections of our society'),
        array('src' => 'images/IMG-20231120-WA0034.jpg', 'alt' => 'OUR BATTLE AGAINST HUNGER IS HUMANITY FOR EQUALITY -
        A country cannot progress if most of its people are hungry. Today, 14% of our population is undernourished and needs our undivided attention. The only way to ensure a healthy and happy country is by nourishing the ones who need it the most. Sai and Pushkar Food Donation Website is an NGO working with an aim to provide food-relief and nourishment to the underprivileged communities of India.
        At our site, we exchange ‘Hunger for Hope’.
        
        Our donation site in the form of generous donations can help needy to provide nutritious mid-day meals and food-relief to the children,seniors and underprivileged sections of our society'),
    );

    foreach ($images as $image) {
        echo '<div class="image-container">';
        echo '<img src="' . $image['src'] . '" alt="' . $image['alt'] . '">';
        echo '<p class="image-description">' . $image['alt'] . '</p>';
        echo '</div>';
    }
    ?>

</body>

</html>