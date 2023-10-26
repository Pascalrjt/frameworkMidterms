<style>

    body, h1, h2, p, ul, li {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    .hero {
        text-align: center;
        padding: 100px 0;
        background-image: url('hero-background.jpg'); /* Replace with your background image */
        background-size: cover;
        color: #fff;
    }

    .hero h1 {
        font-size: 36px;
        color: #333;

    }

    .hero p {
        font-size: 18px;
        margin-top: 20px;
        color: #333;
    }

    .cta-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #f5a623;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
        margin-top: 20px;
    }

    .cta-button:hover {
        background-color: #e09600;
    }

    .products {
        text-align: center;
        padding: 40px 0;
    }

    .product {
        display: inline-block;
        margin: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 300px;
    }

    .product img {
        max-width: 100%;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .product h3 {
        font-size: 24px;
        margin-top: 10px;
    }

    .product p {
        font-size: 18px;
        margin-top: 10px;
    }

    .product a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
        margin-top: 20px;
    }

    .product a:hover {
        background-color: #555;
    }

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
    }

    .navbar {
        display: flex;
        justify-content: flex-end; /* Align buttons to the right */
        align-items: center;
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }

    .navbar a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px; /* Add padding here */
        transition: color 0.3s;
    }

    .navbar a:hover {
        color: #f5a623;
    }

    </style>

    <main>
        <section class="navbar">
            <a href="/watches">watches</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </section>
        <section class="hero">
            <h1>Lab Watch Inventory</h1>
            <a href="/watches" class="cta-button">View watches</a>
        </section>

        {{-- <section id="shop-now" class="products">
            <h2>Featured Watches</h2>

            <div class="product">
                <img src="watch1.jpg" alt="Product 1">
                <h3>Men's Chronograph Watch</h3>
                <p>$199.99</p>
                <a href="#">View Details</a>
            </div>

            <div class="product">
                <img src="watch2.jpg" alt="Product 2">
                <h3>Women's Fashion Watch</h3>
                <p>$149.99</p>
                <a href="#">View Details</a>
            </div>

            <div class="product">
                <img src="watch3.jpg" alt="Product 3">
                <h3>Kids' Digital Watch</h3>
                <p>$99.99</p>
                <a href="#">View Details</a> --}}
            </div>
        </section>
    </main>
