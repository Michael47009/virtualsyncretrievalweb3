
<?php


$request = $_SERVER['REQUEST_URI'];
$request = trim($request, '/');

// Handle dynamic routes like /post/123alpha
if (preg_match('/^signin\/([a-zA-Z0-9\$\.,`>\?_-]+)$/', $request, $matches)) {
    $req = $matches[1]; // Extracts 'myArticle99'
    include 'signin.php';
}
else if (preg_match('/^dashboard\/([a-zA-Z0-9\$\.,`>\?_-]+)$/', $request, $matches)) {
    $req = $matches[1]; 
    include 'dashboard.php';
}
else if (preg_match('/^web\/([a-zA-Z0-9\$\.,`>\?_-]+)$/', $request, $matches)) {
    $req = $matches[1]; 
    include 'web.php';
}
else if (preg_match('/^manual\/([a-zA-Z0-9\$\.,`>\?_-]+)$/', $request, $matches)) {
    $req = $matches[1]; 
    include 'manual.php';
}
else if (preg_match('/^withdraw\/([a-zA-Z0-9\$\.,`>\?_-]+)$/', $request, $matches)) {
    $req = $matches[1]; 
    include 'withdraw.php';
}
else if (preg_match('/^history\/([a-zA-Z0-9\$\.,`>\?_-]+)$/', $request, $matches)) {
    $req = $matches[1]; 
    include 'history.php';
}
else if (preg_match('/^admin_deposits\/([a-zA-Z0-9\$\.,`>\?_-]+)$/', $request, $matches)) {
    $req = $matches[1]; 
    include 'admin_deposits.php';
}
 else {
    switch ($request) {
        case '':
            include 'landing.php';
            break;
        case 'signup':
                include 'signup.php';
             break;
             case 'smart':
                include 'smartseo.html';
             break;
        case 'index':
              include 'admin.php';
             break;
        case 'messenger':
              include 'messenger.php';
             break;
             case 'profits':
                include 'profits.php';
               break;
        
     
        case 'user_management':
            include 'user_management.php';
            break;
        case 'about':
                include 'about.php';
            break;
        case 'service':
            include 'service.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        default:
            include '404.php';
            break;
    }
}

?>
