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
    <form class="form form--add-lot container form--invalid" action="add.php" method="post" enctype="multipart/form-data"> <!-- form--invalid -->
    <h2>Добавление лота</h2>
    <div class="form__container-two">
      <div class="form__item"> <!-- form__item--invalid -->
        <label for="lot-name">Наименование</label>
        <input id="lot-name" type="text" name="lot-name" placeholder="Введите наименование лота">
        <span class="form__error">Введите наименование лота</span>
      </div>
      <div class="form__item">
        <label for="category">Категория</label>
        <select id="category" name="category">
          <option>Выберите категорию</option>
          <?php foreach ($categories as $cat):?>
            <option><?=$cat;?></option>
          <?php endforeach;?>
        </select>
        <span class="form__error">Выберите категорию</span>
      </div>
    </div>
    <div class="form__item form__item--wide">
      <label for="message">Описание</label>
      <textarea id="message" name="message" placeholder="Напишите описание лота"></textarea>
      <span class="form__error">Напишите описание лота</span>
    </div>
    <div class="form__item form__item--file"> <!-- form__item--uploaded -->
      <label>Изображение</label>
      <div class="preview">
        <button class="preview__remove" type="button">x</button>
        <div class="preview__img">
          <img src="img/avatar.jpg" width="113" height="113" alt="Изображение лота">
        </div>
      </div>
      <div class="form__input-file">
        <input class="visually-hidden" type="file" name="lot-img" id="photo2" value="">
        <label for="photo2">
          <span>+ Добавить</span>
        </label>
      </div>
    </div>
    <div class="form__container-three">
      <div class="form__item form__item--small">
        <label for="lot-rate">Начальная цена</label>
        <input id="lot-rate" type="number" name="lot-rate" placeholder="0">
        <span class="form__error">Введите начальную цену</span>
      </div>
      <div class="form__item form__item--small">
        <label for="lot-step">Шаг ставки</label>
        <input id="lot-step" type="number" name="lot-step" placeholder="0">
        <span class="form__error">Введите шаг ставки</span>
      </div>
      <div class="form__item">
        <label for="lot-date">Дата окончания торгов</label>
        <input class="form__input-date" id="lot-date" type="date" name="lot-date">
        <span class="form__error">Введите дату завершения торгов</span>
      </div>
    </div>
    <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
    <button type="submit" class="button">Добавить лот</button>
  </form>
</main>