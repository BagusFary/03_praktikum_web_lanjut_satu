@extends('layouts.template')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $users['nama'] }}</h5>
        <p class="card-text">{{ $users['kelas'] }}</p>
    </div>
</div>



@endsection