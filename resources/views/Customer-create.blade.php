<form method="POST" action="{{ route('customer.store') }}">
    @csrf

    <input type="text" name="customerCode" placeholder="Customer Code">
    <input type="text" name="name" placeholder="Customer Name">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="mobile1" placeholder="Mobile">

    <button type="submit">Save</button>
</form>
