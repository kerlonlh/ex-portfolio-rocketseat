<?php 
    $itens = [
        ['href' => '#projetos', 'target'=> '', 'texto' => 'Projetos'],
        ['href' => 'https://github.com/kerlonlh', 'target'=> '_blank', 'texto' => 'Github'],
        ['href' => 'https://www.linkedin.com/in/kerlon-leonardi-hinterholz-958872285/', 'target'=> '_blank', 'texto' => 'Linkedin'],
    ];

?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex justify-between">
    <div class="font-bold text-xl text-cyan-600">
        🐧 Meu Portfolio ...
    </div>
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?=$item['href']?>" class="hover:underline" target="<?=$item['target']?>">
                        <?=$item['texto']?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</header>