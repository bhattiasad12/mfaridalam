<div class="container mt-5">
    <div id="success-message" class="alert alert-success d-none"></div>
    <div id="error-message" class="alert alert-danger d-none"></div>

    <form id="form" enctype="multipart/form-data">
        <div class="d-flex">

            <div class="row">

                <div class="mb-10">
                    <label for="file" class="required form-label">File</label>
                    <input type="file" name="file[]" id="file[]" class="form-control form-control-solid"
                        multiple>
                    <small id="file-error" class="text-danger"></small>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>

<script>
    $('#form').on('submit', function(e) {
        e.preventDefault();

        // Clear previous error messages
        $('#file-error').text('');
        $('#success-message').addClass('d-none');
        $('#error-message').addClass('d-none');

        let submitButton = $(this).find('button[type="submit"]');
        submitButton.prop('disabled', true).text('Submitting...');

        // Prepare form data
        let eventId = "{{ $event->id }}"; // Assuming $event is available in the view
        let url = "{{ route('events.images.store', ':event') }}".replace(':event', eventId);

        let formData = new FormData(this);

        $.ajax({
            url: url, // Use the dynamically generated URL
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                // Optional: Show loading spinner
            },
            success: function(response) {
                console.log(response);

                $('#success-message').text('Success!').removeClass('d-none');
                $('#form')[0].reset();
                location.reload();
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    // Handle validation errors
                    let errors = xhr.responseJSON.errors;
                    if (errors.name) {
                        $('#name-error').text(errors.name[0]);
                    }
                    if (errors.file) {
                        $('#file-error').text(errors.file[0]);
                    }
                } else {
                    $('#error-message').text(
                            'An unexpected error occurred. Please try again.')
                        .removeClass('d-none');
                }
            }
        });
    });
</script>
