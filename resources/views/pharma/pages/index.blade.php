@extends('layouts.master')
@section('content')
    <div class="banner">
    <div class="container">
          <div class="row align-items-center min-vh-md-75 mt-7">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">We Help you to <span class="text-primary">Excel</span><br class="d-block d-lg-none d-xl-block" />Your Knowledge </h1>
              <p class="mb-5 fs-1 lh-lg">We aspire to be a world Class University of Excellence through Teaching, Research, innovation and Citizenship.</p><a class="btn btn-lg btn-primary apply_btn hover-top btn-glow" href="#">Apply Online
                <svg class="bi bi-arrow-right-short ms-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg></a>
              <div class="mt-5 mt-xl-6">
                <ul class="list-unstyled list-inline mb-0">
                  <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                      <svg class="bi bi-facebook text-facebook" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                      </svg></a></li>
                  <li class="list-inline-item me-3"><a href="#!">
                      <svg class="bi bi-twitter text-twitter" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                      </svg></a></li>
                  <li class="list-inline-item me-3"><a href="#!">
                      <svg class="bi bi-instagram text-instagram text-youtube" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                      </svg></a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
            <img class="me-3 campus" src="{{ asset('images/campus.jpg') }}" alt="" />
            </div>
          </div>
        </div>
        

    </div>
    <section class="bg-100">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto align-items-center text-center">
                <h1 class="mb-4 text-uppercase fw-light fs-1 mb-6"> The campus life</h1>
                <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100 justify-content-center">
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus2 mb-4" src="{{ asset('images/campus 2.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus3 mb-4" src="{{ asset('images/campus 3.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus4 mb-4" src="{{ asset('images/campus 4.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus5 mb-4" src="{{ asset('images/campus 5.jpg') }}" alt="universities" /></div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="row h-100 justify-content-center">
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus3 mb-4" src="{{ asset('images/campus 3.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus5 mb-4" src="{{ asset('images/campus 5.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus2 mb-4" src="{{ asset('images/campus 2.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus4 mb-4" src="{{ asset('images/campus 4.jpg') }}" alt="universities" /></div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <div class="row h-100 justify-content-center">
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus6 mb-4" src="{{ asset('images/campus 6.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus7 mb-4" src="{{ asset('images/campus 7.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus8 mb-4" src="{{ asset('images/campus 8.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus9 mb-4" src="{{ asset('images/campus 9.jpg') }}" alt="universities" /></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row h-100 justify-content-center">
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus10 mb-4" src="{{ asset('images/campus 5.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus11 mb-4" src="{{ asset('images/campus 2.jpg') }}" alt="universities" /></div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 text-xl-start"><img class="campus12 mb-4" src="{{ asset('images/campus 7.jpg') }}" alt="universities" /></div>
                        </div>
                    </div>
                    </div>
                    <div class="row mt-5 flex-center">
                    <div class="col-auto position-relative z-index-2">
                        <ol class="carousel-indicators">
                        <li class="active mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                        <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                        <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                        <li class="mx-2" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                        </ol>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

    </section>

    <section class="services">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center">
              <h6 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Our programmes</h6>
              <p class="mb-4 mt-4"> 
              The University main campus is based in Malakal Town, Upper Nile State, and another campus located in Renk Town. Currently the University is operating in Juba, Central Equatoria State, following its relocation 
              from Malakal in 2013 crises. </p>
            </div>
          </div>
        </div>
        
            <div class="s_programmes">
                <div class="container flex-center h-100">
                    <div class="col-xl-12">
                        <div class="row justify-content-center programmes">
                            <div class="col-md-4"> 
                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                        <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Agriculture</button>
                                    </section>

                                </div>

                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Agriculture</button>
                                    </section>

                                </div>

                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Education </button>
                                    </section>

                                </div>

                        
                            </div>

                            <div class="col-md-4"> 
                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Veterinary Medicine </button>
                                    </section>

                                </div>

                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Medicine& Health Sciences  </button>
                                    </section>

                                </div>

                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Animal Production </button>
                                    </section>

                                </div>

                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Economic & Social Studies </button>
                                    </section>

                                </div>

                                
                            </div>

                            <div class="col-md-4"> 
                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Forestry  </button>
                                    </section>

                                </div>

                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Human Development </button>
                                    </section>

                                </div>

                                <div class="toggle toggle-primary">
                                    <section class="toggle">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Faculty of Public & Environmental Health</button>
                                    </section>

                                </div>

                                
                            </div>
                        </div>
                        

                        <!-- <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/career.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Education </h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/admission.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Agriculture </h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/visa.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Forestry</h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/accommodation.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Medicine & health Sciences</h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/departure.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Veterinary Medicine</h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/departure.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Veterinary Medicine</h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/departure.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Veterinary Medicine</h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/departure.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Veterinary Medicine</h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-4">
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons" src="assets/img/icons/departure.png" height="60" alt="services" />
                            <div class="card-body">
                                <h6 class="fs-1"> Faculty of Veterinary Medicine</h6>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis atque tenetur quae sunt, ipsa officiis sit deleniti consectetur iusto quis explicabo. </p>
                                <a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                                <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg></a>
                            </div>
                            </div>
                        </div>
                        </div> -->
                    

                    
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="news">
    <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center">
              <h6 class="fw-light fs-3 fs-lg-5 lh-sm mb-3">Our news and Upcoming events</h6>
              <p class="mb-4 mt-4"> 
              All news and announcements made available for students and staff. </p>
            </div>
          </div>
        </div>
        <div class="row flex-center h-100">
            <div class="col-xl-9">
              <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow card-span"><img class="card-img-top" src="{{ asset('images/news 2.jpg') }}" alt="news" />
                    <div class="card-body">
                      <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                      </svg><span class="fs--1">01 June 2023</span>
                      <h6 class="title fs-lg-1 my-3"> <a href="#"> Graduation week is approaching. Please register now </a> </h6> 
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow card-span"><img class="card-img-top" src="{{ asset('images/news 4.jpg') }}" alt="news" />
                    <div class="card-body">
                      <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                      </svg><span class="fs--1">01 June 2023</span>
                      <h6 class="title fs-lg-1 my-3"> <a href=""> Campus will be closed from next week </a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow card-span"><img class="card-img-top" src="{{ asset('images/news 5.jpg') }}" alt="news" />
                    <div class="card-body">
                      <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                      </svg><span class="fs--1">01 June 2023</span>
                      <h6 class="title fs-lg-1 my-3"> <a href=""> Covid outbreak, another wave coming </a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
    </section>

   
    
      <!-- <div class="banner-advert">
        <div class="container">
            <div class="text-center">
                <div class="wrapper banner-advert mt-3 mb-5">
                    <div class="row content-advert">
                        <div class="card-name">
                            <a href="">
                                <img src="{{ asset('images/advert1.jpeg') }}" alt="">
                            </a>
                        </div>


                        <div class="card-name">
                            <a href="">
                                <img src="{{ asset('images/advert2.png') }}" alt="">
                            </a>

                        </div>


                        <div class="card-name">
                            <a href="">
                                <img src="{{ asset('images/advert3.png') }}" alt="">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="wrapper banner-details-livraison mt-3 mb-5  ">
                    <div class="row content-livraison">
                        <ul>
                            <li>
                                <h4 class="title"> Passez une commande <span>en ligne</span>
                                    et soyez <br> satisfait de notre service
                                </h4>
                            </li>
                            <li> <i class=" bi bi-house-door me-2"> </i>
                                <h3 class="title">Retrait en pharmacie</h3>
                                <p>Retirez votre commande <span>gratuitement</span>
                                    dans notre pharmacie.</p>
                            </li>
                            <li> <i class="bi bi-truck"></i> </i>
                                <h3 class="title">Livraison à domicile</h3>
                                <p>Vos produits vous sont livrés à domicile dans un court délai. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-product">
        <div class="container">
            <div class="text-center">

                <div class="wrapper banner-product mt-5">
                    <h2> Notre liste de produit</h2>
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <div class="star-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart"> <i class="bi bi-cart3"></i>
                                                    Ajouter au panier  </button>
                                            </div>
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <div class="star-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart"> <i class="bi bi-cart3"></i>
                                                    Ajouter au panier
                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill favori"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <div class="star-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart"> <i class="bi bi-cart3"></i>
                                                    Ajouter au panier
                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill favori"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-flex card product-card">

                                        <div class="product-image">
                                            <img src="{{ asset('images/prod1.jpg') }}" alt="img-produit">
                                        </div>
                                        <div class="text-description">
                                            <h6>nom du produit</h6>
                                            <p> Description du produit</p>
                                            <div class="star-block">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p class="product-price"> Prix: 10$</p>
                                        </div>
                                        <div class="card-button">
                                            <div class="cart-block">

                                                <button class="btn btn-cart"> <i class="bi bi-cart3"></i>
                                                    Ajouter au panier
                                                </button>
                                            </div>
                                            <i class="bi bi-heart-fill favori"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-5 mb-3">
                                    <a href="/products"> <button class="btn btn-show mb-4 w-10">
                                            Voir tous les produits
                                        </button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="wrapper banner-contact mt-3">
                <div class="row content-contact">
                    <div class="block-contact contact-us">
                        <i class="bi bi-telephone-inbound">

                        </i>
                        <h2 class="title"> Contactez <br> nous</h2>
                        <p> Nous sommes à votre service du lundi à vendredi. N'hesitez pas de
                            nous contacter.
                        </p>
                        <div class="contact-tel">
                            <a href=""> 082 678 3168 </a>
                        </div>
                        <a href=""> <button class="btn btn-contact mt-3">
                                CONTACTEZ-NOUS
                            </button></a>
                    </div>

                    <div class="block-contact image">
                        <img src="" alt="">
                    </div>

                    <div class="block-contact times">
                        <h2 class="title"> Heures <br> d'ouverture</h2>
                        <ul class="timetable">
                            <li>
                                <p>Lundi</p>
                                <span>08h00 - 16h30</span>
                            </li>
                            <li>
                                <p>Mardi</p>
                                <span>08h00 - 16h30</span>
                            </li>
                            <li>
                                <p>Mercredi</p>
                                <span>08h00 - 16h30</span>
                            </li>
                            <li>
                                <p>Jeudi</p>
                                <span>08h00 - 16h30</span>
                            </li>
                            <li>
                                <p>Vendredi</p>
                                <span>08h00 - 16h30</span>
                            </li>
                            <li>
                                <p>Samedi</p>
                                <span>08h00 - 16h30</span>
                            </li>
                            <li>
                                <p>Dimanche</p>
                                <span>Fermé</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </div> -->


   
@endsection
