<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Fones de Ouvido</title>
</head>

<body>
  <header class="header">
    <div class="logotipo">
      <a href="#" class="logo"><i class='bx bx-headphone'></i>Soundbox</a>
    </div>
    <nav aria-label="primária">
      <ul class="categories">
        <li><a href="#">Visão geral</a></li>
        <li><a href="#">Teach Specs</a></li>
        <li><a href="#">Reviews</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
    <div class="header-icons">
      <a href="#"><i class='bx bx-menu'></i></a>
    </div>
  </header>
  <main>
    <h1 class="seuCarrinho">Seu Carrinho</h1>

    <div class="cart-container">

      <div class="produtos">
        <h3 class="fonteleve">PRODUTO</h3>
        <img id="img1" src="./img/main1.png">
        <li id="li1">HeadPhone Blue</li>
        <h3 class="fonteleve" id="h3one">Soundbox</h3>
        <img src="./img/main2.png">
        <li id="li2">HeadPhone White</li>
        <h3 class="fonteleve" id="h3two">Soundbox</h3>
        <img src="./img/main3.png">
        <li id="li3">HeadPhone Black</li>
        <h3 class="fonteleve" id="h3three">Soundbox</h3>
      </div>
      <section class="infos">
        <div class="precos">
          <h3 class="fonteleve">PREÇO</h3>
          <h4 class="valor">R$199</h4>
          <h4 class="valor">R$199</h4>
          <h4 class="valor">R$199</h4>
        </div>

        <div class="quantidade">
          <h3 class="fonteleve">QUANTIDADE</h3>

          <div class="wrapper">
            <div class="option">
              <input checked="" value="option1" name="btn" type="radio" class="input">
              <div class="btn">
                <span class="span">-</span>
              </div>
            </div>
            <div class="option">
              <input value="option2" name="btn" type="radio" class="input">
              <div class="btn">
                <span class="span">+</span>
              </div>
            </div>
          </div>
          <div class="wrapper">
            <div class="option">
              <input checked="" value="option1" name="btn" type="radio" class="input">
              <div class="btn">
                <span class="span">-</span>
              </div>
            </div>
            <div class="option">
              <input value="option2" name="btn" type="radio" class="input">
              <div class="btn">
                <span class="span">+</span>
              </div>
            </div>
          </div>
          <div class="wrapper">
            <div class="option">
              <input checked="" value="option1" name="btn" type="radio" class="input">
              <div class="btn">
                <span class="span">-</span>
              </div>
            </div>
            <div class="option">
              <input value="option2" name="btn" type="radio" class="input">
              <div class="btn">
                <span class="span">+</span>
              </div>
            </div>
          </div>
        </div>

        <div class="total">
          <h3 class="fonteleve">TOTAL</h3>

        </div>

        <div class=" remove">
          <button>x</button>
          <button id="btn2">x</button>
          <button id="btn3">x</button>
        </div>
      </section>
    </div>
  </main>

</body>
<script>

</script>

</html>