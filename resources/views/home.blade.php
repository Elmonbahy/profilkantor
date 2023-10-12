@extends('layouts.main')

@section('container')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/fotosatus.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PT. Anna Putra Mandiri</h5>
                    <p>Menjadi Perusahaan Penyedia Yang Unggul dan Terpercaya.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/fotoduas.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PT. Anna Putra Mandiri</h5>
                    <p>Memberikan Pelayanan Yang Prima Menyediakan Produk Yang Berkualitas.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <section id="tetang" class="tentang">
        <h2>Sekilas Tentang Kami</h2>

        <div class="row">
            <div class="tentang-img">
                <img src="/img/sekilas.jpg" alt="sekilas">
            </div>
            <div class="content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum officia sit asperiores. Nostrum mollitia
                    amet debitis magnam, est, saepe quam facere reprehenderit qui ratione, incidunt dolores aut ipsam nihil
                    unde! Neque et adipisci eveniet culpa nemo cumque eos, accusantium quo illo hic repellendus, in nobis
                    illum doloremque quod? Vero, vitae?</p>
                <link rel="stylesheet" href="">
            </div>
        </div>
    </section>
@endsection
