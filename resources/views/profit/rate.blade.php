<form method="POST" action="{{ route('increase-earnings') }}">
    @csrf
    <select name="percentage">
        <option value="5">5%</option>
        <option value="10">10%</option>
        <option value="15">15%</option>
        <option value="20">20%</option>
    </select>
    <button type="submit">Increase earnings</button>
</form>
