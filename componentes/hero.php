<?php 
    $itens = [
        ['href' => 'https://instagram.com/hinterholz_kerlon?igshid=OGQ5ZDc2ODk2ZA==', 'src' => './assets/instagram.png', 'alt' => 'Instagram'],
        ['href' => 'https://wa.me/55996560626', 'src' => './assets/whatsapp.png', 'alt' => 'Whatsapp'],
        ['href' => 'https://github.com/kerlonlh', 'src' => './assets/github.png', 'alt' => 'Github'],
        ['href' => 'https://www.linkedin.com/in/kerlon-leonardi-hinterholz-958872285/', 'src' => './assets/linkedin.png', 'alt' => 'Linkedin'],
    ];  
?>
<section class="flex gap-x-3">
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Kerlon!</h1>
        <p class="text-xl leading-6 mt-6">
            Falando um pouco sobre mim, sou um desenvolvedor web que adora criar soluções novas para problemas do mundo
            real focando na esperiencia do usuário.
            Atualmente, trabalho como Técnico de apoio ao usuário de informática (Service Desk), mas também possuo
            conhecimento na area de desenvolvimento, como PHP, HTML, CSS, JavaScript, e na área de Bando de Dados, SQL,
            XAMPP.
        </p>
        <ul class="flex gap-x-3 mt-3">
            <?php foreach($itens as $item): ?>
            <li>
                <a href="<?=$item['href']?>" target="_blank">
                    <img class="h-8 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>">
                </a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="w-1/3 flex items-right justify-end">
        <div>
            <img src="./assets/foto_perfil.jpg" class="h-56 rounded hover:animate-pulse" alt="Foto Kerlon Hinterholz">
        </div>
    </div>
</section>