<table class="table table-striped">
    <thead>
        <tr>
            <td><b>Фамилия</b></td>
            <td><b>Имя</b></td>
            <td><b>Тип номера</b></td>
            <td><b>Номер телефона</b></td>
            <td><b>Страна</b></td>
            <td><b>Подробнее</b></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->data as $data): ?>
            <tr>
                <td><?= $data[last_name] ?></td>
                <td><?= $data[first_name] ?></td>
                <?php if(!empty($data[phones])): ?>
                    <td><?= $data[phones][0][type] ?></td>
                    <td><?= $data[phones][0][number] ?></td>
                    <td><?= $data[phones][0][country] ?></td>
                    <td><?= \yii\helpers\Html::a('Подробнее', ['/site/detail', 'id' => $data[id]])?></td>
                <?php else: ?>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>