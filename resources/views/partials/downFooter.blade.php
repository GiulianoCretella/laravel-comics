<div class="down-footer">
    <div class="container-down-footer">
       <span>SIGN-UP NOW!</span>
       <div class="contacts">
            <span>FOLLOW US</span>
            <ul>
                @foreach ($downFooter as $item)
                    <li >
                        <img src="{{$item['immagine']}}" alt="">
                    </li>
                @endforeach
            </ul>
       </div>
    </div>
</div>