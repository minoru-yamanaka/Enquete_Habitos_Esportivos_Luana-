
# 🏀 Enquete Esportiva

Um projeto simples de enquete sobre hábitos esportivos, desenvolvido com **HTML**, **PHP** e **MySQL**, utilizando o padrão **DAO (Data Access Object)**.

## 📋 Funcionalidades

- Formulário com:
  - Nome do participante
  - Esporte favorito (radio)
  - Esportes praticados (checkbox)
  - E-mail para contato (opcional)
  - Frequência de prática esportiva
- Salvamento dos dados em banco de dados MySQL
- Visualização de todas as respostas enviadas
- Organização do backend com estrutura DAO

## 🛠 Tecnologias utilizadas

- HTML5
- CSS3
- PHP
- MySQL
- PDO (PHP Data Objects)

## 📁 Estrutura de arquivos
```
/enquete
│
├── Conexao.php              # Classe de conexão com o banco
├── RespostaDAO.php          # Classe DAO para manipular as respostas
├── salvar\_resposta.php      # Lógica para salvar os dados enviados pelo formulário
├── listar.php               # Página para visualizar as respostas salvas
├── enquete\_esporte.php      # Página principal com o formulário
└── README.md                # Documentação do projeto
```


## 📦 Como usar

1. **Clone o repositório** ou copie os arquivos para seu servidor local (ex: `htdocs` no XAMPP):
```
   git clone https://github.com/seu-usuario/enquete-esportiva.git
```

2. **Crie o banco de dados** no MySQL:

```sql
   CREATE DATABASE enquete;

   USE enquete;

   CREATE TABLE respostas (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(100) NOT NULL,
       esporte_favorito VARCHAR(50) NOT NULL,
       esportes_praticados TEXT,
       email VARCHAR(100),
       frequencia VARCHAR(50) NOT NULL,
       data_envio DATETIME DEFAULT CURRENT_TIMESTAMP
   );
```

3. **Configure a conexão no arquivo `Conexao.php`** se necessário (usuário, senha, etc).

4. **Abra `enquete_esporte.php` em seu navegador** para visualizar e testar o formulário.

5. **Acesse `listar.php`** para visualizar os dados salvos.

## ✅ Requisitos

* PHP 7.0 ou superior
* Servidor com suporte a PHP (XAMPP, WAMP, etc.)
* MySQL ou MariaDB





