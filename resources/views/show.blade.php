@if($lastResult == true)
    <div align="center"style="color:green">
        <p>{{ $lastRussian }} - {{ $lastEnglish }}</p>
    </div>
@else
    <div align="center"style="color:red">
        <p>{{ $lastRussian }} - {{ $lastEnglish }}</p>
    </div>
@endif



<form action="{{ route('check') }}" align="center" method="post">
    @csrf

    <p>{{ $russian }}</p>
    <input type="hidden" name="id" value="{{ $id }}">
    <input type="text" name="english" autocomplete="off" >
    <button type="submit">Check</button>
</form>


