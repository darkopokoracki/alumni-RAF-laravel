@include('head')
@include('nav')


{{-- Content for home goes here --}}
<div class="container">
    <div class="jumbotron mb-4 mt-4">
        <h1>Dobrodošli na Alumni <span class="text-info">RAF</span></h1>
        <p>
            Na Alumni RAF-u možete videti spisak svih studenata koji su nekada
            studirali na Računarskom fakultetu kao i studente koji trenutno
            studiraju na RAF-u.
            Kada kliknete na odreeđenog studenta možete videti njegove detalje,
            naprimer sliku, smer, linkedin profil kao i u kojim kompanijama je 
            radio.
        </p>
        <a href="/students" class="btn btn-info">Studenti</a>
    </div>
</div>


@include('foot')