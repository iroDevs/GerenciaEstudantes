# Lumen PHP Framework

- Feito para aprimorar meus conhecimentos em Lumem e PHP. Sinta-se livre para me dar qualquer crítica ou sugestão para melhora. Juntos podemos ir mais longe! :)

Gerencia nota é uma API Rest. Feita para gerenciar notas de uma escola fictícia em diversos cursos, basicamente os professores tem acesso há um CRUD para realizar o acompanhamento de seus alunos

Tecnologias usadas

- PHP
- LUMEM
- ELOQUENT ORM ( SQL )
- REST API

### Regras

### Os usuários podem:

- Criar estudantes
- Editar estudantes
- Excluir estudantes
- Visualizar todos os estudantes
- Visualizar apenas um estudante específico

### Os usuários NÃO podem:

- Criar aluno como mesmo Nome
- Realizar edição em um estudante de maneira que fique igual há outro

> O proprio sistema tem meios de identificar e alertar essas falhas


## Docomentação

Há apenas um Grupo de rotas que formam um Crud na entidade Aluno

URL BASE: _{base_url}_/aluno

**endpoint:**
### Get => "/"
Retorno: array
Status: 200
```js
[
    {
        "id": 1,
        "nome": "pedro",
        "nota": 100,
        "curso": "Desenvovimento de software"
    },
...
]
```

### Get => "/{id}"
Retorno: object
Status: 200
```js
{
    "id": 1,
    "nome": "pedro",
    "nota": 100,
    "curso": "Desenvovimento de software"
}
```

### Delete => "/{id}"
Retorno: string
Status: 200
```js
{
    "sucesso aluno deletado"
}
```

### Post => "/"
Corpo da requisição:
 ```js
{
    "nome": STRING,
    "nota": INT,
    "curso": STRING,
}
```
Retorno: object
Status 201
```js
{
    "id": 1,
    "nome": "pedro",
    "nota": 100,
    "curso": "Desenvovimento de software"
}
```
 ### Put => "/{id}"
Corpo da requisição:
 ```js
{
    "nome": STRING,
    "nota": INT,
    "curso": STRING,
}
```
Retorno: object
Status: 200
```js
{
    "id": 1,
    "nome": "pedro",
    "nota": 100,
    "curso": "Desenvovimento de software"
}
```