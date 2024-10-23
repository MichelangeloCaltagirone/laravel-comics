@extends("layouts.app")

@section("page-title", "Show Page")

@section("main-content")

    <h2 class="text-center py-3">Single Comic Overview</h2>

    <div class="container">
        <div class="row">
            <div class="col-8 card m-auto">
                <img class="w-50 m-auto py-3" src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                <ul>
                    <li>
                        Titolo: {{ $comic["title"] }}
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
                    <li>
                        Descrizione: {{ $comic["description"] }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
