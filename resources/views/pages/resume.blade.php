@extends('layouts.app')

@section('title', 'Resume')

@section('title', 'Resume')

@section('content')
<div id="resume" class="container">
<div class="col-md-8 offset-md-2">
            <h2 class="section-title text-center mb-4">Resume</h2>
            <div class="text-center mb-4">
                <a href="="{{ asset('mypdf/jpcv2.pdf') }}" class="btn btn-primary mr-2" download>Download PDF</a>
                <a href="resume.docx" class="btn btn-primary mr-2" download>Download DOCX</a>
                <a href="resume.txt" class="btn btn-primary" download>Download TXT</a>
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
        <li><strong>Programming Languages:</strong> Proficient in JavaScript, Python, Java, C++, and SQL.</li>
        <li><strong>Web Development:</strong> Expertise in HTML, CSS, JavaScript, React, Angular, and Node.js for building responsive and dynamic web applications.</li>
        <li><strong>Database Management:</strong> Skilled in MySQL, PostgreSQL, MongoDB, and Oracle for designing and managing databases.</li>
        <li><strong>Software Development:</strong> Experienced in software development methodologies such as Agile and Scrum, with a strong understanding of the software development life cycle (SDLC).</li>
        <li><strong>Version Control:</strong> Proficient in Git and GitHub for version control and collaborative development.</li>
        <li><strong>Cloud Computing:</strong> Knowledgeable in cloud platforms like AWS, Azure, and Google Cloud, with experience in deploying and managing cloud-based applications.</li>
        <li><strong>Data Analysis:</strong> Experienced in data analysis and visualization tools like Excel, Tableau, and Power BI, with a strong understanding of statistical analysis and data interpretation.</li>
        <li><strong>DevOps:</strong> Skilled in DevOps tools and practices, including Docker, Jenkins, Kubernetes, and CI/CD pipelines for automating and streamlining development processes.</li>
    </ul>

    <h3>Experience</h3>
    <div>
        <h4>Job Title at Company</h4>
        <p>Location</p>
        <p>Dates of Employment</p>
        <ul>
            <li>Key responsibility or achievement</li>
            <li>Key responsibility or achievement</li>
        </ul>
    </div>

    <h3>Education</h3>
    <div>
        <h4>Degree at Institution</h4>
        <p>Location</p>
        <p>Dates Attended</p>
    </div>

    <h3>Projects</h3>
    <div>
        <h4>Project Title</h4>
        <p>Brief description of the project, technologies used, and your role.</p>
    </div>

    <h3>Certifications</h3>
    <ul>
        <li>Certification Name</li>
        <li>Certification Name</li>
    </ul>

    <h3>Portfolio</h3>
    <p>Provide links to your portfolio or examples of your work if applicable.</p>

    <h3>Contact Information</h3>
    <p>Email: your.email@example.com</p>
    <p>Phone: 123-456-7890</p>
    <p>LinkedIn: <a href="https://www.linkedin.com/in/yourprofile">yourprofile</a></p>

    <h3>Testimonials/References</h3>
    <p>Add any testimonials from colleagues, supervisors, or clients, or indicate that references are available upon request.</p>
</div>
@endsection

