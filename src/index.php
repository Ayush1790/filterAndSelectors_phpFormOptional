<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="./CSS/style.css" />
<title>Document</title>

<!-- dropdowns -->
<select id="select_os"></select>
<select id="select_brand"></select>
<br /><br />
<!-- display data -->
<div class="display">
  <table class="display__table">
    <caption>table</caption>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Brand</th>
        <th>Operating System</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody class="table__body"></tbody>
  </table>
</div>
<!-- search -->
<input type="text" id="search_data" placeholder="Search with Product Id or Name">
<span id="msg"></span>
<script src="./JS/products.js"></script>
