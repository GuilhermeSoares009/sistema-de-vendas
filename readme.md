# 🛒 Sistema de Vendas SaaS em PHP

Este projeto é um sistema de vendas desenvolvido no modelo **SaaS (Software as a Service)**, utilizando **PHP** como linguagem principal. Ele foi pensado para atender múltiplos clientes (multi-tenant) com funcionalidades básicas de gerenciamento comercial e vendas.

## 🚀 Visão Geral

O sistema tem como objetivo oferecer uma plataforma online onde empresas possam:

- Cadastrar seus produtos e serviços
- Gerenciar clientes e vendedores
- Emitir pedidos de venda e orçamentos
- Acompanhar o desempenho comercial por meio de relatórios

Tudo isso acessível por diferentes usuários com níveis de permissão.

## 🛠️ Tecnologias Utilizadas

- **PHP 8.3** (com FPM)
- **Nginx** como servidor web reverso
- **Redis** para cache e filas (se aplicável)
- **SQL Server** como banco de dados
- **Docker** e **Docker Compose** para facilitar o ambiente de desenvolvimento

## 📦 Estrutura básica

```bash
.
├── public/            # Arquivos acessíveis via web (index.php, CSS, imagens)
├── sistema/           # Código-fonte principal do sistema
├── docker/            # Configurações de infraestrutura (nginx, php, etc)
├── docker-compose.yml
├── Dockerfile
└── .gitignore
