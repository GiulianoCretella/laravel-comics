<div class="central-footer">
    <div class="container-footer">
        <div class="left-side">
            <ul>
                @foreach ($centralFooter as $items)
                    <li>{{$items['titolo']}}
                        <ul>
                            @foreach($items['sottArray'] as $item)
                            <li>{{$item['nome']}}</li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="right-side">
            <img src="../img/dc-logo-bg.png" alt="">
        </div>
    </div>
</div>