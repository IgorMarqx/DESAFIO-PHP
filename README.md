# DESAFIO-PHP

O desafio consiste em você fazer um CRUD utilizando PHP e MySQL. Primeiramente você terá que criar uma página de Create (criar), e outra de Read (listar). Depois você terá que criar a página de Update (editar) e por fim a de Delete (apagar).

- OBS: Não é obrigatório estilizar. Mas pode ficar a vontade se quiser.

## O que fazer?

1. Antes de tudo você precisa fazer um git clone desse repositório.
2. Em seguida crie sua branch - [Instruções de como criar](https://www.atlassian.com/br/git/tutorials/using-branches/git-checkout)
3. Nessa sua branch você irá fazer todo o seu código. Sempre lembre de commitar as coisas que você fizer.
4. Após tudo concluido você irá subir sua branch com todas as alterações. Em seguida você irá fazer um pull request para a main. 

## Como rodar o PHP?

1. Você tem algumas opções para poder rodar o seu projeto em localhost como (WampServer, Xampp, Mamp). Escolha o que preferir.
2. Você instala um desses Softwares, depois de instalado você deverá criar o seu projeto dentro da pasta WWW.
3. Para ter acesso ao seu projeto basta ir no seu navegador e acessar a localhost e o nome do seu projeto.
## Banco de dados

1. Você deverá criar um banco de dados MySQL e poderá dar o nome que quiser para esse banco. Nele você terá que criar uma tabela chamada clientes.
2. Você pode escolher algum gerenciador de banco de dados para visualizar melhor o seu banco (HeidiSQL, Beekeeper Studio, etc).
3. O que salva no banco de dados: (Nome, E-mail, Cpf, Número e Data de Nascimento).

## Create

Você deverá criar uma página index.php e nela colocar os campos de input (Nome, E-mail, Cpf, Número e Data de Nascimento). Esses campos serão salvos no banco de dados ao enviar o formulário.

## Read

Você deverá criar uma página separada que liste todas os registros do banco de dados em uma tabela, não é obrigatório estilizar mas se quiser treinar seu css fique a vontade.

Na tabela de listagem você deverá implementar dois botoes para editar e excluir o dado especifico.

## Update

Você deverá criar uma página onde deverá ter campos inputs para poder editar os registros selecionados, deverá estar disponivel para editar (Nome, E-mail, Cpf, Número e Data de Nascimento).

- (OPCIONAL): Se você quiser ao invés de criar uma outra página para editar o usuario, você pode criar um modal com bootstrap para editar o registros na mesma página.|

## Delete 

Você deverá criar um botao na tabela do Read para poder excluir o dado selecionado.

- (OPCIONAL): Se você quiser testar seus conhecimentos em JS você pode implementar uma verificação se deseja mesmo excluir com javascript, ou você pode também implementar isso com bootstrap em um modal.

## Desafios adicionais

1. Não deixar os campos serem enviados vazios.
2. Usar validação para prevenir o BD de receber SQL INJECTION - [O que é isso?](https://www.devmedia.com.br/sql-injection/6102).
3. Retornar erros personalizados nos campos de input quando der houver algum erro de validação.
4. Exibir data de nascimento formatada. Ex: 10/10/2010.
5. Implementar mascara nos campos de telefone, data de nascimento e CPF. Caso queira usar biblioteca de mascara fique a vontade.
6. Exibir CPF e Número formatado. Ex: 000.000.000-00,(83) 90000-0000.
7. Fazer deploy do sistema. Fica por sua escolha o host que você quiser utilizar. (GITHUB, VERCEL, NETFLIY).


