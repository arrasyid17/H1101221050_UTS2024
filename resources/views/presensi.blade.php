@extends('main') 
@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Presensi Pegawai</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Masuk</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Izin</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sakit</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanpa Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Muhammad Naufal Akbar</h6>
                            <p class="text-xs text-secondary mb-0">H1101221066@student.untan.ac.id</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Keterangan Masuk -->
                        <span class="badge bg-gradient-success">1</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Izin -->
                        <span class="badge bg-gradient-warning">2</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Sakit -->
                        <span class="badge bg-gradient-danger">3</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Tanpa Keterangan -->
                        <span class="badge bg-gradient-secondary">0</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"> Al-Hafiid Ar-Rasyid </Ar-Rasyid></h6>
                            <p class="text-xs text-secondary mb-0">H1101221050@student.untan.ac.id</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Keterangan Masuk -->
                        <span class="badge bg-gradient-success">10</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Izin -->
                        <span class="badge bg-gradient-warning">2</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Sakit -->
                        <span class="badge bg-gradient-danger">0</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Tanpa Keterangan -->
                        <span class="badge bg-gradient-secondary">1</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Rivo Ayulga Satria</h6>
                            <p class="text-xs text-secondary mb-0">H1101221056@student.untan.ac.id</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Keterangan Masuk -->
                        <span class="badge bg-gradient-success">7</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Izin -->
                        <span class="badge bg-gradient-warning">2</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Sakit -->
                        <span class="badge bg-gradient-danger">1</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Tanpa Keterangan -->
                        <span class="badge bg-gradient-secondary">3</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Rendy June Al Buchori</h6>
                            <p class="text-xs text-secondary mb-0">H1101221055@student.untan.ac.id</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Keterangan Masuk -->
                        <span class="badge bg-gradient-success">10</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Izin -->
                        <span class="badge bg-gradient-warning">2</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Sakit -->
                        <span class="badge bg-gradient-danger">0</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Tanpa Keterangan -->
                        <span class="badge bg-gradient-secondary">3</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fachri Juliand</h6>
                            <p class="text-xs text-secondary mb-0">H1101221065</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Keterangan Masuk -->
                        <span class="badge bg-gradient-success">8</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Izin -->
                        <span class="badge bg-gradient-warning">2</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Sakit -->
                        <span class="badge bg-gradient-danger">3</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Tanpa Keterangan -->
                        <span class="badge bg-gradient-secondary">2</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Yusuf</h6>
                            <p class="text-xs text-secondary mb-0">H1101221067@student.untan.ac.id</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Keterangan Masuk -->
                        <span class="badge bg-gradient-success">10</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Izin -->
                        <span class="badge bg-gradient-warning">0</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Sakit -->
                        <span class="badge bg-gradient-danger">0</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <!-- Tanpa Keterangan -->
                        <span class="badge bg-gradient-secondary">5</span>
                      </td>
                    </tr>
                
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  @endsection
