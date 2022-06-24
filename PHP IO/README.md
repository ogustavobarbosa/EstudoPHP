
**Stream** no PHP, remete o fluxo de dados de uma fonte para um destino. A palavra-chave aqui, é o fluxo. Por que esse
recurso é a forma como o PHP generaliza esse fluxo para arquivos, rede, compactação de dados e outras operações.

Em meio essa generalização, ainda é necessário especificar o tipo de operação que ocorre para tal fluxo de dados.
**Wrapper** são a forma de o PHP faz essa especificação. Wrapper de streams em PHP são o código que diz como aquele determinado protocolo vai ser usado e gerenciado.

* file://
* http://
* https://
* php://

**buckets**, quando se lê um arquivo no php, ou recebemos dados de uma requisição http, lidamos com as streams, que por sua 
vez, processa esses dados em partes, e essas partes são chamados de buckets, é o que torna eficiente o uso de memória, nessas tarefas.