<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false; // Serve the requested resource as-is.
}

//switch($_SERVER['REQUEST_URI']) {
//   case '/':
//        $posts = [ 
//['title' => 'World news 1', 'published' => '16.09.2025', 'author' => 'Nikita',   'body' => 'Some world news body 1'],
////['title' => 'World news 2', 'published' => '17.09.2025', 'author' => 'Nikita1',  'body' => 'Some world news body 2'],
////['title' => 'World news 3', 'published' => '18.09.2025', 'author' => 'Nikita2',  'body' => 'Some world news body 3'],
////['title' => 'World news 4', 'published' => '19.09.2025', 'author' => 'Nikita3',  'body' => 'Some world news body 4'],
////['title' => 'World news 5', 'published' => '20.09.2025', 'author' => 'Nikita4',  'body' => 'Some world news body 5'],
//];
//        include __DIR__ . '/../views/index.php';
//        break;
//    case '/us':
//        include __DIR__ . '/../views/us.php';
//        break;
//    default:
//        echo '404 Page Not Found';
//}