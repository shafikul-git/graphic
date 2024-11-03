<div class="w-full rounded-xl p-4 my-4 bg-white border shadow-lg">
    <div class="mb-4">
      <label for="price-range" class="block text-gray-700 mb-3 font-medium">PRICE</label>
      <input type="range" id="price-range" class="w-full accent-indigo-600" min="0" max="1000" value="500" oninput="updatePrice(this.value)">
    </div>
    <div class="flex justify-between text-gray-500">
      <span id="minPrice">$0</span>
      <span id="maxPrice">$1000</span>
    </div>
  </div>
  
  <script>
    function updatePrice(value) {
        console.log(value);
        
      document.getElementById("minPrice").textContent = "$" + value;
    }
  </script>