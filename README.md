# API criada com SlimFramework

Criei uma API básica de como começar com o Slim usando a arquitetura do Skeleton.

Assim criei alguma rotas básicas, como: get, post, put e delete.

No GET e DELETE não tem muita dificuldade porque só retonam uma resposta em JSON do que tiver no banco de dados na tabela carros

Já no POST é pegado um JSON para cadastrar e no PUT também recebe um JSON para editar a base de dados com as informações passada no JSON

O principal está na pasta `src/routes.php` que são as rotas acima mencionadas.

Lembrando que o intuito é ser um código básico para quem quer começar, foi adiconado também o Eloquent para trabalhar com banco de dados. Sobre o banco tem um arquivo `.sql` que ajuda a criar a tabela de teste para a API.

## Usando

Baixe o exemplo, adicine as depedências e pronto já pode começar a usar!
Ahh não esquece de mudar a configurações da conexão com o se banco de dados no arquivo `src/settings.php`

    php -S localhost:8080 -t public

Depois é só abri o navegador no `localhost:8080`

Qualquer dúvida pode deixar um cometário por aqui mesmo no github :)
