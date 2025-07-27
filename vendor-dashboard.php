<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Browse Materials</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      body {
        background: linear-gradient(to bottom right, #e8f6ff, #ffffff);
        color: #333;
        padding: 20px;
      }

      header {
        text-align: center;
        margin-bottom: 30px;
      }

      header h1 {
        font-size: 2.8rem;
        color: #2c3e50;
      }

      header p {
        font-size: 1.1rem;
        color: #555;
        margin-top: 5px;
      }

      .material-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
      }

      .material-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.08);
        padding: 20px;
        transition: all 0.3s ease;
      }

      .material-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      }

      .material-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
      }

      .material-card h3 {
        font-size: 1.4rem;
        color: #2e86de;
        margin-bottom: 10px;
      }

      .material-card p {
        margin-bottom: 8px;
        font-size: 1rem;
        line-height: 1.5;
      }

      .compare-button {
        background-color: #2ecc71;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1rem;
      }

      .compare-button:hover {
        background-color: #27ae60;
      }

      .video-section {
        margin-top: 40px;
        text-align: center;
      }

      .video-section h2 {
        font-size: 1.8rem;
        color: #2c3e50;
        margin-bottom: 15px;
      }

      .video-section iframe {
        width: 90%;
        max-width: 600px;
        height: 340px;
        border-radius: 10px;
      }

      footer {
        text-align: center;
        margin-top: 50px;
        color: #888;
        font-size: 0.9rem;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Browse Raw Materials</h1>
      <p>
        Select essential kitchen items, view suppliers, and compare best prices
        with quality
      </p>
    </header>

    <section class="material-list">
      <div class="material-card">
        <img
          src="https://cdn.pixabay.com/photo/2022/09/05/09/50/tomatoes-7433786_640.jpg"
          alt="Tomatoes"
        />
        <h3>Tomatoes</h3>
        <p><strong>Price:</strong> ₹22/kg</p>
        <p><strong>Supplier:</strong> FreshFarms Pvt Ltd</p>
        <p>Organic, fresh & directly sourced from farmers</p>
        <button class="compare-button">Compare</button>
      </div>

      <div class="material-card">
        <img
          src="https://media.istockphoto.com/id/1300367338/photo/potatoes.jpg?s=612x612&w=0&k=20&c=mGK7N-9m3fBi1VkUY9dTnUZjfD2AOfLfYkpNeBCmOtA="
          alt="Potatoes"
        />
        <h3>Potatoes</h3>
        <p><strong>Price:</strong> ₹18/kg</p>
        <p><strong>Supplier:</strong> AgroKart</p>
        <p>Locally grown, good shelf life, bulk discount</p>
        <button class="compare-button">Compare</button>
      </div>

      <div class="material-card">
        <img
          src="https://img.freepik.com/free-photo/close-up-view-basket-red-onions_141793-5351.jpg?semt=ais_hybrid&w=740"
          alt="Onions"
        />
        <h3>Onions</h3>
        <p><strong>Price:</strong> ₹25/kg</p>
        <p><strong>Supplier:</strong> GreenHarvest</p>
        <p>Handpicked, high quality & sorted</p>
        <button class="compare-button">Compare</button>
      </div>

      <div class="material-card">
        <img
          src="https://t3.ftcdn.net/jpg/01/01/06/94/360_F_101069451_91kWjNXdA9dPrag5qyRX2ah0rmgAfdee.jpg"
          alt="Capsicum"
        />
        <h3>Capsicum</h3>
        <p><strong>Price:</strong> ₹40/kg</p>
        <p><strong>Supplier:</strong> VeggieMart</p>
        <p>Colourful, crunchy, great for stir-fries</p>
        <button class="compare-button">Compare</button>
      </div>

      <div class="material-card">
        <img
          src="https://media.istockphoto.com/id/90634594/photo/close-up-of-several-heads-of-cauliflower.jpg?s=612x612&w=0&k=20&c=hpYY7BqSUNwM-oq26wNv5pGLSPf4HijXr3zA0J3yd0E="
          alt="Cauliflower"
        />
        <h3>Cauliflower</h3>
        <p><strong>Price:</strong> ₹35/kg</p>
        <p><strong>Supplier:</strong> KisanBazaar</p>
        <p>Cleaned & packaged, pesticide-free</p>
        <button class="compare-button">Compare</button>
      </div>

      <div class="material-card">
        <img
          src="https://dhanipurespices.com/wp-content/uploads/2022/10/Mixed-Spices-powder.jpeg"
          alt="Spices"
        />
        <h3>Spices Mix Pack</h3>
        <p><strong>Price:</strong> ₹120/pack</p>
        <p><strong>Supplier:</strong> MasalaHub</p>
        <p>All-in-one spice essentials for Indian street food</p>
        <button class="compare-button">Compare</button>
      </div>

      <div class="material-card">
        <img
          src="https://t3.ftcdn.net/jpg/03/06/27/38/360_F_306273814_YlSscyBG4h8JJDA7H38bkQGyU3y0xegL.jpg"
          alt="Cooking Oil"
        />
        <h3>Cooking Oil</h3>
        <p><strong>Price:</strong> ₹110/litre</p>
        <p><strong>Supplier:</strong> SunGold Oils</p>
        <p>Refined sunflower oil, best for deep frying</p>
        <button class="compare-button">Compare</button>
      </div>

      <div class="material-card">
        <img
          src="https://png.pngtree.com/thumb_back/fh260/background/20220311/pngtree-wheat-ears-and-flour-image_1028030.jpg"
          alt="Flour"
        />
        <h3>Wheat Flour (Atta)</h3>
        <p><strong>Price:</strong> ₹38/kg</p>
        <p><strong>Supplier:</strong> GrainKart</p>
        <p>Stone-ground, ideal for dough-based dishes</p>
        <button class="compare-button">Compare</button>
      </div>

      <div class="material-card">
        <img
          src="https://i.pinimg.com/736x/f4/ae/56/f4ae561c9b2fc9549d190cd2264cf6c1.jpg"
          alt="Packaging"
        />
        <h3>Packaging Containers</h3>
        <p><strong>Price:</strong> ₹200/pack (100 pcs)</p>
        <p><strong>Supplier:</strong> PackItWell</p>
        <p>Eco-friendly disposable containers for delivery</p>
        <button class="compare-button">Compare</button>
      </div>
    </section>

    <section class="video-section">
      <h2>Know Your Produce</h2>
      <iframe
        src="https://www.youtube.com/embed/q0aGNRt24TY"
        title="Know your vegetables"
        frameborder="0"
        allowfullscreen
      ></iframe>
    </section>

    <footer>
      © 2025 FoodChain Connect | Helping Vendors Connect with the Best Suppliers
      for Quality & Savings
    </footer>
  </body>
</html>
