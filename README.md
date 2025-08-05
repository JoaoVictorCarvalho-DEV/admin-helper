# 🛠️ Admin Helper

**Admin Helper** é um plugin modular para WordPress focado em fornecer ferramentas úteis para administradores de sites. Com uma arquitetura expansível, permite criar, ativar e gerenciar módulos facilmente. O primeiro módulo disponível é um gerador de pop-ups simples.

---

## 📌 Funcionalidades

- 🔌 Estrutura modular para criação de utilitários independentes
- 🧩 Módulo inicial: Pop-up configurável em todas as páginas do site
- 🎛️ Interface amigável no painel administrativo
- ⚙️ Fácil de expandir com novos módulos

---

## 🚀 Instalação

1. Faça o download ou clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/admin-helper.git
-Coloque a pasta admin-helper dentro do diretório wp-content/plugins/ do seu site WordPress.

-Acesse o painel WordPress > Plugins > Ativar Admin Helper.

## 🧩 Módulo: Pop-up
--O que ele faz?
-Exibe um pop-up personalizável no frontend do site.

--Como configurar?
-Acesse Admin Helper > Pop-up

-Marque a opção "Ativar pop-up"

-Defina o título e o conteúdo

-Salve as configurações

-O pop-up aparecerá em todas as páginas públicas do seu site.
---

##🧱 Criando Novos Módulos
Crie uma nova pasta em modules/ (ex: modules/nome-do-modulo)

Adicione um arquivo init.php que carregue suas funcionalidades

Use o hook plugins_loaded ou admin_menu conforme necessário

O plugin carregará automaticamente todos os init.php encontrados em modules/*/.

## 🛡️ Requisitos
WordPress 5.8+

PHP 7.4 ou superior

## 🤝 Contribuições
Contribuições são bem-vindas! Para contribuir:

Faça um fork do projeto

Crie sua branch: git checkout -b minha-feature

Commit suas mudanças: git commit -m 'Adiciona nova feature'

Envie um PR 😄

## 📄 Licença
Este plugin é distribuído sob a Licença GPLv2 ou superior.

## 🙋 Suporte
Para dúvidas ou sugestões, abra uma issue ou envie um e-mail para seu@email.com.

