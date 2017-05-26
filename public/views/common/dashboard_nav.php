<div class="dashboard-header">
    <div class="app-name">
        <a class="nav" href="/"><strong>Tasky</strong></a>
    </div>

    <div class="profile-menu">
        <div class="username">
            @<?= $_SESSION['user']; ?>
        </div>
        <div class="avatar">
            <?php if (!isset($_SESSION['avatar'])): ?>
                <img src="../../public/img/user_avatar.png" alt="">
            <?php else: ?>
                <img src=<?php $_SESSION['avatar']; ?> alt="">
            <?php endif; ?>
        </div>
    </div>
</div>