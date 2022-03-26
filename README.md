
# Projeto Sistema de Envio de Currículo

Este projeto foi feito para aprimorar e treinar meus conhecimentos principalmente com o Laravel no Back-End e Vue.Js no Front-End.

Construi o projeto com o Front-End e Back-End separados, onde o Front faz requisições para o back.



## Documentação da API (Back-End)


| Método HTTP   |Url| Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `POST` | `/enviar` | Recebe os dados de uma candidatura. |
| `GET` | `/candidaturas` | Retorna todas as candidaturas feitas. |
| `GET` | `/download/{cv}` | Recebe o nome do currículo e retorna o arquivo para download. |



| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id`      | `string` | **Obrigatório**. O ID do item que você quer |

#### add(num1, num2)

Recebe dois números e retorna a sua soma.


## Aprendizados

O que você aprendeu construindo esse projeto? Quais desafios você enfrentou e como você superou-os?


## Rodando os testes

Para rodar os testes, rode o seguinte comando

```bash
  npm run test
```

