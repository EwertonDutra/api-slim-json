<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->post('/carro', function (Request $request, Response $response) {
    // Exemplo: {"MODELO":"Fusca","MARCA":"Volkswagen"}

    $json = json_encode($request->getParsedBody());
    
    $carro = json_decode($json, true);

    $table = $this->db->table('carro');
    if($table->insert($carro) == 1) {
        return $response->withJson('Cadastrado com sucesso', 201);
    } else {
        return $response->withJson('Erro no cadastro', 400, JSON_UNESCAPED_UNICODE);
    }
});

$app->put('/carro/{id}', function ($request, $response, $args) {    
    // exemplo de JSON: {"MODELO":"New","MARCA":"marca gol"}
    
    $id = $args['id'];
    
    $json = json_encode($request->getParsedBody());
    $carro = json_decode($json, true);

    $table = $this->db->table('carro');
    if($table->where('ID', $id)->update($carro) == 1) {
        return $response->withJson('Atualizado com sucesso', 201);
    } else {
        return $response->withJson('Erro na atualização', 400, JSON_UNESCAPED_UNICODE);
    }
});

$app->delete('/carro/{id}', function ($request, $response, $args) {    
    $id = $args['id'];

    $table = $this->db->table('carro');
    if($table->where('ID', $id)->delete() == 1) {
        return $response->withJson('Deletado com sucesso', 201);
    } else {        
        return $response->withJson('Erro na remoção', 400, JSON_UNESCAPED_UNICODE);        
    }
});

$app->get('/carro', function ($request, $response, $args) {        
    $table = $this->db->table('carro');
    $carros = $table->get();

    return $response->withJson($carros, 201, JSON_UNESCAPED_UNICODE);    
});

$app->get('/carro/{id}', function ($request, $response, $args) {        
    $id = $args['id'];

    $table = $this->db->table('carro');
    $carro = $table->where('id', $id)->get();

    return $response->withJson($carro, 201, JSON_UNESCAPED_UNICODE);    
});
