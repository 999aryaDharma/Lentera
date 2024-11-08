// Sweet Alert Delete
$(function() {
    $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var form = $(this).closest('form'); // Ambil formulir terdekat

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Tampilkan SweetAlert untuk notifikasi sukses
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success",
                    confirmButtonColor: "#7066E0",
                  }).then(() => {
                    form.submit();
                });
            }
        });
    });
});


// Sweet Alert Create
$(function() {
    $(document).on('click', '#create', function(e) {
        e.preventDefault(); // Mencegah pengiriman formulir default
        var form = $(this).closest('form'); // Ambil formulir terdekat

        // Kirim formulir menggunakan AJAX
        $.ajax({
            type: form.attr('method'), // Metode pengiriman (POST)
            url: form.attr('action'), // URL pengiriman
            data: form.serialize(), // Serialisasi data formulir
            success: function(response) {
                // Tampilkan SweetAlert untuk notifikasi sukses
                Swal.fire({
                    title: "Success!",
                    text: "User has been added successfully.",
                    icon: "success",
                    confirmButtonColor: '#7066E0',
                }).then(() => {
                    window.location.href = "/admin/user"; // Ganti dengan route yang sesuai
                });
            },
            error: function(xhr) {
                // Tampilkan SweetAlert untuk notifikasi kesalahan
                let errorMessage = 'There was an error adding the user. Please try again.';
                if (xhr.status === 422) {
                    // Jika ada kesalahan validasi, ambil pesan kesalahan
                    const errors = xhr.responseJSON.errors;
                    errorMessage = Object.values(errors).flat().join(', '); // Gabungkan pesan kesalahan menjadi string
                }
                Swal.fire({
                    title: "Error!",
                    text: errorMessage,
                    icon: "error",
                    confirmButtonColor: '#7066E0',
                });
            }
        });
    });
});


// Sweet Alert Update
$(function() {
    $(document).on('click', '#update', function(e) {
        e.preventDefault();
        var form = $(this).closest('form'); // Ambil formulir terdekat

        Swal.fire({
            title: "Are you sure?",
            text: "You want to update this user?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Tampilkan SweetAlert untuk notifikasi sukses
                Swal.fire({
                    title: "Updated!",
                    text: "User has been updated successfully.",
                    icon: "success",
                    confirmButtonColor: '#7066E0',
                }).then(() => {
                    form.submit();
                });
            }
        });
    });
});
