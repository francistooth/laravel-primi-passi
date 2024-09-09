<!doctype html>
<html lang="en">
    <head>
        <title> Home </title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container w-75 mt-5">
            {{-- <div class="container">
                Hello World!
            </div> --}}

            {{-- {{ $name }}
            {{ $job }} --}}

            <div class="card-container w-100 d-flex gap-5">
                @foreach ($cards as $card)
                    {{-- @dump($card['src']) --}}
                    <div class="card bg-info-500 text-center" style="width:18rem;">
                        <img src="{{ $card['src'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $card['name'] }}, {{ $card['age'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"> {{ $card['job'] }} </h6>
                            <p class="card-text"> {{ $card['desc'] }} </p>
                        </div>
                    </div>
                @endforeach

                @if ($boolean)
                    <div class="card bg-info-500 text-center" style="width:18rem;">
                        <img src="{{ $boolcard['src'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $boolcard['name'] }}, {{ $boolcard['age'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"> {{ $boolcard['job'] }} </h6>
                            <p class="card-text"> {{ $boolcard['desc'] }} </p>
                        </div>
                    </div>
                @endif
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
