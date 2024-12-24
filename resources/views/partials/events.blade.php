@foreach ($data as $value)
<div
    class="coh-column ssa-instance-210c8a7d219d405adb90a2ef9fb7a615 coh-ce-cpt_3_column_layout-869620fb coh-visible-ps coh-col-ps-12 coh-col-ps-push-0 coh-col-ps-pull-0 coh-visible-sm coh-col-sm-4 coh-col-sm-push-0 coh-col-sm-pull-0 coh-visible-xl coh-col-xl-4 coh-col-xl-push-0 coh-col-xl-pull-0">
    <article
        class="coh-container ssa-component coh-component ssa-component-instance-92296d97-b08d-49b0-86c5-4403363f4a63 coh-component-instance-92296d97-b08d-49b0-86c5-4403363f4a63 left-align coh-style-margin-bottom-small coh-style-card-text-light-background ssa-instance-46ba79dab1d9c34060d29c04e7e561d7 coh-ce-cpt_content_card-59d33cb"
        style="border-radius: 8px;">
        <div
            class="coh-container card-contents coh-style-padding-small-24 coh-ce-cpt_content_card-ac37ef06">
            <div
                class="coh-container coh-ce-cpt_content_card-76ba9c8">
            </div>
            <h3
                class="coh-heading coh-style-headline-500 coh-style-headline-heavy coh-ce-cpt_content_card-db949cb9 text-truncate">
                <a href="javascript:void(0)"
                    onclick="openModal({{ @$value->id }})"
                    class="coh-link card-link coh-ce-cpt_content_card-bc57a7f9"
                    target="_self"
                    aria-label="">{{ Str::limit(@$value->name, 50, '...') }}</a>
            </h3>
            <p
                class="coh-paragraph coh-style-paragraph-100 coh-ce-cpt_content_card-274b01ef text-truncate">
                {{ Str::limit(@$value->description, 100, '...') }}
            </p>
            <span
                class="coh-inline-element fake-link coh-style-display-none coh-ce-cpt_content_card-92be551f"
                aria-hidden="true"></span>
        </div>
        <div
            class="coh-container card-media coh-ce-cpt_content_card-da9a3f30">
            @if ($value->images->isNotEmpty())
                <img class="coh-image card-image coh-image-responsive-xl coh-lazy-loaded"
                    loading="lazy"
                    src="{{ asset($value->images->first()->image_path) }}"
                    alt="{{ $value->images->first()->image_name }}"
                    data-was-processed="true"
                    style="border-radius: 8px 8px 0 0;">
            @else
                <img class="coh-image card-image coh-image-responsive-xl coh-lazy-loaded"
                    loading="lazy" src="default-placeholder.jpg"
                    alt="No image available"
                    data-was-processed="true"
                    style="border-radius: 8px 8px 0 0;">
            @endif
        </div>
    </article>
</div>
<div class="custom-modal" id="modal-{{ $value->id }}">
    <div class="modal-overlay"
        onclick="closeModal('{{ $value->id }}')"></div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">{{ $value->name }}
            </h5>
            <span class="modal-close"
                onclick="closeModal('{{ $value->id }}')">&times;</span>
        </div>
        <div class="modal-body">
            <p class="modal-description">
                {{ $value->description }}</p>
            <div class="modal-images">
                @foreach ($value->images as $index => $image)
                    <div class="modal-image-item">
                        <img src="{{ asset($image->image_path) }}"
                            alt="{{ $image->image_name }}"
                            class="modal-image"
                            onclick="initializeImages('{{ $value->id }}'); viewImage('{{ asset($image->image_path) }}', '{{ $image->image_name }}', {{ $index }})">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endforeach