<!DOCTYPE html>
<html>
<head>
    <title>Account Page</title>
    <!-- Include any CSS, JavaScript, or other dependencies -->
</head>
<body>
    <h1>Welcome to your Transaction logs</h1>

    <!-- Display transaction information -->
    <h2>Transactions</h2>
    <ul>
        @foreach($transactions as $transaction)
            <li>Amount: {{ $transaction->amount }}, Fee: {{ $transaction->fee }}, Date: {{ $transaction->created_at }}</li>
        @endforeach
    </ul>
</body>
</html>
