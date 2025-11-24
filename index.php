<?php

include_once __DIR__ . '/vendor/autoload.php';

include_once __DIR__ .'/config/functions.php';

$menu = require __DIR__ . '/config/menu.php';
$title = "Sistema de Estudos";

include __DIR__ . '/layouts/header.php';
include __DIR__ . '/layouts/sidebar.php';

?>
<main class="flex-1 p-10 overflow-y-auto">
    <div class="bg-white rounded-2xl shadow-lg p-8 overflow-y-auto max-h-[91vh]">
        <?php
        if (!empty($_GET['page'])) {
            $page = __DIR__. '/'. $_GET['page'] . ".php";
            
            if (!file_exists($page))
                echo "<h5 class='text-lg font-semibold text-red-500'>Página não encontrada.</h5>";
            else
                include $page;
        } else {
            include __DIR__ . '/home_content.php';
        }
        ?>
    </div>
</main>

<?php include __DIR__ . '/layouts/footer.php'; ?>
