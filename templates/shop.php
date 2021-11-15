<!-- Страница с открытым магазином -->
<h1>
    Каталог товаров
</h1>

<div> 
    <!-- foreach обернут в div чтобы рабить товары на блоки и они друг к другу не "прилипали" -->
    <?php foreach ($goods as $good): ?>  <!-- Перебор массива с товарами -->
        <div class="shopUnit">
            <img src="<?php echo $good['img']; ?>"/> <!-- вывод картинки -->

            <div class="shopUnitName">
                <?php echo $good['name']; ?>
            </div>
            <div class="shopUnitShortDesc">
                <?php echo $good['desc']; ?>
            </div>
            <div class="shopUnitPrice">
                Цена: <?php echo $good['price']; ?>
            </div>
            <a href="index.php?page=product&id=<?php echo $good['id']; ?>" class="shopUnitMore">  <!-- Путь к странице товара -->
                Подробнее
            </a>
        </div>
    <?php endforeach; ?>
</div>
