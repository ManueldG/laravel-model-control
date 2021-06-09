@extends ('layout.master')

@section('content')
    <div class="container">
        <ul>
            @foreach ($nomi as $key => $nome )
            <li>
                {{$nome}} {{ $cognomi[$key] }}
            </li>
            @endforeach

        </ul>
    </div>

@endsection
