<form action="{{ route('store') }}" method="post">
    @csrf
    <input type="text" name="english"  placeholder="english">
    <input type="text" name="russian" placeholder="russian">
    <button type="submit">save</button>
</form>