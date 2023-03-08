

<?php 
    // 1 СПОСОБ ПОДКЛЮЧЕНИЯ
        echo "<link rel='stylesheet' href=/style.css>"; 
?>
<html lang="ru">
<head>
    <title>First work</title>
    <meta charset="utf-8">
</head>
<body>
    <div class="content">
    <h1><a id="forma"></a>Форма:</h1>
      <form action="/"
        method="POST">
        <label>
          Имя:<br />
          <input name="field-name-1"
          placeholder="Начальное значение" />
        </label><br />
        Почта:<label>
          <br />
          <input name="field-email"
            type="email"
            placeholder="Введите вашу почту" />
        </label><br />
        Дата рождения:<label>
          <br />
          <input name="field-date"
            value="2003-03-03"
            type="date" />
        </label><br />
        <p>
          Пол:<br />
          <label><input type="radio" checked="checked"
            name="radio-group-1" value="Значение1" />
            Женский</label>
          <label><input type="radio"
            name="radio-group-1" value="Значение2" />
            Мужской</label><br />
        </p>
        <p>
            Kоличество конечностей:<br />
          <label><input type="radio" checked="checked"
            name="radio-group-2" value="Значение1" />
            2</label>
            <label><input type="radio"
            name="radio-group-2" value="Значение3" />
            4</label>
            <label><input type="radio"
            name="radio-group-2" value="Значение4" />
            6</label>
            <label><input type="radio"
            name="radio-group-2" value="Значение5" />
            8</label><br />
        </p>
        <p>
        <label>
            Cверхспособности:
            <br />
            <select name="field-name-4"
              multiple="multiple">
              <option value="Значение1">Бессмертие</option>
              <option value="Значение2" selected="selected">Прохождение сквозь стены</option>
              <option value="Значение3" selected="selected">Левитация</option>
            </select>
          </label><br />
        </p>
        <p>
          <label>
            Биография:<br />
            <textarea name="field-name-2"></textarea>
          </label><br />
        </p>
        <a id="bottom"></a>
          <br />
          <label><input type="checkbox"
            name="check-1" />
            С контрактом ознакомлен(а)</label><br />
        <p> <input type="submit" value="Отправить" /> </p>
      </form>
    </div>
  <footer>
    <p class="footer-text-left">
    (c) Доля Юлия 2022
  </p>
  </footer>
</body>
</html>