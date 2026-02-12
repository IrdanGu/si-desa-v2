<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="{{asset('storage/gambar/logoman.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">({{Auth::user()->level}}) Desa Mancagar</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item">
              <a href="{{route('dashboard')}}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                 Dashboard
                  </p>
                </a>
              </li>
        <li class="nav-item">
          <a href="{{route('aparaturindex')}}" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
             Struktur Desa
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('pendudukindex')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                Penduduk
                </p>
              </a>
            </li>
                    <li class="nav-item">
                      <a href="{{route('beritaindex')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-signature"></i>
                          <p>
                            Berita
                          </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('galeryindex')}}" class="nav-link">
                          <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                             Galery
                            </p>
                          </a>
                      </li>

                    <li class="nav-item">
                      <a href="{{route('userindex')}}" class="nav-link">
                        <i class="nav-icon fas fa-envelope-open-text"></i>
                          <p>
                            User
                          </p>
                        </a>
                    </li>

                    <li class="nav-item">
                      <a href="{{route('products.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                          <p>
                            Produk
                          </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('kepaladesaindex')}}" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>
                              Kepala desa
                            </p>
                          </a>
                      </li>


                    <li class="nav-item">
                        <a href="{{route('agendaindex')}}" class="nav-link">
                          <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                              Agenda kegiatan
                            </p>
                          </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{route('agenda_karangtarunaindex')}}" class="nav-link">
                          <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                              Agenda kegiatan Karangtaruna
                            </p>
                          </a>
                      </li>


                      <li class="nav-item">
                        <a href="{{route('potensi_desaindex')}}" class="nav-link">
                          <i class="nav-icon fas fa-file-signature"></i>
                            <p>
                              Potensi Desa
                            </p>
                          </a>
                      </li>

                    <li class="nav-item">
                      <a href="{{route('suratindex')}}" class="nav-link">
                        <i class="nav-icon fas fa-mail-bulk"></i>
                          <p>
                            Surat Keterangan Tidak Mampu
                          </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('surat_keteranganusahaindex')}}" class="nav-link">
                          <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                              Surat Keterangan Usaha
                            </p>
                          </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{route('surat_keterangandomisiliindex')}}" class="nav-link">
                          <i class="nav-icon fas fa-mail-bulk"></i>
                            <p>
                              Surat Keterangan Domisili
                            </p>
                          </a>
                      </li>
          </ul>

    </nav>

  </div>
