<!DOCTYPE html>
<html lang="en">

<head>

    <x-header></x-header>
    <script>
        function buatKelompok() {
            let namaKelompok = $("#namaKelompok").val();
            let dplId = $("#namaDosen").val();
            let lokasi = $("#lokasi").val();
            let mahasiswaEkonomi= $("#mahasiswaEkonomi").val();
            let mahasiswaHukum= $("#mahasiswaHukum").val();
            let mahasiswaKeguruandanIlmupendidikan= $("#mahasiswaKeguruandanIlmuPendidikan").val();
            let mahasiswaPertanian= $("#mahasiswaPertanian").val();
            let mahasiswaTeknik= $("#mahasiswaTeknik").val();

            if (namaKelompok === "") {
                $("#helpNamaKelompok")
                    .text("Silahkan pilih Nama Kelompok!")
                    .removeClass("is-safe")
                    .addClass("is-danger");
                $("#namaKelompok").focus();
                return;
            }

            if (namaKelompok != "") {
                $("#helpNamaKelompok")
                    .text("")
                    .removeClass("is-safe")
                    .addClass("is-danger");
            }

            if (dplId === "") {
                $("#helpNamaDosen")
                    .text("Silahkan pilih DPL!")
                    .removeClass("is-safe")
                    .addClass("is-danger");
                $("#namaDosen").focus();
                return;
            }

            if (dplId != "") {
                $("#helpNamaDosen")
                    .text("")
                    .removeClass("is-safe")
                    .addClass("is-danger");
            }

            if (lokasi === "") {
                $("#helpLokasi")
                    .text("Silahkan pilih Nama Kelompok!")
                    .removeClass("is-safe")
                    .addClass("is-danger");
                $("#lokasi").focus();
                return;
            }

            if (lokasi != "") {
                $("#helpLokasi")
                    .text("")
                    .removeClass("is-safe")
                    .addClass("is-danger");
            }
            validasi = mahasiswaEkonomi.length + mahasiswaHukum.length + mahasiswaKeguruandanIlmuPendidikan.length 
            + mahasiswaPertanian.length + mahasiswaTeknik.length;
            if (validasi <= 0) {
                Swal.fire({
                    icon: "error",
                    title: "Gagal",
                    text: "Belum memilih mahasiswa.",
                    confirmButtonText: "Tutup",
                });
                return;
            }

            $.ajax({
                type: "POST",
                url: "{{ route('create.kelompok.kkn') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    nama_kelompok: namaKelompok,
                    lokasi: lokasi,
                    dpl_id: dplId,
                },
                success: function(response) {
                    let kelompok_kkn_id = response.kelompok_kkn_id;

                    for (let i = 0; i < mahasiswaEkonomi.length; i++) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('add.mahasiswa.to.kelompok') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                kelompok_kkn_id: kelompok_kkn_id,
                                mahasiswa_id: mahasiswaEkonomi[i],
                            },
                            success: function(response) {
                                console.log("Mahasiswa berhasil dibuat");
                            },
                        });
                    }

                    for (let i = 0; i < mahasiswaHukum.length; i++) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('add.mahasiswa.to.kelompok') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                kelompok_kkn_id: kelompok_kkn_id,
                                mahasiswa_id: mahasiswaHukum[i],
                            },
                            success: function(response) {
                                console.log("Mahasiswa berhasil dibuat");
                            },
                        });
                    }

                    for (let i = 0; i < mahasiswaKeguruandanIlmupendidikan.length; i++) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('add.mahasiswa.to.kelompok') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                kelompok_kkn_id: kelompok_kkn_id,
                                mahasiswa_id: mahasiswaKeguruandanIlmuPendidikan[i],
                            },
                            success: function(response) {
                                console.log("Mahasiswa berhasil dibuat");
                            },
                        });
                    }

                    for (let i = 0; i < mahasiswaPertanian.length; i++) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('add.mahasiswa.to.kelompok') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                kelompok_kkn_id: kelompok_kkn_id,
                                mahasiswa_id: mahasiswaPertanian[i],
                            },
                            success: function(response) {
                                console.log("Mahasiswa berhasil dibuat");
                            },
                        });
                    }

                    for (let i = 0; i < mahasiswaTeknik.length; i++) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('add.mahasiswa.to.kelompok') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                kelompok_kkn_id: kelompok_kkn_id,
                                mahasiswa_id: mahasiswaTeknik[i],
                            },
                            success: function(response) {
                                console.log("Mahasiswa berhasil dibuat");
                            },
                        });
                    }

                },
                error: function(xhr) {
                    console.error("Error:", xhr.responseText);
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        if (errors.nama_kelompok) {
                            $("#helpNamaKelompok")
                                .text("Nama kelompok telah digunakan!")
                                .removeClass("is-safe")
                                .addClass("is-danger");
                            $("#namaKelompok").focus();
                        }
                    }
                },
            });

            if (validasi > 0) {
                Swal.fire({
                    icon: "success",
                    title: "Berhasil",
                    text: "Kelompok KKN berhasil dibuat.",
                    confirmButtonText: "Tutup",
                }).then(() => {
                        window.location.href = "{{ route('view.data.kelompok') }}"
                });
            }
        }
    </script>
</head>

<body class="app">
    <header class="app-header fixed-top">

        <x-navbar></x-navbar>

        <x-sidebar></x-sidebar>


    </header><!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Kelompok KKN</h1>
                <div class="row gy-4">


                    <div class="col-4 col-lg-4">
                        <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                            </svg>
                                        </div><!--//icon-holder-->

                                    </div><!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Data Kelompok KKN</h4>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body px-4 w-100">

                                <!--Content Buat Akun Kelompok KKN-->
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-start align-items-center">
                                        <div class="col-md-14">
                                            <label for="namaKelompok" class="form-label"><strong>Nama
                                                    Kelompok</strong></label>
                                            <input type="text" class="form-control" id="namaKelompok"
                                                placeholder="Nama Kelompok" />
                                            <p id="helpNamaKelompok" class="help is-hidden"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-start align-items-center">
                                        <div class="col-md-14">
                                            <label for="namaDosen" class="form-label"><strong>Nama
                                                    Dosen</strong></label>
                                            <select class="form-control" id="namaDosen" name="namaDosen">
                                                <option value="" selected>Pilih DPL</option>
                                                @foreach ($dpls as $dpl)
                                                    <option value={{ $dpl->id }}>
                                                        {{ $dpl->nama_lengkap }}, {{ $dpl->gelar }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <p id="helpNamaDosen" class="help is-hidden"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-start align-items-center">
                                        <div class="col-md-14">
                                            <label for="lokasi" class="form-label"><strong>Lokasi KKN</strong></label>
                                            <input type="text" class="form-control" id="lokasi"
                                                placeholder="Lokasi KKN" />
                                            <p id="helpLokasi" class="help is-hidden"></p>
                                        </div>
                                    </div>
                                </div>

                            </div><!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <button class="btn app-btn-primary" type="button" onclick="buatKelompok()">Buat
                                    Kelompok</button>
                                <a href="javascript:history.back()" class="btn app-btn-secondary">Kembali</a>
                            </div><!--//app-card-footer-->
                        </div><!--//app-card-->
                    </div><!--//col-->


                    <div class="col-8 col-lg-8">
                        <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Daftar Mahasiswa</h4>
                                        <p>Bisa pilih lebih dari satu.</p>
                                    </div><!--//col-->
                                </div><!--//row-->
                            </div><!--//app-card-header-->
                            <div class="app-card-body px-4 w-100">

                                <!--Content Buat Akun Kelompok KKN-->
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-start align-items-center">
                                        <div class="col-md-6">
                                            <label for="mahasiswaHukum" class="form-label"><strong>Mahasiswa
                                                    Hukum</strong></label>
                                            <select class="form-control" id="mahasiswaHukum" name="mahasiswaHukum" multiple
                                                size="6" style="height: 50px;">

                                                @foreach ($mahasiswaHukum as $mahasiswa)
                                                    <option value={{ $mahasiswa->id }}>
                                                        {{ $mahasiswa->nama_lengkap }} - {{ $mahasiswa->npm }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="mahasiswaEkonomi" class="form-label"><strong>Mahasiswa
                                                    Ekonomi</strong></label>
                                            <select class="form-control" id="mahasiswaEkonomi" name="mahasiswaEkonomi"
                                                multiple size="6" style="height: 50px;">

                                                @foreach ($mahasiswaEkonomi as $mahasiswa)
                                                    <option value={{ $mahasiswa->id }}>
                                                        {{ $mahasiswa->nama_lengkap }} - {{ $mahasiswa->npm }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="mahasiswaKeguruandanIlmuPendidikan" class="form-label"><strong>Mahasiswa
                                                    KeguruandanIlmuPendidikan</strong></label>
                                            <select class="form-control" id="mahasiswaKeguruandanIlmuPendidikan" name="mahasiswaKeguruandanIlmuPendidikan"
                                                multiple size="6" style="height: 50px;">

                                                @foreach ($mahasiswaKeguruandanIlmuPendidikan as $mahasiswa)
                                                    <option value={{ $mahasiswa->id }}>
                                                        {{ $mahasiswa->nama_lengkap }} - {{ $mahasiswa->npm }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="mahasiswaPertanian" class="form-label"><strong>Mahasiswa
                                                    Pertanian</strong></label>
                                            <select class="form-control" id="mahasiswaPertanian"
                                                name="mahasiswaPertanian" multiple size="6"
                                                style="height: 50px;">

                                                @foreach ($mahasiswaPertanian as $mahasiswa)
                                                    <option value={{ $mahasiswa->id }}>
                                                        {{ $mahasiswa->nama_lengkap }} - {{ $mahasiswa->npm }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="col-md-6">
                                            <label for="mahasiswaTeknik" class="form-label"><strong>Mahasiswa
                                                    Teknik</strong></label>
                                            <select class="form-control" id="mahasiswaTeknik"
                                                name="mahasiswaTeknik" multiple size="6"
                                                style="height: 50px;">

                                                @foreach ($mahasiswaTeknik as $mahasiswa)
                                                    <option value={{ $mahasiswa->id }}>
                                                        {{ $mahasiswa->nama_lengkap }} - {{ $mahasiswa->npm }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div><!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                            </div><!--//app-card-footer-->
                        </div><!--//app-card-->
                    </div><!--//col-->

                </div><!--//row-->
            </div><!--//container-fluid-->
        </div><!--//app-content-->

        <x-footer></x-footer>

    </div><!--//app-wrapper-->

</body>
<!-- Javascript -->
<script src="assets/plugins/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Page Specific JS -->
<script src="assets/js/app.js"></script>

</html>
