<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form with Stylish Background</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>

 

  <div class="form-container">
    <h2>Me contacter</h2>
    <form id="contactForm" action="formulaire.php" method="POST">

      <label for="name">Nom</label>
      <input type="text" id="name" name="name" placeholder="Votre nom" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Votre mail" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="4" placeholder="Votre Message" required></textarea>

      <button type="submit">Envoyer un message </button>
    </form>
  </div>
  <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.46/build/spline-viewer.js"></script>
  <spline-viewer url="https://prod.spline.design/DiHOwPrHDuoIS2aw/scene.splinecode"></spline-viewer>
  <script src="script.js"></script>

</body>
</html>
