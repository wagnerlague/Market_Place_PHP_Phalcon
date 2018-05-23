<!DOCTYPE html>
<html>
<head>
    <title>Minha segunda View do controller teste</title>
</head>
<body>
    {% for dado in dados %}
        <h1>Nome: {{ dado.nome }}</h1>
        <h2>Idade: {{ dado.idade }}</h2>
        Outros Dados:
        <ul>
            <li>{{ dado.altura }}</li>
            <li>{{ dado.trabalho }}</li>
        </ul>
    {% endfor%}
</body>
</html>