@extends ('layout.main')

<link rel="stylesheet" href="/css/welcome.css">

@section ('title', 'Santander - Open Academy')

@section ('content')

<section class="container text-center align-items-center" id="explore">
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
  <h1 class="text-center display-4 fw-bold text-body-emphasis">Nossos cursos mais populares</h1>
  <p class="text-center">Veja nossos cursos com mais alunos matriculados.</p>
  <div class="row row-cols-1 row-cols-md-3 g-4 w-100 justify-content-center align-items-center">
    <div class="col">
      <div class="card h-100">
        <img src="/imgs/img-course.jpg" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Curso 1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
        </div>
        <a href="/Registro"><button type="button" class="btn w-50" id="welc-btn-card">Matricule-se</button></a>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/imgs/img-course.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Curso 2</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
        </div>
        <a href="/Registro"><button type="button" class="btn w-50" id="welc-btn-card">Matricule-se</button></a>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/imgs/img-course.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Curso 3</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
        </div>
        <a href="/Registro"><button type="button" class="btn w-50" id="welc-btn-card">Matricule-se</button></a>
      </div>
    </div>
    </div>
  </div>
</section>
<section class="px-4 pt-5 my-5 text-center border-bottom" id="blog">
    <h1 class="display-4 fw-bold text-body-emphasis">Conheça nosso blog</h1>
    <div class="col-lg-6 mx-auto">
      <p class=" mb-4">Acesse nosso blog e veja nossas postagens.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-lg px-4 me-sm-3" id="welc-btn-blog">Acesse</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="/imgs/img-blog.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
</section>
    <section class="py-5" id="assessments">
        <div class="container">
            <h1 class="text-center mb-5 fw-bold text-body-emphasis">Avaliações dos Alunos</h1>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">João Silva</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Curso de Programação</h6>
                            <p class="card-text">Gostei muito do curso! Os professores são excelentes e o conteúdo é muito bem estruturado.</p>
                            <div class="star-rating">
                                <span>⭐⭐⭐⭐⭐</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Maria Oliveira</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Curso de Design</h6>
                            <p class="card-text">A experiência foi incrível! Aprendi muito e me sinto preparada para o mercado de trabalho.</p>
                            <div class="star-rating">
                                <span>⭐⭐⭐⭐</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Carlos Mendes</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Curso de Marketing</h6>
                            <p class="card-text">O curso superou minhas expectativas. Recomendo a todos que querem se especializar na área.</p>
                            <div class="star-rating">
                                <span>⭐⭐⭐⭐⭐</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="py-5">
        <div class="container" id="faq">
            <h1 class="text-center mb-5 fw-bold text-body-emphasis">Perguntas Frequentes</h1>
            <div class="accordion" id="faqAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="welc-btn-faq">
                                O que é a nossa plataforma de cursos?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse-show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                        <div class="card-body">
                            Nossa plataforma de cursos oferece uma ampla variedade de cursos online em diferentes áreas de estudo, permitindo que você aprenda no seu próprio ritmo com materiais de alta qualidade e instrutores experientes.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="welc-btn-faq">
                                Como faço para me inscrever em um curso?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                        <div class="card-body">
                            Para se inscrever em um curso, basta criar uma conta na nossa plataforma, escolher o curso de seu interesse e seguir as instruções para pagamento. Após a confirmação, você terá acesso imediato ao conteúdo do curso.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="welc-btn-faq">
                                Quais são as formas de pagamento aceitas?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                        <div class="card-body">
                            Aceitamos várias formas de pagamento, incluindo cartões de crédito, PayPal e transferências bancárias. Certifique-se de verificar todas as opções disponíveis na página de pagamento.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="welc-btn-faq">
                                Posso obter um certificado após concluir um curso?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                        <div class="card-body">
                            Sim, todos os nossos cursos oferecem certificados de conclusão. Após finalizar todas as aulas e passar nos testes, você poderá baixar seu certificado diretamente da plataforma.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#explore" class="position-fixed bottom-0 end-0 m-2"><button type="button" class="btn" id="btn-back">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
        </svg>
    </button></a>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection