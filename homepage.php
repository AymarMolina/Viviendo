<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>VIVE EL INGLES</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <header>
        <div class="container">
            <p class="logo">VIVE EL INGLES</p>
            <nav>
                <a href="#somos-proya">QUIENES SOMOS</a>
                <a href="#nuestros-programas">NUESTROS PROGRAMAS</a>
                <a href="#caracteristicas">CARACTERISTICAS</a>
                <a href="logout.php">CERRAR SESION</a>
            </nav>
        </div>
    </header>

    <section id="hero">
        <h1>Aprendé Ingles <br>con los Mejores</h1>
        <a href="#nuestros-programas">
            <button>COMENZAR</button>
        </a>
    </section>

    <section id="somos-proya">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">

                <h2>Somos <span class="color-acento">Vive el Ingles</span></h2>
                <p>Somos un equipo comprometido con la educación y la inclusión digital, dedicados a desarrollar un Sistema Web de 
                   Aprendizaje de Inglés dirigido a personas con recursos limitados en el distrito de Los Olivos. Nuestro objetivo 
                   es brindar una herramienta accesible, interactiva y de calidad que permita a los usuarios mejorar sus habilidades 
                   en el idioma inglés, ampliando sus oportunidades educativas y laborales. Creemos que el aprendizaje del inglés no 
                   debe ser un privilegio, sino un derecho al alcance de todos.</p>
            </div>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            <h2>Nuestros Programas</h2>
            <div class="programas">
                <div class="carta">
                    <h3>Nivel Principiante</h3>
                    <p>En este nivel, los usuarios aprenderán las bases del idioma inglés, incluyendo el abecedario, saludos, números, 
                        colores y vocabulario esencial para la vida diaria. Está diseñado con actividades interactivas y contenido visual 
                        para facilitar el aprendizaje desde cero, sin necesidad de conocimientos previos del idioma.</p>
                    <button onclick="location.href='beginner.php'">COMENZAR</button>
                </div>
                <div class="carta">
                    <h3>Nivel Basico 1</h3>
                    <p>En este nivel, los usuarios reforzarán lo aprendido en el nivel principiante e iniciarán la formación de oraciones 
                        simples, aprenderán estructuras gramaticales básicas, pronombres, verbos comunes y vocabulario relacionado con la 
                        familia, la escuela y el entorno cotidiano.</p>
                    <button onclick="location.href='basic1.php'">COMENZAR</button>
                </div>
                <div class="carta">
                    <h3>Nivel Basico 2</h3>
                    <p>En el nivel Básico 2, los usuarios continuarán ampliando su vocabulario y comprensión del idioma mediante la práctica 
                        de tiempos verbales simples, frases útiles para conversaciones básicas y comprensión de textos cortos, preparándolos 
                        para situaciones reales del día a día.</p>
                    <button onclick="location.href='basic2.php'">COMENZAR</button>
                </div>  
            </div>
        </div>
    </section>

    <section id="caracteristicas">
        <div class="container">
            <ul>
                <li>✔️ 100% online</li>
                <li>✔️ Flexibilidad de horarios</li>
                <li>✔️ Soporte 1:1</li>
                <li>✔️ Asistencia preprofesional</li>
            </ul>
        </div>
    </section>

    <section id="final">
        <h2>Listo para aprender ingles?</h2>
        <a href="#nuestros-programas"><button>COMIENZA YA!</button></a>
    </section>

    <footer>
        <div class="container">
            <p>&copy; Vive el Ingles 2025</p>
        </div>
    </footer>
</body>
</html>