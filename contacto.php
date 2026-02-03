<?php $page_title = 'Contacto'; ?>
<?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Contacto</h1>
            <p>¿Tenés un proyecto en mente? Contanos qué necesitás y te respondemos en 24 horas hábiles.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Hablemos de tu proyecto</h3>
                    <p>Completá el formulario o contactanos directamente. Respondemos todas las consultas sin compromiso.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                        </div>
                        <div>
                            <h4>Zona de trabajo</h4>
                            <p>CABA y Gran Buenos Aires, Argentina</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592z"/></svg>
                        </div>
                        <div>
                            <h4>WhatsApp</h4>
                            <p><a href="https://wa.me/5491112345678">+54 9 11 1234-5678</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/></svg>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:info@grupoan.com">info@grupoan.com</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/><path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/></svg>
                        </div>
                        <div>
                            <h4>Horarios</h4>
                            <p>Lunes a Viernes: 9:00 - 18:00</p>
                        </div>
                    </div>
                </div>
                
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="nombre">Nombre completo *</label>
                        <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required placeholder="tu@email.com">
                    </div>
                    
                    <div class="form-group">
                        <label for="telefono">Teléfono *</label>
                        <input type="tel" id="telefono" name="telefono" required placeholder="+54 9 11 1234-5678">
                    </div>
                    
                    <div class="form-group">
                        <label for="tipo">Tipo de consulta</label>
                        <select id="tipo" name="tipo">
                            <option value="">Seleccioná una opción</option>
                            <option value="reforma">Reforma de vivienda</option>
                            <option value="revoques">Revoques proyectados</option>
                            <option value="microcemento">Microcemento</option>
                            <option value="b2b">Servicio para estudio/arquitecto</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="mensaje">Mensaje *</label>
                        <textarea id="mensaje" name="mensaje" required placeholder="Contanos sobre tu proyecto..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Enviar consulta</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map or additional info -->
    <section class="section" style="background: var(--bg-light); padding: 3rem 0;">
        <div class="container">
            <div style="text-align: center;">
                <h3>Zona de cobertura</h3>
                <p style="color: var(--text-muted); max-width: 600px; margin: 1rem auto;">Trabajamos en Capital Federal y Gran Buenos Aires. Para proyectos fuera de estas zonas, consultanos.</p>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
