<!-- resources/views/child.blade.php -->
 
@extends('layouts.Landing')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<section id="information">
  <div class="restaurant-image">
    <img src="img/top-down.jpg">
  </div>
  <div class="info">
    <h2>We Started From The Bottom In 1967</h2>
    <div class="paragraphs">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
        fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
        et
        similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
        officia
        fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
        et
        similique!</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad officia
        fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
        et
        similique!Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque aliquid dolore, error minus ad
        officia
        fugit iusto repellat, explicabo reiciendis inventore mollitia non, libero perspiciatis dicta eius consequatur
        et
        similique!</p>
    </div>
    <a href="#" class="about-link">
      <span>Learn more about restaurants</span>
      <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    </a>
  </div>
</section>
<section id="food-preview">
  <h2>We have everything you need to kill your hunger</h2>
  <div class="button-rounded">View Our Menu</div>
  <div class="container">
    <div class="left-btn">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div class="right-btn">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
    
    <div class="food-slider">
      <div class="sliding-system">
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Starters
            </div>
            <p class="food-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
              architecto
              officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
              repellendus natus nihil?
            </p>
            <div class="food-image">
              <img src="img/chips.png">
            </div>
          </div>

        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Burgers
            </div>
            <p class="food-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
              architecto
              officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
              repellendus natus nihil?
            </p>
            <div class="food-image">
              <img src="img/hamburger-and-fries.png">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Entrees
            </div>
            <p class="food-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
              architecto
              officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
              repellendus natus nihil?
            </p>
            <div class="food-image">
              <img src="img/steak-pork.png">
            </div>
          </div>

        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Sides
            </div>
            <p class="food-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
              architecto
              officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
              repellendus natus nihil?
            </p>
            <div class="food-image">
              <img src="img/salad.png">
            </div>
          </div>

        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Deserts
            </div>
            <p class="food-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
              architecto
              officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
              repellendus natus nihil?
            </p>
            <div class="food-image">
              <img
                src="img/cupcake.png">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Beers
            </div>
            <p class="food-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
              architecto
              officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
              repellendus natus nihil?
            </p>
            <div class="food-image">
              <img
                src="img/cupcake.png">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Drinks
            </div>
            <p class="food-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
              architecto
              officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
              repellendus natus nihil?
            </p>
            <div class="food-image">
              <img
                src="img/cupcake.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection