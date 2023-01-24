<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Class</title>

    <?php
    class Movie
    {
        public $name;
        public $genre;
        public $prod_date;

        public function __construct($name, $genre, $prod_date)
        {
            $this->name = $name;
            $this->genre = $genre;
            $this->prod_date = $prod_date;
        }
        public function html_convert()
        {
            return "<div> Name: " . $this->name . "</div>"
                . "<div> Genere: " . $this->genre . "</div>"
                . "<div> Produced in: " . $this->prod_date . "</div>";
        }

    }

    $movie1 = new Movie('Jaws', 'horror', '1975');
    $movie2 = new Movie('Space Jam', 'commedy', '1996');
    ?>

    <style>
        body {
            background-color: burlywood;
        }

        h1 {
            text-transform: uppercase;
            color: cadetblue;
            text-align: center;
        }

        section {
            width: 60%;
            margin: 10px auto;
            display: flex;
            justify-content: space-around;
        }

        .card {
            width: 150px;
            height: 200px;
            background-color: coral;
            padding: 5px;
        }

        .card:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .card div {
            font-size: 19px;
            color: #fff;
            margin: 15px 0;
        }
    </style>
</head>

<body>

    <h1>Movies class</h1>
    <section>
        <div class="card">
            <?php
            echo $movie1->html_convert();
            ?>
        </div>
        <div class="card">
            <?php
            echo $movie2->html_convert();
            ?>
        </div>
    </section>


</body>

</html>