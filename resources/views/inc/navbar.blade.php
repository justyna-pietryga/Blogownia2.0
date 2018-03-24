<nav class="navbar navbar-expand-md navbar-dark fixed-top custom-nav ">
    <a class="navbar-brand text-uppercase custom-title" href="/"><i class="fa fa-edit icon"></i>  Blogownia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                <a class="nav-link" href="/"><i class="fa fa-home"></i>  Strona główna <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item {{Request::is('/all_users') ? 'active' : ''}}">
                <a class="nav-link" href="/"><i class="fa fa-users"></i> Użytkownicy blogowni<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    @foreach($categories as $category)
                        <a class="dropdown-item" href="#">{{$category->name}}</a>
                    @endforeach
                </div>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                @if(Auth::check())
                    <a class="nav-link" href="/account/{{Auth::id()}}">Moje konto ({{App\User::find(Auth::id())->name}})
                        <span class="sr-only">(current)</span></a>
                @else
                    <a class="nav-link" href="/sign_in">Zaloguj/Załóż konto<span class="sr-only">(current)</span></a>
                @endif

            </li>

            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Wyloguj<span class="sr-only">(current)</span></a>
                </li>
            @endif
        </ul>
    </div>
</nav>

<br><br><br><br>