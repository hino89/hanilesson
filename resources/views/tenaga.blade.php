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
</style>
@endsection

@section('content-0')
<input type="radio" id="c0" checked>
    <label for="c0" class="card">
        <div class="row">
            <div class="icon">0</div>
            <div class="description">
                <h4>Tenaga</h4>
                <p>test</p>
            </div>
        </div>
    </label>
@endsection

@section('content-1')
<input type="radio" name="slide" id="c1" checked>
    <label for="c1" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Tajam-Pencak-Silat.mp4') }}" type="video/mp4">
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
        <video controls muted loop playsinline class="card-video">
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
        <video controls muted loop playsinline class="card-video">
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
        <video controls muted loop playsinline class="card-video">
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
        <video controls muted loop playsinline class="card-video">
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
        <video controls muted loop playsinline class="card-video">
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
        <video controls muted loop playsinline class="card-video">
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
        <video controls muted loop playsinline class="card-video">
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
        <video controls muted loop playsinline class="card-video">
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
        <video controls muted loop playsinline class="card-video">
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