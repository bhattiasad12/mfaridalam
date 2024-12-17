<div class="container mt-5">
    <div id="success-message" class="alert alert-success d-none"></div>
    <div id="error-message" class="alert alert-danger d-none"></div>

    <form id="form" enctype="multipart/form-data">
        <div class="mb-10">
            <label for="name" class="required form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control form-control-solid"
                placeholder="Enter name">
            <small id="name-error" class="text-danger"></small>
        </div>

        <div class="mb-10">
            <label for="file" class="required form-label">Url</label>
            <input type="text" name="url" id="url" class="form-control form-control-solid"
                placeholder="Enter url"> <small id="url-error" class="text-danger"></small>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#form').on('submit', function(e) {
            e.preventDefault();

            // Clear previous error messages
            $('#name-error').text('');
            $('#url-error').text('');
            $('#success-message').addClass('d-none');
            $('#error-message').addClass('d-none');

            // Prepare form data
            let formData = new FormData(this);

            // AJAX request
            $.ajax({
                url: "{{ route('interviews.store') }}",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // Optional: Show loading spinner
                },
                success: function(response) {
                    $('#success-message').text('Success!').removeClass('d-none');
                    $('#form')[0].reset(); // Reset the form
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
                            $('#url-error').text(errors.file[0]);
                        }
                    } else {
                        $('#error-message').text(
                                'An unexpected error occurred. Please try again.')
                            .removeClass('d-none');
                    }
                }
            });
        });
    });
</script>
