<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/BUMPER-03.png') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Lego x Michelin</title>
  

</head>
<body>
    <main>
        {{ $slot }}
    </main> 
    <livewire:footer />
    @livewireScripts
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script defer>
        document.addEventListener('livewire:init', () => {
            Livewire.hook('morph.updated', () => {
                if (typeof Iconify !== 'undefined') {
                    Iconify.scan();
                }
            });
        });
        const socks = document.querySelectorAll('.img_socks');

        socks.forEach(sock => {
            sock.addEventListener('click', () => {

                const card = sock.closest('.card_chaussette');
                const croix = card.querySelector('.croix');

                sock.classList.add("image_zoom", "active");
                croix.classList.add("active");
                document.documentElement.style.overflow = 'hidden';

                const close = () => {
                    sock.classList.remove("image_zoom", "active");
                    croix.classList.remove("active");
                    document.documentElement.style.overflow = 'visible';
                };

                croix.addEventListener('click', close, { once: true });
            });
        });


    </script> 
    
</body>
</html>