<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Dharma Wanita Persatuan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('noble/assets/css/demo_1/style.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<body>

    <main class="main-wrapper">
        @include('components.sidebar')
        <div class="table p-3">
            <table id="myTable">
                <thead>
                    <tr>
                        <th>abc</th>
                        <th>abc</th>
                        <th>abc</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                    </tr>
                </tbody>
            </table>
    </main>

    {{-- <script src="https://www.nobleui.com/laravel/template/demo1/js/app.js"></script> --}}
    <script src="https://www.nobleui.com/laravel/template/demo1/assets/plugins/feather-icons/feather.min.js"></script>
    <script src="https://www.nobleui.com/laravel/template/demo1/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('noble/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>

    <!-- plugin js -->
    <script src="{{ asset('noble/assets/js/template.js') }}"></script>
    <script src="{{ asset('noble/assets/js/dashboard.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>
