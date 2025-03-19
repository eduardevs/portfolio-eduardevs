<?php
/*
Template Name: Page Personnalisée
*/

get_header();
?>
<div class="row bg-white">
    <div class="container row">

        <div class="col-md-6 mt-5">
            <!-- First column content goes here -->
            <img src="<?php echo get_template_directory_uri() . '/assets/images/moi-voyage.jpg' ?>"
                class="img-fluid w-50" alt="" data-aos="fade-in">

        </div>
        <div class="col-md-6">
            <!-- Second column content goes here -->
            <h1>À propos de moi</h1>

            <p><strong>Je suis Eduardo Pina</strong>, né au Venezuela. J'ai étudié la musique et obtenu une
                <strong>licence de quatre ans en tant que concertiste de guitare classique</strong>.</p>

            <p>Depuis mes études de musique, j'ai toujours été attiré par l'informatique. Mon intérêt pour ce domaine a
                commencé avec mes <strong>cours d'informatique musicale</strong>, où j'ai utilisé divers outils pour
                améliorer et composer de la musique.</p>

            <p>L'apprentissage des langages de programmation est ensuite devenu une véritable passion pour moi. Ce qui a
                commencé comme un simple intérêt s'est transformé en une <strong>carrière dans le développement et les
                    technologies DevOps</strong>. J'aime explorer de nouvelles technologies, résoudre des problèmes
                complexes et créer des solutions innovantes qui facilitent la vie des utilisateurs.</p>

            <p>En dehors de mon travail, la musique reste une grande partie de ma vie. J'aime aussi travailler sur des
                <strong>projets innovants</strong> qui combinent mes compétences en informatique et en musique. Cette
                combinaison unique de compétences me permet d'aborder les défis sous différents angles et d'apporter une
                perspective créative à tout ce que je fais.</p>

            <p>Aujourd'hui, je suis <strong>développeur</strong> et je m'intéresse également au <strong>DevOps</strong>.
                Je m'efforce d'améliorer continuellement mes compétences et de rester à jour avec les dernières
                tendances technologiques. Mon objectif est de contribuer à des projets qui ont un impact significatif et
                d'apporter de la valeur à la fois à mes collègues et aux utilisateurs finaux.</p>

            <p>Merci de visiter mon site, et n'hésitez pas à <strong>me contacter</strong> pour discuter de projets, de
                collaboration ou simplement pour échanger sur nos intérêts communs.</p>
        </div>
    </div>
</div>


<?php get_footer(); ?>