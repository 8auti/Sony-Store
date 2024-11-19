<?php
require_once 'utils/game_list.php';

if (!isset($games) || !is_array($games)) {
  echo "No games data available.";
  return;
}
?>

<section class="row">
  <?php foreach ($games as $game): ?>
    <?php require 'ui/Games/GameCard.php'; ?>
  <?php endforeach; ?>
</section>