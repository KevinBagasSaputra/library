<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="Assets/Blade_Templating_Engine/template_index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        {{-- Navbar START --}}
            <nav>
                <ul>
                    <li>
                        <a href="">
                            <div class="logo">
                                <i class="fa fa-book" style="font-size:36px;"></i>
                                <p>Library</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="">Daftar Anime</a>
                        <a href="">Informasi Anime</a>
                        <a href="">Review Anime</a>
                    </li>
                </ul>
            </nav>
        {{-- Navbar END --}}


        {{-- Hero START --}}
            <section class="hero">
                <section class="wrap">

                    <section class="container">
                        <ul>
                            <div class="group">
                                <h2>Library Anime: Discover the World of Anime with Us</h2>
                                <p>Explore the vast world of anime with us! From classic manga to modern anime series, we have everything you need to get started. Browse our collection of anime-inspired books, posters, and merchandise, and join a community of fellow fans who share your passion for this amazing genre.</p>

                                <a href="#">Explore Now <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </ul>
                    </section>

                </section>
            </section>
        {{-- Hero END --}}
    </header>



    {{-- Main START --}}
    <main>
        <section class="container">

        {{-- Sidebar --}}
            <aside>
                <h2>Widget Kategori</h2>
                <ul>
                    <li><a href="#">Kategori 1 (5 artikel)</a></li>
                    <li><a href="#">Kategori 2 (3 artikel)</a></li>
                    <li><a href="#">Kategori 3 (2 artikel)</a></li>
                </ul>
            </aside>
        {{-- Sidebar --}}





        {{-- Article --}}
            <article>
                <section class="container">
                    <ul>

                        <section class="card-1">
                            <img src="https://kevinbagassaputra.github.io/Anime-Odyssey/Assets/img/2_Content_Rekomendasi/5_Chunibyo_Demon_Koi_ga_Shitai!.jpg" alt="">
                            <img src="https://m.media-amazon.com/images/M/MV5BYjY4MDU2YjMtNzY1MC00ODg1LWIwMzYtMWE5YTA3YTI4ZjMxXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX1000_.jpg" alt="">
                        </section>
                    </ul>
                </section>
            </article>
        {{-- Article --}}



        </section>
    </main>
    {{-- Main END --}}
</body>
</html>