# Ambiente Docker: Apache + PHP + MySQL + phpMyAdmin

Este projeto configura um ambiente de desenvolvimento completo com Docker Compose, incluindo:

- PHP com Apache para rodar uma aplicação web.
- MySQL com volume para persistência de dados.
- phpMyAdmin para administração do banco de dados via interface web.

---

## Como Executar o Projeto

1. **Clone o repositório** (ou baixe os arquivos):

   ```bash
   git clone https://github.com/MateusSantos007/Aulas-Topicos-Avancados-Compose.git
   cd Aulas-Topicos-Avancados-Compose
   ```
2. ## Suba os containers com Docker Compose:

   ```bash
   docker-compose up --build -d
   ```
   
## Como Acessar

### Aplicação PHP

- **URL:** [http://localhost:](http://localhost)

### phpMyAdmin

Interface para gerenciar o banco de dados:

- **URL:** [http://localhost:8080](http://localhost:8080)
- **Usuário:** `user`
- **Senha:** `password`
- **Servidor:** `db`
