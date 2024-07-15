<?php include 'view/entete.php'; ?>
<?php include 'view/menu.php'; ?>
<div class="container">
    <?php if (!empty($articles)): ?>
    <?php foreach ($articles as $article): ?>
    <div class="article">
        <h2><?php echo htmlspecialchars($article['titre']); ?></h2>
        <p><?php echo htmlspecialchars($article['contenu']); ?></p>

    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <p>Aucun article trouvé.</p>
    <?php endif; ?>
</div>