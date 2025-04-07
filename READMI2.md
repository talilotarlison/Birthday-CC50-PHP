## Web Project: Birthday CC50 Clone

Este é um projeto de clone do Birthday CC50, desenvolvido em PHP utilizando o micro framework Flight e SQLite para o gerenciamento de banco de dados. O propósito deste projeto é aprofundar o conhecimento em PHP e no desenvolvimento de aplicações web simples.

### Descrição do Projeto

O Birthday CC50 é um aplicativo que permite aos usuários armazenar e gerenciar informações sobre aniversários. O clone possui funcionalidades como registro de aniversários, visualização de listas e autenticação de usuários.

### Tecnologias Utilizadas

- **PHP**: Linguagem de programação usada para criar a lógica do servidor.
- **Flight**: Micro framework PHP que facilita a construção de aplicações web.
- **SQLite**: Sistema de gerenciamento de banco de dados leve e integrado, utilizado para armazenar as informações dos usuários e aniversários.
- **HTML/CSS**: Para a criação das interfaces do usuário.

### Funcionalidades

- **Registro de Usuários**: Permite que novos usuários se cadastrem no sistema.
- **Login**: Usuários podem fazer login para acessar suas informações.
- **Gerenciamento de Aniversários**: Adição, edição e exclusão de aniversários.
- **Listagem de Aniversários**: Exibição de todos os aniversários cadastrados na forma de lista.

### Estrutura do Projeto

```
/birthday-clone
│
├── /app # Código principal da aplicação
│ ├── /controllers # Controladores para gerenciar a lógica
│ ├── /models # Modelos que interagem com o banco de dados
│ └── /views # Arquivos de visualização
│
├── /public # Arquivos públicos (acessíveis via URL)
│ ├── index.php # Ponto de entrada da aplicação
│ └── /assets # Imagens, CSS e JavaScript
│
├── /database # Arquivos de banco de dados
│ └── database.sqlite # Arquivo do banco de dados SQLite
│
└── README.md # Este arquivo
```

### Como Instalar e Executar

1. **Clone o repositório**
```bash
git clone https://github.com/usuario/birthday-clone.git
cd birthday-clone
```

2. **Configurar o ambiente**
- Certifique-se de ter o PHP e o SQLite instalados.
- Configure o servidor local (ex: XAMPP, MAMP ou um servidor embutido do PHP).

3. **Acessar o projeto**
- Abra um terminal e execute o servidor embutido:
```bash
php -S localhost:8000 -t public
```
- Acesse `http://localhost:8000` em seu navegador.

### Contribuição

Contribuições são bem-vindas! Sinta-se livre para abrir issues e pull requests. Para grandes mudanças, abra uma discussão primeiro para que possamos discutir as alterações.

### Licença

Esse projeto está licenciado sob a MIT License - veja o arquivo [LICENSE](LICENSE) para detalhes.

### Contato

Para qualquer dúvida ou sugestão, entre em contato através das minhas redes.

---

Este README serve como uma introdução ao projeto e guia para instalação e uso. Certifique-se de personalizar as informações conforme a necessidade!
