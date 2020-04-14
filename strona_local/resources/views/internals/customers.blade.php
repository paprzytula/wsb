<h1>Klienci</h1>
// TODO connect list view with database
<ul>
    @foreach ($customers as $customer)
        <li>{{ $customer }}</li>
    @endforeach
</ul>