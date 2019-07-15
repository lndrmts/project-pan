# Avaliação para time Tecnologia CRM
Conceitos e Experiências – FrontEnd

# Como rodar a aplicação em desenvolvimento
Antes de iniciar certifique-se de ter a ultima versão do `node.js` e `npm` instalados.

**Navegue até o diretório /landing-page e execute o comando abaixo**
```

npm install

```

**Pronto após esse comando já esta tudo instalado, simples né?**

**Apenas execute o comando `Gulp` e todas as alterações feitas em arquivos `.css, .js, images e svg` serão re-compiladas**

# Icones

**Como Utilizar os icones**

Todos os icones usados estão no formato de font, para gerar novos icones apenas adicione o arquivo do icone `.svg` dentro do diretório `/assets/svg` o nome da imagem sera o nome da classe a ser usado no `HTML` conforme exemplo abaixo:

```
assets/svg/menu.svg
<span class="icon-menu"></span>

```

# Imagens

Estamos usando imagens padrão mais atual que é o formato `.webp` portanto todas as iamgens que for adicionada dentro da pasta `/images` será gerado uma nova imagem com o mesmo nome mas com o novo formato, conforme [documentação](https://developers.google.com/speed/webp/), *como alguns navegadores ainda não suportam o novo formato, é recomendado que se use a seguinte tag para implementação;

```

<picture>
    <source srcset="assets/images/imagename.webp" type="image/webp">
    <source srcset="assets/images/imagename.jpg" type="image/jpg"> 
    <img src="assets/images/imagename.jpg" alt="Alt Text!">
</picture>

```

## Observações
**Link para o projeto** 
https://bancopan.lndrmts.com

**PWA / Service Worker**
Este projeto conta com os recursos de PWA e Service Worker

