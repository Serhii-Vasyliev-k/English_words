
<div align="center"
@if($lastResult == true)
    style="color:green">
@else
    style=color:red">
@endif

    <p>{{ $lastRussian }} - {{ $lastEnglish }}</p>
</div>

<form action="{{ route('check') }}" align="center" method="post">
    @csrf

    <p>{{ $russian }}</p>
    <input type="hidden" name="id" value="{{ $id }}">
    <input type="text" name="english" autocomplete="off" >
    <button type="submit">Check</button>
</form>


