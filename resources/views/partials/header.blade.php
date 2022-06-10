<header>
        
    <div class="header-container">
            <div class="logo_container">
                <img src="../img/dc-logo.png" alt="">
            </div>
            <nav>
                <ul>
                    @foreach ($headerItems as $item)
                        <li><a href="">{{$item}}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
</header>