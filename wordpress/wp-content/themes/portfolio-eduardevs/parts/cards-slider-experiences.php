<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .slider-container {
        position: relative;
        width: 80%;
        max-width: 800px;
        overflow: hidden;
    }

    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .card {
        min-width: 200px;
        max-width: 200px;
        margin: 10px;
        padding: 20px;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        font-size: 1.2rem;
    }

    .prev-btn,
    .next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 50%;
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }
</style>

<div class="slider-container">
    <button class="prev-btn">←</button>
    <div class="slider">
        <div class="card">Card 1</div>
        <div class="card">Card 2</div>
        <div class="card">Card 3</div>
        <div class="card">Card 4</div>
        <div class="card">Card 5</div>
    </div>
    <button class="next-btn">→</button>
</div>
<script>
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const slider = document.querySelector('.slider');
    let scrollAmount = 0;

    prevBtn.addEventListener('click', () => {
        slider.scrollBy({ left: -220, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
        slider.scrollBy({ left: 220, behavior: 'smooth' });
    });

</script>