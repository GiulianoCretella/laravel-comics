<div class="up-footer">
    <div class="card-container">
        <ul>
            @foreach ($upfooter as $item)
                <li>
                    <img src="{{$item['immagine']}}" alt="">
                    <span>{{$item['testo']}}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
