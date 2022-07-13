<!-- ======= Features Section ======= -->
<section id="features" class="features">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Fitur</h2>
            <p>STMJ hadir dengan Fitur seperti:</p>
        </header>

        <div class="row">

            <div class="col-lg-6">
                <img src="assets/img/features.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                <div class="row align-self-center gy-4">

                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Pemantauan lokasi koordinat penjelajah</h3>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Pemantauan suhu tubuh penjelajah</h3>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Pemantauan denyut nadi penjelajah</h3>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>SOS alert trigger</h3>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Pembacaan data secara offline melalui Bluetooth</h3>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                        <div class="feature-box d-flex align-items-center">
                            <i class="bi bi-check"></i>
                            <h3>Notifikasi peringatan secara realtime</h3>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!-- / row -->

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
            <div class="col-lg-6">
                <h3>Bagian - bagian pada STMJ</h3>

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                    <li>
                        <a class="nav-link active" data-bs-toggle="pill" href="#tab1">STMJ Sender</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#tab2">STMJ Repeater</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#tab3">STMJ Receiver</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#tab4">Aplikasi STMJ</a>
                    </li>
                </ul><!-- End Tabs -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="tab1">
                        <p>
                            STMJ Sender merupakan bagian pada STMJ yang berfungsi untuk menerima data koordinat dari satelit dan suhu tubuh dari penjelajah. Data tersebut akan ditransmisikan melalui gelombang radio.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Mengirim data lokasi dan kondisi penjelajah</h4>
                        </div>
                        <p>
                            Pengiriman data lokasi berupa koordinat dan suhu tubuh penjelajah secara realtime melalui gelombang radio.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Mengirim peringatan SOS</h4>
                        </div>
                        <p>
                            STMJ Sender dapat mengirim peringatan SOS, guna memeberitahu pihak pengelola bila terjadi kecelakaan dan membutuhkan penanganan secepat mungkin.
                        </p>
                    </div><!-- End Tab 1 Content -->

                    <div class="tab-pane fade show" id="tab2">
                        <p>
                            STMJ Repeater merupakan bagian pada STMJ yang berfungsi untuk menjembatani STMJ Sender dan STMJ Receiver, agar dapat menambah jarak transmisi data antara STMJ Sender dan Receiver.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Menerima data yang ditransmisikan</h4>
                        </div>
                        <p>
                            STMJ Repeater menerima data yang sebelumnya ditransmisikan melalui gelombang radio agar dapat ditransmisikan kembali, agar dapat memperjauh jarak transmisi dan menampilkan data Receive Strength Signa Indicator (RSSI) guna mengetahui efektifitas penempatan STMJ Repeater dalam menejembatani data.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Mentransmisikan data yang diterima</h4>
                        </div>
                        <p>
                            STMJ Repeater mentransmisikan data yang sebelumnya diterima melalui gelombang radio menuju STMJ Repeater lain sampai STMJ Receiver guna memperjauh jarak transmisi data.
                        </p>
                    </div><!-- End Tab 2 Content -->

                    <div class="tab-pane fade show" id="tab3">
                        <p>
                            STMJ Receiver adalah bagian dari STMH yang berfungsi untuk menerima data yang ditransmisikan oleh STMJ Sender dan STMJ Repeater melalui gelombang radio.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Menerima data yang ditransmisikan</h4>
                        </div>
                        <p>
                            STMJ Receiver akan menerima data yang telah ditransmiskan oleh STMJ Sender atau STMJ Repeater dan kemudian data yg diterima disaring agar tidak terjadi penumpangan atau penerimaan data yang bukan berasal dari sistem STMJ. Proses ini juga diperlukan untuk mengetahui Receive Strength Signa Indicator (RSSI) pada signal yang diterima guna mengetahui efektifitas pada transmisi data.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Offline Mode</h4>
                        </div>
                        <p>
                            STMJ Receiver dapat mengirim data secara offline melalui komunikasi Bluetooth dengan perangkat mobile agar pemantauan data penjelajah dapat dilakukan dengan Offline atau tanpa konektifitas Internet.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Online Mode</h4>
                        </div>
                        <p>
                            STMJ Receiver akan mengirim data yang sebelumnya ditransmisikan menuju Database melalui jaringan Internet, agar data dapat dipantau melalui perangkat mobile.
                        </p>
                    </div><!-- End Tab 3 Content -->

                    <div class="tab-pane fade show" id="tab4">
                        <p>
                            Aplikasi pada Soul Tracking Mobile Junction (STMJ) berguna untuk memantau data para penjelajah di Alam oleh pihak pengelola agar dapat memberikan penangan segera bila terjadi kecelakaan.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Realtima Monitoring</h4>
                        </div>
                        <p>
                            Aplikasi pada STMJ dapat menampilkan data yang diperoleh dari Database melalui Internet secara realtime karena menggunakan protocol Websocket.
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-check2"></i>
                            <h4>Offline Mode</h4>
                        </div>
                        <p>
                            Aplikasi pada STMJ dapat melakukan pemantauan data secara offline atau tanpa konetifitas internet melalui komunikasi Bluetooth denagn STMJ Receiver.
                        </p>
                    </div><!-- End Tab 4 Content -->

                </div>

            </div>

            <div class="col-lg-6">
                <img src="assets/vector/bg-track.png" class="img-fluid" alt="">
            </div>

        </div><!-- End Feature Tabs -->

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
            <h3>Fitur - fitur pada Aplikasi STMJ</h3>

            <div class="row">

                <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                </div>

                <div class="col-xl-8 d-flex content">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="ri-line-chart-line"></i>
                            <div>
                                <h4>Monthly Chart</h4>
                                <p>
                                    Aplikasi STMJ dapat menampilkan grafik jumlah data penjelajah bulanan, guna mepermudah pendataan pihak pengelola.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="ri-stack-line"></i>
                            <div>
                                <h4>List of Exploler</h4>
                                <p>
                                    Aplikasi STMJ dapat menampilkan daftar dan data penjelajah guna mempermudah pemantauan oleh pihak pengelola.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="ri-brush-4-line"></i>
                            <div>
                                <h4>Offline Mode</h4>
                                <p>
                                    Aplikasi pada STMJ dapat melakukan pemantauan data secara offline atau tanpa konetifitas internet melalui komunikasi Bluetooth denagn STMJ Receiver.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="ri-magic-line"></i>
                            <div>
                                <h4>Reltime Notifikasi</h4>
                                <p>
                                    Aplikasi STMJ dapat memunculkan notifikasi pemberitahuan bila terjadi kecelakaan, kondisi abnormal dan kondisi SOS pada penjelajah.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="ri-command-line"></i>
                            <div>
                                <h4>Danger Alert</h4>
                                <p>
                                    Aplikasi STMJ akan menampilkan daftar penjelajah yang dapat diindikasikan dalam bahaya bila kondisi penjalajah pada upnormal atau SOS.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                            <i class="ri-radar-line"></i>
                            <div>
                                <h4>Exploler Tracking</h4>
                                <p>
                                    Aplikasi STMJ dapat menampilakna jarak lokasi dan data kondisi penjelajah tertentu bila perlu dilakukanya penanganan oleh pihak pengelola.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div><!-- End Feature Icons -->

    </div>

</section><!-- End Features Section -->