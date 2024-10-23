@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")

    <div class="container">
        <div class="row justify-content-around">
            @foreach ($comicsList as $index => $comic)

            <div class="col-3 card m-2">
                <img class="w-50 m-auto py-3" src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                <ul>
                    <li>
                        Titolo:
                        <a href="{{ route("comic.show", $index) }}">
                            {{ $comic["title"] }}
                        </a>

                    </li>
                    <li>
                        Tipo: {{ $comic["type"] }}
                    </li>
                    <li>
                        Serie: {{ $comic["series"] }}
                    </li>
                    <li>
                        Giorno di uscita: {{ $comic["sale_date"]}}
                    </li>
                    <li>
                        Prezzo: {{ $comic["price"] }}
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>

@endsection
