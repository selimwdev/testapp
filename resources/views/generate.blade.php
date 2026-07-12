@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>توليد 6 أرقام عشوائية</h3>

    <form method="POST" action="/generate">
        @csrf
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

    <form method="POST" action="/generate-many" class="mt-2">
        @csrf
        <button type="submit" class="btn btn-secondary">Generate 624</button>
    </form>

    @if(isset($code))
        <div class="alert alert-success mt-3">
            <strong>الرمز:</strong> {{ $code }}
        </div>
    @endif

    @if(isset($codes) && is_array($codes))
        <div class="mt-3">
            <h5>القائمة ({{ count($codes) }}):</h5>
            <ul class="list-group">
                @foreach($codes as $c)
                    <li class="list-group-item">{{ $c }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
