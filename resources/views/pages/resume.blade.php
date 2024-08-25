@extends('layouts.app')

@section('title', 'Resume')

@section('title', 'Resume')

@section('content')
<div id="resume" class="container">
<div class="col-md-8 offset-md-2">
            <h2 class="section-title text-center mb-4">Resume</h2>
            <div class="text-center mb-4">
                <a href="{{ asset('mypdf/JPCV.pdf') }}" class="btn btn-primary mr-2" download>Download japanese resume</a>
                <a href="{{ asset('mypdf/ENGCV.pdf') }}" class="btn btn-primary mr-2" download>Download English resume</a><d DOCX</a>
                
            </div>
</div> 
    <h3>Introduction</h3>
    <p>I am an IT engineer with a passion for technology, continuous learning, and professional growth. I thrive in collaborative environments and enjoy working on challenging projects that allow me to leverage my skills and knowledge.</p>

    <h3>Skills</h3>
    <h4>Soft Skills</h4>
    <ul>
        <li><strong>Communication:</strong> Excellent verbal and written communication skills, adept at presenting complex ideas clearly and concisely.</li>
        <li><strong>Teamwork:</strong> Proven ability to work collaboratively in a team environment, contributing to team success and fostering a positive work atmosphere.</li>
        <li><strong>Problem-Solving:</strong> Strong analytical skills, capable of identifying issues and implementing effective solutions promptly.</li>
        <li><strong>Adaptability:</strong> Flexible and adaptable to changing environments and new challenges, always ready to learn and grow.</li>
        <li><strong>Time Management:</strong> Highly organized with excellent time management skills, able to prioritize tasks and meet deadlines efficiently.</li>
        <li><strong>Leadership:</strong> Experienced in leading teams, motivating members, and managing projects to successful completion.</li>
        <li><strong>Interpersonal Skills:</strong> Strong interpersonal skills, able to build and maintain positive relationships with colleagues and clients.</li>
        <li><strong>Critical Thinking:</strong> Capable of critical thinking and making sound decisions based on thorough analysis and evaluation.</li>
    </ul>

    <h4>Hard Skills</h4>
    <ul>
        <li><strong>Programming Languages:</strong> Proficient in JavaScript, Php ,python and SQL </li>
        <li><strong>Web Development:</strong> Expertise in HTML, CSS, Boostrap ,JavaScript, React, and Node.js for building responsive and dynamic web applications.</li>
        <li><strong>Database Management:</strong> Skilled in MySQL, PostgreSQL for designing and managing databases.</li>
        <li><strong>Software Development:</strong> Experienced in software development methodologies such as Agile and Scrum, with a strong understanding of the software development life cycle (SDLC).</li>
        <li><strong>Version Control:</strong> Proficient in Git and GitHub for version control and collaborative development.</li>
        <li><strong>Cloud Computing:</strong> Knowledgeable in cloud platforms like AWS, Azure, and Google Cloud, with experience in cloud-based applications.</li>
        <li><strong>DevOps:</strong> Skilled in DevOps tools and practices, including Docker, Jenkins, Kubernetes, and CI/CD pipelines for automating and streamlining development processes.</li>
    </ul>

    
    <h3>Education</h3>
    <div>
        <h4>Dagon University</h4>
        <p>Myanmar</p>
        <p>2007~2009</p>
    </div>

    <h3>Projects</h3>

    <div>
        <h4>E-commerce Website</h4>
        <p>
            Developed a full-featured e-commerce website using Laravel, MySQL, Linux, and JavaScript. 
            Collaborated with team members to design and implement various functionalities such as user authentication, 
            product management, and payment integration.
        </p>
    </div>

    <div>
        <h4>Company Website</h4>
        <p>
            Created a company website to enhance the online presence and provide information about services and products. 
            Utilized Laravel, MySQL, Linux, and JavaScript to build a responsive and user-friendly interface. 
            Worked as part of a team to ensure seamless integration and deployment.
        </p>
    </div>

    <h3>Certifications</h3>
    <ul>
        <li>Certification Name</li>
        <li>Certification Name</li>
    </ul>

    

    <h3>Contact Information</h3>
    <p>Email: sandi.ygx@gmail.com</p>
    <p>Phone: 080 -2899 -33971</p>
    <p>LinkedIn: <a href="https://www.linkedin.com/in/yourprofile">yourprofile</a></p>
       
</div>
@endsection

