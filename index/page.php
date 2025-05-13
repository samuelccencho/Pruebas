<?php /* Template Name: page */
get_header();
$template_uri = get_bloginfo('template_url'); ?>


    <!-- Hero Banner -->
    <section class="hero" id="inicio">
        <div class="hero-content">
            <h2>¡Somos tu camino al éxito!</h2>
            <p>Obtén tu grado de Bachiller y Título a nombre de la Nación en solo dos años. Instituto licenciado por el MINEDU.</p>
            <a href="admision.html" class="btn">¡Inscríbete ahora!</a>
        </div>
    </section>

    <!-- Sección Carreras -->
    <section class="carreras" id="carreras">
        <div class="container">
            <div class="section-title">
                <h2>Nuestras Carreras Profesionales</h2>
                <p>Programas académicos licenciados por el MINEDU</p>
            </div>
            
            <div class="carreras-grid">
                <!-- Carrera 1 -->
                <div class="carrera-card">
                    <div class="carrera-img">
                        <img src="img/desa.jpg" alt="Desarrollo de Sistemas de Información">
                    </div>
                    <div class="carrera-content">
                        <h3>Desarrollo de Sistemas de Información</h3>
                        <p>Formamos profesionales capaces de analizar, diseñar, desarrollar e implementar sistemas informáticos para optimizar procesos en las organizaciones. Aprenderás programación, bases de datos, desarrollo web y móvil, redes y seguridad informática.</p>
                        
                        <div class="carrera-meta">
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span>Duración: 2 años (6 ciclos académicos)</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-certificate"></i>
                                <span>Título a nombre de la Nación</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>Alta demanda laboral</span>
                            </div>
                        </div>
                        <a href="carrera-sistemas.html" class="btn">Ver detalles</a>
                    </div>
                </div>
                
                <!-- Carrera 2 -->
                <div class="carrera-card">
                    <div class="carrera-img">
                        <img src="img/con.jpg" alt="Contabilidad">
                    </div>
                    <div class="carrera-content">
                        <h3>Contabilidad</h3>
                        <p>Formamos profesionales capaces de gestionar los procesos contables y financieros de las organizaciones. Aprenderás contabilidad general, costos, tributación, auditoría, finanzas y gestión empresarial con herramientas tecnológicas actualizadas.</p>
                        
                        <div class="carrera-meta">
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span>Duración: 2 años (6 ciclos académicos)</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-certificate"></i>
                                <span>Título a nombre de la Nación</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>Amplio campo laboral</span>
                            </div>
                        </div>
                        <a href="carrera-contabilidad.html" class="btn">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Talleres -->
    <section class="talleres" id="talleres">
        <div class="container">
            <div class="section-title">
                <h2>Nuestros Talleres</h2>
                <p>Cursos especializados para complementar tu formación</p>
            </div>
            <div class="talleres-grid">
                <div class="taller-card">
                    <div class="taller-img">
                        <img src="img/j.jpg" alt="Taller de Ensamblaje">
                    </div>
                    <div class="taller-content">
                        <h3>Ensamblaje de Computadoras</h3>
                        <p>Aprende a ensamblar, configurar y mantener equipos de cómputo con los mejores profesionales.</p>
                        <a href="taller-ensamblaje.html" class="btn">Más información</a>
                    </div>
                </div>
                <div class="taller-card">
                    <div class="taller-img">
                        <img src="img/k.jpg" alt="Taller de Diseño Gráfico">
                    </div>
                    <div class="taller-content">
                        <h3>Diseño Gráfico</h3>
                        <p>Domina herramientas como Photoshop, Illustrator y CorelDRAW para crear diseños profesionales.</p>
                        <a href="taller-diseno.html" class="btn">Más información</a>
                    </div>
                </div>
                <div class="taller-card">
                    <div class="taller-img">
                        <img src="img/l.jpg" alt="Taller de Ofimática">
                    </div>
                    <div class="taller-content">
                        <h3>Ofimática</h3>
                        <p>Word, Excel, PowerPoint y más. Impulsa tu productividad con estas herramientas esenciales.</p>
                        <a href="taller-ofimatica.html" class="btn">Más información</a>
                    </div>
                </div>
                <div class="taller-card">
                    <div class="taller-img">
                        <img src="img/m.jpg" alt="Taller de Reparación de Celulares">
                    </div>
                    <div class="taller-content">
                        <h3>Reparación de Celulares</h3>
                        <p>Conviértete en técnico especializado en reparación de smartphones y tablets.</p>
                        <a href="taller-reparacion.html" class="btn">Más información</a>
                    </div>
                </div>
                <div class="taller-card">
                    <div class="taller-img">
                        <img src="img/in.jpg" alt="Taller de Contabilidad">
                    </div>
                    <div class="taller-content">
                        <h3>Inglés</h3>
                        <p>Aprende el fascinante mundo del Inglés.</p>
                        <a href="taller-ingles.html" class="btn">Más información</a>
                    </div>
                </div>
                <div class="taller-card">
                    <div class="taller-img">
                        <img src="img/or.jpg" alt="Taller de Sistemas">
                    </div>
                    <div class="taller-content">
                        <h3>Oratoria</h3>
                        <p>Aprende hablar en público y pierde el miedo.</p>
                        <a href="taller-oratoria.html" class="btn">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Información -->
    <section class="info" id="quienes-somos">
        <div class="container">
            <div class="info-grid">
                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Ubicación</h3>
                    <p>Av. Cesar Vallejo, Sector 2 Grupo 15, al lado de la comisaría de Villa El Salvador, a media cuadra de la municipalidad.</p>
                    <a href="https://maps.app.goo.gl/osCb1AXoDEs6o3Mx6" class="btn" target="_blank">Ver mapa</a>
                </div>
                <div class="info-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Licenciamiento</h3>
                    <p>Instituto licenciado por el MINEDU. Oficio N°01220-2021-MINEDU</p>
                    <a href="rd.pdf" class="btn" target="_blank">Ver resolución</a>
                </div>
                <div class="info-card">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>Próximas Admisiones</h3>
                    <p>Inicio de clases: 21 Abril 2025. Inscripciones abiertas. ¡No pierdas esta oportunidad!</p>
                    <a href="admision.html" class="btn">Inscríbete aquí</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contacto">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>ISMEM</h3>
                    <p>Instituto Superior María Elena Moyano - Formando profesionales técnicos desde 1995.</p>
                    <div class="social-links">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Enlaces Rápidos</h3>
                    <a href="index.html">Inicio</a>
                    <a href="carreras.html">Carreras</a>
                    <a href="talleres.html">Talleres</a>
                    <a href="admision.html">Admisión</a>
                    <a href="contacto.html">Contacto</a>
                </div>
                <div class="footer-column">
                    <h3>Contacto</h3>
                    <p><i class="fas fa-phone"></i> (01) 287-7695</p>
                    <p><i class="fas fa-mobile-alt"></i> 924 488 433</p>
                    <p><i class="fas fa-envelope"></i> secretariacademicaismem@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Av.Cesar Vallejo,Sector 2 Grupo 15, Villa El Salvador</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Instituto Superior María Elena Moyano - Todos los derechos reservados</p>
                <p>Licenciado por el MINEDU -OF-01220-2021-MINEDU</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling para enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Marcar el enlace activo en el menú
        const currentPage = window.location.pathname.split('/').pop() || 'index.html';
        document.querySelectorAll('nav a').forEach(link => {
            if(link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>