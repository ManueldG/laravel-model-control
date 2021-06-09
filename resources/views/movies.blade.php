@extends ('layout.master')

@section('content')
    <div class="container">
        <h1>Lista Films</h1>



                @foreach ($movies as $movie)

                    <div class="d-inline-flex p-2 bd-highlight justify-content-around">
                        <div class="card shadow-sm ">
                          <div class="card-body">
                            <p class="card-text d-inline flex-column ">
                                <div>Titolo: {{ $movie->title }}</div>
                                <div>Data: {{ $movie->date }}</div>
                                <div>Voto: {{ $movie->vote }}</div>
                            </p>

                          </div>
                        </div>
                      </div>


                @endforeach




    </div>

@endsection


