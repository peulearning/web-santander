@extends ('layout.main')

<link rel="stylesheet" href="/css/courses.css">

@section ('title', 'Cursos')

@section ('content')

<section class="container text-center align-items-center" id="sect-1-courses">
  <div class="row align-items-center">
    <div class="col" id="col-welc-1">
        <img src="/imgs/img-courses.jpg" alt="" class="img-fluid" id="img-courses-1">
    </div>
    <div class="col" id="col-wel2">
    <h2 id="welc-title-1">Nossos cursos</h2>
        <p class="text-justify">Escolher o Santander Open Academy é investir no seu futuro. Oferecemos cursos inovadores e atualizados, ministrados por especialistas do mercado. Nosso objetivo é capacitar você com as habilidades mais demandadas, preparando-o para os desafios profissionais. Além disso, proporcionamos um ambiente de aprendizado colaborativo e acesso a uma rede de contatos valiosa. Venha crescer conosco e alcance novos patamares na sua carreira.</p>  
    </div>
  </div>
</section>
<section id="courses" class="container-fluid align-items-center justify-content-center">
    <div class="row">
        <div class="col">
            <h1 class="fw-bold text-body-emphasis">Conheça nossos cursos</h1>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <button class="btn" type="button" id="button-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg></button>
            <input type="text" class="form-control" placeholder="Pesquise por um curso" aria-label="Example text with button addon" aria-describedby="button-addon1">
            </div>  
        </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 w-100 justify-content-center align-items-center">
    <div class="col">
      <div class="card h-100">
        <img src="/imgs/img-course.jpg" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Curso 1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="row">
            <div class="col">
                <a href="/Curso/1"><button type="button" class="btn w-70" id="welc-btn-card">Saiba mais</button></a>
            </div>
            <div class="col justify-content-center align-items-center d-flex">
                <p id="value">Valor</p>
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/imgs/img-course.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Curso 2</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="row">
            <div class="col">
                <a href="/Curso/2"><button type="button" class="btn w-70" id="welc-btn-card">Saiba mais</button></a>
            </div>
            <div class="col justify-content-center align-items-center d-flex">
                <p id="value">Valor</p>
            </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/imgs/img-course.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Curso 3</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="row">
            <div class="col">
                <a href="/Curso/3"><button type="button" class="btn w-70" id="welc-btn-card">Saiba mais</button></a>
            </div>
            <div class="col justify-content-center align-items-center d-flex">
                <p id="value">Valor</p>
            </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>

@endsection