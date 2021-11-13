<?php require 'parts/head.php'; ?>
    <title>Северная изба - Проекты</title>
</head>
<body>
    <!--Header-->
    <?php require 'parts/header.php'; ?> 
    <!--Catalog BG-->
    <div class="catalog-bg-img"></div>
    <div class="catalog-bg-img-filter"></div>
    <!--Bread-->
    <div class="bread">
      <div class="bread-box">
          <a href="index.php">Главная</a> -
          <a href="catalog.php">Проекты</a>
      </div>
    </div>
    <!-- Name -->
    <div class="name">
      <div class="name-box">
        <h2>Каталог проектов</h2>
        <p>Каталог наших проектов на любой вкус</p>
        <div class="btn">Заказать проект</div>
      </div>
    </div>
    <!--Filter-->
    <div class="catalog-container">
        <div class="container">
            <!-- Fulter -->
            <form class="controls" id="Filters">
              <!-- Squere -->
              <fieldset class="fieldset">
                <h4>Площадь строения</h4>
                <div class="info">
                  <div class="checkbox">
                    <input type="checkbox" id="size100" value=".100"/>
                    <label for="size100">
                      <div class="icon">
                        <div class="">
                            <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>от 100 кв.м</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="size100-150" value=".100-150"/>
                    <label for="size100-150">
                      <div class="icon">
                        <div class="">
                            <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>от 100 до 150 кв.м</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="size150-200" value=".150-200"/>
                    <label for="size150-200">
                      <div class="icon">
                        <div class="">
                            <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>от 150 до 200 кв.м</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="size200" value=".200"/>
                    <label for="size200">
                      <div class="icon">
                        <div class="">
                            <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>от 200 кв.м +</p>
                    </label>
                  </div>
                </div>
              </fieldset>
              <!-- Type Building -->
              <fieldset class="fieldset">
                <h4>Тип строения</h4>
                <div class="info">
                  <div class="checkbox">
                    <input type="checkbox" id="house" value=".house"/>
                    <label for="house">
                      <div class="icon">
                        <div class="">
                            <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>Дом</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="hause-sauna" value=".hause-sauna"/>
                    <label for="hause-sauna">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>Дом-баня</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="sauna" value=".sauna"/>
                    <label for="sauna">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>Баня</p>
                    </label>
                  </div>
                </div>
              </fieldset>
              <!-- Type Tehnologi -->
              <fieldset class="fieldset">
                <h4>Технология</h4>
                <div class="info">
                  <div class="checkbox">
                    <input type="checkbox" id="kbrus" value=".kbrus"/>
                    <label for="kbrus">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>Клееный брус</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="rubka" value=".rubka"/>
                    <label for="rubka">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>Ручная рубка</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="Obrevno" value=".Obrevno"/>
                    <label for="Obrevno">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>Оцилиндрованное бревно</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="Obrus" value=".Obrus"/>
                    <label for="Obrus">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>Оцилиндрованный брус</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="pib" value=".pib"/>
                    <label for="pib">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>Post and Beam</p>
                    </label>
                  </div>
                </div>
              </fieldset>  
              <!-- Floar -->
              <fieldset class="fieldset">
                <h4>Этажность</h4>
                <div class="info">
                  <div class="checkbox">
                    <input type="checkbox" id="1flor" value=".1flor"/>
                    <label for="1flor">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>1 этаж</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="checkbox" id="2flor" value=".2flor"/>
                    <label for="2flor">
                      <div class="icon">
                        <div class="">
                          <svg class="check" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 405.272 405.272" xml:space="preserve">
                                <path d="M393.401,124.425L179.603,338.208c-15.832,15.835-41.514,15.835-57.361,0L11.878,227.836
                                    c-15.838-15.835-15.838-41.52,0-57.358c15.841-15.841,41.521-15.841,57.355-0.006l81.698,81.699L336.037,67.064
                                    c15.841-15.841,41.523-15.829,57.358,0C409.23,82.902,409.23,108.578,393.401,124.425z"/>
                            </svg>
                        </div>
                      </div>
                      <p>2 этажа</p>
                    </label>
                  </div>
                </div>
              </fieldset>          
            </form>
        </div>
    </div>
    <!-- Projects -->
    <div id="Container"  class="projects-box container">
      <div class="fail-message">
        <span>По данному запросу ничего не найдено</span>
      </div>
      <!-- Project 1 -->
      <a href="project01.php" class="mix 100">
        <div class="mix-img">
          <img src="img/catalog/project01/project01_01.jpeg" alt="project01">
        </div>
        <div class="mix-filter"></div>
        <div class="mix-text">
          <h3>L-328</h3>
          <p>Оцилиндрованное бревно</br>
              Общаяя площадь <span>374.7м²</span>
          </p>
        </div>
      </a>
      <!-- Project 1 -->
      <a href="project01.php" class="mix 100-150">
        <div class="mix-img">
          <img src="img/catalog/project02/project02.jpeg" alt="project01">
        </div>
        <div class="mix-filter"></div>
        <div class="mix-text">
          <h3>L-328</h3>
          <p>Оцилиндрованное бревно</br>
              Общаяя площадь <span>374.7м²</span>
          </p>
        </div>
      </a>
      <!-- Project 1 -->
      <a href="project01.php" class="mix 150-200">
        <div class="mix-img">
          <img src="img/catalog/project03/project03.jpeg" alt="project01">
        </div>
        <div class="mix-filter"></div>
        <div class="mix-text">
          <h3>L-328</h3>
          <p>Оцилиндрованное бревно</br>
              Общаяя площадь <span>374.7м²</span>
          </p>
        </div>
      </a>
      <!-- Project 1 -->
      <a href="project01.php" class="mix 200">
        <div class="mix-img">
          <img src="img/catalog/project04/project04.jpeg" alt="project01">
        </div>
        <div class="mix-filter"></div>
        <div class="mix-text">
          <h3>L-328</h3>
          <p>Оцилиндрованное бревно</br>
              Общаяя площадь <span>374.7м²</span>
          </p>
        </div>
      </a>
    </div>
    <!--Footer-->
    <?php require 'parts/footer.php'; ?>  
</body>
</html>