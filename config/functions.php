<?php

function renderHeaderPage(?string $title = null, ?string $description = null, ?string $path = null): void
{
    echo '<h2 class="text-2xl font-light mb-4 flex items-center gap-2">
            <span>' . ($title ?? '') . '</span>
          </h2>';
    echo '<p class="mb-6 text-gray-600">'. ($description ?? '') . '</p>';
    
    if (!empty($path))
        echo "<p class='mb-6'><code class='bg-gray-100 text-gray-800 p-1 rounded'>Source: " . $path . "</code></p>";
    
    echo '<pre class="bg-gray-900 text-green-400 p-4 rounded-lg text-sm overflow-x-auto">';
}

function renderFooterPage(): void
{
    echo "</pre>";
}