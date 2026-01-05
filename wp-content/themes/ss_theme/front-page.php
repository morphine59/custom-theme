<?php get_header(); ?>

<main id="main-content">

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="container">
      <h1>Hi, I’m <span>Sunil Budha</span></h1>
      <p>Frontend / WordPress Developer</p>
      <a href="#services" class="btn">View My Work</a>
    </div>
  </section>

  <!-- SERVICES SECTION -->
  <?php get_template_part('template-parts/home/services'); ?>

  <!-- ABOUT SECTION -->
  <section class="about">
    <div class="container">
      <h2>About Me</h2>
      <p>
        I’m a passionate WordPress developer focused on building
        clean, fast, and scalable websites using custom themes.
      </p>
    </div>
  </section>

  <!-- SKILLS SECTION -->
  <section class="skills">
    <div class="container">
      <h2>Skills</h2>
      <ul class="skills-list">
        <li>HTML / CSS</li>
        <li>JavaScript</li>
        <li>WordPress Custom Themes</li>
        <li>ACF Pro</li>
        <li>Git & GitHub</li>
      </ul>
    </div>
  </section>

  <!-- PROJECTS SECTION -->
  <section class="projects" id="projects">
    <div class="container">
      <h2>Featured Projects</h2>

      <div class="project-grid">
        <div class="project-card">Project One</div>
        <div class="project-card">Project Two</div>
        <div class="project-card">Project Three</div>
      </div>
    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="cta">
    <div class="container">
      <h2>Let’s Work Together</h2>
      <a href="/contact" class="btn">Contact Me</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
