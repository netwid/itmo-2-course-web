<table id="table">
    <tr>
        <th class="variable">X</th>
        <th class="variable">Y</th>
        <th class="variable">R</th>
        <th>Current time</th>
        <th>Execution time</th>
        <th>Hit</th>
    </tr>
    <?php foreach ($history as $row): ?>
        <tr>
            <td><?= $row['X'] ?></td>
            <td><?= $row['Y'] ?></td>
            <td><?= $row['R'] ?></td>
            <td><?= $row['time'] ?></td>
            <td><?= $row['executionTime'] ?></td>
            <td>
                <?php if ($row['isHit']): ?>
                    <span class="hit">Ok</span>
                <?php else: ?>
                    <span class="hit">Fail</span>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>