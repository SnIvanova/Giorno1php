<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar ">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="#">
                <?php
                setlocale(LC_TIME, 'it_IT.utf8', 'it_IT.UTF-8', 'it_IT', 'Italian');
                $oggi = new DateTime("now");
                $data = strftime('%A, %e %B %Y', $oggi->getTimestamp());
                echo "<h1 class='display-4'>$data</h1>";
                ?>
            </a>
        </div>
    </nav>



    <?php $sqUsa = [
        'Girls' => ['Taylor Swift', 'Beyoncé', 'Katy Perry'],
        'Mix' => ['Ariana Grande', 'Justin Timberlake', 'Dua Lipa'],
        'Boys' => ['Drake', 'Ed Sheeran', 'John Legend'],
    ];

    $sqEup = [
        'Girls' => ['Adele', 'Madonna', 'Rihanna'],
        'Mix' => ['Shakira', 'Coldplay', 'Zara Larsson'],
        'Boys' => ['Elton John', 'Enrique Iglesias', 'David Guetta'],
    ];
    ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">USA:</h2>
                <?php
                foreach ($sqUsa as $squadra => $formazione) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo "<h5 class='card-title'>$squadra</h5>";
                    echo '<ul class="list-group list-group-flush">';
                    foreach ($formazione as $giocatore) {
                        echo "<li class='list-group-item'>$giocatore</li>";
                    }
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="col-md-6">
                <h2 class="mb-4">Europe:</h2>
                <?php
                foreach ($sqEup as $squadra => $formazione) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo "<h5 class='card-title'>$squadra</h5>";
                    echo '<ul class="list-group list-group-flush">';
                    foreach ($formazione as $giocatore) {
                        echo "<li class='list-group-item'>$giocatore</li>";
                    }
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="card team-card">
        <div class="card-body">
            <h5 class="card-title text-center">All Singers</h5>
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-content-end flex-wrap align-items-center">
                    <h6 class="mt-3">USA:</h6>
                    <?php
                    foreach ($sqUsa as $squadra => $formazione) {
                        echo "<p><strong>$squadra:</strong></p>";
                        echo '<ul>';
                        foreach ($formazione as $giocatore) {
                            echo "<li>$giocatore</li>";
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <h6 class="mt-3">Europe:</h6>
                    <?php
                    foreach ($sqEup as $squadra => $formazione) {
                        echo "<p><strong>$squadra:</strong></p>";
                        echo '<ul>';
                        foreach ($formazione as $giocatore) {
                            echo "<li>$giocatore</li>";
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>