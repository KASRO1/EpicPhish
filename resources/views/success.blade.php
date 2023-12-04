<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats!</title>
    <link rel="shortcut icon" href="images/logo-svg.svg" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">

    <script>
        // Функция, которая выполняется при загрузке страницы
        window.onload = function() {
            // Находим кнопку по классу
            var btn = document.querySelector('.ok-btn');

            // Добавляем обработчик события 'click'
            btn.addEventListener('click', function() {
                // Выполняем редирект
                window.location.href = '/';
            });
        };
    </script>

    <style>
        .popup {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10;
            /* transform: translateY(-85%) scale(0);
            transition: 0.4s ease-in-out */
        }
        .popup.active {
            transform: translateY(0) scale(100%);
            background-color: rgba(62, 62, 62, 0.651);
        }

        .popup-container {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .popup-body {
            margin: auto;
            background-color: #2A2A2A;;
            text-align: center;
            position: relative;
            padding: 1rem 3rem;
        }

        .section-title {
            margin-bottom: 0;
        }

        .popup-content {
            display: flex;
            align-items: center;
        }

        .popup-text {
            font-family: BurbankBigCondensed;
            font-size: 2.5rem;
            font-weight: 600;
            line-height: 40px;
            letter-spacing: 0px;
            color: #fff;
            text-align: left;
            word-wrap: break-word;
            max-width: 100%;
        }

        .ok-btn {
            display: block;
            margin: 0 auto;
            background-color: #F7FF19;
            font-family: 'BurbankBigCondensed';
            font-size: 5rem;
            font-style: normal;
            font-weight: 700;
            color: #101014;
            padding: 5px;
            width: 25%;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: background-color 0.3s linear;
            margin-bottom: 1rem;
        }

        .ok-btn:hover {
            background-color: #f3f860;
        }

        @media screen and (max-width:1400px) {
            .popup-text {
                font-size: 2rem;
            }
            .popup-item img {
                width: 260px;
            }
            .ok-btn {
                font-size: 4rem;
            }
            .popup-body {
                padding: 1rem 2rem;
            }
        }
        @media screen and (max-width:768px) {
            .section-title {
                margin-bottom: 2rem;
            }
            .popup-item img {
                display: none;
            }
            .popup-text {
                margin-bottom: 4rem;
            }
            .ok-btn {
                width: 40%;
                padding: 0 1rem;
            }
        }
        @media screen and (max-width:480px) {
            .popup-body {
                padding: 1rem;
            }
            .popup-text {
                margin-bottom: 1em;
                text-align: center;
            }
        }
    </style>

</head>
<body style="padding: 0 10px;">

<div id="popup" class="popup">
    <div class="popup-container">
        <div class="popup-body">
            <h1 class="section-title"><img width="80px" src="images/firework&#32;2.png" alt="">Congrats!</h1>
            <div class="popup-content">
                <div class="popup-item">
                    <img width="312" src="images/lama&#32;1.png" alt="lama">
                </div>
                <div class="popup-item">
                    <p class="popup-text">
                        Your exclusive Fortnite skins will arrive <br>
                        within 24-48 hours. <br/>
                        Stay alert, check your inventory soon!</p>
                </div>
            </div>
            <button class="ok-btn">OK</button>
        </div>
    </div>
</div>

<header class="header">
    <div class="header-wrapper">
        <div class="logo">
            <svg width="32" height="32" class="logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill-rule="evenodd" height="32" width="32">
                <path fill="#fff" d="M12.349 21l-.39.982h.773L12.349 21zm2.29-10.224V7.909c0-.457-.21-.668-.648-.668h-.713v4.204h.713c.438 0 .648-.212.648-.668zm11.698-9.019H5.36c-1.702 0-2.328.627-2.328 2.328v20.526l.025.537c.038.372.047.732.392 1.14a7.23 7.23 0 0 0 .387.302l.533.248 10.329 4.327c.537.245.76.342 1.15.333h.003c.39.008.613-.088 1.15-.333l10.329-4.327.533-.248.387-.302c.345-.41.353-.77.392-1.14a5.28 5.28 0 0 0 .025-.537V4.086c0-1.702-.628-2.328-2.328-2.328h-.002zm-9.181 3.952h1.735v11.404h-1.735V5.709zm.117 14.181h1.01v3.45h-.952v-1.982l-.882 1.35h-.02l-.877-1.34v1.972h-.937v-3.45h1.01l.823 1.337.823-1.337zm-5.73-14.181h2.723c1.41 0 2.108.7 2.108 2.118v3.03c0 1.417-.697 2.118-2.108 2.118h-.988v4.139h-1.735V5.709zm-4.729 0h3.859v1.58H8.549v3.225h2.043v1.58H8.549v3.438h2.157v1.58H6.814V5.709zm3.317 17.169c-.365.3-.873.532-1.498.532-1.075 0-1.878-.74-1.878-1.785v-.01c0-1.005.788-1.795 1.858-1.795.607 0 1.035.187 1.4.503l-.562.675c-.247-.207-.493-.325-.833-.325-.498 0-.882.418-.882.947v.01a.91.91 0 0 0 .937.957c.232 0 .41-.05.552-.143v-.418h-.68v-.7h1.587v1.553zm1.765-3.012h.922l1.468 3.475h-1.025l-.252-.617h-1.332l-.247.617h-1.005l1.468-3.475h.002zm3.874 9.231l-4.862-1.672h9.931l-5.069 1.672zm5.947-5.755h-2.8v-3.45h2.775v.813h-1.828v.523h1.657v.755h-1.657v.547h1.854v.813-.002zm-1.907-8.249V7.729c0-1.417.697-2.118 2.108-2.118h.843c1.41 0 2.092.685 2.092 2.102v2.33h-1.702V7.811c0-.457-.212-.668-.648-.668h-.292c-.453 0-.665.212-.665.668v7.2c0 .457.212.668.665.668h.325c.438 0 .648-.212.648-.668v-2.573h1.702v2.655c0 1.417-.697 2.119-2.108 2.119h-.86c-1.41 0-2.108-.7-2.108-2.119zm5.165 7.184c0 .705-.557 1.123-1.395 1.123-.612 0-1.193-.192-1.617-.572l.532-.637a1.77 1.77 0 0 0 1.118.413c.257 0 .395-.088.395-.237v-.01c0-.143-.113-.222-.582-.33-.735-.168-1.302-.375-1.302-1.085v-.01c0-.642.508-1.105 1.337-1.105.587 0 1.045.158 1.42.458l-.478.675c-.315-.222-.66-.34-.967-.34-.232 0-.345.098-.345.222v.01c0 .158.118.227.597.335.793.173 1.287.428 1.287 1.075v.01.003z"></path>
            </svg>
            <img class="logo-img" src="images/Fortnite.svg" alt="">
        </div>

        <div class="download">
            <div class="language">
                <svg class="language-svg" width="32" height="32" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#aaaaae" fill-rule="evenodd" d="M3.784 11.25h3.99c.153-2.35.994-4.44 1.815-5.969.282-.525.564-.988.82-1.378a8.255 8.255 0 0 0-6.625 7.347ZM12 4.232c-.305.43-.697 1.03-1.09 1.759-.75 1.398-1.481 3.237-1.632 5.259h5.444c-.15-2.022-.882-3.861-1.633-5.259-.392-.73-.784-1.33-1.089-1.76Zm2.722 8.518H9.278c.15 2.022.882 3.861 1.633 5.259.392.73.784 1.33 1.089 1.76.305-.43.697-1.03 1.09-1.76.75-1.398 1.481-3.237 1.632-5.259Zm-4.313 7.347c-.256-.39-.538-.853-.82-1.378-.82-1.528-1.662-3.618-1.815-5.969h-3.99a8.255 8.255 0 0 0 6.625 7.347Zm3.182 0c.256-.39.538-.853.82-1.378.82-1.528 1.662-3.618 1.815-5.969h3.99a8.255 8.255 0 0 1-6.625 7.347Zm6.625-8.847h-3.99c-.153-2.35-.994-4.44-1.815-5.969a18.45 18.45 0 0 0-.82-1.378 8.255 8.255 0 0 1 6.625 7.347ZM2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Z" clip-rule="evenodd"></path>
                </svg>
                <div class="circle-user">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                        <g id="SVGRepo_iconCarrier"> <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g>

                    </svg>
                </div>

                <button class="download-btn">Download</button>
            </div>
        </div>
    </div>
</header>

<div class="intro-mobile">
    <img class="intro-img" src="images/fortnite-bg.jpg" alt="fortnite">
    <div class="intro-text-container">
        <p class="intro-text">Exclusive Fortnite Skins:coveted, rare, and stylish!</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section-wrapper">
            <h1 class="section-title"><img height="" src="images/surprise&#32;2.svg" alt="">Get Random Prize</h1>
            <div class="section-images img1">
                <img src="images/bk&#32;1.png" alt="bk">
            </div>

            <div class="section-images img2">
                <img src="images/wild&#32;1.png" alt="">
            </div>

            <div class="section-images img3">
                <img src="images/ikomnik&#32;1.png" alt="">
            </div>

            <div class="section-images img4">
                <img src="images/wonder&#32;1.png" alt="">
            </div>
        </div>
        <button class="signin-btn">Sign In</button>
    </div>
</section>

<section class="section-mobile">
    <div class="swiper-container">
        <h1 class="section-title"><img height="" src="images/surprise&#32;2.svg" alt="">Get Random Prize</h1>
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="image-swiper" src="images/bk&#32;2.png" alt="bk"></div>
            <div class="swiper-slide"><img class="image-swiper" src="images/wild&#32;1.png" alt=""></div>
            <div class="swiper-slide"><img class="image-swiper" src="images/ikomnik&#32;1.png" alt=""></div>
            <div class="swiper-slide"><img class="image-swiper" src="images/bk&#32;2.png" alt=""></div>
        </div>
        <!-- Add Navigation -->
        <div class="swiper-button-next" style="top: 60%; color: transparent; right: 24px;"><img class="swiper-btn-img" src="images/image&#32;29.png" alt=""></div>
        <div class="swiper-button-prev" style="top: 60%; color: transparent; left: 30px;"><img class="swiper-btn-img" src="images/image&#32;30.png" alt=""></div>
    </div>
    <button class="signin-btn">Sign In</button>
</section>

<footer class="footer">
    <div class="container-footer">
        <div class="social-icons">
            <a id="facebook" class="kFteII social-icon" aria-label="Подписывайтесь на нас в facebook (открывается в новом окне)" href="success.html#" target="_blank" rel="noopener noreferrer">
                <i class="eg-footer-icon-facebook">&nbsp;</i>
            </a>
            <a id="twitter" class="kFteII social-icon" aria-label="Подписывайтесь на нас в twitter (открывается в новом окне)" href="success.html#" target="_blank" rel="noopener noreferrer">
                <i class="eg-footer-icon-twitter">&nbsp;</i>
            </a>
            <a id="twitch" class="kFteII social-icon" aria-label="Подписывайтесь на нас в twitch (открывается в новом окне)" href="success.html#" target="_blank" rel="noopener noreferrer">
                <i class="eg-footer-icon-twitch">&nbsp;</i>
            </a>
            <a id="youtube" class="kFteII social-icon" aria-label="Подписывайтесь на нас в youtube (открывается в новом окне)" href="success.html#" target="_blank" rel="noopener noreferrer">
                <i class="eg-footer-icon-youtube">&nbsp;</i>
            </a>
            <a id="instagram" class="kFteII social-icon" aria-label="Подписывайтесь на нас в instagram (открывается в новом окне)" href="success.html#" target="_blank" rel="noopener noreferrer">
                <i class="eg-footer-icon-instagram">&nbsp;</i>
            </a>
            <button class="iWDBEr" tabindex="-1">
                <i class="eg-footer-icon-snapchat"></i>
            </button>
            <a id="vk" class="kFteII social-icon" aria-label="Подписывайтесь на нас в vk (открывается в новом окне)" href="success.html#" target="_blank" rel="noopener noreferrer">
                <i class="eg-footer-icon-vk">&nbsp;</i>
            </a>
        </div>

        <div class="nav-links">
            <div class="nav-item">
                <a href="success.html#" class="nav-link">Home</a>
                <a href="success.html#" class="nav-link">OG Pass</a>
                <a href="success.html#" class="nav-link">Watch</a>
                <a href="success.html#" class="nav-link">Get Fortnite</a>
                <a href="success.html#" class="nav-link">News</a>
            </div>
            <div class="nav-item">
                <a href="success.html#" class="nav-link">FAQ</a>
                <a href="success.html#" class="nav-link">EULA</a>
                <a href="success.html#" class="nav-link">Competitive</a>
                <a href="success.html#" class="nav-link">V-Bucks Card</a>
            </div>
            <div class="nav-item">
                <a href="success.html#" class="nav-link">Help</a>
                <a href="success.html#" class="nav-link">Community Rules</a>
                <a href="success.html#" class="nav-link">Brand Guidelines</a>
                <a href="success.html#" class="nav-link">Cosplay</a>
            </div>
        </div>
        <p class="footer-text">
            © 2023, Epic Games, Inc. Epic, Epic Games, the Epic Games logo, Fortnite, the Fortnite logo, Unreal, Unreal Engine 4 and UE4 are trademarks or registered <br/>
            trademarks of Epic Games, Inc. in the United States of America and elsewhere. All rights reserved.
        </p>

        <div class="footer-services">
            <div class="footer-services-item">
                <a href="success.html#" class="nav-link">Terms of Service</a>
                <a href="success.html#" class="nav-link">Privacy Policy</a>
                <a href="success.html#" class="nav-link">Safety & security</a>
            </div>
            <div class="sc-bqWxrE iJqKeU property-logos">
                <div class="sc-eDWCr jEKgTI logo eg">
                    <a href="https://www.epicgames.com/en-US/?lang=en-US">
                        <div class="sc-jSUZER fUfaUv eg-shield-wrap white hover"><div class="eg-shield white"></div></div>
                    </a>
                </div>
                <div class="sc-eDWCr jEKgTI logo ue">
                    <a href="https://www.unrealengine.com/en-US/?lang=en-US">
                        <div class="sc-gKPRtg jWHqoJ ue-logo-wrap white hover"><div class="ue-logo white"></div></div>
                    </a>
                </div>
                <div class="sc-eDWCr jEKgTI logo pcGame"><i class="eg-footer-icon-pcGame"></i></div>
                <div class="sc-eDWCr jEKgTI logo ps5-ps4"><i class="eg-footer-icon-ps5-ps4"></i></div>
                <div class="sc-eDWCr jEKgTI logo xbox-series"><i class="eg-footer-icon-xbox-series"></i></div>
                <div class="sc-eDWCr jEKgTI logo switch"><i class="eg-footer-icon-switch"></i></div>
                <div class="sc-eDWCr jEKgTI logo android"><i class="eg-footer-icon-android"></i></div>
            </div>

        </div>
    </div>
</footer>

<script>
    const openPopUp = document.getElementById("popup-open");

    const closePopUp =  document.getElementById("popup-close");
    const PopUp = document.getElementById("popup");

    openPopUp.addEventListener('click', function(e) {
        e.preventDefault();
        PopUp.classList.add('active');
    });

    closePopUp.addEventListener('click', () => {
        PopUp.classList.remove('active');
    });
</script>

</body>
</html>
