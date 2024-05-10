Este CRUD foi desenvolvido seguindo os princípios do MVC (Model-View-Controller) e utilizando programação orientada a objetos (POO) em PHP. Ele consiste em duas entidades principais: Pessoas e Níveis.

Funcionalidades Principais:

Listagem de Registros: Para cada entidade (Pessoas e Níveis), há uma página dedicada que exibe uma tabela com os itens cadastrados. A listagem inclui opções para adicionar, editar e remover registros.

Cadastro / Edição: O cadastro e a edição de registros podem ser realizados por meio de uma modal ou uma página separada. Os campos são validados para garantir que informações válidas sejam inseridas.

Exclusão: Antes de excluir um registro, o sistema solicita uma confirmação para evitar exclusões acidentais. É impedida a remoção de um nível que possua desenvolvedores associados a ele.

Busca: Adicionada funcionalidade de busca utilizando query para filtrar os resultados na listagem de níveis e pessoas.

Ordenação de Tabelas: A ordenação das tabelas é possível clicando no nome da coluna desejada, facilitando a visualização dos registros.

Feedback ao Usuário: Mensagens de sucesso e/ou erros são exibidas para informar o usuário sobre o resultado das operações, utilizando, por exemplo, Toast Notification.

Estrutura do Projeto: Controllers: Responsáveis por receber as requisições do usuário, interagir com o modelo e retornar a resposta adequada para a visualização. Models: Responsáveis pela lógica de negócios, interação com o banco de dados e manipulação dos dados. Views: Responsáveis pela interface com o usuário, exibindo os dados e interagindo com o usuário.

Tecnologias Utilizadas: PHP: Linguagem de programação utilizada para o desenvolvimento do backend. HTML/CSS/JavaScript: Utilizados para desenvolver a interface do usuário. MySQL: Banco de dados utilizado para armazenar os dados das entidades Pessoas e Níveis. Bootstrap: Responsividade e estilo.
