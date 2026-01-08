<div>
    <footer class="footer">
            <nav class="footer_nav">
                <a href="/home"><span class="iconify icon_footer" data-icon="heroicons:home"></span></a>
                <a href="/votes"><span class="iconify icon_footer" data-icon="mdi:vote" data-width="24"></span></a>
                <a href="/events"><span class="iconify icon_footer" data-icon="heroicons:calendar-days" data-width="24"></span></a>
                @auth
                    <a class="lien_connexion" href="/profil"><span class="iconify icon_footer" data-icon="heroicons:user" data-width="24"></span></a>
                @else
                    <a class="lien_connexion" href="{{route('login')}}"><span class="iconify icon_footer" data-icon="heroicons:user" data-width="24"></span></a>
                @endauth
            </nav>
    </footer>
</div>
