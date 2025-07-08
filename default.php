<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fine Parts Automotive</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
    }

    header {
      background-color: #1a1a1a;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }

    nav a:hover {
      background-color: #575757;
    }

    .hero {
      padding: 60px;
      text-align: center;
      background: url('https://via.placeholder.com/1200x400?text=Fine+Parts+Automotive') no-repeat center;
      background-size: cover;
      color: white;
    }

    .content {
      padding: 20px;
    }

    .about, .contact {
      background: white;
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 8px;
    }

    footer {
      background-color: #1a1a1a;
      color: white;
      text-align: center;
      padding: 10px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <header>
    <h1>Fine Parts Automotive</h1>
    <p>Toronto's Leading Auto Parts Seller - Best in Canada</p>
  </header>

  <nav>
    <a href="#home">Home</a>
    <a href="#about">About Us</a>
    <a href="#contact">Contact</a>
  </nav>

  <section class="hero" id="home">
    <h2>Your Trusted Auto Parts Partner</h2>
    <p>Delivering premium auto parts across Canada</p>
  </section>

  <div class="content">
    <section class="about" id="about">
      <h2>About Us</h2>
      <p>Based in Toronto, Fine Parts Automotive is committed to providing the highest quality auto parts to customers across Canada. Whether you're a garage owner, mechanic, or car enthusiast, we have everything you need at competitive prices.</p>
    </section>

    <section class="contact" id="contact">
      <h2>Contact Us</h2>
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Your Name">

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Your Email">

        <label for="message">Message</label>
        <textarea id="message" rows="4" placeholder="Your Message"></textarea>

        <button type="submit">Send Message</button>
      </form>
    </section>
  </div>

  <footer>
    <p>&copy; 2025 Fine Parts Automotive, Toronto, Canada</p>
  </footer>

</body>
</html>
