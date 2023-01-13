<?php require (base_path('LinkPage/partials/header.php')) ?>
<?php require (base_path('LinkPage/partials/nav.php')) ?>
<?php require (base_path('LinkPage/partials/banner.php')) ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            
        </p>

        <p>
            <?php foreach($notes as $note): ?>
                <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
            <?php endforeach; ?>
        </p>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php require (base_path('LinkPage/partials/footer.php')) ?>