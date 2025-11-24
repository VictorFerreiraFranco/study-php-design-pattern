<aside class="w-72 bg-white shadow-md p-6 flex flex-col h-screen overflow-y-auto custom-scroll">
    <h2 class="text-2xl font-bold mb-6 text-blue-600 flex items-center gap-2">
        <i data-lucide="book-open"></i> Estudos
    </h2>
    
    <!-- Links principais -->
    <nav class="mb-6 space-y-2">
        <?php foreach (($menu['main'] ?? []) as $link): ?>
            <a href="index.php?page=<?= $link['link'] ?>"
               class="flex items-center gap-2 px-3 py-2 rounded-md hover:bg-blue-100 hover:text-blue-700 transition">
                <i data-lucide="<?= $link['icon'] ?>"></i> <?= $link['name'] ?>
            </a>
        <?php endforeach; ?>
    </nav>
    
    <!-- Grupos -->
    <nav class="flex-1 space-y-4">
        <?php foreach (($menu['groups'] ?? []) as $group => $links): ?>
            <div x-data="{ open: false }" class="border rounded-lg">
                <button @click="open=!open"
                        class="w-full flex justify-between items-center px-3 py-2 text-left font-semibold text-gray-700 hover:bg-blue-50 rounded-t-lg">
                    <?= $group ?>
                    <i data-lucide="chevron-down" class="w-4 h-4 transform transition"
                       :class="open ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="open" class="pl-4 py-2 space-y-1">
                    <?php foreach ($links as $link): ?>
                        <a href="index.php?page=<?= $link['link'] ?>"
                           class="flex items-center gap-2 px-2 py-2 rounded-md text-gray-600 hover:bg-blue-100 hover:text-blue-700 transition">
                            <i data-lucide="<?= $link['icon'] ?>"></i> <?= $link['name'] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </nav>
    
    <footer class="text-xs text-gray-400 mt-auto border-t pt-4">
        &copy; <?= date('Y') ?> Estudos
    </footer>
</aside>
<style>
    .custom-scroll::-webkit-scrollbar {
        width: 6px;
    }

    .custom-scroll::-webkit-scrollbar-thumb {
        background-color: #cbd5e1;
        border-radius: 9999px;
    }

    .custom-scroll::-webkit-scrollbar-thumb:hover {
        background-color: #94a3b8;
    }

    .custom-scroll::-webkit-scrollbar-track {
        background: transparent;
    }
</style>