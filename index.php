<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Web | Nenofetch</title>
    <!-- My Own Styles -->
    <link rel="stylesheet" href="https://storage.googleapis.com/asset_web_nenoarisma/assets/styles/style.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://storage.googleapis.com/asset_web_nenoarisma/assets/scripts/script.js" defer></script>
  </head>

  <body>
    <header>
      <nav>
        <button class="hamburger" onclick="toggleMenu()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
          >
            <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" fill="#fff" />
          </svg>
        </button>

        <ul id="navbarMenu">
          <li><a href="#perkenalan">Perkenalan</a></li>
          <li><a href="#momen">Momen</a></li>
          <li><a href="#foto">Foto</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div id="content">
        <article id="perkenalan" class="card">
          <h2>Perkenalan</h2>
          <img
            src="https://storage.googleapis.com/asset_web_nenoarisma/assets/images/first.webp"
            alt="gambar pertama"
            class="feature-image"
          />
          <p>
            Saya merupakan seorang remaja dari Kabupaten Majalengka, yang dimana
            memiliki minat akan perkembangan teknologi terutama di ranah web
            development. Saat ini saya sedang mempelajari teknologi dari sisi
            server (Server Side atau yang bisa disebut Back-End) dan juga
            perangkat mobile.
          </p>
        </article>

        <article id="momen" class="card">
          <h2>Momen</h2>
          <img
            src="https://storage.googleapis.com/asset_web_nenoarisma/assets/images/pelatihan.webp"
            alt="momen berkesan"
            class="feature-image"
          />
          <p>
            Momen berkesan bagi saya ialah ketika mengikuti program pelatihan
            Junior Web Development yang diselenggarakan Oleh Kominfo dimana saya
            saat itu mendaftar pada tahun 2019 (baru saja lulus sekolah SMK) dan
            saya melaksanakan kegiatan pelatihan tersebut di Politeknik Negeri
            Jakarta. Momen ini merupakan jalan pembuka saya dalam menekuni
            bidang yang saya idamkan saat ini.
          </p>
        </article>
        <article id="foto" class="card">
          <h2>Foto</h2>
          <p>
            Disela-sela kejenuhan dengan belajarnya teknologi, saya kerap kali
            mengambil bebeberapa gambar guna mengisi waktu luang saya.
          </p>

          <section>
            <div class="slideshow-container">
              <div class="slideshow fade">
                <img
                  class="feature-image"
                  src="https://storage.googleapis.com/asset_web_nenoarisma/assets/images/slides/gedungsate.webp"
                  alt="gedung sate"
                />
              </div>

              <div class="slideshow fade">
                <img
                  class="feature-image"
                  src="https://storage.googleapis.com/asset_web_nenoarisma/assets/images/slides/depok.webp"
                  alt="margonda"
                />
              </div>

              <div class="slideshow fade">
                <img
                  class="feature-image"
                  src="https://storage.googleapis.com/asset_web_nenoarisma/assets/images/slides/tol.webp"
                  alt="jalan tol"
                />
              </div>

              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <br />

            <div style="text-align: center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
          </section>
        </article>
      </div>

      <aside>
        <article class="profile card">
          <header>
            <h2>About Me</h2>
            <p>Informasi Singkat Mengenai Diriku</p>
            <figure>
              <img
                class="personal-image"
                src="https://storage.googleapis.com/asset_web_nenoarisma/assets/images/personal.webp"
                alt="Nenofetch"
              />
              <figcaption>Creator this website</figcaption>
            </figure>
          </header>

          <section>
            <h3>Informati Detail</h3>
            <table aria-label="informasi">
              <tr>
                <th>Nama</th>
                <td>Neno Arisma</td>
              </tr>
              <tr>
                <th>Hari Jadi</th>
                <td>17 Juli 2001</td>
              </tr>

              <tr>
                <th>Bahasa Keseharian</th>
                <td>Sunda, Indonesia, Inggris</td>
              </tr>
              <tr>
                <th>Minat</th>
                <td>Membaca, Eksplorasi</td>
              </tr>
            </table>
          </section>
        </article>
      </aside>
    </main>

    <footer>
      <p>
        Made with full <i class="fa fa-heart"></i> By Neno Arisma | 2023 -
        PRESENT
      </p>
    </footer>
  </body>
</html>
