<?php 
include 'layout/header.php';
?>

<style>
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.2));
    z-index: 0;
  }

  .content {
    position: relative;
    z-index: 2;
  }

  .rating {
    color: yellow;
    font-size: 1.2em;
  }

  .book-price {
    font-size: 2rem;
    color: #008000;
  }

  .book-discount {
    font-size: 1.2rem;
    color: gray;
    text-decoration: line-through;
  }

  .detail-title {
    display: inline-block; /* Membuat garis hanya sepanjang teks */
    border-bottom: 1px solid #fff;
    padding-bottom: 3px;
  }

  .detail-list {
    list-style: none;
    padding: 0;
    font-size: 1rem;
  }

  .detail-list li {
    margin-bottom: 0.5rem;
  }

  .icon-section img {
    width: 50px;
    margin-bottom: 0.5rem;
  }

  .icon-section p {
    font-size: 0.9rem;
    text-align: center;
  }
</style>

<!-- Outer div -->
<div class="bg-dark text-white position-relative">
  <div class="overlay"></div>

  <div class="container p-5" id="konten">
    <div class="row content">
      <!-- Left Column: Book Image and Icons -->
      <div class="col-md-4">
        <img src="./foto/foto-film/670f30e72ef30.jpg" class="img-fluid mb-3" alt="Poster Buku" />
      </div>

      <!-- Right Column: Book Details -->
      <div class="col-md-8">
        <h2>PLUTO</h2>
        <small>Penulis: Amba D.Kam</small>
        <div class="rating mb-2">
          Terjual 999+ . ★5 <span>(944 rating)</span>
        </div> 
        <div>
          <span class="book-price">Rp96.000</span>
          <span class="book-discount">Rp120.000</span>
          <span class="badge bg-success">20% OFF</span>
        </div>
        <hr class="border-light">
        <p class="detail-title">Detail</p> <!-- Garis hanya sepanjang teks -->
        <ul class="detail-list">
          <li><strong>Kondisi:</strong> Baru</li>
          <li><strong>Min. Pemesanan:</strong> 1 Buah</li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut placeat quo aperiam
    aspernatur sapiente tempora fuga aliquid quidem quisquam accusantium dolores
    illum quibusdam iste eveniet quasi et nulla officia necessitatibus similique
    nisi, esse commodi cupiditate veniam iure. Voluptatem dolorum, inventore aut ex
    repellendus doloribus tempore architecto nulla quisquam ipsam, nisi at libero
    debitis atque? Accusamus magni fugiat ab, quos quam molestias obcaecati hic
    soluta, quibusdam assumenda sint possimus! Quibusdam quia exercitationem unde
    fugiat sunt necessitatibus, iusto perferendis! Enim, magnam, natus neque vel eos
    tempore sequi blanditiis rerum quis tempora iste similique dolor quidem at
    corrupti porro eaque quasi id officia? Laudantium, excepturi quas. Ipsa expedita
    ad perferendis maiores deleniti  18 Mei 1970. Hari gelap. Langit berwarna hitam dengan garis ungu. Bulan bersembunyi di balik ranting pohon randu. 
    Sekumpulan burung nasar bertengger di pagar kawat...
       </p>
  
        <a href="checkout.php" class="btn btn-primary mt-3">Beli Buku</a>
      </div>
    </div>
  </div>
</div>