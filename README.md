# CRUD Application

Simples aplicação web desenvolvida em PHP com o auxílio da framework Laravel, utilizando uma base de dados MySQL. 

Principais passos:

- Estruturar projeto com o Laravel;
- Alterar o ficheiro de configuração para a conexão com a base de dados;
- Criar migration para determinada tabela (para posteriormente ser possivel criar/alterar alguma coluna, por exemplo);
- Organizar e estruturar as rotas que serão necessárias;
- Criar Model para tratamento da informação da base de dados;
- Criar Controller para definir e desenvolver os métodos das Routes, para processamento e tratamento dos requests;

## BackEnd

### Rotas para o servidor (http://localhost:8000)

| Metodo | Rota                | Sub-Rota           | Descrição                                |  Test  |
|--------|---------------------|--------------------|------------------------------------------|--------|
| POST   | /api/addEmployee    |                    | Adiciona empregado		       | :heavy_check_mark: |
| GET    | /api/employees      |                    | Obtem lista de empregrados	       | :heavy_check_mark: |
| GET    | /api/employee       | /:id               | Obtem empregado por id		       | :heavy_check_mark: |
| PUT    | /api/updateEmployee | /:id               | Atualiza info do empregado por id	       | :heavy_check_mark: |
| DELETE | /api/deleteEmployee | /:id               | Apaga um empregado pelo id	       | :heavy_check_mark: |

Todas as operações foram testadas utilizando a ferramenta Postman, de forma a garantir o seu funcionamento.
