<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/avatar.svg" type="image/x-icon">
</head>
<body class="bg-slate-900 text-white">
    <?php include('./componentes/header.php'); ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-3">
        <!--  Hero-->
        <?php include('./componentes/hero.php'); ?>
        <!-- Projetos -->
         <section class="space-y-3 py-6">
            <h2 class="text-2xl font-bold" id="projetos">Meus projetos</h2>
            <!-- projeto -->
            <?php include('./componentes/projetos.php'); ?>
            
         </section>
    </main>
    <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
            @ Copyright <?=date('Y') ?>. Kerlon Hinterholz.
        </div>
    </footer>
</body>
</html> 