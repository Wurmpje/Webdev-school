<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@include('navbar')
<section>
<div class="category"> 
  <div class="product"> 
    <div class="image-placeholder 
          image-placeholder1"> 
      <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20240104152640/carrot-icon.png"
        alt="grocery"> 
    </div> 
    <h3>Wortel</h3> 
    <p class="price">€1.99/1kg</p> 
    <div class="qyt"> 
      <label for="quantity_vegetable1"> 
        Aantal: 
      </label> 
      <input type="number"
        id="quantity_vegetable1"
        value="1"> 
    </div> 
    <div class="productbtns"> 
      <button> 
        Voeg toe aan winkelwagen
      </button> 
      <button> 
        Koop nu
      </button> 
    </div> 
  </div> 
</section>
</body> 
</html>