<html lang="ru">
<head>
    <title>Task3</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    
</head>
<body>
    <div class="content">
    <h1><a id="forma"></a>Форма:</h1>
      <form action="" method="POST">
        <label>Ваше имя:<input type="text" name="name"placeholder="Введите имя"/></label><br/>
        <label>Почта <input type="email" name="email" placeholder="Введите почту"/></label><br/>
        <label>Дата рождения:<input type="date" name="date" value="2003-03-03"/></label><br/>
        <p>
          <label> Пол:
            <input type="radio" checked="checked" name="radio-group-1" value="Значение1"/>Женский</label>
          <label><input type="radio" name="radio-group-1" value="Значение2" />Мужской</label><br />
        </p>
        <p>
          Kоличество конечностей:<br/>
          <label><input type="radio" checked="checked" name="radio-group-2" value="Значение1"/>2</label>
          <label><input type="radio" name="radio-group-2" value="Значение3"/>4</label>
          <label><input type="radio" name="radio-group-2" value="Значение4"/>6</label>
          <label><input type="radio" name="radio-group-2" value="Значение5"/>8</label><br/>
        </p>
        <p>
        <label>
          Cверхспособности:<br />
          <select name="power[]" multiple="multiple">
              <option value="Значение1">Бессмертие</option>
              <option value="Значение2" selected="selected">Прохождение сквозь стены</option>
              <option value="Значение3" selected="selected">Левитация</option>
          </select>
        </label><br />
        </p>
        <p>
        <label>Биография:<br/>
          <textarea name="field-name-2"></textarea>
        </label><br />
        </p>
        <a id="bottom"></a><br/>
        <label><input type="checkbox" name="check" />С контрактом ознакомлен(а)</label><br/>
        <p><input type="submit" name="send" value="Отправить"/></p>
      </form>
    </div>
</body>
</html>
