@extends('layouts.app')
@section('main')
<div id="main">

    <header class="mb-3">
      <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
      </a>
    </header>

    <div class="page-heading">
      <h3>Hallo, selamat datang di aplikasi magang digital.
      </h3>
    </div>
   
        <div class="col-12 col-lg-3">
          <div class="card">
            <div class="card-body py-4 px-4">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                  <img src="assets/images/faces/1.jpg" alt="Face 1" />
                </div>
                <div class="ms-3 name">
                  <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                  <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>pengguna login</h4>
            </div>
            <div class="card-body">
              <div id="chart-visitors-profile"></div>
            </div>
          </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer>
      <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
          <p>2021 &copy; Mazer</p>
        </div>
        <div class="float-end">
          <p>
            Crafted with
            <span class="text-danger"><i class="bi bi-heart"></i></span> by
            <a href="https://www.instagram.com/ellenaasari/">ellenaasari</a>
          </p>
        </div>
      </div>
    </footer>
  </div>
@endsection
