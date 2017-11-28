<html>
    <head>
        <title>Liste d'utilisateurs</title>
    </head>
    <body>
        <ul>
            <?php foreach ( $users as $user ): ?>
            <li><?php echo htmlspecialchars($user->getFirstname()).' '.htmlspecialchars($user->getLastname()); ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
