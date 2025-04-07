
Claro! Para exibir os dados de uma variável em PHP, você pode usar várias funções. Aqui estão algumas das mais comuns:

1. **echo**  
    Se a variável contém uma string ou um número, você pode usar `echo` para exibir seu valor.

    ```php
    $variavel = "Olá, mundo!";
    echo $variavel;
    ```

2. **print_r**  
    Para exibir arrays ou objetos de forma legível, `print_r` é muito útil.

    ```php
    $array = array("maçã", "banana", "laranja");
    print_r($array);
    ```

3. **var_dump**  
    Para obter informações detalhadas sobre a variável, incluindo seu tipo e valor, `var_dump` é a melhor opção.

    ```php
    $variavel = 42;
    var_dump($variavel);

    $array = array("maçã", "banana", "laranja");
    var_dump($array);
    ```

4. **var_export**  
    Para exibir uma representação estruturada da variável, que pode ser usada como código PHP, use `var_export`.

    ```php
    $array = array("maçã", "banana", "laranja");
    var_export($array);
    ```

### Essas funções são muito úteis para depuração e para entender melhor os dados que você está manipulando em seu código PHP. Se precisar de mais alguma coisa, estou aqui para ajudar!
   ```php
<?php
require 'flight/Flight.php';

// Definindo uma rota que responde a um POST request
Flight::route('POST /minha-rota', function(){
    // Pegando dados do POST
    $dados = Flight::request()->data->getData();
    
    // Processando os dados
    echo 'Dados recebidos: ';
    print_r($dados);
});

// Iniciando o framework
Flight::start();
?>


<?php
require 'flight/Flight.php';

// Definindo uma rota GET
Flight::route('GET /hello', function(){
    echo 'Hello, world!';
});

// Iniciando o framework
Flight::start();
?>


<?php
require 'flight/Flight.php';

// Define uma rota que retorna JSON
Flight::route('GET /json', function(){
    $data = array(
        'status' => 'success',
        'message' => 'Hello, world!'
    );
    Flight::json($data);
});

// Inicia o framework FlightPHP
Flight::start();
?>

 ```