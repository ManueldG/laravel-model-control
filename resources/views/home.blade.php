@extends ('layout.master')

@section('content')
    <div class="container">
        <p>

            <ul>
                @foreach ($nomi as $nome )
                <li>
                    {{$nome }}
                </li>
                @endforeach
                @foreach ($cognomi as $cognome )

                    {{$cognome }}@if (!$loop->last),
                    @else.
                    @endif

                @endforeach
            </ul>

        </p>
    </div>

@endsection
