<!doctype html>
<html lang="en" class=" layout-navbar-fixed layout-wide " dir="ltr" data-skin="default" data-assets-path="/themes/" data-template="front-pages" data-bs-theme="light">
	<head>
        @include('ui.layouts.parts.front-head')
	</head>
	<body>
        @include('ui.layouts.front.navbar')

        {{ $slot }}

		@include('ui.layouts.front.footer')

        @include('ui.layouts.parts.front-scripts')
        <script>
            function updateLogo() {
                const theme = document.documentElement.getAttribute('data-bs-theme');
                const logo = document.getElementById('logo');

                if (theme === 'dark') {
                    logo.src = '/src/assets/logo/s2-epidemiologi-white.svg';
                } else {
                    logo.src = '/src/assets/logo/s2-epidemiologi-black.svg';
                }
            }

            // Panggil saat halaman dimuat
            document.addEventListener('DOMContentLoaded', updateLogo);

            // Pantau perubahan theme
            const observer = new MutationObserver(updateLogo);
            observer.observe(document.documentElement, {
                attributes: true,
                attributeFilter: ['data-bs-theme']
            });
        </script>
	</body>
</html>
