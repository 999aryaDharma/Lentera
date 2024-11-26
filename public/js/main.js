// Sweet Alert Delete
$(function () {
    $(document).on('click', '#delete', function (e) {
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
                    text: "Your data has been deleted.",
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
// $(function() {
//     $(document).on('click', '#create', function(e) {
//         e.preventDefault(); // Mencegah pengiriman formulir default
//         var form = $(this).closest('form'); // Ambil formulir terdekat

//         // Kirim formulir menggunakan AJAX
//         $.ajax({
//             type: form.attr('method'), // Metode pengiriman (POST)
//             url: form.attr('action'), // URL pengiriman
//             data: form.serialize(), // Serialisasi data formulir
//             success: function(response) {

//                 let redirectRoute = form.data('redirect-route');

//                 // Tampilkan SweetAlert untuk notifikasi sukses
//                 Swal.fire({
//                     title: "Success!",
//                     text: "User has been added successfully.",
//                     icon: "success",
//                     confirmButtonColor: '#7066E0',
//                 }).then(() => {
//                     window.location.href = redirectRoute; // Ganti dengan route yang sesuai
//                 });
//             },
//             error: function(xhr) {
//                 // Tampilkan SweetAlert untuk notifikasi kesalahan
//                 let errorMessage = 'There was an error adding the user. Please try again.';
//                 if (xhr.status === 422) {
//                     // Jika ada kesalahan validasi, ambil pesan kesalahan
//                     const errors = xhr.responseJSON.errors;
//                     errorMessage = Object.values(errors).flat().join(', '); // Gabungkan pesan kesalahan menjadi string
//                 }
//                 Swal.fire({
//                     title: "Error!",
//                     text: errorMessage,
//                     icon: "error",
//                     confirmButtonColor: '#7066E0',
//                 });
//             }
//         });
//     });
// });

$(function () {
    $(document).on('click', '#create', function (e) {
        e.preventDefault(); // Mencegah pengiriman formulir default
        var form = $(this).closest('form')[0]; // Ambil elemen formulir
        var formData = new FormData(form); // Buat objek FormData untuk menangani file

        // Kirim formulir menggunakan AJAX
        $.ajax({
            type: $(form).attr('method'), // Metode pengiriman (POST)
            url: $(form).attr('action'), // URL pengiriman
            data: formData, // Gunakan FormData sebagai data
            processData: false, // Jangan proses data (agar file bisa dikirim)
            contentType: false, // Jangan set konten tipe otomatis
            success: function (response) {
                console.log("Success:", response);
                let redirectRoute = $(form).data('redirect-route');

                // Tampilkan SweetAlert untuk notifikasi sukses
                Swal.fire({
                    title: "Success!",
                    text: "Data has been added successfully.",
                    icon: "success",
                    confirmButtonColor: '#7066E0',
                }).then(() => {
                    window.location.href = redirectRoute; // Redirect ke halaman produk
                });
            },
            error: function (xhr) {
                console.log("Error:", xhr);
                // Tampilkan SweetAlert untuk notifikasi kesalahan
                let errorMessage = 'There was an error adding the data. Please try again.';
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
$(function () {
    $(document).on('click', '#update', function (e) {
        e.preventDefault();
        var form = $(this).closest('form'); // Ambil formulir terdekat

        Swal.fire({
            title: "Are you sure?",
            text: "You want to update this data?",
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
                    text: "Data has been updated successfully.",
                    icon: "success",
                    confirmButtonColor: '#7066E0',
                }).then(() => {
                    form.submit();
                });
            }
        });
    });
});


// Fungsi Tambah Kurang Jumlah Produk
(function() {
    const cartItems = document.querySelectorAll('.cart-item');
    const totalPriceElement = document.querySelector('.your-total-price');
    const selectAllCheckbox = document.querySelector('input[type="checkbox"]:first-of-type');

    // Fungsi untuk menghitung total harga berdasarkan item yang dicentang
    function calculateTotal() {
        let total = 0;

        cartItems.forEach(function(item) {
            const checkbox = item.querySelector('input[type="checkbox"]');
            const subtotal = parseFloat(item.querySelector('.subtotal').dataset.subtotal);

            if (checkbox.checked) {
                total += subtotal;
            }
        });

        // Update total pada elemen total price
        totalPriceElement.textContent = `IDR ${total.toLocaleString('id-ID', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
        })}`;
    }

    // Checkbox pilih semua
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            const isChecked = selectAllCheckbox.checked;

            cartItems.forEach(function(item) {
                const checkbox = item.querySelector('input[type="checkbox"]');
                checkbox.checked = isChecked;
            });

            calculateTotal();
        });
    }

    cartItems.forEach(function(item) {
        const decreaseButton = item.querySelector('.decrease');
        const increaseButton = item.querySelector('.increase');
        const quantityInput = item.querySelector('.quantity');
        const priceElement = item.querySelector('.price');
        const subtotalElement = item.querySelector('.subtotal');
        const checkbox = item.querySelector('input[type="checkbox"]');

        // Event listener untuk checkbox item
        checkbox.addEventListener('change', calculateTotal);

        // Tombol decrease
        decreaseButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateSubtotal();
                calculateTotal();
            }
        });

        // Tombol increase
        increaseButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            updateSubtotal();
            calculateTotal();
        });

        // Fungsi untuk memperbarui subtotal
        function updateSubtotal() {
            const quantity = parseInt(quantityInput.value);
            const price = parseFloat(priceElement.dataset.price);
            const newSubtotal = quantity * price;

            // Update subtotal pada elemen
            subtotalElement.dataset.subtotal = newSubtotal;
            subtotalElement.textContent = `IDR ${newSubtotal.toLocaleString('id-ID', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2,
            })}`;
        }
    });
})();

