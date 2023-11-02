<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
    @foreach($profile as $profile)
    <h1 data-aos="fade-up">{{$profile->name}}</h1>
@endforeach
      <p>I'm <span class="typed" data-typed-items="Developer, Freelancer, Designer, Photographer"></span></p>
    </div>
  </section>