Aula-estrutura-dados

### O que é estrutura de dados

É uma estrutura organizada de dados na memória em qualquer dispositivo de armazenamento, para que os dados possam ser utilizados de forma correta.

-Essas estruturas tem muitas aplicações no desenvolvimento de sistemas, sendo algumas altamente especializadas e utilizadas em tarefas específicas. Usando estruturas adequadas, pode-se trabalhar com uma grande quantidade de dados, como banco de dados ou sistemas de busca.

### Algoritmo

-> Um algoritmo é um conjunto de instruções estruturadas e ordenadas, com o objetivo de realizar uma operação ou tarefa. Os algoritmos são utilizados para manipular dados nas estruturas de várias formas, como inserir, excluir, procurar e ordenar dados.

-> Em uma estrutura de dados, devemos saber como realizar um conjunto de operações básicas, como:

- Inserir dados
- Excluir dados
- Localizar um elemento
- Percorrer os itens da estrutura
- Classificar ou colocar os itens em uma determinada ordem (numérica, alfabética)

### Principais estruturas de dados

- Vetores e matrizes
- Registro
- lista
- Pilha
- Fila
- Árvore
- Tabela hash
- Grafos

### Vetores e matrizes

Vetores e matrizes ou arrays são estruturas de dados que podem auxiliar quando há muitas variáveis do mesmo tipo.

#### \> Vetor

Vetor ou array unidimensional é uma variável que armazena várias variáveis do mesmo tipo. É uma estrutura de dados indexada.

#### \> Matriz

Matriz ou array multidimensional é um vetor de vetores. É um vetor que possui duas ou mais dimensões.

#### \> Registro

Registro é uma estrutura que fornece um formato especializado para armazenar informações em memória. Em arrays ou matrizes permitem armazenar vários dados de um único tipo de dados, o registro permite armazenar mais de um tipo de dado.

-\> Um registro é composto por campos que especificam cada uma das informações que o compõem.Ex: cpf, nome, endereço, contato.

-\> Toda estrutura de registro tem um nome e seus campos podem ser acessados por meio do uso do operador\[.\]. Por exemplo, para acessar o preço de um livro, ficaria: livro.preco

### Entenda o que são Listas, Pilhas e Filas

#### >Listas

Estruturas do tipo lista armazenam dados de um determinado tipo em uma ordem específica.
-\> A diferença entre listas e arrays é a de que listas possuem tamanho ajustável, enquanto arrays possuem tamanho fixo.
-\> As listas podem ser de 2 tipos:
-Ligadas
-Duplamente ligadas

#### >Lista ligada

Na estrutura do tipo lista existem os nós, onde cada nó conhece o valor que está sendo armazenado em seu interior além de conhecer o elemento posterior a ele. Por isso é chamada de lista ligada, pois os nós são amarrados com a indicação do próximo nó.

#### >Lista duplamente ligada

São uma variação das listas ligadas. A diferença entre elas é que as listas duplamente ligadas são bidirecionais.
Nas listas ligadas, não se consegue 'andar para trás' pois os nós sabem somente quem é o próximo elemento.
Nas listas duplamente ligadas, os nós sabem quem é o próximo elemento e também quem é o elemento anterior, o que permite a navegação reversa.

### Pilhas

-Uma pilha é uma estrutura de dados que serve como uma coleção de elementos e permite o acesso a somente um item armazenado.
-O acesso aos itens de uma pilha é restrito: somente 1 item pode ser lido ou removido por vez.
->Tipos de pilhas:
-LIFO ou UEPS
-FIFO ou PEPS

#### >LIFO \[Last In First Out\]

-O primeiro elemento a ser retirado é o último que foi inserido. Ou em outras palavras, o último a entrar é o primeiro a sair.

-Push - inserir
-Pop - remover

#### >FIFO \[First In First Out\]

-O primeiro elemento a ser retirado é o primeiro que foi inserido.

-Enqueue - inserir
-Dequeue - remover

### Filas

A estrutura tipo fila admite remoção e inserção de elementos com a seguinte regra:
-O primeiro elemento removido é o primeiro que foi inserido. Assim segue o mesmo conceito FIFO.

### Estruturas de dados do tipo Árvore, Tabela Hash e Grafos

#### \> Árvore

É uma estrutura de dados que organiza seus elementos de forma hierárquica. Existe um elemento que fica no topo da árvore chamado de raiz e os elementos subordinados a ele, chamados de nós ou folhas.

#### \> Tabelas hash

Uma tabela hash, de dispersão ou espalhamento é uma estrutura de dados especial, que associa chaves de pesquisa a valores.
-Uma tabela hash é uma generalização da idéia de array, porém utiliza uma função denominada hashing para espalhar os elementos, fazendo com que os mesmos fiquem de forma não ordenada dentro do 'array' que define a tabela.

-\> Porque espalhar:
-A tabela hash permite a associação de 'valores' a 'chaves'.
-Valor é a posição ou índice onde o elemento se encontra.
-Chave é parte da informação que compõem o elemento a ser manipulado.
-Espalhar facilita a busca na estrutura de dados, pois a partir de uma chave podemos acessar de forma rápida uma posição do 'array'.

#### \> Grafos

Grafos são estruturas que permitem programar a relação entre objetos.
Os objetos são vértices ou 'nós' do grafo.
Os relacionamentos são as arestas.