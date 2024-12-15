@extends('layouts.admin.main')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Articles</h1>
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
            <!--end::Page title-->
        
        
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
                <a href="{{ route('articles.create')}}" class="btn btn-sm btn-light-primary">
                    <i class="ki-duotone ki-plus fs-2"></i>New Articles</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th class="ps-4 min-w-325px rounded-start">Product</th>
                            <th class="min-w-125px">Price</th>
                            <th class="min-w-125px">Deposit</th>
                            <th class="min-w-200px">Agent</th>
                            <th class="min-w-150px">Status</th>
                            <th class="min-w-200px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/stock/600x400/img-26.jpg" class="" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sant
                                            Extreanet Solution</a>
                                        <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS,
                                            ReactJS</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,790</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                            </td>
                            <td>
                                <a href="#"
                                    class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$520</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                            </td>
                            <td>
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Bradly
                                    Beal</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                            </td>
                            <td>
                                <span class="badge badge-light-primary fs-7 fw-bold">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="ki-duotone ki-switch fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="ki-duotone ki-pencil fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    </div>
    </div>
    </div>
@endsection
