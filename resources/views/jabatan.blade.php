@extends('main') 
@section('content')
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Pegawai</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                      <th class="text-secondary opacity-7"></th>
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
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle">
                        <p>
                          Sebagai Manager Organizing, tanggung jawabnya adalah untuk merencanakan, mengkoordinasikan, dan mengelola berbagai kegiatan organisasi untuk mencapai tujuan yang ditetapkan. Ini melibatkan mengidentifikasi kebutuhan dan peluang, merancang strategi implementasi, mengatur sumber daya manusia dan materi, serta memastikan efisiensi operasional. Selain itu, sebagai pemimpin tim, Manager Organizing juga bertanggung jawab untuk memotivasi, membimbing, dan mengarahkan anggota tim agar tetap fokus dan produktif dalam mencapai hasil yang diinginkan.
                        </p>
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
                      <td>
                      <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Executive</p>
                      </td>
                      <td class="align-middle">
                        <p>
                        Seorang Manager Executive bertanggung jawab untuk mengelola strategi dan operasi keseluruhan suatu organisasi atau unit bisnis. Tugasnya meliputi pengambilan keputusan strategis, pengelolaan sumber daya, pemantauan kinerja, dan memastikan pencapaian tujuan organisasi. Selain itu, ia juga bertanggung jawab untuk memimpin dan mengkoordinasi tim, mengembangkan rencana tindakan, dan memastikan implementasi yang efektif untuk mencapai keberhasilan organisasi secara keseluruhan.
                    </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Rivo Ayulga Satria</h6>
                            <p class="text-xs text-secondary mb-0">H1101221056@student.untan.ac.id</p>
                          </div>
                        </div>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">Executive</p>
                        <p class="text-xs text-secondary mb-0">Projects</p>
                      </td>
                      <td class="align-middle">
                        <p>
                        Seorang Executive Project bertanggung jawab untuk mengawasi dan mengelola proyek-proyek tertentu dalam organisasi. Tugasnya meliputi perencanaan, pengorganisasian, pelaksanaan, dan pengawasan proyek secara keseluruhan, termasuk alokasi sumber daya, manajemen risiko, dan memastikan proyek selesai tepat waktu dan dalam anggaran yang telah ditetapkan. Selain itu, Executive Project juga berperan sebagai penghubung antara berbagai pihak terkait dalam proyek dan memastikan komunikasi yang efektif untuk mencapai tujuan proyek yang telah ditetapkan.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Rendy June Al Buchori</h6>
                            <p class="text-xs text-secondary mb-0">H1101221055@student.untan.ac.id</p>
                          </div>
                        </div>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle">
                        <p>
                        Seorang programator developer bertanggung jawab untuk merancang, mengembangkan, dan memelihara perangkat lunak serta aplikasi berbasis teknologi informasi. Tugasnya meliputi menulis kode, menguji perangkat lunak, memperbaiki bug, dan meningkatkan fungsionalitas sistem sesuai dengan kebutuhan pengguna atau perusahaan. Selain itu, mereka juga terlibat dalam memahami spesifikasi produk, berkolaborasi dengan tim, dan menjaga keamanan serta kinerja sistem secara keseluruhan.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Fachri Juliand</h6>
                            <p class="text-xs text-secondary mb-0">H1101221065</p>
                          </div>
                        </div>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Executive</p>
                      </td>
                      <td class="align-middle">
                        <p>
                        Seorang Manager Executive bertanggung jawab untuk mengelola strategi dan operasi keseluruhan suatu organisasi atau unit bisnis. Tugasnya meliputi pengambilan keputusan strategis, pengelolaan sumber daya, pemantauan kinerja, dan memastikan pencapaian tujuan organisasi. Selain itu, ia juga bertanggung jawab untuk memimpin dan mengkoordinasi tim, mengembangkan rencana tindakan, dan memastikan implementasi yang efektif untuk mencapai keberhasilan organisasi secara keseluruhan.
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Yusuf</h6>
                            <p class="text-xs text-secondary mb-0">H1101221067@student.untan.ac.id</p>
                          </div>
                        </div>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">Programtor</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle">
                        <p>
                        Seorang programator developer bertanggung jawab untuk merancang, mengembangkan, dan memelihara perangkat lunak serta aplikasi berbasis teknologi informasi. Tugasnya meliputi menulis kode, menguji perangkat lunak, memperbaiki bug, dan meningkatkan fungsionalitas sistem sesuai dengan kebutuhan pengguna atau perusahaan. Selain itu, mereka juga terlibat dalam memahami spesifikasi produk, berkolaborasi dengan tim, dan menjaga keamanan serta kinerja sistem secara keseluruhan.
                        </p>
                      </td>
                    </tr>
                    <!-- Data pegawai lainnya -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  @endsection
