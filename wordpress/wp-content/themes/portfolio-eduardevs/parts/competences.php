<style>
    .card-grid {
        display: flex;
        flex-wrap: nowrap;
        gap: 10px;
        /* Adjust this value for desired margin between cards */
    }

    .card {
        flex: 1;
        /* Ensures all cards are the same width */
        max-width: 23%;
        /* Adjust this value to fit your design needs */
        background: white;
        color: black;
    }


    .card {
        transition: opacity 0.3s ease;
    }

 

    .text-body-secondary {
        --bs-text-opacity: 1;
        color: unset !important;

    }
    .text-body-secondary:hover {
        color: unset !important;
    }
    .card:hover {
        background: #8a6d70;
        color: white !important;
    }

    /* .card-inverse {
        background: #717d8e;
        color: white;
    } */


    .card-text {
        font-weight: 400;
        font-size: 1rem;
        margin: 16px 0;
    }
</style>


<div class="container my-5 position-relative z-2" style="top:180px;">
    <div class="card-grid">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <i class="fa fa-terminal" style="font-size:3rem;"></i> <span class="d-block mt-3">Automatisation et
                        deploiement continue</span>
                </h5>
                <h6 class="card-subtitle my-2 text-body-secondary">Devops</h6>

                <p class="card-text">Je mets en œuvre le DevOps pour automatiser les tâches et
                    optimiser l'efficacité du développement</p>
                <!-- <a href="#" class="card-link">Card link</a> -->
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <i class="fa fa-code" style="font-size:3rem;"></i> <span class="d-block mt-3">Développement
                        web</span>
                </h5>
                <h6 class="card-subtitle my-2 text-body-secondary">Clean code</h6>

                <p class="card-text">Je m'efforce d'écrire du code propre et maintenable. Je crois au pouvoir du
                    refactoring pour améliorer la qualité du code.</p>
                <!-- <a href="#" class="card-link">Card link</a> -->
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <i class="fa-solid fa-pen-ruler" style="font-size:3rem;"></i>
                    <span class="d-block mt-3">Conception et analyse</span>
                </h5>
                <h6 class="card-subtitle my-2 text-body-secondary">UML</h6>

                <p class="card-text">J'utilise UML pour modéliser et visualiser les systèmes logiciels afin d'améliorer
                    la compréhension et la communication.</p>
                <!-- <a href="#" class="card-link">Card link</a> -->
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <i class="fa-solid fa-vial" style="font-size:3rem;"></i>
                    <span class="d-block mt-3">Tests et validation</span>
                </h5>
                <h6 class="card-subtitle my-2 text-body-secondary">Test coverage</h6>

                <p class="card-text">Je favorise les tests et la validation pour garantir la qualité du code, en
                    utilisant TDD pour assurer la fiabilité de mes applications.</p>
                <!-- <a href="#" class="card-link">Card link</a> -->
            </div>
        </div>
        <!--<div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">
                    <i class="fa fa-people-group" style="font-size:3rem;"></i> <span class="d-block mt-3">Team Player</span>
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Pair programming : Drive et Navigator</h6>

                <p class="card-text">Travailler avec d'autres développeurs pour avancer plus vite tout en produisant du code de haute qualité.</p>
            <a href="#" class="card-link">Card link</a>
            </div>
        </div> -->


    </div>
</div>