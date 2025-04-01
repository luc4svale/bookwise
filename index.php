<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CSS -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <!-- Phosphor Icons -->
  <script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1"></script>

  <!-- Favicon -->
  <link rel="icon" href="./assets/logo.png">

  <title>Bookwise</title>
</head>

<body class="bg-stone-900">
  <!-- Header -->
  <?php include('./components/header.php'); ?>

  <!-- Search bar -->
  <?php include('./components/search-bar.php'); ?>

  <!-- Books List -->
  <?php include('./components/books-list.php'); ?>

  <script src="./js/toggle-menu.js"></script>
</body>

</html>