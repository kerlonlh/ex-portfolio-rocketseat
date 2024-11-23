<?php 
$projetos =[
    [
        "titulo" => "Tech Bin",
        "finalizado" => true,
        "ano" => 2023,
        "descricao" => "A Tech Bin é uma lixeira inteligente, que tem por objetivo proporcionar um local apropriado para descartes dos lixos eletrônicos. Por meio de sensores, ela monitora em tempo real o estado em que se encontra sua capacidade.",
        "stack" => ["C++", "HTML", "CSS", "JavaScript"],
        "img" => "./assets/logo-techbin.png",
        "alt" => "Logo Tech Bin "
    ],
    [
        "titulo" => "Sistema Gerenciador de Inventário",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" => "Sistema simples para gerência de estoques, inventário, controle e segurança. Em termos práticos, o SGI é um atrativo para comerciantes, empresas de pequeno porte, restaurantes que não possuem ferramentas facilitadoras de manuseio de inventário.",
        "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
        "img" => "./assets/logo-sgi.png",
        "alt" => "Logo Sistema Gerenciador de Inventário"
    ],
    [
        "titulo" => "FyloProject",
        "finalizado" => true,
        "ano" => 2023,
        "descricao" => "A FyloProject é uma atividade da Frontend Mentor, proposta nas aulas do curso de Desenvolvimento Web Front-end. Após o termino do curso, melhorei a responsividade e pratiquei Flexbox, além de implementar um menu responsivo e moderno.",
        "stack" => ["HTML", "CSS", "JavaScript"],
        "img" => "./assets/logo-fylo.png",
        "alt" => "Logo FyloProject "
    ],
];
$colors = [
    "PHP" => 'fuchsia',
    "HTML" => 'lime',
    "CSS" => 'sky',
    "JavaScript" => 'rose'];
?>
<?php foreach ($projetos as $projeto): ?>
<div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
    <div class="w-1/5 flex items-center justify-middle">
        <img src="<?=$projeto['img']?>" class="h-28 w-48 rounded-md" alt="<?=$projeto['alt']?>" />
    </div>
    <div class="w-4/5 space-y-3">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl">
                <?php if($projeto['finalizado']): ?>✅<?php else: ?>🛠️ <?php endif; ?>
                <?=$projeto['titulo']?>
                <?php if($projeto['finalizado']): ?>
                <span class="text-xs text-gray-400 opacity-50 italic"> (finalizado em <?=$projeto['ano'] ?>)</span>
                <?php else: ?>
                <span class="text-xs text-gray-400 opacity-50 italic"> (em desenvolvimento)</span>
                <?php endif; ?>
            </h3>
            <div class="space-x-1">
                <?php foreach($projeto['stack'] as $language):
                        $color = $colors[$language] ?? 'indigo'; 
                ?>
                <span class="bg-<?=$color?>-400 text-<?=$color?>-900 rounded-md px-2 py-1 font-semibold text-xs ">
                    <?=$language?>
                </span>
                <?php endforeach; ?>
            </div>
        </div>
        <p class="leading-6">
            <?=$projeto['descricao']?>
        </p>
    </div>
</div>
<?php endforeach ?>