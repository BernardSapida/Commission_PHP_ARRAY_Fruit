<?php
    $fruits = array(
        "apple" => array(
            "image" => "./images/apple.jpg",
            "name" => "Apple",
            "description" => "Apple, Malus domestica, is a deciduous tree in the family Rosaceae which is grown for its fruits, known as apples.
            Apple fruits are one of the most widely cultivated fruits in the world, are round (pome) in shape and range in 
            color from green to red.",
            "facts" => "Apples are a good source of fiber and vitamin C. They also contain antioxidants, like vitamin E, and polyphenols 
            that contribute to the fruit's numerous health benefits. Apples are particularly filling due to their high fiber 
            and water content. Their polyphenols may also have anti-obesity effects.",
        ),
        "avocado" => array(
            "image" => "./images/avocado.jpg",
            "name" => "Avocado",
            "description" => "Avocado, also called alligator pear, tree of the family Lauraceae and its edible fruit. Avocados are native to the 
            Western Hemisphere from Mexico south to the Andean regions and are widely grown in warm climates. Avocado fruits 
            have greenish or yellowish flesh with a buttery consistency and a rich nutty flavour.",
            "facts" => "Avocados contain high levels of healthy, beneficial fats, which can help a person feel fullerTrusted Source between 
            meals. Eating fat slows the breakdown of carbohydrates, which helps keep blood sugar levels stable",
        ),
        "banana" => array(
            "image" => "./images/banana.jpg",
            "name" => "Banana",
            "description" => "A banana is an elongated, edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering 
            plants in the genus Musa.",
            "facts" => "Bananas are rich in soluble fiber. During digestion, soluble fiber dissolves in liquid to form a gel. It's also what 
            gives bananas their sponge-like texture.",
        ),
        "cherry" => array(
            "image" => "./images/cherry.jpg",
            "name" => "Cherry",
            "description" => "A cherry is the fruit of many plants of the genus Prunus, and is a fleshy drupe (stone fruit). Commercial cherries 
            are obtained from cultivars of several species, such as the sweet Prunus avium and the sour Prunus cerasus.",
            "facts" => "Due to their potent anti-inflammatory effects, cherries may reduce symptoms of arthritis and gout, a type of 
            arthritis caused by a buildup of uric acid that can lead to extreme swelling, inflammation, and pain in your joints.",
        ),
        "dragon_fruit" => array(
            "image" => "./images/dragon_fruit.jpg",
            "name" => "Dragon Fruit",
            "description" => "The dragon fruit (Hylocereus undatus) is a tropical fruit that belongs to the climbing cacti (Cactaceae) family. 
            Widely cultivated in Vietnam, the fruit is popular in Southeast Asia.",
            "facts" => "Dragon fruit is low in calories but rich in vitamins, minerals and beneficial plant compounds such as polyphenols, 
            carotenoids and betacyanins. Dragon fruit may promote the growth of healthy bacteria in the gut, which is associated 
            with a healthy gastrointestinal tract.",
        ),
        "durian" => array(
            "image" => "./images/durian.jpg",
            "name" => "Durian",
            "description" => "The durian, \"King of Fruit\" is one of the most controversial tropical fruit. Vivid and delightful descriptions of the 
            strong aroma, both enthusiasts and opponents add a mystery to the fruit in the western world.",
            "facts" => "Durian is considered the king of fruits due to its high delicious taste and high nutrition. In terms of vitamin content, 
            this unique fruit contains vitamin A, vitamin C, B6 and other B-vitamins such as riboflavin, thiamin, niacin, and folic acid.",
        ),
        "grapes" => array(
            "image" => "./images/grapes.jpg",
            "name" => "Grapes",
            "description" => "A fruit, botanically a berry, of the deciduous woody vines of the flowering plant.",
            "facts" => "Grapes contain many important vitamins and minerals, including copper and vitamins B and K. Compounds in grapes may protect 
            against heart disease by lowering blood pressure and cholesterol levels. Grapes are rich in antioxidants, which are beneficial 
            plant compounds that may protect against chronic health conditions.",
        ),
        "lemon" => array(
            "image" => "./images/lemon.jpg",
            "name" => "Lemon",
            "description" => "Lemon, Citrus Limon, is a small evergreen tree in the family Rutaceae grown for its edible fruit which, among other things, are 
            used in a variety of foods and drinks. The tree has a spreading, upright growth habit, few large branches and stiff thorns.",
            "facts" => "Lemons are high in heart-healthy vitamin C and several beneficial plant compounds that may lower cholesterol. Lemon juice may 
            help prevent kidney stones. However, more quality research is needed.",
        ),
        "orange" => array(
            "image" => "./images/orange.jpg",
            "name" => "Orange",
            "description" => "An orange is a fruit of various citrus species in the family Rutaceae ; it primarily refers to Citrus x sinensis, which is also 
            called sweet orange, to distinguish it from the related Citrus x aurantium, referred to as bitter orange. The sweet orange 
            reproduces asexually ; varieties of sweet orange arise through mutations.",
            "facts" => "Oranges are a good source of fiber and a rich source of vitamin C and folate, among many other beneficial nutrients. Oranges 
            are a rich source of several plant compounds that may be responsible for many of their health benefits. Oranges may benefit heart 
            health, reduce the risk of some chronic diseases, enhance iron absorption, and support a healthy immune response.",
        ),
        "pineapple" => array(
            "image" => "./images/pineapple.jpg",
            "name" => "Pineapple",
            "description" => "A tropical plant with an edible fruit and the most economically significant plant in the family Bromeliaceae.",
            "facts" => "Pineapples are especially rich in vitamin C and manganese, as well as numerous other vitamins and minerals. Pineapples are a rich 
            source of antioxidants that may reduce your risk of ailments such as heart disease, diabetes, and certain cancers. Pineapples contain 
            bromelain, a group of digestive enzymes that may help break down protein and aid digestion.",
        ),
    );
    sort($fruits);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/css/index.css">
        <title>Fruits</title>
    </head>
    <body>
        <table>
            <caption>My Fruits</caption>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Facts</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($fruits as $name => $details) {
                        echo "
                        <tr>
                            <td>
                                <img src='" . $details["image"] . "' width='100' alt='" . $details["name"] . "'>
                            </td>
                            <td>" . $details["name"] . "</td>
                            <td>" . $details["description"] . "</td>
                            <td>" . $details["facts"] . "</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>