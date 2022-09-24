
$dataOS = array();
$dataOS['wc'] = 12234;
$dataOS['OS']['id'] = 1992;
$dataOS['OS']['th'] = 'jjand';

// echo 'alguma coisa';

ob_start(); // inicia a captura do include
/* mostra na tela o html que está 
   na página page-message.php, 
   passando assim nossas variáveis acima.
   As variávies tem que coincidir com
   as variávies dentro do arquivo.
   */
include('page-message.php'); 
/* Captura o código acima em uma string */
$html = ob_get_clean();

echo gettype($html);
