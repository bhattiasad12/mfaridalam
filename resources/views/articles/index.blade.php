@extends('layouts.admin.main')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Articles</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Articles</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
            </div>
            <!--end::Toolbar container-->
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1"></span>
                        </h3>
                        <div class="card-toolbar">
                            <button onclick="create('articles/create', 'Create Article')"
                                class="btn btn-sm btn-light-primary" data-kt-drawer-show="true"
                                data-kt-drawer-target="#kt_drawer_example_permanent"><i
                                    class="ki-duotone ki-plus fs-2"></i>New Articles</button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            @if ($data->isEmpty())
                                <p class="text-center">No articles found.</p>
                            @else
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_table_users"
                                    style="width: 100%;">
                                    <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2 dt-orderable-none" data-dt-column="0" rowspan="1"
                                                colspan="1" aria-label="">
                                                #
                                            </th>
                                            <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="1"
                                                rowspan="1" colspan="1" aria-label="User: Activate to sort"
                                                tabindex="0"><span class="dt-column-title"
                                                    role="button">Article</span><span class="dt-column-order"></span></th>
                                            {{-- <th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="3"
                                            rowspan="1" colspan="1" aria-label="Role: Activate to sort"
                                            tabindex="0"><span class="dt-column-title" role="button">Date</span><span
                                                class="dt-column-order"></span></th> --}}
                                            <th class="text-end min-w-100px dt-orderable-none" data-dt-column="4"
                                                rowspan="1" colspan="1" aria-label="Actions"><span
                                                    class="dt-column-title">Actions</span><span
                                                    class="dt-column-order"></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 fw-semibold">
                                        @foreach ($data as $article)
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        {{ $loop->iteration }}</div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <span
                                                            class="text-gray-800 text-hover-primary mb-1">{{ $article->name }}</span>
                                                    </div>
                                                </td>

                                                <td class="text-end">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <a href="{{ asset($article->path) }}" target="_blank"
                                                                class="menu-link px-3">
                                                                View
                                                            </a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="{{ route('articles.download', $article->id) }}"
                                                                class="menu-link px-3">
                                                                Download
                                                            </a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <form action="{{ route('articles.destroy', $article->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="menu-link px-3 btn btn-danger text-white">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            @endif
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
            </div>
        </div>
    @endsection
