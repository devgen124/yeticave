<main>
    <nav class="nav">
        <ul class="nav__list container">
            <?php foreach ($categories as $cat): ?>
            <li class="nav__item">
                <a href="all-lots.html"><?=$cat; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <div class="container">
        <?php if ($lots_list) : ?>
        <section class="lots">
            <h2><?=$heading?></h2>
            <ul class="lots__list">
                <?php foreach ($lots_list as $lot) : ?>
                <?=render_template('preview.php', ['lot' => $lot,  'lot_id' => array_search($lot, $lots_list), 'categories' => $categories]); ?>
                <?php endforeach; ?>
            </ul>
        </section>
        <ul class="pagination-list">
            <li class="pagination-item pagination-item-prev"><a>Назад</a></li>
            <li class="pagination-item pagination-item-active"><a>1</a></li>
            <li class="pagination-item"><a href="#">2</a></li>
            <li class="pagination-item"><a href="#">3</a></li>
            <li class="pagination-item"><a href="#">4</a></li>
            <li class="pagination-item pagination-item-next"><a href="#">Вперед</a></li>
        </ul>
        <?php else : ?>
        <section class="lots">
            <section class="lots">
                <h2><?=$heading?></h2>
                <h3>Ничего не удалось найти :(</h3>
            </section>
            <?php endif; ?>
    </div>
</main>
