# Mini Aplicação para Testes de Monitoração

## Em contrução

## Descrição
Este mini aplicativo tem por objetivo ser utilizado para testar em algumas ferramentas de monitoração como o Grafana, Dynatrace, Zabbix e etc. Esta aplicação monitora o desempenho de sistemas em tempo real, fornecendo alertas e relatórios detalhados.

## Índice
- Instalação
- Comandos Git


## Instalação
Instruções passo a passo para instalar e configurar o projeto.

```bash
# Clone o repositório
git clone https://github.com/rafa3lmsantos/MiniApp.git

# Navegue até o diretório do projeto
cd MiniApp

# Crie um ambiente virtual
python -m venv venv

# Ative o ambiente virtual

# No Windows
venv\Scripts\activate

# No macOS/Linux
source venv/bin/activate

# Instale as dependências
pip install -r requirements.txt
```

## Comandos Git
Alguns comandos úteis para trabalhar com Git:

```bash
# Adicionar todas as mudanças
git add .

# Commitar com uma mensagem descritiva
git commit -m "Comentário da alteração que fez"

# Enviar para o branch principal
git push origin main
```

## Comandos SQLite

Aqui estão alguns comandos úteis do SQLite para gerenciar e manipular o banco de dados `database.sqlite`.

### Abrir o Banco de Dados

```bash
sqlite3 database.sqlite
```
### No prompt do SQLite3, execute o comando para listar as tabelas
```bash
.tables
```

### Para visualizar os dados na tabela contatos, execute
```bash
SELECT * FROM contatos;
```
### Mostrar estrutura de uma tabela
```bash
.schema contatos
```

### Inserir dados em uma tabela
```bash
INSERT INTO nome_da_tabela (coluna1, coluna2) VALUES ('valor1', 'valor2');
```

### Atualizar dados em uma tabela
```bash
UPDATE nome_da_tabela SET coluna1 = 'novo_valor' WHERE coluna2 = 'condição';
```
### Para sair do banco digite
```bash
.quit
```

### Deletar dados de uma tabela:
```bash
DELETE FROM nome_da_tabela WHERE coluna = 'condição';
```
