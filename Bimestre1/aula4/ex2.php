<?php
$pessoa1 = array( "nome" => "Manuel de Medeiros",
                 "endereço" => "Rua das Acácias",
                  "cidade" => "Foz do Iguaçu", 
                  "UF" => "PR" );

$pessoa2 = array( "nome" => "Juliana de Amaral",
                 "endereço" => "Rua dos Pinheiros",
                  "cidade" => "Florianópolis",
                   "UF" => "SC" );

$pessoa3 = array( "nome" => "Rodrigo Baidek",
                 "endereço" => "Rua Dom Pedro I",
                  "cidade" => "Petrópolis",
                   "UF" => "RJ" );

$pessoa4 = array( "nome" => "Fabíola da Silva",
                "endereço" => "Rua Chile",
                 "cidade" => "Guarulhos", 
                 "UF" => "SP" );


$pessoas = array($pessoa1 , $pessoa2 , $pessoa3 , $pessoa4);

foreach($pessoas as $p) {
    print "nome = " . $p["nome"] . "|" ;
    print " endereço = " .  $p["endereço"] . "|" ;
    print  " cidade = " .   $p["cidade"] . "|" ;
    print " UF = " .   $p["UF"]  . "\n"; 
}




?>