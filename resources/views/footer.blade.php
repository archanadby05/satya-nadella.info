<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        .footer {
            width: 100%;
            background: #10182F;
            border-radius: 6px;
        }

        .footer .footer-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 500px;
            padding: 30px;
        }

        .footer-row .footer-col h4 {
            color: #fff;
            font-size: 16px;
            font-weight: 400;
        }

        .footer-col .links {
            margin-top: 10px;
        }

        .footer-col .links li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer-col .links li a {
            text-decoration: none;
            color: #bfbfbf;
            font-size: 13px;
        }

        .footer-col .links li a:hover {
            color: #fff;
        }

        .footer-col p {
            margin: 20px 0;
            color: #bfbfbf;
            max-width: 300px;
        }

        .footer-col form {
            display: flex;
            gap: 5px;
        }

        .footer-col input {
            height: 40px;
            border-radius: 6px;
            background: none;
            width: 100%;
            outline: none;
            border: 1px solid #7489C6;
            caret-color: #fff;
            color: #fff;
            padding-left: 10px;
        }

        .footer-col input::placeholder {
            color: #ccc;
        }

        .footer-col form button {
            background: #fff;
            outline: none;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: 0.2s ease;
        }

        .footer-col form button:hover {
            background: #cecccc;
        }

        .footer-col .icons {
            display: flex;
            margin-top: 30px;
            gap: 30px;
            cursor: pointer;
        }

        .footer-col .icons i {
            color: #afb6c7;
        }

        .footer-col .icons i:hover {
            color: #fff;
        }

        @media (max-width: 768px) {
            .footer {
                position: relative;
                bottom: 0;
                left: 0;
                transform: none;
                width: 100%;
                border-radius: 0;
            }

            .footer .footer-row {
                padding: 20px;
                gap: 1rem;
            }

            .footer-col form {
                display: block;
            }

            .footer-col form :where(input, button) {
                width: 100%;
            }

            .footer-col form button {
                margin: 10px 0 0 0;
            }
        }
    </style>
</head>

<body>
    <section class="footer">
        <div class="footer-row">
            <div class="footer-col">
                <h4>Quick links</h4>
                <ul class="links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/history">History</a></li>
                    <li><a href="/achievements">Achievements</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p>
                    Subscribe to our newsletter for a weekly dose
                    of news, updates, helpful tips, and
                    exclusive offers.
                </p>
                <form action="#">
                    <input type="text" placeholder="Your email" required>
                    <button type="submit">SUBSCRIBE</button>
                </form>
                <div class="icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-github"></i>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
