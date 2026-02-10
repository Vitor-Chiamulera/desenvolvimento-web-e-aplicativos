# Desenvolvimento Web e Aplicativos

Projeto utilizado na disciplina **Desenvolvimento Web e Aplicativos** com objetivo de apresentar, de forma prática, os conceitos básicos de
desenvolvimento web utilizando **Laravel** e **Docker**.


## 📌 Requisitos

Antes de começar, você precisa ter instalado na sua máquina:

### 1️⃣ Git
Utilizado para clonar o projeto.

🔗 https://git-scm.com/downloads

Verifique a instalação:
```bash
git --version
```

---

### 2️⃣ Docker
Utilizado para rodar o ambiente completo (PHP, Nginx e MySQL) sem instalar
essas ferramentas manualmente.

🔗 https://www.docker.com/products/docker-desktop/

Verifique a instalação:
```bash
docker --version
docker compose version
```

⚠️ **Importante**
- O Docker Desktop deve estar **aberto e em execução** antes de continuar.
- No Windows, recomenda-se usar **WSL 2** (o próprio instalador orienta).

---

### 3️⃣ Editor de Código (recomendado)
Sugestão: **Visual Studio Code**

🔗 https://code.visualstudio.com/

---

## 🚀 Subindo o projeto pela primeira vez

### 1️⃣ Clonar o repositório

```bash
git clone <URL_DO_REPOSITORIO>
cd <PASTA_DO_PROJETO>
```

---

### 2️⃣ Criar o arquivo de ambiente

```bash
cp .env.example .env
```

---

### 3️⃣ Subir os containers com Docker

```bash
docker compose up -d --build
```

Esse comando pode demorar alguns minutos na primeira execução.

---

### 4️⃣ Instalar as dependências do Laravel

```bash
docker compose exec app composer install
```

---

### 5️⃣ Gerar a chave da aplicação

```bash
docker compose exec app php artisan key:generate
```

---

### 6️⃣ Acessar a aplicação

Abra o navegador e acesse:

```
http://localhost:8080
```

Se você visualizar a página inicial do Laravel, o ambiente está funcionando ✅

---

## 🛑 Problemas comuns

- **Docker não inicia**
  Verifique se o Docker Desktop está aberto.

- **Porta 8080 já está em uso**
  Feche outros serviços que possam estar usando essa porta
  ou avise o professor.

- **Erro de permissão em arquivos**
  Reinicie os containers:
  ```bash
  docker compose down
  docker compose up -d
  ```

---

## 📚 Observação importante

Este projeto será evoluído ao longo do semestre conforme os conteúdos da disciplina.
Não altere a estrutura do Docker sem orientação do professor.
