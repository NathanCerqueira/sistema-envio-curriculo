
# Projeto Sistema de Envio de Currículo

O sistema é uma baseado nas páginas de trabalhe conosco de empresas convêncionais, onde é possível enviar seus dados como nome, email, telefone e também o currículo. 

Depois dos dados serem enviados e armazenados com sucesso um email é disparado para confirmar a candidatura.

Construi o projeto com o Front-End e Back-End separados, onde o Front faz requisições para o back.


## Stack utilizada

**Front-end:** Vue.Js, Axios, HTML, CSS

**Back-end:** Laravel


## Documentação da API (Back-End)


| Método HTTP   |Rota| Descrição                           |
| :---------- | :--------- | :---------------------------------- |
| `POST` | `/enviar` | Recebe os dados de uma candidatura. |
| `GET` | `/candidaturas` | Retorna todas as candidaturas feitas. |
| `GET` | `/download/{cv}` | Recebe o nome do currículo e retorna o arquivo para download. |


## Imagens do Sistema (Front-End)


 - **Formulário para envio dos dados**

![form](https://user-images.githubusercontent.com/62714648/160263445-77671201-66c5-4e5e-9e9f-1e8b60042d2a.png)


- **Candidatura que foi armazenada**

![candidatura](https://user-images.githubusercontent.com/62714648/160263605-c925d360-a700-499c-910b-3517e32a11f7.png)

- **Email recebido após candidatura**

![email_candidatura](https://user-images.githubusercontent.com/62714648/160263659-50243316-9578-47bc-8c2a-cac7027b0757.png)


