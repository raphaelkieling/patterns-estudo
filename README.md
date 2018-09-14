## Patterns

### Breve história

Desenvolvido no começo de 1987 por Kent Beck e Ward Cunningham para Smalltalk.
Começou a ganhar realmente forma com a publicação do livro Design Patterns Elements of Reusabel Object-Oriented Software, escrito por Erich Gamma, Richard Helm, Ralph Johnson e John Vlissides, que passaram a ser conhecidos como a "Guange dos Quatro" ou GOF.


### Padrões

23 padrões ao total divido em 3 categorias (Desenvolvidos pelo GOF).

#### Padrões de criação;
Responsáveis por abstrair a criação de objetos, transferem e centralizam as responsabilidades de como e onde instanciá-los.

- Abstract Factory
- Builder
- Factory Method
- Prototype
- Singleton

#### Padrões de estrutura;
Responsavel como classes e objetos são compostos entre si, permitindo alterações nessa composição em tempo de execução.

- Adapter
- Bridge
- Composite
- Decorator
- Facade
- Flyweight
- Proxy


#### Padrões de comportamento;
Definem a comunicação entre as classes e objetos e como algoritmos se comportam.

- Chain of Responsibility
- Command
- Interpreter
- Iterator
- Mediator
- Memento
- Observer
- State
- Strategy
- Template Method
- Visitor


### Associação, agregação e composição

#### Associação
Um objeto não precisa de outro pra existir. Exemplo, um Professor não precisa de um Aluno, e um aluno não precisa de um professor para existirem.

#### Agregação
Um objeto precisa de outro para executar suas tarefas como um Carrinho de compras precisa de produtos.

#### Composição
É quando um objeto tem instancias de outros objetos vinculado a ele, quando ele é destruido, os outros também são.

### Solid

S (Single Responsbility)- Responsabilidade Única. (Classe deve ter apenas um motivo para mudar)

O (Open Closed) - Principio de aberto - fechado (Deve ser possível estender comportamento sem modificar a classe) 

L (Liskov Substituition) - Substituição de Liskov (Classes-bases devem ser substituíveis por suas derivadas)

I (Interface Segregation) - É melhor possuir muitas interfaces específicas do que uma única.

D (Dependency Inversion)- Inversão de Dependência (Depender de abstração e não de implementação)