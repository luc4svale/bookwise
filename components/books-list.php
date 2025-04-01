<?php

$books = [
  [
    "title" => "A Rainha Vermelha",
    "image" => "a-rainha-vermelha.jpeg",
    "author" => "Victoria Aveyard",
    "rating" => "⭐⭐⭐⭐⭐",
    "description" => "Mare Barrow vive em um mundo dividido pelo sangue os Vermelhos, plebeus comuns, e os Prateados, elite com poderes sobre-humanos. Quando descobre que possui habilidades especiais, mesmo sendo Vermelha, Mare é forçada a viver entre os Prateados, fingindo ser uma nobre. Em meio a traições, intrigas e uma revolução iminente, ela precisa decidir em quem confiar. Enquanto luta por liberdade, descobre que no jogo pelo poder, ninguém é realmente quem parece ser. Uma história de fantasia cheia de ação e reviravoltas.",
  ],

  [
    "title" => "Eu e esse meu coração",
    "image" => "eu-e-esse-meu-coracao.jpeg",
    "author" => "C. C. Hunter",
    "rating" => "⭐⭐⭐⭐⭐",
    "description" => " Quando Liz e Matt se conhecem, suas vidas já estavam entrelaçadas de uma forma inesperada. Liz nasceu com um problema cardíaco e sobreviveu graças a um transplante. Matt perdeu a irmã no mesmo dia em que Liz recebeu um novo coração. Anos depois, o destino os aproxima, despertando sentimentos e segredos que podem mudar tudo. Entre memórias, dúvidas e o peso do passado, ambos precisarão decidir se vale a pena seguir em frente juntos. Uma história emocionante sobre amor, perda e recomeços.",
  ],

  [
    "title" => "É assim que acaba",
    "image" => "e-assim-que-acaba.png",
    "author" => "Colleen Hoover",
    "rating" => "⭐⭐⭐⭐⭐",
    "description" => "Lily Bloom sempre acreditou no amor, apesar de seu passado difícil. Ao conhecer Ryle Kincaid, um neurocirurgião encantador, tudo parece perfeito, mas logo ela percebe que nem tudo é o que parece. Quando seu primeiro amor, Atlas Corrigan, reaparece, segredos do passado vêm à tona, forçando Lily a confrontar verdades dolorosas. Entre paixão e dor, ela precisa tomar a decisão mais difícil de sua vida. Uma história intensa sobre amor, superação e a coragem de recomeçar",
  ],

  [
    "title" => "Teto para dois",
    "image" => "teto-para-dois.jpeg",
    "author" => "Beth O'Leary",
    "rating" => "⭐⭐⭐⭐⭐",
    "description" => "Tiffy e Leon precisam dividir um apartamento, mas nunca se encontram. Ela ocupa o espaço à noite, enquanto ele trabalha no turno da madrugada. Comunicando-se apenas por bilhetes colados pela casa, eles compartilham segredos, medos e momentos divertidos. O que começa como um acordo inusitado se transforma em uma conexão inesperada. Quando seus mundos colidem de verdade, terão que decidir se um relacionamento pode surgir dessa convivência peculiar. Uma comédia romântica leve e envolvente sobre amor e amizade.",
  ],

  [
    "title" => "O Hobbit",
    "image" => "o-hobbit.png",
    "author" => "J.R.R. Tolkien",
    "rating" => "⭐⭐⭐⭐⭐",
    "description" => "Bilbo Bolseiro leva uma vida tranquila até que o mago Gandalf e um grupo de treze anões o recrutam para uma grande aventura recuperar o tesouro guardado pelo dragão Smaug. Durante a jornada, Bilbo enfrenta trolls, goblins e criaturas perigosas, além de encontrar um anel misterioso que mudará seu destino. No caminho, ele descobre sua coragem e esperteza, provando que até o menor dos heróis pode fazer a diferença. Uma clássica história de fantasia repleta de magia, desafios e amizade.",
  ],

  [
    "title" => "O ladrão de raios",
    "image" => "o-ladrao-de-raios.png",
    "author" => "Rick Riordan",
    "rating" => "⭐⭐⭐⭐⭐",
    "description" => "Percy Jackson descobre que é um semideus, filho de Poseidon, e que seu destino está ligado ao Olimpo. Acusado de roubar o raio-mestre de Zeus, ele tem apenas dez dias para recuperar o artefato e evitar uma guerra entre os deuses. Ao lado de seus amigos, Annabeth e Grover, Percy embarca em uma jornada repleta de desafios, criaturas mitológicas e segredos sobre sua própria origem. Enquanto luta para provar sua inocência, ele aprende que ser um herói significa muito mais do que ter poderes.",
  ],

]

?>

<section class="mx-auto max-w-screen-lg px-6 py-3">
  <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php foreach ($books as $book): ?>
      <!-- Book Card -->
      <li class="border border-stone-400 rounded-lg bg-stone-800 text-stone-400 overflow-hidden">

        <!-- Title -->
        <h2 class="text-center font-bold text-xl px-3 py-2 bg-stone-400 text-stone-950 overflow-hidden text-ellipsis text-nowrap">
          <a href="/book.php" class="hover:underline hover:text-stone-700">
            <?= $book['title'] ?>
          </a>
        </h2>

        <div class="flex items-center border-b border-stone-400">
          <!-- Image -->
          <img class="w-1/3 aspect-2/3" src="./uploads/covers/<?= $book['image'] ?>" alt="Capa do livro '<?= $book['title'] ?>'">

          <!-- Description -->
          <p class="w-2/3 px-3 font-medium text-sm line-clamp-6 overflow-hidden text-ellipsis break-words" aria-label="Descrição">
            <?= $book['description'] ?>
          </p>
        </div>



        <div class="p-3 flex justify-between items-center">
          <!-- Author -->
          <p class="text-sm flex items-center gap-x-2" aria-label="Autor">
            <i class="ph-bold ph-user text-sm"></i> <?= $book['author'] ?>
          </p>

          <!-- Rating -->
          <p class="text-xs" aria-label="Avaliação">
            <?= $book['rating'] ?>
          </p>
        </div>

      </li>
    <?php endforeach; ?>
  </ul>

</section>