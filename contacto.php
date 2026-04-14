<?php $page_title = 'Contacto'; ?>
<?php include 'includes/header.php'; ?>

<section class="contact-hero">
    <div class="contact-hero-media">
        <img src="assets/img/contacto.jpg" alt="Espacio de trabajo y planificación arquitectónica">
    </div>
    <div class="container">
        <div class="contact-hero-content">
            <span class="section-badge contact-hero-badge">Canales de atención</span>
            <h1>Contacto</h1>
            <p>¿Tenés un proyecto en mente? Estamos listos para acompañarte con planificación, ejecución y terminaciones
                de alta calidad.</p>
        </div>
    </div>
</section>

<section class="section contact-section">
    <div class="container">
        <div class="contact-layout">
            <aside class="contact-panel">
                <div class="contact-panel-copy">
                    <span class="section-badge">Canales de atención</span>
                    <h2>Contacto directo</h2>
                    <p>Completá el formulario o escribinos por WhatsApp o mail. Respondemos en menos de 24 horas
                        hábiles.</p>
                </div>

                <div class="contact-feature-list">
                    <article class="contact-feature">
                        <div class="contact-feature-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <div>
                            <h3>Zona de trabajo</h3>
                            <p>Operamos en CABA y Gran Buenos Aires.</p>
                        </div>
                    </article>

                    <article class="contact-feature">
                        <div class="contact-feature-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592z" />
                            </svg>
                        </div>
                        <div>
                            <h3>WhatsApp</h3>
                            <p><a href="https://wa.me/5491137758726?text=Hola,%20quiero%20consultar%20por%20un%20proyecto"
                                    target="_blank" rel="noopener">+54 9 11 3775-8726</a></p>
                            <span>Respuesta inmediata</span>
                        </div>
                    </article>

                    <article class="contact-feature">
                        <div class="contact-feature-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:info@grupoan.com.ar">info@grupoan.com.ar</a></p>
                        </div>
                    </article>

                    <article class="contact-feature">
                        <div class="contact-feature-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3>Horarios</h3>
                            <p>Lunes a viernes de 9:00 a 18:00.</p>
                        </div>
                    </article>
                </div>

                <div class="contact-note">
                    <h3>Visión técnica</h3>
                    <p>Combinamos arquitectura, coordinación y ejecución para que cada etapa tenga seguimiento real en
                        obra y terminaciones consistentes.</p>
                </div>
            </aside>

            <div class="contact-form-card">
                <div class="contact-form-head">
                    <span class="section-badge">Formulario</span>
                    <h2>Contanos qué necesitás</h2>
                    <p>Usá este formulario para compartir tu consulta. Cuanto más contexto nos des, mejor podemos
                        orientarte desde el inicio.</p>
                </div>

                <form id="contactForm" class="contact-modern-form">
                    <div class="contact-modern-grid">
                        <div class="contact-modern-field">
                            <label for="nombre">Nombre completo</label>
                            <input id="nombre" name="nombre" type="text" placeholder="Ej. Juan Pérez">
                        </div>

                        <div class="contact-modern-field">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" placeholder="juan@ejemplo.com">
                        </div>

                        <div class="contact-modern-field">
                            <label for="telefono">Teléfono</label>
                            <input id="telefono" name="telefono" type="tel" placeholder="+54 11 ...">
                        </div>

                        <div class="contact-modern-field">
                            <label for="ubicacion">Ubicación del proyecto</label>
                            <select id="ubicacion" name="ubicacion">
                                <option value="">Seleccionar zona</option>
                                <option value="CABA">CABA</option>
                                <option value="GBA Norte">GBA Norte</option>
                                <option value="GBA Sur">GBA Sur</option>
                                <option value="GBA Oeste">GBA Oeste</option>
                                <option value="Otra zona">Otra zona</option>
                            </select>
                        </div>

                        <div class="contact-modern-field contact-modern-field-full">
                            <label for="mensaje">Mensaje y detalles del proyecto</label>
                            <textarea id="mensaje" name="mensaje" rows="5"
                                placeholder="Describí brevemente tu idea, el tipo de obra y cualquier dato que nos ayude a orientarte mejor."></textarea>
                        </div>
                    </div>

                    <div class="contact-modern-actions">
                        <button class="contact-modern-submit" type="submit">
                            Enviar mensaje
                            <span aria-hidden="true">→</span>
                        </button>
                        <p>Al enviar este formulario, un asesor técnico se pondrá en contacto en menos de 24 hs hábiles.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section contact-coverage">
    <div class="container">
        <div class="contact-coverage-grid">
            <div class="contact-coverage-copy">
                <span class="section-badge">Nuestra presencia</span>
                <h2>Cobertura metropolitana con seguimiento real</h2>
                <p>Trabajamos en Capital Federal y Gran Buenos Aires con una dinámica de obra ordenada, comunicación
                    constante y foco en resolver cada etapa con precisión.</p>
                <p>Si tu proyecto está fuera de estas zonas, escribinos igual: evaluamos alcance, tiempos y logística
                    para darte una respuesta concreta.</p>
                <div class="contact-coverage-tag">Empresa matriculada y enfocada en calidad de ejecución</div>
            </div>

            <div class="contact-coverage-visual">
                <img src="assets/img/arquitectura-real.jpg" alt="Proyecto arquitectónico de Grupo AN">
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>