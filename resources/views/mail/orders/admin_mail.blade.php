<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo ordine ricevuto</title>
</head>


<body>

    <div class="navbar" style="background-color: orange; text-align: center;">
        <img height="50" src="https://logodownload.org/wp-content/uploads/2019/09/deliveroo-logo-3.png" alt="logo deliveroo" />
    </div>

    <div class="container" style="margin-left:3rem; margin-right:3rem;">
        <div class="card">
            <div style="text-align: center;">
                <h1>Nuovo ordine ricevuto</h1>
                <p>Ciao <strong style="text-transform: uppercase;">{{$order->restaurant->user->name}}</strong>, hai ricevuto un nuovo ordine per il ristorante: <strong>{{ $order->restaurant->name }}
                </p>
            </div>

            <div class="text-body">
                <h2>Dettaglio ordine</h2>
                @foreach($dishes as $dish)
                <ul style="list-style: none;">
                    <li><strong>Nome: </strong> {{ $dish['name'] }}</li>
                    <li><strong>Ingredienti: </strong> {{ $dish['ingredients'] }}</li>
                    <li><strong>Prezzo Unitario: </strong> {{ $dish['price'] }}</li>
                    <li><strong>Quantità: </strong> x {{ $dish['amount'] }}</li>

                </ul>
                @endforeach
                <strong>Totale pagato: {{ $order->total_price }}</strong>
            </div>
        </div>


        
    </div>

    <div style="background-color: orange; text-align: center;">
    <span style="color: white;">Grazie da Deliveroo</span> 
    </div>

</body>

</html>