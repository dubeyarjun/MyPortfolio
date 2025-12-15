<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $name }} | Portfolio</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <style>
    body {
      background: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }


    /* Hero Section */
    header {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(to right, #0b0b0bff, #34393dff);
      color: white;
      padding: 60px 20px;
    }

    .hero-content {
      display: flex;
      flex-direction: column;
      align-items: center;

      text-align: center;
    }

    .hero-content img {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      border: 2px solid white;
      box-shadow: 0 0 30px rgba(155, 89, 182, 0.5);
      /* object-fit: cover; */
      transition: 0.3s;
    }

    .hero-content img:hover {
      transform: scale(1.05);
    }

    .hero-text h1 {
      font-size: 3.5rem;
      font-weight: 700;
    }

    .hero-text h3 {
      font-size: 1.5rem;
      color: #e2e2e2;
    }

    .hero-text p {
      max-width: 600px;
      margin: 0 auto;
      font-size: 1.1rem;
      line-height: 1.6;
    }

    /* Glow Resume Button */
    .glow-btn {
      display: inline-block;
      color: white;
      font-weight: 600;
      background: transparent;
      border: 2px solid #9b59b6;
      padding: 10px 35px;
      border-radius: 8px;
      text-decoration: none;
      box-shadow: 0 0 15px rgba(0, 255, 0, 0.3);
      transition: 0.4s;
    }

    .glow-btn:hover {
      background: #9b59b6;
      color: white;
      box-shadow: 0 0 25px rgba(0, 255, 0, 0.5);
    }

    /* Social Icons */
    .social-icons a {
      color: white;
      font-size: 28px;
      margin: 0 10px;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #9b59b6;
      transform: translateY(-4px);
    }

    .custom-icon {
      width: 30px;
      height: 30px;
      margin: 0 10px;
      filter: brightness(0) invert(1);
      transition: 0.3s;
    }

    .custom-icon:hover {
      filter: invert(70%) sepia(80%) saturate(500%) hue-rotate(250deg);
    }

    /* Tech Stack Icons */
    .tech-icons img {
      width: 45px;
      height: 45px;
      margin: 10px;
      transition: transform 0.3s, filter 0.3s;
      filter: brightness(0.5) invert(1);
    }

    .tech-icons img:hover {
      transform: scale(1.2);
      filter: brightness(1) invert(0);
    }

    /* Glitch Text */
    .glitch-text {
      position: relative;
      font-size: 3rem;
      font-weight: 800;
      /* text-transform: uppercase; */
      color: #fff;
      animation: glitch-skew 1s infinite linear alternate-reverse;
    }

    .glitch-text::before,
    .glitch-text::after {
      content: attr(data-text);
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
    }

    .glitch-text::before {
      text-shadow: -2px 0 red;
      animation: glitch-before 2s infinite linear alternate-reverse;
    }

    .glitch-text::after {
      text-shadow: 2px 0 cyan;
      animation: glitch-after 2s infinite linear alternate-reverse;
    }

    @keyframes glitch-skew {

      0%,
      100% {
        transform: skew(0deg);
      }

      50% {
        transform: skew(3deg);
      }
    }

    @keyframes glitch-before {
      0% {
        clip-path: inset(0 0 90% 0);
      }

      50% {
        clip-path: inset(10% 0 40% 0);
      }

      100% {
        clip-path: inset(20% 0 80% 0);
      }
    }

    @keyframes glitch-after {
      0% {
        clip-path: inset(80% 0 10% 0);
      }

      50% {
        clip-path: inset(30% 0 60% 0);
      }

      100% {
        clip-path: inset(10% 0 85% 0);
      }
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero-content img {
        width: 200px;
        height: 200px;
      }

      .glow-btn {
        padding: 8px 25px;
      }

      .tech-icons img {
        width: 40px;
        height: 40px;
      }
    }





    /* Base Section */
    #skills {
      background: radial-gradient(circle at center, #111 0%, #000 100%);
      overflow: hidden;
    }

    /* Tree Container */
    .tree {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Root Node */
    .root {
      background: linear-gradient(135deg, #6c63ff, #9b59b6);
      padding: 20px 35px;
      border-radius: 50px;
      color: white;
      font-weight: 700;
      font-size: 1.3rem;
      box-shadow: 0 0 25px rgba(155, 89, 182, 0.7);
      margin-bottom: 40px;
      animation: glow 3s ease-in-out infinite alternate;
    }

    /* Vertical Line */
    .branch .line {
      width: 3px;
      height: 80px;
      background: #9b59b6;
      margin: 0 auto;
      border-radius: 2px;
    }

    /* Branch List */
    .branch ul {
      list-style: none;
      display: flex;
      justify-content: center;
      padding: 0;
      gap: 40px;
      margin-top: 30px;
      flex-wrap: wrap;
    }

    /* Child Nodes */
    .node {
      background: #1c1c1c;
      color: white;
      padding: 15px 25px;
      border-radius: 25px;
      font-weight: 600;
      border: 2px solid #9b59b6;
      box-shadow: 0 0 15px rgba(155, 89, 182, 0.3);
      animation: swing 3s ease-in-out infinite;
      transform-origin: top center;
    }

    /* Color accents */
    .node.html {
      border-color: #e34f26;
      box-shadow: 0 0 20px rgba(227, 79, 38, 0.4);
    }

    .node.css {
      border-color: #1572B6;
      box-shadow: 0 0 20px rgba(21, 114, 182, 0.4);
    }

    .node.js {
      border-color: #f7df1e;
      box-shadow: 0 0 20px rgba(247, 223, 30, 0.4);
    }

    .node.php {
      border-color: #787CB5;
      box-shadow: 0 0 20px rgba(120, 124, 181, 0.4);
    }

    .node.laravel {
      border-color: #FF2D20;
      box-shadow: 0 0 20px rgba(255, 45, 32, 0.4);
    }

    .node.bootstrap {
      border-color: #7952b3;
      box-shadow: 0 0 20px rgba(121, 82, 179, 0.4);
    }

    .node.reactnative {
      border-color: #61DBFB;
      box-shadow: 0 0 20px rgba(97, 219, 251, 0.4);
    }

    .node.mysql {
      border-color: #00758f;
      box-shadow: 0 0 20px rgba(0, 117, 143, 0.4);
    }

    /* Swing Animation */
    @keyframes swing {
      0% {
        transform: rotate(2deg);
      }

      50% {
        transform: rotate(-2deg);
      }

      100% {
        transform: rotate(2deg);
      }
    }

    /* Root Glow */
    @keyframes glow {
      0% {
        box-shadow: 0 0 15px rgba(155, 89, 182, 0.5);
      }

      100% {
        box-shadow: 0 0 35px rgba(155, 89, 182, 1);
      }
    }

    /* Responsive */
    @media (max-width: 768px) {
      .branch ul {
        gap: 25px;
      }

      .node {
        padding: 10px 20px;
        font-size: 0.9rem;
      }
    }

    /*one by one glow*/
    .node {
      animation: swing 3s ease-in-out infinite, pulse 4s infinite ease-in-out;
    }

    @keyframes pulse {

      0%,
      100% {
        box-shadow: 0 0 15px rgba(155, 89, 182, 0.3);
      }

      50% {
        box-shadow: 0 0 35px rgba(155, 89, 182, 0.8);
      }
    }


    /* project section */
    .projects-section {
      background: linear-gradient(to right, #363B4D, #393a3bff);
    }

    .project-card {
      background: linear-gradient(145deg, #1a1a1a, #111);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      transition: all 0.4s ease-in-out;
      color: #f1f1f1;
      text-align: center;
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 25px rgba(155, 89, 182, 0.4);
    }

    .project-img {
      width: 70%;
      height: 70%;
      object-fit: cover;
      border-bottom: 1px solid #222;
      filter: grayscale(15%);
      transition: 0.4s;
    }

    .project-card:hover .project-img {
      filter: grayscale(0%) brightness(1.1);
    }

    .project-body {
      padding: 20px;
    }

    .project-body h5 {
      margin-bottom: 5px;
      color: #fff;
    }

    .project-body .username {
      color: #b5b5b5;
      font-size: 0.9rem;
    }

    .project-body .stack {
      color: #aaa;
      font-size: 0.95rem;
      margin-top: 8px;
    }

    .project-body .btn {
      border-radius: 20px;
      border: 1px solid #9b59b6;
      color: #fff;
      transition: 0.3s;
    }

    .project-body .btn:hover {
      background-color: #9b59b6;
      border-color: #9b59b6;
    }

    /* education  */


    #education {
      font-family: "Poppins", sans-serif;
    }

    .edu-box {
      background: #f9f9f9;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .edu-item {
      position: relative;
      padding-left: 25px;
      border-left: 3px solid #cddc39;
      /* light lime line */
    }

    .edu-item .year {
      display: inline-block;
      background: #cddc39;
      color: #000;
      font-weight: 600;
      font-size: 0.9rem;
      border-radius: 25px;
      padding: 6px 14px;
      margin-bottom: 8px;
    }

    .edu-item h5 {
      font-size: 1.1rem;
    }

    .edu-item:not(:last-child) {
      margin-bottom: 25px;
    }

    .edu-item::before {
      content: "";
      position: absolute;
      top: 10px;
      left: -7px;
      width: 12px;
      height: 12px;
      background: #cddc39;
      border-radius: 50%;
    }

    @media (max-width: 768px) {
      .edu-box {
        padding: 20px;
      }

      .edu-item {
        padding-left: 15px;
      }
    }

    /* footer */

    .footer-section {
      background-color: #1A1F30;
    }

    .footer-section a {
      color: #fff;
      text-decoration: none;
      transition: 0.3s;
    }

    .footer-section a:hover {
      font-weight: bold;
    }

    .social-icons .social-icon {
      display: inline-block;
      width: 40px;
      height: 40px;
      background: #9b59b6;
      color: white;
      border-radius: 50%;
      text-align: center;
      line-height: 40px;
      margin-right: 8px;
      font-size: 18px;
      transition: 0.3s;
    }

    .social-icons .social-icon:hover {
      background: #6c3483;
      transform: scale(1.1);
    }



    @media (max-width: 768px) {
      .hero-content {
        flex-direction: column;
        text-align: center;
      }

      .hero-text h1 {
        font-size: 2.2rem;
      }

      section {
        padding: 50px 20px;
      }
    }
  </style>
  <script>
    $(document).ready(function() {
      // Smooth scroll
      $('a.nav-link').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top - 100
        }, 900);
      });
    });


    $(document).ready(function() {
      $('.glitch-text').css('opacity', 0).animate({
        opacity: 1
      }, 1200);
    });
  </script>
</head>

<body>



  <!-- Hero Section with Picture -->
  <header id="home">
    <div class="hero-content container text-center">
      <!-- Profile Image -->
      <img src="{{ asset('image/profiles.jpeg') }}" alt="{{ $name }}">

      <!-- Text + Glitch Effect -->
      <div class="hero-text mt-4">
        <h1 class="glitch-text" data-text="{{ $name }}">{{ $name }}</h1>
        <h3>{{ $role }}</h3>
        <p class="mt-3">Welcome to my portfolio! I’m passionate about building modern, responsive, and user-friendly web applications using PHP, Laravel, and React Native.</p>

        <!-- Resume Button -->
        <a href="{{ asset('image/resume.pdf') }}" target="_blank" class="glow-btn mt-3">Resume</a>

        <!-- Social Icons -->
        <div class="social-icons mt-4">


          <a href="https://www.linkedin.com/in/neeraj-dubey-3b06141b6/"> <img src="{{ asset('image/linkedin.png') }}" alt="instagram" style="width: 40px; height:40px;"></a>
          <a href="https://github.com/dubeyarjun"> <img src="{{ asset('image/github.png') }}" alt="github" style="width: 40px; height:40px; background-color:#fff;"></a>


          <!-- <a href="https://www.linkedin.com/in/neeraj-dubey-3b06141b6/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href=" https://github.com/dubeyarjun" target="_blank"><i class="fab fa-github"></i></a> -->

        </div>

        <!-- Tech Stack -->
        <h4 class="mt-5 text-white">Techstack I know</h4>
        <div class="tech-icons mt-3">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Native">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg" alt="Laravel">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg" alt="C++">
        </div>
      </div>
    </div>
  </header>




  <!-- Skills -->



  <section id="skills" class="py-5 text-center bg-dark text-white">
    <div class="container">
      <h2 class="fw-bold mb-5">My Skills</h2>

      <div class="tree">
        <div class="root">Web/App Development</div>

        <div class="branch">
          <div class="line"></div>
          <ul>
            <li>
              <div class="node html">HTML</div>
            </li>
            <li>
              <div class="node css">CSS</div>
            </li>
            <li>
              <div class="node bootstrap">Bootstrap</div>
            </li>
            <li>
              <div class="node js">JavaScript</div>
            </li>
            <li>
              <div class="node reactnative">React Native</div>
            </li>
            <li>
              <div class="node php">PHP</div>
            </li>
            <li>
              <div class="node laravel">Laravel</div>
            </li>
            <li>
              <div class="node mysql">MySQL</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>



  <!-- project section  -->
  <section id="projects" class="projects-section py-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-5 text-white">Projects</h2>
      <div class="row justify-content-center">

        @foreach ($projects as $project)
        <div class="col-md-4 mb-4">
          <div class="project-card">
            <img src="{{ asset('image/' . $project['image']) }}" class="project-img" alt="{{ $project['title'] }}">
            <div class="project-body">
              <h5 class="fw-bold">{{ $project['title'] }}</h5>
              <p class="username">{{ $github_user }}</p>
              <p class="stack">{{ $project['desc'] }}</p>
              <a href="{{ $project['link'] }}" target="_blank" class="btn btn-outline-light btn-sm mt-3">
                <i class="fab fa-github me-2"></i>View on GitHub
              </a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>


  <!-- certificate and education  -->

  <section id="education" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <!-- Education Column -->
        <div class="col-md-6 mb-4">
          <h2 class="fw-bold mb-4">Education</h2>
          <div class="edu-box p-4 rounded-4">

            <div class="edu-item mb-4">
              <span class="year">2019 - 2023</span>
              <h5 class="fw-bold mt-2">Bachelor of Technology</h5>
              <p class="text-muted mb-0">Truba College of Science and Technology, Bhopal - (8.6 CGPA)</p>
            </div>

            <div class="edu-item mb-4">
              <span class="year">2018</span>
              <h5 class="fw-bold mt-2">Intermediate</h5>
              <p class="text-muted mb-0">Aditya Birla Intermediate College, Renusagar, U.P. - (76.3%)</p>
            </div>

            <div class="edu-item">
              <span class="year">2016</span>
              <h5 class="fw-bold mt-2">Matriculation</h5>
              <p class="text-muted mb-0">Aditya Birla Intermediate College , Renusagar, U.P. - (67.5%)</p>
            </div>

          </div>
        </div>

        <!-- Certifications Column -->
        <div class="col-md-6 mb-4">
          <h2 class="fw-bold mb-4">Certifications</h2>
          <div class="edu-box p-4 rounded-4">

            <div class="edu-item mb-4">
              <span class="year">2024</span>
              <h5 class="fw-bold mt-2">Training in Web Development</h5>
              <p class="text-muted mb-0">Internshala</p>
            </div>

            <div class="edu-item">
              <span class="year">2021</span>
              <h5 class="fw-bold mt-2">Cyber Security</h5>
              <p class="text-muted mb-0">Udemy</p>
            </div>

            <div class="edu-item">
              <span class="year">2018</span>
              <h5 class="fw-bold mt-2">Diploma Computer in Application</h5>
              <p class="text-muted mb-0">Saharsh Institute of It & Management</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer-section text-white pt-5 pb-3">
    <div class="container">
      <div class="row">

        <!-- ABOUT -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold mb-3">ABOUT ME</h5>
          <p>{{$about}}</p>
          <div class="social-icons mt-3">
            <a href="#" class="social-icon"> <img src="{{ asset('image/facebooks.png') }}" alt="Facebook" style="width:20px; font:bold; filter: invert(100%) brightness(200%) ;
"></a>

            <a href="#" class="social-icon"> <img src="{{ asset('image/linkedin.png') }}" alt="linkedin" style="width:20px; font:bold; filter: invert(100%) brightness(200%) ;
"></a>
            <a href="#" class="social-icon"> <img src="{{ asset('image/twitter.png') }}" alt="twitter" style="width:20px; font:bold; filter: invert(100%) brightness(200%) ;
"></a>
            <a href="#" class="social-icon"> <img src="{{ asset('image/instagram.png') }}" alt="instagram" style="width:20px; font:bold; filter: invert(100%) brightness(200%) ;
"></a>

            <!-- <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a> -->
          </div>
        </div>

        <!-- QUICK LINKS -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold mb-3">QUICK LINKS</h5>
          <ul class="list-unstyled">
            <li><a href="#home">Resume</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#home">Portfolio</a></li>
            <li><a href="#footer">Contact</a></li>
          </ul>
        </div>

        <!-- SKILLS -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold mb-3">Skills</h5>
          <ul class="list-unstyled">
            <li>Php Development</li>
            <li>Web Design</li>
            <li>Web Development</li>
            <li>UI/UX Design</li>
            <li>React Native</li>
          </ul>
        </div>

        <!-- CONTACT -->
        <div class="col-md-3 mb-4">
          <h5 class="fw-bold mb-3">CONTACT</h5>
          <p>
            <img src="{{ asset('image/placeholder.png') }}" alt="Phone" style="width:20px; margin-right:8px; filter: invert(19%) sepia(96%) saturate(7456%) hue-rotate(357deg) brightness(97%) contrast(109%);">
            Delhi, India
          </p>
          <p>
            <img src="{{ asset('image/email.png') }}" alt="Phone" style="width:20px;  margin-right:8px; filter: invert(19%) sepia(96%) saturate(7456%) hue-rotate(357deg) brightness(97%) contrast(109%); ">dubeyneeraj412@gmail.com
          </p>

          <p>
            <img src="{{ asset('image/telephone.png') }}" alt="Phone" style="width:20px; margin-right:8px; filter: invert(19%) sepia(96%) saturate(7456%) hue-rotate(357deg) brightness(97%) contrast(109%);">
            +91 9125438519
          </p>


        </div>
      </div>

      <hr class="border-secondary">
      <div class="text-center">
        <p class="mb-0">&copy; {{ date('Y') }} {{ $name }} | All Rights Reserved.</p>
      </div>
    </div>
  </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>