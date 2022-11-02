<Section class="container">
<h1 class=" bg-danger text-white"> Tous les membres </h1>
<div class="d-flex justify-content-around gap-5">
    <h2>NOM</h2>
    <h2>AGE</h2>
    <h2>GENRE</h2>
    </div>
    @foreach ($membres as $membre)
    <div class="card">
        <div class="row m-0 m-0">
            @if ( $membre['genre'] == 'Homme')
            <div class="col d-flex justify-content-center border bg-primary text-white">
                <h3 >{{ $membre['nom'] }}</h3> 
            </div>
            @else
            <div class="col d-flex justify-content-center border bg-danger text-white">
                <h3>{{ $membre['nom'] }}</h3> 
            </div>
            @endif
            <div class="col d-flex justify-content-center border">
                <h3>{{ $membre['age'] }}</h3>
             </div>
             <div class="col d-flex justify-content-center border">
                 <h3>{{ $membre['genre'] }}</h3>
             </div>
        </div>
    </div>
@endforeach
<div class="py-5 d-flex justify-content-center">
 <h1>Total des membres <span class="border rounded bg-warning">{{ $total }}</span> </h1>   
</div>

</Section>
<hr>

<section class="container">
    <h1 class="bg-primary text-white">Tous les hommes</h1>
    <div class="d-flex justify-content-around gap-5">
        <h2>NOM</h2>
        <h2>AGE</h2>
        <h2>GENRE</h2>
        </div>
    @foreach ($membres as $membre)
    @if ( $membre['genre'] == 'Homme')
       <div class="card">
        <div class="row m-0 m-0">
            <div class="col d-flex justify-content-center border">
                <h3 class="">{{ $membre['nom'] }}</h3> 
            </div>
            <div class="col d-flex justify-content-center border">
                <h3>{{ $membre['age'] }}</h3>
             </div>
             <div class="col d-flex justify-content-center border">
                 <h3><mark>{{ $membre['genre'] }}</mark></h3>
             </div>
        </div>
    </div> 
    @endif
@endforeach
</Section>
<hr>

<section class="container">
    <h1 class="border bg-warning">Tous les femmes</h1>
    <div class="d-flex justify-content-around gap-5 border">
        <h2>NOM</h2>
        <h2>AGE</h2>
        <h2>GENRE</h2>
        </div>
    @foreach ($membres as $membre)
    @if ( $membre['genre'] == 'Femme')
       <div class="card">
        <div class="row m-0">
            <div class="col d-flex justify-content-center border">
                <h3>{{ $membre['nom'] }}</h3> 
            </div>
            <div class="col d-flex justify-content-center border">
                <h3>{{ $membre['age'] }}</h3>
             </div>
             <div class="col d-flex justify-content-center border">
                 <h3><mark>{{ $membre['genre'] }}</mark></h3>
             </div>
        </div>
    </div> 
    @endif
@endforeach
</Section>
<hr>

<section class="container">
    <h1 class="border bg-success text-white">Tous les hommes entre 18 et 24</h1>
    <div class="d-flex justify-content-around gap-5 border">
        <h2>NOM</h2>
        <h2>AGE</h2>
        <h2>GENRE</h2>
        </div>
    @foreach ($membres as $membre)
    @if ( $membre['genre'] == 'Homme' && $membre['age'] >= 18 && $membre['age'] < 25 )
       <div class="card">
        <div class="row m-0">
            <div class="col d-flex justify-content-center border">
                <h3>{{ $membre['nom'] }}</h3> 
            </div>
            <div class="col d-flex justify-content-center border">
                <h3><mark>{{ $membre['age'] }}</mark></h3>
             </div>
             <div class="col d-flex justify-content-center border">
                 <h3><mark>{{ $membre['genre'] }}</mark></h3>
             </div>
        </div>
    </div> 
    @endif
@endforeach
</Section>
<hr>

<section class="container">
    <h1 class="border bg-warning">Toutes les femmes entre 18 et 24</h1>
    <div class="d-flex justify-content-around gap-5 border">
        <h2>NOM</h2>
        <h2>AGE</h2>
        <h2>GENRE</h2>
        </div>
    @foreach ($membres as $membre)
    @if ( $membre['genre'] == 'Femme' && $membre['age'] >= 18 && $membre['age'] < 25 )
       <div class="card">
        <div class="row m-0">
            <div class="col d-flex justify-content-center border">
                <h3>{{ $membre['nom'] }}</h3> 
            </div>
            <div class="col d-flex justify-content-center border">
                <h3><mark>{{ $membre['age'] }}</mark></h3>
             </div>
             <div class="col d-flex justify-content-center border">
                 <h3><mark>{{ $membre['genre'] }}</mark></h3>
             </div>
        </div>
    </div> 
    @endif
@endforeach
</Section>
<hr>




<section class="container">
    <h1 class="border bg-primary text-white">Toutes les membre HC</h1>
    <div class="d-flex justify-content-around gap-5 border">
        <h2>NOM</h2>
        <h2>AGE</h2>
        <h2>GENRE</h2>
        </div>
    @foreach ($membres as $membre)
    @if (  $membre['age'] < 18 || $membre['age'] > 24 )
       <div class="card">
        <div class="row m-0">
            <div class="col d-flex justify-content-center border">
                <h3>{{ $membre['nom'] }}</h3> 
            </div>
            <div class="col d-flex justify-content-center border">
                <h3><mark>{{ $membre['age'] }}</mark></h3>
             </div>
             <div class="col d-flex justify-content-center border">
                 <h3>{{ $membre['genre'] }}</h3>
             </div>
        </div>
    </div> 
    @endif
@endforeach
</Section>
<hr>


