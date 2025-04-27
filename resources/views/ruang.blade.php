@extends('materi-layout')

@section('title','TERUWA | Ruang')
@section('materi-title', 'RUANG')

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
                <h4>Ruang</h4>
                <p>test</p>
            </div>
        </div>
    </label>
@endsection

@section('content-1')
<input type="radio" name="slide" id="c1" checked>
    <label for="c1" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Lurus.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">1</div>
            <div class="description">
                <h4>Ruang Lurus</h4>
                <p>Gerakan tari yang dilakukan secara vertikal atau horizontal tanpa perubahan
                    arah yang mendalam.</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c2" >
    <label for="c2" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Lingkaran.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">2</div>
            <div class="description">
                <h4>Ruang Lingkaran</h4>
                <p>Gerakan tari yang dilakukan dalam bentuk lingkaran atau melingka</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c3" >
    <label for="c3" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Vertikal.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">3</div>
            <div class="description">
                <h4>Ruang Vertikal</h4>
                <p>Gerakan tari yang mengarah ke atas atau ke bawah, seperti loncatan atau
                    gerakan meluncur ke lantai</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c4" >
    <label for="c4" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Horizontal.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">4</div>
            <div class="description">
                <h4>Ruang Horizontal</h4>
                <p>Gerakan tari yang dilakukan sejajar dengan permukaan lantai, seperti
                    berjalan atau berlari</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c5" >
    <label for="c5" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Tinggi.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">5</div>
            <div class="description">
                <h4>Ruang Tinggi</h4>
                <p>Gerakan tari yang dilakukan di udara, seperti melompat atau berputar</p>
            </div>
        </div>
    </label>
@endsection

@section('content-2')
<input type="radio" name="slide" id="c6">
    <label for="c6" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Rendah.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">6</div>
            <div class="description">
                <h4>Ruang Rendah</h4>
                <p>Gerakan tari yang dilakukan dekat dengan permukaan lantai, seperti
                    merangkak atau berlutut</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c7" >
    <label for="c7" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Luas.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">7</div>
            <div class="description">
                <h4>Ruang Luas</h4>
                <p>Gerakan tari yang melibatkan penggunaan ruang yang lebih besar,
                    memungkinkan penari untuk bergerak ke berbagai arah</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c8" >
    <label for="c8" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-Sempit.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">8</div>
            <div class="description">
                <h4>Ruang Sempit</h4>
                <p>Gerakan tari yang terfokus pada area kecil atau terbatas, biasanya
                    mengarah pada eksplorasi detail dan keintiman</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c9" >
    <label for="c9" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-KeDepan.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">9</div>
            <div class="description">
                <h4>Ruang Ke Depan</h4>
                <p>Gerakan yang mengarah ke depan tubuh penari atau ruang di depannya</p>
            </div>
        </div>
    </label>
    <input type="radio" name="slide" id="c10" >
    <label for="c10" class="card">
        <video controls muted loop playsinline class="card-video">
            <source src="{{ asset('storage/videos/Ruang-KeBelakang.mp4') }}" type="video/mp4">
        </video>
        <div class="row">
            <div class="icon">10</div>
            <div class="description">
                <h4>Ruang Ke Belakang </h4>
                <p>Gerakan yang mengarah ke belakang tubuh penari atau ruang di
                    belakangnya</p>
            </div>
        </div>
    </label>
@endsection