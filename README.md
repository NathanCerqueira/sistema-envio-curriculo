
# Projeto Sistema de Envio de Currículo

O sistema é uma baseado nas páginas de trabalhe conosco de empresas convêncionais, onde é possível enviar dados como nome, email, telefone e também o currículo. 

Depois dos dados serem enviados e armazenados com sucesso um email é disparado para confirmar a candidatura.

Construi o projeto com o Front-End e Back-End separados, onde o Front faz requisições para o back.

<hr>

## Stack utilizada

**Front-end:** Vue.Js, Axios, HTML, CSS

**Back-end:** Laravel

<hr>

## Documentação da API (Back-End)


| Método HTTP   |Rota| Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `POST` | `/enviar` | Recebe os dados de uma candidatura. |
| `GET` | `/candidaturas` | Retorna todas as candidaturas feitas. |
| `GET` | `/download/{cv}` | Recebe o nome do currículo e retorna o arquivo para download. |



