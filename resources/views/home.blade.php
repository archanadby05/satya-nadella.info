<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <style>
        .container {
            position: relative;
            text-align: center;s
            color: white;
        }

        .bgimg {
            width: 100%;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>

<body>
    @include('header')

    <div class="container">
        <img class="bgimg" src="{{ asset('assets/img/Satya.png') }}" alt="Can't Display">
        <div class="centered">Satya Nadella</div>
    </div>
    <div class="content">
        <p class="head">The Apple Maestro: Unveiling the Enigma of Steve Jobs</p>
        <hr size="2" width=500px color="black">
        <p class="desc">In the realm of technology and innovation, one name stands out as a beacon of creativity and
            brilliance—Steve Jobs. The co-founder of Apple Inc., Jobs was not just a tech titan but a maverick whose
            revolutionary ideas transformed the way we live, work, and communicate. His life was a rollercoaster of
            triumphs, setbacks, and an unwavering commitment to pushing the boundaries of what was thought possible.</p>
    </div>
    <div class="content">
        <p class="head">The Early Spark: A Tinkerer's Tale</p>
        <hr size="2" width=500px color="black">
        <p class="desc">Born on February 24, 1955, in San Francisco, Jobs showed an early proclivity for tinkering
            with electronics in his parents' garage. Little did the world know that this young enthusiast would become a
            cornerstone in the foundation of the digital age.</p>
    </div>
    <div class="content">
        <p class="head">Apple's Genesis: The Garage Revolution</p>
        <hr size="2" width=500px color="black">
        <p class="desc">In 1976, Jobs, along with Steve Wozniak and Ronald Wayne, founded Apple in that iconic garage.
            This small endeavor would soon evolve into a tech empire that would redefine consumer electronics and propel
            Jobs into the limelight as a true visionary.</p>
    </div>
    <div class="content">
        <p class="head">The Reality Distortion Field: A Charismatic Force</p>
        <hr size="2" width=500px color="black">
        <p class="desc">Jobs was renowned for his charismatic presence and the infamous "Reality Distortion Field," a
            term coined to describe his ability to convince others to believe in his visions, even against their better
            judgment. His magnetic personality and persuasive communication skills were instrumental in rallying his
            teams to achieve the seemingly impossible.</p>
    </div>
    <div class="content">
        <p class="head">Innovations and Setbacks: The Apple Rollercoaster</p>
        <hr size="2" width=500px color="black">
        <p class="desc">The Macintosh, iPod, iPhone, and iPad—all bore the indelible mark of Jobs' relentless pursuit
            of perfection. However, his journey was riddled with challenges, including being ousted from Apple in 1985.
            Yet, true to his resilient nature, Jobs returned to lead Apple to unprecedented heights in the late 1990s.
        </p>
    </div>
    <div class="content">
        <p class="head">Legacy Beyond Technology: Pixar and More</p>
        <hr size="2" width=500px color="black">
        <p class="desc">Jobs' influence extended beyond the realms of technology. His role in co-founding Pixar
            Animation Studios, creator of beloved classics like Toy Story, added another dimension to his legacy as a
            cultural icon.</p>
    </div>
</section>
    @include('footer')
</body>

</html>
