# Gerenciamento-de-Alunos
Trabalho academico de desenvolvimento WEB


Conexão do PHP para o SQL


- Definição de Variáveis de Conexão

![image](https://github.com/emanoel651/Gerenciamento-de-Alunos/assets/149185662/f362f9ba-ab92-48c0-bf7a-e4d2e1607cbb)


- Criação do Objeto de Conexão


![image](https://github.com/emanoel651/Gerenciamento-de-Alunos/assets/149185662/23f5434f-61ad-42f4-aac4-ed2eb1c1c310)



Esta linha cria um novo objeto mysqli usando as credenciais fornecidas, o que tenta estabelecer uma conexão com o banco de dados.


- Verificação de Erros na Conexão



![image](https://github.com/emanoel651/Gerenciamento-de-Alunos/assets/149185662/3dcf4313-313e-487b-8f00-ab3d0ad206ab)

  

Este código é um exemplo básico de como estabelecer uma conexão com um banco de dados MySQL usando PHP e a extensão mysqli.
SQL com PHP permite a interação entre um site e um banco de dados, utilizando consultas SQL para armazenar, buscar e manipular dados. 
A conexão é estabelecida através de funções ou objetos como mysqli ou PDO, facilitando operações como inserções, atualizações e seleções de registros no banco de dados.





- Conexão com formulário para banco de dados.

![image](https://github.com/emanoel651/Gerenciamento-de-Alunos/assets/149185662/9380217c-87fc-4c56-ac38-c8aa0998258b)

Formulário de Cadastro: O formulário coleta dados do usuário, como nome, senha, e-mail, telefone, gênero, data de nascimento, cidade, estado e CPF.
Campos de Entrada: Cada campo de entrada (input) tem um rótulo (label) associado e é marcado como obrigatório (required).
Ação do Formulário: O formulário envia os dados para formulario.php usando o método POST quando o botão de submissão é clicado.





  O site de gerenciamento de alunos exemplifica como um sistema web pode ser implementado para coletar, armazenar e processar informações de usuários de maneira eficiente. Utilizando PHP para o desenvolvimento do backend, o sistema permite a interação dinâmica com um banco de dados, oferecendo funcionalidades de cadastro, login e manipulação de dados dos alunos.

  A conexão com o banco de dados é um aspecto fundamental de qualquer aplicação web. Em PHP, isso é realizado comumente através da extensão mysqli ou da biblioteca PDO. Neste exemplo, a conexão é estabelecida utilizando mysqli, que facilita operações como inserção, atualização, e seleção de dados. Através da inclusão de um arquivo de configuração (config.php), o script PHP se conecta ao banco de dados e executa consultas SQL para manipular os dados de forma segura e eficiente.
  
