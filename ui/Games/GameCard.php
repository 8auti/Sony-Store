<?php
if (!isset($game) || !is_array($game)) {
    echo "Invalid game data.";
    return;
}

$title = $game['title'] ?? 'Unknown Game';
$imageUrl = $game['images'][0] ?? 'https://via.placeholder.com/150';
?>

<article
  class="col-6 col-md-4 col-lg-3 text-center gaming-card my-3 pe-3 cursor-pointer">
  <figure class="position-relative product-game-card h-100">
    <img
      class="w-100 h-100 fit-cover"
      src="<?= htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8'); ?>"
      alt="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>" />
    <figcaption class="position-absolute tty--200 w-100 z-4">
      <?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
    </figcaption>
    <div class="fade-top"></div>
  </figure>
</article>
