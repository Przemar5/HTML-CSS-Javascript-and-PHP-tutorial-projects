<?php require_once VIEW_ROOT . '/templates/header.php'; ?>
<?php if(empty($pages)): ?>
            <p>Sorry, no pages at the moment.</p>
<?php else: ?>
<?php foreach ($pages as $page): ?>
                <li><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['label']; ?></a></li>
<?php endforeach; ?>
<?php endif; ?>
<?php require_once VIEW_ROOT . '/templates/footer.php'; ?>