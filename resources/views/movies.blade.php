@extends ('layout.master')

@section('content')
    <div class="container">
        <h1>Lista Films</h1>
        <p>

            <ul>
                @foreach ($movies as $movie)
                   <li>
                           {{ $movie->title }}
                           {{ $movie->date }}
                           {{ $movie->vote }}

                    </li>
                @endforeach

            </ul>

        </p>
    </div>

@endsection
