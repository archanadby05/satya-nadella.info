<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #171e33;
        }

        .heading {
            text-align: center;
            color: white;
            font-size: 50px;
            padding-top: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding-bottom: 60px;

        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            margin-bottom: 150px
        }


        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: white;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }


        .container {
            padding: 10px 50px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }


        .container::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: #61D4E8;
            border: 4px solid #2DA1E7;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }


        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }


        .right::after {
            left: -16px;
        }


        .content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .content h2 {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding-bottom: 10px;
        }

        .content ul li {
            margin-top: 10px;
            margin-left: 30px;
        }

        @media screen and (max-width: 600px) {

            .timeline::after {
                left: 31px;
            }

            .container {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }


            .container::before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            .left::after,
            .right::after {
                left: 15px;
            }

            .right {
                left: 0%;
            }
        }
    </style>
</head>


<body>
    @include('header')

    <div class="heading">
        <p>Timeline</p>
    </div>
    <div class="timeline">
        <div class="container left">
            <p>
                <i class="fa fa-code-fork" aria-hidden="true"></i>
            <div class="content">
                <h2>Born</h2>
                <ul>
                    <li>August 19, 1967, in Hyderabad, India.</li>
                </ul>
            </div>
        </div>
        <div class="container right">
            <div class="content">
                <h2>Education:</h2>
                <ul>
                    <li>Bachelor's degree in Electrical Engineering from Manipal Institute of Technology, India.</li>
                    <li>Master's degree in Computer Science from the University of Wisconsin–Milwaukee.</li>
                    <li>Master of Business Administration (MBA) from the University of Chicago.</li>
            </div>
        </div>
        <div class="container left">
            <div class="content">
                <h2>1988-1992: Early Career</h2>
                <ul>
                    <li>Joined Sun Microsystems.</li>
                </ul>

            </div>
        </div>
        <div class="container right">
            <div class="content">
                <h2>1992-2014: Microsoft</h2>
                <ul>
                    <li>Joined Microsoft in 1992. </li>
                    <li>Held various leadership positions, including Vice President of the Business Division. </li>
                    <li>Led the development of cloud-based services like Microsoft Office 365 and Microsoft Azure. </li>
                    <li>Promoted to Executive Vice President of Cloud and Enterprise in 2013.</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="container left">
            <div class="content">
                <h2>2014: Appointment as Microsoft CEO</h2>
                <ul>
                    <li>On February 4, 2014, Satya Nadella was named the third CEO of Microsoft, succeeding Steve
                        Ballmer.</li>
                </ul>
            </div>
        </div>
        <div class="container right">
            <div class="content">
                <h2>2014-2022: Microsoft CEO</h2>
                <ul>
                    <li>Focused on transforming Microsoft into a cloud-first and mobile-first company.</li>
                    <li>Oversaw significant acquisitions, including LinkedIn (2016) and GitHub (2018).</li>
                    <li>Emphasized the importance of artificial intelligence and mixed reality in Microsoft's future.
                    </li>
                    <li>Microsoft's market value and stock price rose significantly during his tenure.</li>
                </ul>
            </div>
        </div>
    </div>
    <hr color="white" size="1">
    @include('footer')
</body>

</html>
