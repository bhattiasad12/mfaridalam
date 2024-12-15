<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            @include('layouts.admin.topbar')

            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                @include('layouts.admin.sidebar')
                <!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    @yield('content')
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    <!--begin::Drawer-->
    <div id="kt_drawer_example_permanent" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true"
        data-kt-drawer-toggle="#kt_drawer_example_permanent_toggle"
        data-kt-drawer-close="#kt_drawer_example_permanent_close" data-kt-drawer-overlay="true"
        data-kt-drawer-permanent="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}">
        <!--begin::Card-->
        <div class="card rounded-0 w-100">
            <!--begin::Card header-->
            <div class="card-header pe-5">
                <!--begin::Title-->
                <div class="card-title" id="modal_title">
                    <!-- Title will be dynamically populated -->
                </div>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_example_permanent_close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Form-->
            <form id="dynamicForm" enctype="multipart/form-data">
                <!--begin::Card body-->
                <div class="card-body hover-scroll-overlay-y" id="modal_body">
                    <!-- Dynamic content (fields) will be loaded here via AJAX -->
                </div>
                <!--end::Card body-->

                <!--begin::Card footer-->
                {{-- <div class="card-footer hover-scroll-overlay-y" id="modal_footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div> --}}
                <!--end::Card footer-->
            </form>
            <!--end::Form-->
        </div>

        <!--end::Card-->
    </div>

    @push('scripts')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function create(url, heading) {
                $.ajax({
                    url: url,
                    type: "GET",
                    success: function(response) {
                        $('#modal_title').text('');
                        $('#modal_body').html('');
                        $('#modal_title').text(heading);
                        $('#modal_body').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching the create article form:", error);
                        $('#modal_title').text('Error');
                        $('#modal_body').text('Unable to fetch data. Please try again later.');
                    }
                });
            }
        </script>
    @endpush
    @include('layouts.admin.footer_scripts');
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
