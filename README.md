# 🎓 Design Patterns em PHP: Coleção de Exemplos Práticos

Este repositório é uma coleção abrangente de exemplos práticos e funcionais dos **Design Patterns** mais influentes, implementados em PHP. O objetivo é servir como um recurso de estudo e referência para desenvolvedores que buscam aprimorar suas habilidades em arquitetura de software, aplicando soluções testadas e comprovadas para problemas de projeto recorrentes.

Os padrões de projeto (Design Patterns) são soluções típicas para problemas comuns em projeto de software. Eles são como plantas de construção que podem ser adaptadas para resolver problemas recorrentes em diferentes contextos, promovendo código mais flexível, manutenível e escalável.

## 🚀 Padrões Implementados

Os exemplos são categorizados de acordo com o catálogo do "Gang of Four" (GoF): Criacionais, Estruturais e Comportamentais.

### Padrões Criacionais (Creational Patterns)

Estes padrões fornecem mecanismos de criação de objetos que aumentam a flexibilidade e a reutilização do código existente.

| Padrão | Descrição | Exemplo no Projeto |
| :--- | :--- | :--- |
| **Builder** | Separa a construção de um objeto complexo de sua representação, permitindo que o mesmo processo crie diferentes representações. | `src/HTML` - Construção de elementos HTML complexos. |
| **Factory Method** | Define uma interface para criar um objeto, mas permite que as subclasses decidam qual classe instanciar. | `src/Notification` - Criação de diferentes tipos de notificação (Email, SMS). |
| **Singleton** | Garante que uma classe tenha apenas uma instância e fornece um ponto de acesso global a ela. | `src/Settings` - Gerenciamento de configurações globais da aplicação. |

### Padrões Estruturais (Structural Patterns)

Estes padrões tratam da composição de classes e objetos. Eles ajudam a garantir que, quando uma parte do sistema muda, o resto do sistema não precise mudar.

| Padrão | Descrição | Exemplo no Projeto |
| :--- | :--- | :--- |
| **Adapter** | Permite que interfaces incompatíveis trabalhem juntas, atuando como um tradutor. | `src/Payment/Adapter` - Integração de diferentes APIs de pagamento (PayPal, NuBank). |
| **Bridge** | Desliga uma abstração de sua implementação, permitindo que ambas evoluam independentemente. | `src/Report` - Geração de diferentes tipos de relatórios (Usuário, Pagamento) em diferentes formatos (PDF, HTML). |
| **Composite** | Permite compor objetos em estruturas de árvore e trabalhar com essas estruturas como se fossem objetos individuais. | `src/FileSystem` - Estrutura de arquivos e diretórios. |
| **Decorator** | Anexa responsabilidades adicionais a um objeto dinamicamente, sem alterar a classe original. | `src/CoffeeShop` - Adição de ingredientes (leite, chantilly) a um café. |
| **Facade** | Fornece uma interface unificada e simplificada para um subsistema complexo. | `src/Shop/Facade` - Simplificação do processo de compra (inventário, pagamento, nota fiscal, notificação). |
| **Flyweight** | Minimiza o uso de memória, compartilhando o máximo de dados possível entre objetos semelhantes. | `src/Font` - Reutilização de objetos de caracteres (letras) com estado intrínseco. |
| **Proxy** | Fornece um substituto ou um espaço reservado para outro objeto para controlar o acesso a ele. | `src/Image` - Controle de acesso e carregamento de imagens (Lazy Loading). |

### Padrões Comportamentais (Behavioral Patterns)

Estes padrões tratam da comunicação entre objetos e da atribuição de responsabilidades.

| Padrão | Descrição | Exemplo no Projeto |
| :--- | :--- | :--- |
| **Chain of Responsibility** | Cria uma cadeia de objetos receptores, passando uma requisição ao longo da cadeia até que um objeto a trate. | `src/Login` - Processo de autenticação com múltiplos validadores (URL, Usuário, Senha, Token). |
| **Command** | Encapsula uma requisição como um objeto, permitindo parametrização de clientes e suporte a operações desfazíveis (undo). | `src/RemoteControl` - Controle remoto de dispositivos (luz, ventilador) com histórico de comandos. |
| **Iterator** | Fornece uma maneira de acessar sequencialmente os elementos de uma coleção sem expor sua representação subjacente. | `src/Collection` - Iteração sobre uma coleção de livros. |
| **State** | Permite que um objeto altere seu comportamento quando seu estado interno muda. O objeto parecerá ter mudado de classe. | `src/SCAJ/Process` - Regras de negócio que mudam conforme o estado do processo (Pendente, Validado, Finalizado). |
| **Strategy** | Define uma família de algoritmos, encapsula cada um e os torna intercambiáveis. Permite que o algoritmo varie independentemente dos clientes que o utilizam. | `src/SCAJ/Process/TypeStrategy` e `src/SCAJ/VD/VDCalculator/Strategy` - Aplicação de regras específicas baseadas no tipo de processo ou cálculo. |

## 🛠️ Instalação e Setup

Para rodar este projeto localmente, você precisará ter o PHP e o Composer instalados.

1.  **Clone o repositório:**
    ```bash
    git clone [URL_DO_SEU_REPOSITORIO]
    cd design-patterns-php
    ```

2.  **Instale as dependências via Composer:**
    ```bash
    composer install
    ```

3.  **Execute o servidor web embutido do PHP:**
    ```bash
    php -S localhost:8000
    ```

4.  **Acesse no navegador:**
    Abra seu navegador e acesse `http://localhost:8000`.

## 📂 Estrutura do Projeto

A estrutura do projeto é organizada para facilitar a localização dos exemplos:

```
.
├── config/                  # Arquivos de configuração (menu, funções de renderização)
├── layouts/                 # Componentes de layout (header, sidebar, footer)
├── pages/                   # Arquivos de exemplo que demonstram o uso de cada padrão
├── src/                     # Implementação das classes e interfaces dos Design Patterns
│   ├── CoffeeShop/          # Exemplo de Decorator
│   ├── Collection/          # Exemplo de Iterator
│   ├── FileSystem/          # Exemplo de Composite
│   ├── Font/                # Exemplo de Flyweight
│   ├── HTML/                # Exemplo de Builder
│   ├── Image/               # Exemplo de Proxy
│   ├── Login/               # Exemplo de Chain of Responsibility
│   ├── Notification/        # Exemplo de Factory Method
│   ├── Payment/             # Exemplo de Adapter
│   ├── RemoteControl/       # Exemplo de Command
│   ├── Report/              # Exemplo de Bridge
│   ├── SCAJ/                # Exemplo de State e Strategy (Aplicação)
│   └── Shop/                # Exemplo de Facade
├── vendor/                  # Dependências do Composer
├── index.php                # Página inicial da aplicação
├── composer.json            # Definições de dependências e autoload
└── README.md                # Este arquivo
```

## 🧑‍💻 Contribuição

Sinta-se à vontade para abrir *issues* para reportar bugs ou sugerir melhorias. *Pull requests* com novos exemplos de padrões ou refatorações são sempre bem-vindos!

---

**Autor:** [Seu Nome Aqui]
**Licença:** MIT (Sugestão)
