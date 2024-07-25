@extends ('layout.main')

<link rel="stylesheet" href="/css/welcome.css">

@section ('title', 'Santander - Open Academy')

@section ('content')

<section class="container text-center align-items-center">
  <div class="row align-items-center">
    <div class="col" id="col-welc-1">
        <h2 id="welc-title-1">Conheça nossos cursos!</h2>
        <p class="text-justify">Os cursos do Open Academy Santander são uma excelente oportunidade para quem deseja aprimorar suas habilidades e adquirir novos conhecimentos. Oferecendo uma ampla gama de cursos online gratuitos, a plataforma abrange áreas como tecnologia, finanças, marketing e desenvolvimento pessoal. Com conteúdo atualizado e instrutores renomados, os participantes têm acesso a materiais de alta qualidade e certificação reconhecida. Além disso, a flexibilidade dos cursos permite que cada aluno estude no seu próprio ritmo, adaptando-se às suas necessidades e disponibilidade. O Open Academy Santander é ideal tanto para estudantes quanto para profissionais que buscam se destacar no mercado de trabalho.</p>
        <button type="button" class="btn" id="welc-btn-1">Quero conhecer</button>
    </div>
    <div class="col" id="col-wel2">
    <img src="/imgs/img-welc-1.jpg" alt="" class="img-fluid" id="img-welc-1">
    </div>
  </div>
</section>

<section class="section-2">
  <h2 class="text-center">Nossos cursos mais populares</h2>
  <p class="text-center">Veja nossos cursos com mais alunos matriculados.</p>
<div class="row row-cols-1 row-cols-md-3 g-4 w-100 justify-content-center">
  <div class="col">
    <div class="card h-100">
      <img src="/imgs/img-course.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Curso 1</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="/imgs/img-course.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
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
    </div>
  </div>
  </div>
</div>
</section>

@endsection