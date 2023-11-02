<section id="resume" class="resume">
    <div class="container">
    
        <div class="section-title">
            <h2>Resume</h2>
            <p>Welcome to my resume. Here, you'll find information about my skills, experience, and passion for web
                development. I'm excited to share my journey and expertise with you.</p>
        </div>

        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <h3 class="resume-title">Sumary</h3>
                <div class="resume-item pb-0">
                @foreach($profile as $profile)
                    <h4>{{$profile->name}}</h4>
                    <p><em>Summary
                            Passionate Laravel developer with a strong foundation in PHP and web development. Eager to
                            learn and contribute to the world of web development projects. Committed to delivering
                            high-quality solutions and continuously improving Laravel skills through online courses.
                            Enthusiastic about creating efficient and effective web applications. Ready to collaborate
                            and turn ideas into reality.
                        </em></p>
                    <ul>
                    
                        <li>{{$profile->city}},Nepal</li>
                        <li>{{$profile->phone}}</li>
                        <li>{{$profile->email}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
           
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                @foreach($educationData as $edu)
                @if ($edu->id == 3)
                    <h4>{{ $edu->degree }}</h4>
                    <h5>{{ $edu->duration }}</h5>
                    <p><em>{{ $edu->school }}</em></p>
                    <p>{{ $edu->description }}</p>
                        @endif
                        @endforeach    
                    </div>
                <div class="resume-item">
                @foreach($educationData as $edu)
                @if ($edu->id == 4)
                    <h4>{{ $edu->degree }}</h4>
                    <h5>{{ $edu->duration }}</h5>
                    <p><em>{{ $edu->school }}</em></p>
                    <p>{{ $edu->description }}</p>
                        @endif
                        @endforeach    
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Professional Experience</h3>
                <div class="resume-item">
                @foreach($professionalData as $pro)
                @if ($pro->id == 4)
                    <h4>{{$pro->position}}</h4>
                    <h5>{{$pro->duration}}</h5>
                    <p><em>{{$pro->company}}</em></p>
                    <ul>
                        <li>{{$pro->responsibilities}}</li>
                            @endif
                        @endforeach 
                        <li>Worked on various Laravel projects, contributing to the development and maintenance of web
                            applications.</li>
                        <li>Collaborated with a team of developers to implement features, fix issues, and optimize
                            website performance.</li>
                        <li>Learned about best practices in web development, coding standards, and version control.</li>
                    </ul>
                </div>
                <div>
                </div>

            </div>
</section>