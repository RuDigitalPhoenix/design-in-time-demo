<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Sergey Yeremin a.k.a. RuDigitalPhoenix">
    <link rel="icon" href="favicon.ico">

    <title>Design In-Time DEMO CMS v0.1.1a - Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom-styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Переключить меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img alt="Brand" align="left" src="http://design-in-time.info/favicon.ico">Управление складом</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Список товаров <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                       
                        <li><a href="options/pagination-custom-text.html">Добавить товар</a></li>
                        <li><a href="options/custom-ajax.html">Удалить товар</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Пользователи <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Управление пользователями</a></li>
                        
                        <li><a href="#">Мой профиль</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Экспорт <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                       
                        <li><a href="extensions/select2-filter.html">Полный экспорт</a></li>
                        <li><a href="extensions/i18n-enhance.html">Выборочный экспорт</a></li>
                    </ul>
                </li>
                </li>
                <li>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
      <div class="container">

  <h2>Список товаров</h2>
   <div class="pull-left pagination-detail"><span class="pagination-info">Показываются позиции с %s до %s из %s по</span>
            <span class="page-list"><span class="btn-group dropup">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="page-size">10</span> <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu"><li><a href="javascript:void(0)">5</a></li>
                    <li class="active"><a href="javascript:void(0)">10</a></li><li><a href="javascript:void(0)">25</a></li>
                    <li><a href="javascript:void(0)">50</a></li><li><a href="javascript:void(0)">100</a></li>
                    <li><a href="javascript:void(0)">200</a></li></ul></span> строк на одной странице</span></div>   
       
  <table class="table table-striped">
    <thead>
      <tr>
        <th><a class="help">Название</a><p class="help-tooltip">Наименование экземпляра продукции</span></th>
        <th><a class="help">Стоимость за единицу</a></th>
          <span class="help-tooltip">Продажная стоимость единицы продукции (с учетом закупа, доставка, хранения и пр.), рубли</span>
        <th><a class="help">Тип единицы продукции</a></th>
          <span class="help-tooltip">Допустимые единицы измерения: лист А4, лист А3, шт.,кв.см., литр (кг)</span>
        <th><a class="help">Для какого оборудования</a></th>
          <span class="help-tooltip">Выбирается для какого оборудования может использоваться, на основании списка оборудования. Может быть несколько наименования. Или ни одного</span>
        <th><a class="help">Количество</a></th>
          <span class="help-tooltip">Количество единиц продукции</span>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Бумага ColorCopy плотность 280 г/кв.м.</td>
        <td>2</td>
        <td>Лист А4</td>
        <td><ul><li>Oki 9655</li>
<li>Oki 830</li></ul>
</td>
        <td>50000</td>
      </tr>
       <tr>
        <td>Бумага ColorCopy плотность 280 г/кв.м.</td>
        <td>2</td>
        <td>Лист А4</td>
        <td><ul><li>Oki 9655</li>
<li>Oki 830</li></ul>
</td>
        <td>50000</td>
      </tr>
       <tr>
        <td>Бумага ColorCopy плотность 280 г/кв.м.</td>
        <td>2</td>
        <td>Лист А4</td>
        <td><ul><li>Oki 9655</li>
<li>Oki 830</li></ul>
</td>
        <td>50000</td>
      </tr>
       <tr>
        <td>Бумага ColorCopy плотность 280 г/кв.м.</td>
        <td>2</td>
        <td>Лист А4</td>
        <td><ul><li>Oki 9655</li>
<li>Oki 830</li></ul>
</td>
        <td>50000</td>
      </tr>
       <tr>
        <td>Бумага ColorCopy плотность 280 г/кв.м.</td>
        <td>2</td>
        <td>Лист А4</td>
        <td><ul><li>Oki 9655</li>
<li>Oki 830</li></ul>
</td>
        <td>50000</td>
      </tr>
       <tr>
        <td>Бумага ColorCopy плотность 280 г/кв.м.</td>
        <td>2</td>
        <td>Лист А4</td>
        <td><ul><li>Oki 9655</li>
<li>Oki 830</li></ul>
</td>
        <td>50000</td>
      </tr>
       <tr>
        <td>Бумага ColorCopy плотность 280 г/кв.м.</td>
        <td>2</td>
        <td>Лист А4</td>
        <td><ul><li>Oki 9655</li>
<li>Oki 830</li></ul>
</td>
        <td>50000</td>
      </tr>
       <tr>
        <td>Бумага ColorCopy плотность 280 г/кв.м.</td>
        <td>2</td>
        <td>Лист А4</td>
        <td><ul><li>Oki 9655</li>
<li>Oki 830</li></ul>
</td>
        <td>50000</td>
      </tr>
        <td>Кружка белая</td>
        <td>50</td>
        <td>шт</td>
        <td>Кружечный термопресс</td>
        <td>140</td>
      </tr>
      <tr>
        <td>Брелок квадратный 4,2х3,7 см</td>
        <td>14</td>
        <td>шт</td>
        <td>&nbsp;</td>
        <td>342</td>
      </tr>
    </tbody>
  </table>
        <div class="pull-left pagination-detail"><span class="pagination-info">Показываются позиции с %s до %s из %s по</span>
            <span class="page-list"><span class="btn-group dropup">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="page-size">10</span> <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu"><li><a href="javascript:void(0)">5</a></li>
                    <li class="active"><a href="javascript:void(0)">10</a></li><li><a href="javascript:void(0)">25</a></li>
                    <li><a href="javascript:void(0)">50</a></li><li><a href="javascript:void(0)">100</a></li>
                    <li><a href="javascript:void(0)">200</a></li></ul></span> строк на одной странице</span></div>
        <div class="pull-right pagination">
            <ul class="pagination">
            <li class="page-pre"><a href="#">‹</a></li>
                <li class="page-first">
                    <a href="javascript:void(0)">1</a></li>
                <li class="page-first-separator disabled"><a href="javascript:void(0)">...</a></li>
                <li class="page-number"><a href="javascript:void(0)">46</a></li>
                <li class="page-number"><a href="javascript:void(0)">47</a></li>
                <li class="page-number"><a href="javascript:void(0)">48</a></li>
                <li class="page-number"><a href="javascript:void(0)">49</a></li>
                <li class="page-number active"><a href="javascript:void(0)">50</a>
                </li><li class="page-next"><a href="javascript:void(0)">›</a></li></ul></div>
</div>
</div> 
</body>
</html>