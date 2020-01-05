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
    <form class="form form--add-lot container <?php if (isset($errors)) {print('form--invalid');}?>" action="add.php"
        method="post" enctype="multipart/form-data">
        <h2>Добавление лота</h2>
        <div class="form__container-two">
            <div class="form__item <?php if (isset($errors['lot-name'])) {print('form__item--invalid');}?>">
                <label for="lot-name">Наименование</label>
                <input id="lot-name" type="text" name="lot-name" placeholder="Введите наименование лота"
                    value="<?=$lot['lot-name']?>">
                <span class="form__error">Введите наименование лота</span>
            </div>
            <div class="form__item <?php if (isset($errors['category'])) {print('form__item--invalid');}?>">
                <label for="category">Категория</label>
                <select id="category" name="category">
                    <option>Выберите категорию</option>
                    <?php foreach ($categories as $cat):?>
                    <option <?php if ($cat == $lot['category']) {print('selected');}?>><?=$cat;?></option>
                    <?php endforeach;?>
                </select>
                <span class="form__error">Выберите категорию</span>
            </div>
        </div>
        <div class="form__item form__item--wide <?php if (isset($errors['message'])) {print('form__item--invalid');}?>">
            <label for="message">Описание</label>
            <textarea id="" name="message" placeholder="Напишите описание лота"><?=$lot['message']?></textarea>
            <span class="form__error"><?=$errors['lot-date']?></span>
        </div>
        <div class="form__item form__item--file">
            <!-- form__item--uploaded -->
            <label>Изображение</label>
            <div class="preview">
                <button class="preview__remove" type="button">x</button>
                <div class="preview__img">
                    <img src="img/avatar.jpg" width="113" height="113" alt="Изображение лота">
                </div>
            </div>
            <div class="form__input-file  <?php if (isset($errors['lot-img'])) {print('form__item--invalid');}?>">
                <input class="visually-hidden" type="file" name="lot-img" id="photo2" value="">
                <label for="photo2">
                    <span>+ Добавить</span>
                </label>
                <span class="form__error"><?=$errors['lot-img']?></span>
            </div>
        </div>
        <div class="form__container-three">
            <div
                class="form__item form__item--small <?php if (isset($errors['lot-rate'])) {print('form__item--invalid');}?>">
                <label for="">Начальная цена</label>
                <input id="lot-rate" type="number" name="lot-rate" placeholder="0" value="<?=$lot['lot-rate']?>">
                <span class="form__error"><?=$errors['lot-rate']?></span>
            </div>
            <div
                class="form__item form__item--small <?php if (isset($errors['lot-step'])) {print('form__item--invalid');}?>">
                <label for="">Шаг ставки</label>
                <input id="lot-step" type="number" name="lot-step" placeholder="0" value="<?=$lot['lot-step']?>">
                <span class="form__error"><?=$errors['lot-step']?></span>
            </div>
            <div class="form__item <?php if (isset($errors['lot-date'])) {print('form__item--invalid');}?>">
                <label for="">Дата окончания торгов</label>
                <input class="form__input-date" id="lot-date" type="date" name="lot-date" value="<?=$lot['lot-date']?>">
                <span class="form__error"><?=$errors['lot-date']?></span>
            </div>
        </div>
        <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
        <button type="submit" class="button">Добавить лот</button>
    </form>
</main>
