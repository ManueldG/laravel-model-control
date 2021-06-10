@extends ('layout.master')

@section('content')
    <div class="container">
        <h1>Lista Films</h1>





                    <div class="d-flex flex-wrap p-2 bd-highlight justify-content-around">
                         @foreach ($movies as $movie)
                            <div class="card shadow-sm my-1 ">
                                <div class="card-body">
                                    <p class="card-text d-inline flex-column ">
                                        <div>Titolo: {{ $movie->title }}</div>
                                        <div>Data: {{ $movie->date }}</div>
                                        <div>Voto: {{ $movie->vote }}</div>
                                    </p>

                                </div>
                            </div>
                        @endforeach
                      </div>







    </div>

@endsection


