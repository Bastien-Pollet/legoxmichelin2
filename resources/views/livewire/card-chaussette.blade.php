<div class="container_votes">
    @auth
        <a class="lien_add_chaussette" href="/add-socks">Toi aussi créer ta chaussette !</a>
    @else
        <a class="lien_add_chaussette" href="{{route('login')}}">Connecte toi pour créer ta chaussette !</a>
    @endauth
    @foreach($socks as $sock)
        <div class="card_chaussette">
       
            <div class="block_haut">
                <img class="img_socks" src="{{$sock->image_src}}" alt="{{ $sock->name }}">
                <div class="title_socks" >
                    <h2>{{ $sock->name }}</h2>
                    <p>{{ $sock->description }}</p>
                    <p class="avis"><span class="iconify icon_footer" style="color: var(--jaube);"data-icon="mdi:toy-brick" data-width="24"></span>( {{$sock->rating_count}} avis )</p>
                </div>
            </div>
               <div class="block_bas">
                <p class="text_vote">Votre vote :</p>
                <div class="vote_socks" >
                    @for($i = 1; $i <= 5; $i++)
                    <button 
                        class="btn_etoiles {{ isset($notes[$sock->id]) && $notes[$sock->id] >= $i ? 'test' : '' }}" 
                        type="button" 
                        wire:click="vote({{$sock->id}}, {{$i}})"
                    >
                        <span class="iconify" data-icon="mdi:toy-brick" data-width="24"></span>
                        </button>
                    @endfor
                </div>
                <p class="text_vote">Vous avez donné {{ $notes[$sock->id] }} briques</p>
            </div>

        </div>
    @endforeach
</div>
