# Ravi Monitor Wiki

Bem-vindo ao repositório de exemplos de scripts do sistema Ravi Monitor. Este repositório contém exemplos práticos de como utilizar a API para monitorar e gerenciar OLTs e muito mais!

## Estrutura do Repositório

- **Scripts/**: Contém scripts de exemplo para diferentes operações com API para a Integração com OLTs.
  - [`activation.php`](https://github.com/rodrigomatos87/Ravi_Monitor_Wiki/blob/main/API/OLT/activation.php): Script para provisionar novas ONTs na rede.
  - [`exclusion.php`](https://github.com/rodrigomatos87/Ravi_Monitor_Wiki/blob/main/API/OLT/exclusion.php): Script para desprovisionar ou remover uma ONT.
  - [`search_olt.php`](https://github.com/rodrigomatos87/Ravi_Monitor_Wiki/blob/main/API/OLT/search_olt.php): Script para buscar dados de uma OLT e todas as ONTs provisionadas.
  - [`search_ont.php`](https://github.com/rodrigomatos87/Ravi_Monitor_Wiki/blob/main/API/OLT/search_ont.php): Script para buscar dados atualizados de uma ONT específica.
  - [`search_position.php`](https://github.com/rodrigomatos87/Ravi_Monitor_Wiki/blob/main/API/OLT/search_position.php): Script para retornar a próxima posição livre para um novo provisionamento de ONT.
  - [`unprovisioned.php`](https://github.com/rodrigomatos87/Ravi_Monitor_Wiki/blob/main/API/OLT/unprovisioned.php): Script para retornar a lista das ONTs pendentes de autorização para uma OLT.

## Como Utilizar

1. **Configuração Inicial**:
   - Clone o repositório:
     ```sh
     git clone https://github.com/rodrigomatos87/Ravi_Monitor_Wiki.git
     ```
   - Navegue até o diretório de scripts:
     ```sh
     cd Ravi_Monitor_Wiki/API/OLT
     ```

2. **Execução dos Scripts**:
   - Edite os arquivos de configuração conforme comentários inclusos em cada script.

## Contribuições

Contribuições são bem-vindas! Por favor, abra um pull request ou reporte issues para melhorias.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).

Para mais informações, visite [Ravi Monitor](https://ravimonitor.com).
