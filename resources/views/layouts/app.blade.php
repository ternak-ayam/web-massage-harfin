<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content="index, follow">
    <meta name=”keywords” content="massage, reflexology, haircare, haircut, layanan haircare jakarta, layanan haircut, layanan haircut jakarta, layanan massage jakarta layanan massage, layanan relfexology jakarta, layanan reflexology, layanan homecare, perawatan jakarta, perawatan diri, bodycare, body massage, hairdry, haircut kids, haircut female, haircut male">
    <meta name="description" content="{{ config('app.name') }} adalah platform yang menyediakan layanan berupa massage, haircare, haircut dan juga reflexology yang berlokasi di DKI Jakarta">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - {{ config('app.name') }} | Layanan Haircare, Haircut, Massage & Reflexology Jakarta</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='{{ asset('css/style.css') }}' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://use.fontawesome.com/your-embed-code.js"></script>
    <style>
        .wordart {
            transform: scaleY(1.10);
        }
        .preview {
            font-family: Impact, sans-serif;
            color: #f6f6f6;
            -webkit-text-fill-color: #ffffff;
            -webkit-text-stroke: 0.056em #0534e3;
            -webkit-background-clip: text;
            background-clip: text;
        }

    </style>
</head>
<body>
<div>
    @yield('content')
</div>
@include('layouts.footer')
<script>
    const formatRupiah = (value) => {
        return parseFloat(value.toString()).toLocaleString("id-ID", {
            style: "currency",
            currency: "IDR",
            minimumFractionDigits: 0
        });
    }
</script>
@stack('script')
<script src="{{ asset('js/script.js') }}"></script>
<script>
    const openDropdown = document.getElementById("openDropdown");
    const dropdownContent = document.getElementById("dropdownContent");

    openDropdown.addEventListener("click", () => {
        dropdownContent.classList.toggle("hidden");
    })

</script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>
