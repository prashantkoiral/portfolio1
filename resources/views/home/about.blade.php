<section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>"I'm a dedicated Laravel developer with a strong grasp of PHP. My focus is on creating efficient web applications using Laravel's powerful framework. With a passion for coding, I aim to deliver robust solutions and enhance digital experiences. Let's bring your web projects to life together."</p>
        </div>

        <div class="row">
          @foreach($profile as $profile)
          <div class="col-lg-4" data-aos="fade-right">
            <img src="storage/{{$profile->profile_photo}}" class="img-fluid" alt="">
           
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3> Web Developer.</h3>
            <p class="fst-italic">
            I specialize in crafting elegant and user-friendly web solutions. With a strong foundation in Laravel, I have the skills to develop robust and efficient applications that meet your business needs.
            </p>
            <div class="row">
              <div class="col-lg-5">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$profile->name}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$profile->phone}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$profile->city}}, Nepal</span></li>
                </ul>
              </div>
              <div class="col-lg-7">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$profile->age}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$profile->degree}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$profile->email}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{$profile->freelance}}</span></li>
                </ul>
              </div>
            </div>
            <p>
            {{$profile->description}}
            </p>
          </div>
        </div>
@endforeach
      </div>
    </section>