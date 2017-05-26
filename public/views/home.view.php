<?php require('views/common/header.php'); ?>
<?php require('views/common/nav.php'); ?>
    <div class="title">
        <h1 id="title">TaskMate</h1>
    </div>
    <div>
    <ul>
        <?php foreach ($tasks as $task) : ?>
        <li>
            <div class="score-list">
                <div>
                    <?php if ($task->completed): ?>
                    <h2 class="task-completed"><?= $task->description; ?></h2>
                    <?php else: ?>
                    <h2><?= $task->description; ?></h2>
                    <?php endif; ?>
                </div>
                <div><strong>Status: </strong>
                    <?= $task->completed ? '&#9989' : 'Incomplete'; ?>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php require('views/common/footer.php'); ?>