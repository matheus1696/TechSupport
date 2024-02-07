# TechSupport - Sistema de Gestão

## Apresentação

O TechSupport é um sistema de controle interno de gestão projetado especialmente para atender às necessidades de órgãos públicos inicialmente para o setor de tecnologia da informação e comunicação. Composto por módulos cuidadosamente estruturados, o sistema oferece recursos avançados para gerenciar eficientemente diversos departamentos.

Nossa solução utiliza tecnologia de ponta no desenvolvimento de software e conta com um gerenciador de banco de dados robusto. Isso garante segurança e estabilidade excepcionais, proporcionando uma solução de gerenciamento confiável e duradoura.

Estamos comprometidos em fornecer o melhor em termos de tecnologia e funcionalidades para atender às demandas específicas dos órgãos públicos. Nosso objetivo é oferecer uma solução completa e eficaz para o gerenciamento interno, proporcionando eficiência e resultados positivos.

Conte conosco para auxiliar na otimização dos processos de sua organização e garantir um controle interno efetivo.

## Módulos

### Módulo de Gerenciamento de Controle de Acesso do Sistema

O módulo de gerenciamento de controle de acesso do sistema é projetado para oferecer facilidade e segurança aos usuários. Ele permite que cada usuário crie seu próprio perfil, utilizando o email como identificador para acessar o sistema.

Visando a segurança, implementamos validações de conta para o acesso às páginas e a recuperação de senha. Essas etapas adicionais são solicitadas pelo próprio usuário, garantindo um nível extra de proteção.

Além disso, o módulo oferece recursos abrangentes, como o gerenciamento de estabelecimentos, organograma e criação de logs. Essas funcionalidades auxiliam no controle e na organização eficiente dos processos.

Por padrão temos algumas permissões criadas

- sysadmin: Permissão de administrador de sistema

- admin: Permissão de Administrador

- user: Permissão de Usuário

- bidding: Permissão de Processo Licitatórios

## Instalação

Para clonar um repositório para o seu repositório local, siga os seguintes passos:

<ol>
    <li>Abra o terminal ou prompt de comando no seu computador.</li>
    <li>Navegue até o diretório onde deseja clonar o repositório. Você pode usar o comando 'cd' seguido do caminho do diretório para navegar até ele.</li>
    <li>No GitHub, acesse o repositório que deseja clonar.</li>
    <li>Clique no botão "Code" (ou "Código") e copie a URL do repositório.</li>
    <li>Volte ao terminal ou prompt de comando e digite o comando git clone seguido da URL do repositório.</li>
</ol>

    git clone https://github.com/matheus1696/TechSupport.git

Para instalar dependências em um projeto, siga os seguintes passos:

    composer install

Setup configuração: Configurações sobre o nome do projeto, banco de dados e mais.

    cp .env.example .env

Gerar chave key da aplicação:

    php artisan key:generate

Migration - para criação de tabelas automáticas do sistema:

    php artisan migrate --seed

Iniciando sistema

    php artisan serve

## Usuários Padrões do Sistema

Usuários: `sysadmin@ingestio.com.br` <br>
Senha: `sysadmin`

Usuários: `admin@ingestio.com.br` <br>
Senha: `admin`

Usuários: `user@ingestio.com.br` <br>
Senha: `user`

Usuários: `bidding@ingestio.com.br` <br>
Senha: `bidding`

## Bibliotecas Utilizadas no Projeto

- Tradução das mensagens para Laravel: https://github.com/lucascudo/laravel-pt-BR-localization
- Validadação PT-BR: https://github.com/LaravelLegends/pt-br-validator
- Gerenciamento de Permissões: https://spatie.be/
