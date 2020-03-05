<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Про100торт.рф - Ваш заказ</title>
    <style>
        table {
            margin: 0;
        }
        tr, td {
            border: 1px solid #000000;
            margin: 0;
        }

        td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <p>Добрый день, {{ $name }}!</p>
    <p>Ваш заказ в обработке и ожидает подтверждения.</p>
    <p>Мы свяжемся с Вами в ближайшее время!</p>
    <p><b>Детали заказа:</b></p>
    <p>Имя: {{ $name }}</p>
    <p>Телефон: {{ $phone }}</p>
    <p>Адрес: {{ $address }}</p>
    <p>Комментарий: {{ $comment }}</p>
    <table>
        <thead>
        <h4>Ваш заказ: </h4>
            <tr>
                <td>id</td>
                <td>Название</td>
                <td>Вес, гр.</td>
                <td>Количество, шт.</td>
                <td>Цена, руб.</td>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->min_quantity }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->totalPrice }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
