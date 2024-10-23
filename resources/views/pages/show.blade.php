@extends("layouts.app")

@section("page-title", "hello")

@section("main-content")

    <div class="container">
        <div class="row">
            <div class="col-12">
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
                    <li>
                        Url immagine: {{ $comic["thumb"] }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
