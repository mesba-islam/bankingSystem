<h2>wellcome {{ $users->name }}</h2>

<p>your account type-> {{ $users->account_type }}</p>
<p>your account Balance-> {{ $users->balance }}</p>

<a href="{{ url('/transactions') }}" class="btn btn-primary">See transaction</a>

</body>

