@extends('materi-layout')

@section('title','TERUWA | Tenaga')
@section('materi-title', 'TENAGA')

@section('images')
<style>
    .card-video {
        position: relative;
        height: 100%;
        width: 100%;
    }

    .card[for="c0"] {
        
    }
    .card[for="c1"] {
        background-image: url('./img1.jpeg');
    }
    .card[for="c2"] {
        background-image: url('./img2.jpeg');
    }
    .card[for="c3"] {
        background-image: url('./img3.jpeg');
    }
    .card[for="c4"] {
        background-image: url('./img4.jpeg');
    }
    .card[for="c5"] {
        background-image: url('./img5.jpeg');
    }

    .card[for="c6"] {
        background-image: url('./img1.jpeg');
    }
    .card[for="c7"] {
        background-image: url('./img2.jpeg');
    }
    .card[for="c8"] {
        background-image: url('./img3.jpeg');
    }
    .card[for="c9"] {
        background-image: url('./img4.jpeg');
    }
    .card[for="c10"] {
        background-image: url('./img5.jpeg');
    }
    .heading-card-wrapper {
        overflow-x: hidden !important;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        z-index: 2;
    }
    .heading-card {
        background-color: white;
        color: #3E3F5B;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 30px;
        text-align: justify;
        width: 800px; /* Adjust width as needed */
        margin: 10px auto; /* Center the card */
    }
    .heading-card p{
        font-size: medium;
    }
    @media (max-width:768px) {
        .heading-card {
            width: 70% !important;
            max-width: 100% !important;
            box-sizing: border-box;
        }
    }
</style>
@endsection

@section('content-0')
<div class="heading-card-wrapper">
    <div class="heading-card" style="z-index: 10">
        <p>Tenaga dalam seni tari adalah unsur yang berkaitan dengan kualitas dan intensitas gerakan penari. Tenaga menentukan kuat atau lemahnya suatu gerakan, serta memberi ekspresi dan nuansa emosional pada tarian. Penggunaan tenaga bisa bervariasi, mulai dari gerakan yang halus, lembut, dan perlahan hingga gerakan yang kuat, cepat, dan tegas. Tenaga juga mengatur ritme dan dinamika, sehingga tarian tidak monoton dan lebih hidup. Dengan pengolahan tenaga yang tepat, penari dapat menyampaikan karakter, suasana, dan pesan dari sebuah tarian secara lebih mendalam.</p>
    </div>
</div>
@endsection

@section('content-1')
<input type="radio" name="slide" id="c1" checked>
    <label for="c1" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Kuat.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">1</div>
            <div class="description">
                <h4>Tenaga Kuat</h4>
                <p>Gerakan yang dilakukan dengan kekuatan besar, seperti lompat tinggi atau
                dorongan kuat.</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c2" >
    <label for="c2" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Lemah.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">2</div>
            <div class="description">
                <h4>Tenaga Lemah</h4>
                <p>erakan yang lembut dan halus, seperti meluncur atau bergerak pelan</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c3" >
    <label for="c3" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Tiba.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">3</div>
            <div class="description">
                <h4>Tenaga Tiba-tiba</h4>
                <p>Gerakan yang dilakukan dengan kecepatan dan intensitas mendadak,
                    misalnya tendangan atau perubahan posisi mendalam</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c4" >
    <label for="c4" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Terkontrol.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">4</div>
            <div class="description">
                <h4>Tenaga Terkontrol</h4>
                <p>erakan yang dilakukan dengan pengendalian yang tepat dan terarah,
                    seperti gerakan tangan yang halus</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c5" >
    <label for="c5" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Lunak.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">5</div>
            <div class="description">
                <h4>Tenaga Lunak</h4>
                <p>Gerakan yang bersifat lentur dan lembut, seperti gerakan menggoyangkan
                    tubuh dengan aliran yang ringan</p>
            </div>
        </div>
    </label>
@endsection

@section('content-2')
<input type="radio" name="slide" id="c6">
    <label for="c6" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Tajam.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">6</div>
            <div class="description">
                <h4>Tenaga Tajam</h4>
                <p>erakan yang memiliki ketegasan dan ketepatan, seperti tepisan tangan
                    atau langkah cepat dan akurat</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c7" >
    <label for="c7" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Mengalir.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">7</div>
            <div class="description">
                <h4>Tenaga Mengalir</h4>
                <p>Gerakan yang berkesinambungan tanpa henti, memberikan efek aliran
                    atau ritme yang mengalir, seperti tari klasik atau tari kontemporer</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c8" >
    <label for="c8" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Putus.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">8</div>
            <div class="description">
                <h4>Tenaga Terputus-putus</h4>
                <p>Gerakan yang dipecah menjadi bagian-bagian, misalnya gerakan
                    berhenti dan tiba-tiba dimulai kembali</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c9" >
    <label for="c9" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Mengalir.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">9</div>
            <div class="description">
                <h4>Tenaga Lembut dan Mengalir</h4>
                <p>Gerakan yang mengalir perlahan dengan sentuhan ringan,
                    menciptakan kesan kelembutan</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c10" >
    <label for="c10" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tenaga-Tegang.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">10</div>
            <div class="description">
                <h4>Tenaga Tegang</h4>
                <p>erakan yang memerlukan ketegangan tubuh atau otot yang lebih intens,
                    seperti posisi keras atau jangka panjang</p>
            </div>
        </div>
    </label>
@endsection