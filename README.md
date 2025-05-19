# Descubra o seu Signo

Este projeto é uma aplicação web simples desenvolvida em PHP que permite ao usuário descobrir seu signo do zodíaco informando o dia e o mês de nascimento.

## Funcionalidades

- Interface amigável com Bootstrap.
- Seleção de dia e mês de nascimento.
- Determinação automática do signo com base em um arquivo XML ([signos.xml](signos.xml)) contendo informações detalhadas sobre cada signo.
- Exibição de descrição, elemento e planeta regente do signo encontrado.

## Estrutura do Projeto

- **index.php**: Página inicial com formulário para o usuário inserir sua data de nascimento.
- **show_zodiac_sign.php**: Processa o formulário e exibe o signo correspondente.
- **signos.xml**: Arquivo com os dados dos signos.
- **assets/**: Contém arquivos de estilo, imagens e scripts.
- **layouts/header.php**: Cabeçalho HTML comum às páginas.

## Como usar

1. Clone ou baixe este repositório em seu servidor local.
2. Certifique-se de que o PHP está instalado e configurado.
3. Acesse o arquivo `index.php` pelo navegador.
4. Selecione o dia e o mês do seu nascimento e clique em Descobrir.
5. O sistema exibirá o seu signo e uma breve descrição.

## Tecnologias Utilizadas

- PHP
- HTML5
- CSS3 (com Bootstrap)
- XML

## Imagens

As imagens mostram o projeto em funcionamento.

- Página inicial index.php com formulário centralizado solicitando dia e mês de nascimento, botão Descobrir destacado, interface limpa e amigável, cores suaves predominam, ambiente de navegação simples e acessível, tom neutro e informativo  
![Formulário para inserir data de nascimento na página inicial, campos de seleção de dia e mês, botão Descobrir centralizado, interface clara e organizada, ambiente de navegação simples](assets/img/index.png)

- Página de resultado exibindo signo do usuário Libriano, nome do signo em destaque, descrição breve, informações sobre elemento e planeta regente, layout limpo com cores suaves, ambiente acolhedor, tom positivo e informativo  
![Resultado para usuário Libriano, nome do signo Libra em destaque, descrição Libra é equilibrado e busca harmonia, elemento Ar, planeta regente Vênus, interface clara e amigável](assets/img/show_zodiac_sign.png)

- Página de resultado exibindo signo do usuário Capricórnio, nome do signo em destaque, descrição breve, informações sobre elemento e planeta regente, layout limpo com cores suaves, ambiente acolhedor, tom positivo e informativo  
![Resultado para usuário Capricórnio, nome do signo Capricórnio em destaque, descrição Capricórnio é determinado e prático, elemento Terra, planeta regente Saturno, interface clara e amigável](assets/img/show_zodiac_sign02.png)