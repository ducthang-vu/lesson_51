<?php
    include __DIR__ . 'partials/home/server.php';

    // head
    include __DIR__ . '/partials/templates/head';
?>


<main class="container">
    <div class="row">
        <div class="col-12">
            <header>
                <h1>Hotel Rooms</h1>
            </header>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>floor</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>        

                <tbody>
                    <?php /*
                        if  (!empty($rooms)) {
                            foreach($rooms as $room) {  */
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
</main>



<!-- TEMPLATE-->
<script id="entry-template" type="text/x-handlebars-template">
    <div class="entry">
        <h1>{{title}}</h1>
        <div class="body">
        {{body}}
        </div>
    </div>
</script>

<!-- SCRIPT -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/89ef06fff6.js" crossorigin="anonymous"></script>


<?php
    include __DIR__ . '/partials/templates/footer.php';
?>
