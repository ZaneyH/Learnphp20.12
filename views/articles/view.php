<?php include __DIR__ . '/../partials/Header.php'; ?>
<div class="container">
    <table class="table is-striped is-fullwidth">
        <tbody>
            <tr>
                <th>Id</th>
                <th><?=$article->id?></th>
            </tr>
            <tr>
                <th>title</th>
                <th><?=$article->title?></th>
            </tr>
            <tr>
                <th>body</th>
                <th><?=$article->body?></th>
            </tr>
            <tr>
                <th>Vegan</th>
                <th><?=$article->isvegan?></th>
            </tr>
            <tr>
                <th>Spiciness</th>
                <th><?=$article->spiciness?></th>
            </tr>
            <tr>
                <th>Price</th>
                <th><?=$article->price?></th>
            </tr>
            <tr>
                <th>Picture</th>
                <th><?=$article->picture?></th>
            </tr>
        </tbody>

    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>



