<?php 
$posts = [ 
['title' => 'World news 1', 'published' => '16.09.2025', 'author' => 'Nikita',   'body' => 'Some US news body 1'],
['title' => 'World news 2', 'published' => '17.09.2025', 'author' => 'Nikita1',  'body' => 'Some US news body 2'],
['title' => 'World news 3', 'published' => '18.09.2025', 'author' => 'Nikita2',  'body' => 'Some US news body 3'],
['title' => 'World news 4', 'published' => '19.09.2025', 'author' => 'Nikita3',  'body' => 'Some US news body 4'],
['title' => 'World news 5', 'published' => '20.09.2025', 'author' => 'Nikita4',  'body' => 'Some US news body 5'],
];


?>




<?php include __DIR__ . '/partials/header.php'; ?>




    <main class="container">
    

      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>