<div>
    @forelse ($events as $event)
        <div class="activite">
            <div class="act_desc">
                <h4>{{ $event->title }}</h4>
                <p>{{$event->name}}</p>
                <p class="avis"><span class="iconify icon_footer" data-icon="heroicons:user-group" data-width="24"></span>{{ $event->location }}</p>
            </div>
        </div>
    @empty
        <p>Aucun événement inscrit.</p>
    @endforelse
</div>
