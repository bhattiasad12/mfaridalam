<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.app.head')

<body class="user-is-anonymous path-frontpage page-node-type-home-page">
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <input
            class="coh-inline-element ssa-component coh-component ssa-component-instance-2deda0ba-35c6-4be9-a864-fea3e44be036 coh-component-instance-2deda0ba-35c6-4be9-a864-fea3e44be036 coh-ce-cpt_site_header-443cc08f"
            id="megamenu-toggle" type="checkbox">
        @include('layouts.app.topbar')

        @yield('content')

        @include('layouts.app.footer')

    </div>

    @include('layouts.app.footer_scripts')

</body>

</html>
