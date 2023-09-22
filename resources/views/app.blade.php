<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Namaku APP</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/52c63e43bb.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        th {
            color: black !important;
        }

        th,
        td {
            padding: 0.75rem 1rem !important;
        }
        td{
            color: white !important;
            background-color: #0006 !important
        }
        td:first-child{
            white-space: nowrap;
        }
        </style>
</head>
<body class="bg-black vh-100" style="background-image: url('Gradients.svg'); background-size: cover">
    <div id="app" class="text-white position-relative z-10">
        <div class="position-fixed  p-4 rounded-4 container"
            style="background-color: #0004;
                backdrop-filter: blur(10px);
                z-index: 10;
                top: 2.5rem;
                left: 50%;
                transform: translateX(-50%);
                ">
            <h1 class="text-center">Cek Arti Nama</h1>
            <div class="row text-center">
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-center gap-1 mb-3">
                        <h4 class="m-0">1 Mawar</h4>
                        <img src="mawar.png" height="40" />
                    </div>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control" id="mawar" />
                        <button class="btn btn-primary btn-mawar">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-center align-items-end gap-3 mb-3">
                        <h4 class="m-0">1 Jari Hati</h4>
                        <img src="jari.png" height="40" />
                    </div>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control" id="jari" />
                        <button class="btn btn-primary btn-jari">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="vh-100 overflow-auto" style="z-index: 1;">
            <div class="container py-4">
                <table width="100%" class="table rounded-4 overflow-hidden border"
                    style="backdrop-filter: blur(30px);margin-top: 15rem;">
                    <thead class="bg-white">
                        <tr>
                            <th>Nama</th>
                            <th>Arti Nama</th>
                        </tr>
                    </thead>
                    <tbody class="" >

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        let name;

        function getTr(n, m, w, h = null) {
            let ho = '';
            if (h != null) {
                ho = `<div class="mt-2">Ramalan: ${h}</div>`
            }
            return `<tr>
                <td>${n}</td>
                <td>
                    <div class="mb-2">${m}</div>
                    <div>Pekerjaan: ${w}</div>
                    ${ho}
                </td>
            </tr>`
        }

        $(document).ready(() => {
            $('#mawar').focus()
            $.ajax({
                    url: '/api/index',
                    type: 'GET',
                })
                .then(response => {
                    response.forEach(el => {
                        $('tbody').append(getTr(el.name, el.mean, el.work, el.horoscope))
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
        $('input').keypress((e) => {
            if (e.keyCode === 13) {
                $(e.target).next().click()
            }
        });
        $('.btn-mawar').on('click', e => {
            $.ajax({
                url: '/api/index',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    name: $('#mawar').val()
                },
                success: function(response) {
                    $('tbody').prepend(getTr(response.name, response.mean, response.work))
                },
            })
            $('input').val('')
            $(e.currentTarget).prev().focus()
        });
        $('.btn-jari').on('click', e => {
            $.ajax({
                url: '/api/index',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    name: $('#jari').val(),
                    horoscope: true
                },
                success: function(response) {
                    $('tbody').prepend(getTr(response.name, response.mean, response.work, response
                        .horoscope))
                },
            })
            $('input').val('')
            $(e.currentTarget).prev().focus()
        });
    </script>
</body>
</html>
