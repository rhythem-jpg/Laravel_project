<!DOCTYPE html>
<html lang="ja-jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700&display=swap" rel="stylesheet">
    <title>Document</title>

    <style>
        ::selection {
  background: #05bc55;
  color: #fff;
}

* {
  margin: 0;
  padding: 0;
}
body {
  font-family: 'Noto Sans JP', sans-serif;
  font-size: 16px;
  line-height: 1.6;
  color: #1a1a1a;
}
main {
  margin: 50px 0 0 220px;
  padding: 20px;
}
main p {
  color: #6c757d;
}
main h1 {
  font-size: 60px;
}
a {
  text-decoration: none;
  color: inherit;
}
li {
  list-style-type: none;
}
.sideBar {
  z-index: 1000;
  background: #fff;
  position: fixed;
  top: 40px;
  left: 40px;
  padding: 40px 30px;
  box-shadow: 0 10px 20px #00000030;
  border-radius: 10px;

  height: 100vh;
  width: 60px;

  display: flex;
  flex-direction: column;

  transition: width 0.2s ease;
}
.sideBar.dark {
  background: #141414;
  color: #eee;
}
body.dark {
  background: #222;
  color: #eee;
}
.sideBar.dark * .link-icon {
  color: #ccc;
}
.profile {
  color: #222;
  font-size: 40px;
  margin-bottom: 30px;
  background: #eee;
  width: 60px;
  height: 60px;
  border-radius: 10px;

  display: flex;
  justify-content: center;
  align-items: center;
}

.navLinks {
  width: 100%;
}
.navLinks li {
  border-radius: 15px;
}
.navLinks li a {
  padding: 15px;
}

.navLinks:last-child {
  margin-top: auto;
  margin-bottom: 100px;
}

.link {
  display: flex;
  height: 30px;
}

.link-text {
  color: #6c757d;
  font-weight: 500;
  font-size: 18px;
  transform: scaleX(0);
  transform-origin: left;
  transition: all 0.2s ease;
}

.link-icon {
  color: #222;
  flex-basis: 30px;
  font-size: 28px;
  margin-right: 15px;
}

.text-muted {
  color: black;
  font-size: 18px;
  padding: 30px 0;
}

.navLinks li:hover {
  background: #eee;
}

.navLinks li:hover .link > * {
  color: #05bc55;
}

.sideBar:hover .link-text {
  transform: scaleX(1);
}

.sideBar:hover {
  width: 200px;
  align-items: flex-start;
}

figure img {
  width: 100%;
}
figure {
  text-align: center;
}
.like-color {
  color: #4267b2;
}
.like-anim {
  animation: like 0.6s;
}

.navLinks li:hover .link-like > * {
  color: #4267b2;
}

@keyframes like {
  50% {
    transform: scale(2) rotate(-45deg);
  }
}

.page-title-wrapper {
    display: inline-block;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: auto;
    max-width: 100%;
}

.container {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

    </style>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        const themeToggle = document.querySelector("[data-theme]");
const sideBar_element = document.querySelector(".sideBar");
const like_element = document.querySelector(".link-like");
themeToggle.addEventListener("click", () => {
  themeToggle.querySelector("i").classList.toggle("fa-toggle-on");
  sideBar_element.classList.toggle("dark");
  document.querySelector("body").classList.toggle("dark");
});

like_element.addEventListener("click", () => {
  like_element.querySelector(".fa-thumbs-up").classList.add("like-anim");
  like_element.querySelector(".fa-thumbs-up").classList.toggle("like-color");

  setTimeout(() => {
    like_element.querySelector(".fa-thumbs-up").classList.remove("like-anim");
  }, 600);
});

    </script>
</head>
<body>
    <nav class="sideBar">
  <div class="profile">
            <a href="/user/profile" class="link">
    <i class="fa-solid fa-user "></i>
</a>
  </div>
  <p class="text-muted">Restaurent</p>
  <ul class="navLinks">
    <li>
      <a href="/reservation" class="link">
        <i class="fa-solid fa-table-columns link-icon"></i>
        <span class="link-text">Reservation</span>
      </a>
    </li>
    <li>
      <a href="/viewfood" class="link">
        <i class="fa-solid fa-bowl-food link-icon"></i>
        <span class="link-text">Food</span>
      </a>
    </li>
  </ul>
  <ul class="navLinks">
                        @auth

    <li>
      <a href="{{url('/showcart',Auth::user()->id)}}" class="link">
        <span class="link-text">Cart</span>
      </a>
    </li>

                    @endauth
        <li>
      <a href="{{ route('register') }}" class="link">
        <span class="link-text">register</span>
      </a>
    </li>
            <li>
      <a href="{{ route('login') }}" class="link">
        <span class="link-text">Login</span>
      </a>
    </li>
        <li>
      <a href="/chefs" class="link">
        <span class="link-text">Chefs</span>
      </a>
    </li>
  </ul>
</nav>

<main>
  <h1>Rhythemのレストランへようこそ</h1>
  <div class="container">
    <figure>
    <img src="  https://images.squarespace-cdn.com/content/v1/58bdeb263a0411ff2b5d0c06/1490206572579-3N8Y4PWHAUN6ODJ7OGS9/japanese-umbrellas-636870_1920.jpg" alt="dbz">

<h1 class="centered">
  本物の日本食</h1>
 
</div>
</figure>
  <figure>
    <img src="https://www.teahub.io/photos/full/9-99331_photo-wallpaper-food-cafe-anime-girls-love-live.jpg" alt="dbz">
  </figure>
  
</main>
</body>
</html>