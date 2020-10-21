<div>
  <label for="qty">Quantity:</label>
  <input type="text" name="qty" id="qty" onmouseout="javascript:updateQty();">
</div>

<script>
function updateQty()
{
  var qtyVal = '5';
  alert('qty box clicked '+qtyVal);
}
</script>
