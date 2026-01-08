<x-layouts.app>  
      <div class="header_profil">

            <form id="logout" action="{{route('logout')}}" method="post">
                @csrf
            </form> 
        <h2 class="username">{{Auth::user()->name}}</h2>
      <a class="lien_connexion" href="{{route('logout')}}" onclick="document.getElementById('logout').submit(); return false;"><span class="iconify icon_footer truc" data-icon="mdi:logout"></span></a>
      </div>
      <div class="content_profil">
        <h3>Vos activités</h3>
            <livewire:event-user />
      </div>
</x-layouts.app>  