<?php $root = trim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
?>
<base href="<?= $root ? "/$root/" : '/' ?>">

<?php
//$root = "petcomp-newwebsite";
//echo "root: " . $root . "<br>"; // imprime
# regex que aceita qualquer string caso seja precedida por '/'
# representa os parametros das paginas dinamicas.
# pode ser qualquer palavra pois a página que deve validar o parametro.
$param = "[/]?(\w*)";

$routes = [
    "" => function () {
        require("index.php");
    },
    ($root ? "$root/programacao" : "programacao") => function () {
        require("programacao.php");
    },
    ($root ? "$root/labs" : "labs") => function () {
        require("labs.php");
    },
    ($root ? "$root/localizacao" : "localizacao") => function () {
        require("localizacao.php");
    },
    ($root ? "$root/registros" : "registros") => function () {
        require("registros.php");
    },
    ($root ? "$root/inscricoes" : "inscricoes") => function () {
        require("inscricoes.php");
    },
];

function route($path, $routes)
{
    foreach ($routes as $pattern => $handler) {
        if (preg_match("#^$pattern$#", $path, $matches)) {
            // Remove o primeiro elemento (match completo)
            array_shift($matches);

            // Chama o handler com os parâmetros capturados
            call_user_func_array($handler, $matches);
            exit; // Importante para não continuar processando
        }
    }
    // Se nenhuma rota corresponder
    http_response_code(404);
    echo "Página não encontrada";
}

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); # extraindo url digitada
$path = ltrim($path, '/'); // removendo '/' à esquerda
//echo "url: " . $path . "<br>";
route($path, $routes); // redirecionando a url pra rota correspondente
?>