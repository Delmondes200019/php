# Manipulação de Strings

## Regras

1. A utilização de aspas duplas acarreta na interpretação do conteudo entre aspas.

    `$nome = 'Vitor Delmondes Araujo';`

    `const PAIS = 'Brasil';`

    `echo "Olá, $nome, você mora no país " . PAIS`

    **Olá, Vitor Delmondes Araujo, você mora no país Brasil**

2. Na utilização de aspas simples não ocorre interpretação 

    `$nome = 'Vitor Delmondes Araujo';`

    `const PAIS = 'Brasil';`

    `echo 'Olá, $nome, você mora no país ' . PAIS`

    **Olá, $nome, você mora no país Brasil**

3. Para constantes, a interpretação não é feita

    `$nome = 'Vitor Delmondes Araujo';`

    `const PAIS = 'Brasil';`

    `echo "Olá, $nome, você mora no país PAIS"`

    **Olá, Vitor Delmondes Araujo, você mora no país PAIS**