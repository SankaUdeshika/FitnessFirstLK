<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gym Events</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }

    .section-title {
      color: #dc3545;
      font-size: 3rem;
      font-weight: 700;
      text-align: center;
      margin-bottom: 50px;
    }

    .event-card {
      background-color: #111;
      border: none;
      transition: all 0.6s ease;
      opacity: 0;
      transform: translateY(40px);
    }

    .event-card.show {
      opacity: 1;
      transform: translateY(0);
    }

    .event-img {
      height: 220px;
      object-fit: cover;
    }

    .card-title {
      color: #dc3545;
      font-weight: 700;
    }

    .card-text {
      color: #f8f9fa;
    }

    .date {
      color: #aaa;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <div class="container py-5">
    <h1 class="section-title">UPCOMING EVENTS</h1>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card event-card h-100">
          <img src="Resources/images/aboutImage/about1.jpeg" class="card-img-top event-img" alt="event1">
          <div class="card-body">
            <h5 class="card-title">STRENGTH CHALLENGE</h5>
            <p class="card-text">Join the ultimate test of strength with pros guiding each round.</p>
            <p class="date">📅 June 10, 2025</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card event-card h-100">
          <img src="Resources/images/aboutImage/NBwIndexNewTransformming3.png" class="card-img-top event-img" alt="event2">
          <div class="card-body">
            <h5 class="card-title">SUNRISE YOGA</h5>
            <p class="card-text">Start your day with a peaceful and powerful yoga flow session.</p>
            <p class="date">📅 June 12, 2025</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card event-card h-100">
          <img src="Resources/images/aboutImage/newIndexNewTransform2.png" class="card-img-top event-img" alt="event3">
          <div class="card-body">
            <h5 class="card-title">CROSSFIT BATTLE</h5>
            <p class="card-text">Push your limits with intense CrossFit games. Open to all levels.</p>
            <p class="date">📅 June 15, 2025</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Fade-in Animation -->
  <script>
    const cards = document.querySelectorAll('.event-card');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, { threshold: 0.2 });

    cards.forEach(card => observer.observe(card));
  </script>

</body>
</html>
