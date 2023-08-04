<?php

/*Define a página atual pela URL */
$pagina = 'home';

if (isset($_GET['i'])){
     $pagina = addslashes($_GET['i']);
}

/*Carrega o header.php*/

include '../sitecompleto/Views/header.php';

/*Carrega a página escolhida pelo usuário*/
switch($pagina){
    case 'home':
        include '../sitecompleto/Views/home.php';
        break;
        
    case 'sobre':
        include '../sitecompleto/Views/sobre.php';
        break;
    
    default:
        include '../sitecompleto/Views/home.php';
        break;                   
}

/*Carrega o footer.php*/

include '../sitecompleto/Views/footer.php';
