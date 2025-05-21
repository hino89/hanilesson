@extends('materi-layout')

@section('title','TERUWA | Waktu')
@section('materi-title', 'WAKTU')
@section('main-materi-image', 'storage/images/timeerer.png')

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
        min-height: 100vh;
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
        <p>Waktu dalam seni tari adalah unsur yang mengatur tempo, durasi, dan ritme gerakan. Waktu menentukan cepat atau lambatnya gerakan penari, serta kapan suatu gerakan dimulai dan diakhiri. Unsur ini berkaitan erat dengan irama musik pengiring, tetapi juga bisa berdiri sendiri dalam bentuk hitungan atau ketukan tertentu. Pengaturan waktu yang tepat membantu menciptakan keselarasan antara gerakan, musik, dan ekspresi, serta memberi struktur pada koreografi. Dengan mengolah waktu secara variatif, tarian menjadi lebih dinamis dan menarik.</p>
    </div>
</div>
@endsection

@section('content-1')
<input type="radio" name="slide" id="c1" checked>
    <label for="c1" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Lambat.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">1</div>
            <div class="description">
                <h4>Waktu Lambat</h4>
                <p>Gerakan yang dilakukan dengan kecepatan yang sangat perlahan,
                    memberikan kesan meditasi atau keluwesan</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c2" >
    <label for="c2" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Cepat.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">2</div>
            <div class="description">
                <h4>Waktu Cepat</h4>
                <p>Gerakan yang dilakukan dengan kecepatan tinggi, menciptakan kesan energi
                    atau kegembiraan</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c3" >
    <label for="c3" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Cepat.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">3</div>
            <div class="description">
                <h4>Waktu Berulang</h4>
                <p>Gerakan yang diulang dalam periode waktu yang sama, seperti langkah
                    atau pola tari yang terus-menerus</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c4" >
    <label for="c4" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Berhenti.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">4</div>
            <div class="description">
                <h4>Waktu Berhenti</h4>
                <p>Menghentikan gerakan untuk sejenak dalam waktu tertentu, menciptakan
                    efek dramatis atau penekanan pada momen tertentu</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c5" >
    <label for="c5" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Tertunda.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">5</div>
            <div class="description">
                <h4>Waktu Tertunda</h4>
                <p>Gerakan yang sedikit tertunda atau memiliki jeda sebelum dilanjutkan,
                    memberikan kesan ketegangan atau keterlambatan</p>
            </div>
        </div>
    </label>
@endsection

@section('content-2')
<input type="radio" name="slide" id="c6">
    <label for="c6" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Tiba.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">6</div>
            <div class="description">
                <h4>Waktu Tiba-tiba</h4>
                <p>Perubahan kecepatan yang mendadak, seperti perubahan tiba-tiba dari
                    gerakan lambat menjadi cepat</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c7" >
    <label for="c7" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Putus.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">7</div>
            <div class="description">
                <h4>Waktu Terputus-putus</h4>
                <p>Gerakan yang dilakukan dengan jeda atau pemisahan waktu antara
                    satu gerakan dengan yang lainnya</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c8" >
    <label for="c8" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Sederhana.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">8</div>
            <div class="description">
                <h4>Waktu Sederhana</h4>
                <p>Gerakan yang dilakukan dalam pola waktu yang teratur dan mudah
                    diikuti, seperti langkah tari berirama</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c9" >
    <label for="c9" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Berirama.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">9</div>
            <div class="description">
                <h4>Waktu Berirama</h4>
                <p>Gerakan yang mengikuti ritme atau tempo musik yang teratur,
                    menciptakan sinkronisasi antara musik dan tubuh</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c10" >
    <label for="c10" class="card">
        <video controls  loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Waktu-Improvisasi.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">10</div>
            <div class="description">
                <h4>Waktu Improviasi</h4>
                <p>Gerakan yang dilakukan tanpa mengikuti waktu yang terstruktur,
                    memberikan kebebasan ekspresi dan spontanitas pada penari</p>
            </div>
        </div>
    </label>
@endsection