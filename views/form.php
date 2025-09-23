<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <?php if (isset($_GET['name']) && isset($_GET['age'])): ?>
    <h1>Hello<?= $_GET['name'] ?> you are <?= $GET['age'] ?></h1>
  <?php endif ?>
  <form action="/answer?color=green&cat=Nuustik" method="POST">
    <div></div>
    <label for="name">Name:
      <input id="name">
    </label>
    </div>
    <div>
      <label for="age">Age:</label>
      <input name="name" id="age">
    </div>
    <button type="submit">Send</button>
    <input type="submit" value="Clear">
  </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>