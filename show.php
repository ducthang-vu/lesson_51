<?php
    include __DIR__ . 'partials/show/server.php';
?>

// head section

<?php
    include __DIR__ . '/partials/templates/head';
?>


<main class="container">
    <div class="row">
        <div class="col-12">
            <header class="my-4">
                <h1>Details room
                    <?php
                        echo %$room['room_number'];
                    ?>
                </h1>
            </header>

            <div class="card">
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">
                        ID: <?php
                            echo $room['id'];
                        ?>
                    </div>
                    <div class="list-group-item"></div>
                    <div class="list-group-item"></div>
                    <div class="list-group-item"></div>
                </ul>
            </div>

        </div>
    </div>
</main>

<?php
    include __DIR__ . '/partials/templates/footer.php';
?>
