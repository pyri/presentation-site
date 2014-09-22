<?php $person = Model::readPersonInfo();
$work = Model::readWork(); ?>

<div class="content">

    <?php foreach ($person as $item): ?>
        <h2 class="heading"><?php echo $item->full_name; ?></h2>

        <div class="story">
            <?php if (!empty($item->person_desc)): ?>
                <p><?php echo $item->person_desc; ?></p>
            <?php endif; ?>
        </div>

        <?php if (!empty($item->education)): ?>
            <h2 class="heading">Образование</h2>
            <div class="story">
                <p><?php echo $item->education; ?></p>
            </div>
        <?php endif; ?>

        <?php if (!empty($item->add_info)): ?>
            <h2 class="heading">Дополнительная информация</h2>
            <div class="story">
                <p><?php echo $item->add_info; ?></p>
            </div>
        <?php endif; ?>

    <?php endforeach; ?>


    <h2 class="heading">Рабочий стаж</h2>
    <div class="story">
        <table>
            <tr>
                <th class="table-border font-tnr bold">Место работы</th>
                <th class="table-border font-tnr bold">Период работы</th>
                <th class="table-border font-tnr bold">Должность</th>
            </tr>
            <?php foreach ($work as $item): ?>
                <tr>
                    <td class="table-border font-tnr"><?php echo $item->org; ?></td>
                    <td class="table-border font-tnr"><?php echo $item->period; ?></td>
                    <td class="table-border font-tnr"><?php echo $item->post; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>