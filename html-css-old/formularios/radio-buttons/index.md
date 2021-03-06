---
title:       Botões de opção (input type=radio)
description: Artigo a respeito do controle radio button (formulário web) - HTML e CSS
capitulo:       controles-basicos-input
ordem:       5
---

Os __radio buttons__ são como uma opção entre, no mínimo, duas.

No exemplo abaixo eu coloquei três radios para fazer mais sentido.

```html
<input type="radio" name="band-rock" value="beatles"/>
<input type="radio" name="band-rock" value="led-zeppelin"/>
<input type="radio" name="band-rock" value="pink-floyd"/>

```
Repare que a propriedade `name` é igual para o mesmo grupo de opções e que a propriedade `value` deve ser definida pelo
programador.

Veja um conjunto de radios como exemplo.

![Ilustração de um campo radio button](input-radio.jpg "Ilustração de um campo radio button")


Como os radiobuttons (botões de opção) funcionam?
---

Para exibir o controle radio selecionado, usamos a propriedade `checked`.

```html
<input type="radio" name="company" checked="checked"/>
```

O botão radio sofre do mesmo problema que o botão [checkbox](../checkbox), quando __não clicado__ ele não envia nenhum
informação para o servidor, absolutamente nada.

Mas o problema pode ser amenizado, uma vez que você pode definir um valor na hora de carregar o formulário. Quero dizer
que ele virá pré selecionado, ou seja, não haverá controle "não ticado", pois pelo menos uma opção já foi selecionada 
no carregamento do formulário.


Estilizando
---

Os __radios__, igualmente as [checkboxes](/html-css/formularios/checkbox/) sofrem do mesmo problema de alinhamento 
com as __labels__.

Há inúmeras soluções, uma delas é configurar a propriedade “alinhamento vertical” no meio e ajustar a altura com a 
propriedade top. Para `top` funcionar, o elemento precisa estar posicionado relativamente.

<div data-height="142" data-theme-id="2897" data-slug-hash="WbrByv" data-default-tab="null" data-user="flaviomicheletti" class='codepen'><pre><code></code></pre>
<p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/WbrByv/'>Aligning radio with label </a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
</div><script async src="//assets.codepen.io/assets/embed/ei.js"></script>