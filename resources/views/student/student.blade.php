@include('head')
@include('nav')


{{-- Content for single student goes here --}}
<div class="container">
    <div class="main-body pt-4 mt-4 pb-4 mb-4">
    
          <!-- Breadcrumb -->
          {{-- <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav> --}}
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="http://alumni.raf.edu.rs/images/slike/{{ $student->slika }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $student->ime }} {{ $student->prezime }}</h4>
                      <p class="text-secondary mb-1">{{ $student->slug }}</p>
                      <p class="text-muted font-size-sm">{{ $student->id }}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg></span>Linkedin</h6>
                    <span class="text-secondary">
                        <a href="{{ $student->linkedin }}" class="btn btn-info">Pogledaj</a>
                    </span>
                  </li>
                  {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3 pl-4 pr-4">
                <div class="card-body">
                  <h2 class="text-center mb-4 text-dark">Studije</h2>
                  

                  <div class="card mb-4 bg-light" style="
                    @if ($student->studije->osnovne)
                      border-color: #00C851;
                    @else
                      border-color: #ff4444;
                    @endif
                  ">
                    <div class="card-body">

                      <h4 class="text-center mb-4
                        @if ($student->studije->osnovne)
                          text-success
                        @else
                          text-danger
                        @endif
                      ">Osnovne</h4>

                      @if ($student->studije->osnovne)
                        <div class="text-left">
                          <p><b>Broj indeksa:</b> {{ $student->studije->osnovne->broj_indeksa }} </p>
                          <p><b>Datum diplomiranja:</b> {{ $student->studije->osnovne->datum_diplomiranja }} </p>
                          <p><b>Stečeno zvanje:</b> {{ $student->studije->osnovne->steceno_zvanje }} </p>
                        </div>
                      @endif
                    </div>
                  </div>


                  <div class="card mb-4 bg-light" style="
                    @if ($student->studije->master)
                      border-color: #00C851;
                    @else
                      border-color: #ff4444;
                    @endif
                  ">
                    <div class="card-body">
                      
                      <h4 class="text-center mb-4
                      @if ($student->studije->master)
                        text-success
                      @else
                        text-danger
                      @endif
                    ">Master</h4>

                      @if ($student->studije->master)
                        <div class="text-left">
                          <p><b>Broj indeksa:</b> {{ $student->studije->master->broj_indeksa }} </p>
                          <p><b>Datum diplomiranja:</b> {{ $student->studije->master->datum_diplomiranja }} </p>
                          <p><b>Stečeno zvanje:</b> {{ $student->studije->master->steceno_zvanje }} </p>
                        </div>
                      @endif
                    </div>
                  </div>


                  <div class="card mb-4 bg-light" style="
                    @if ($student->studije->doktorske)
                      border-color: #00C851;
                    @else
                      border-color: #ff4444;
                    @endif
                  ">
                    <div class="card-body">
                      
                      <h4 class="text-center mb-4
                      @if ($student->studije->doktorske)
                        text-success
                      @else
                        text-danger
                      @endif
                    ">Doktorske</h4>

                      @if ($student->studije->doktorske)
                        <div class="text-left">
                          <p><b>Broj indeksa:</b> {{ $student->studije->doktorske->broj_indeksa }} </p>
                          <p><b>Datum diplomiranja:</b> {{ $student->studije->doktorske->datum_diplomiranja }} </p>
                          <p><b>Stečeno zvanje:</b> {{ $student->studije->doktorske->steceno_zvanje }} </p>
                        </div>
                      @endif
                    </div>
                  </div>


                </div>

              <h2 class="text-center mb-4 mt-4 text-dark">Kompanije</h2>
              
              @if ($student->zaposlenja)

                @foreach ($student->zaposlenja as $zaposlenje)
                  <div class="row gutters-sm">
                    <div class="col-sm-12 mb-3">
                      <div class="card h-100 bg-light">
                        <div class="card-body">
                          <h4 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Kompanija: </i> {{ $zaposlenje->kompanija }} </h4>
                          <p><b>Radno mesto: </b>{{ $zaposlenje->radno_mesto }}</p>
                          <p><b>Trajanje: 
                            <span class="text-success">
                              {{ $zaposlenje->pocetak }}
                            </span> -
                            <span class="text-warning">
                              {{ $zaposlenje->kraj }}
                            </span>
                            </b>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach


              @else
                <p>Jos nema zaposlenja</p>
              @endif







            </div>
          </div>

        </div>
    </div>
  </div>

@include('foot')